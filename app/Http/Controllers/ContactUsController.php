<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\App;

class ContactUsController extends Controller
{
    protected array $message;

    public function store($lang, Request $request)
    {
        App::setLocale($lang);
        $validator = Validator::make($request->all(),
        [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:50',
            'phone' => 'required|numeric|digits:10',
            'message' => 'required|string|max:1000',
            'g-recaptcha-response' => 'required',
        ],
        [
            'name.required' => __('validation.name_required'),
            'name.string' => __('validation.name_string'),
            'name.max' => __('validation.name_max'),
            'email.required' => __('validation.email_required'),
            'email.email' => __('validation.email_email'),
            'email.max' => __('validation.email_max'),
            'phone.required' => __('validation.phone_required'),
            'phone.numeric' => __('validation.phone_numeric'),
            'phone.digits' => __('validation.phone_digits'),
            'message.required' => __('validation.message_required'),
            'message.string' => __('validation.message_string'),
            'message.max' => __('validation.message_max'),
            'g-recaptcha-response.required' => __('validation.g-recaptcha-response_required'),
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()->all(),
            ]);
        }

        // reCAPTCHA doğrulama
        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => config('services.recaptcha.secret_key'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]
        ]);
        $body = json_decode((string) $response->getBody());

        if (!$body->success) {
            $this->message = [
                'status' => false,
                'errors' => [__('validation.captcha_error')]
            ];
            return response()->json($this->message);
        }

        $ipAddress = $request->ip();
        $userAgent = $request->server("HTTP_USER_AGENT");
        $oneHourAgo = Carbon::now()->subHour();

        // Aynı IP adresi ve user agent kontrolü, bir saat içinde
        $existingContact = ContactUs::where('ip_address', $ipAddress)
            ->where('user_agent', $userAgent)
            ->where('created_at', '>=', $oneHourAgo)
            ->first();

        if ($existingContact) {
            $this->message = [
                'status' => false,
                'message' => __('validation.message_ip_error')
            ];
        } else {
            try {
                $contact = new ContactUs();
                $contact->name = $request->input('name');
                $contact->email = $request->input('email');
                $contact->phone = $request->input('phone');
                $contact->message = $request->input('message');
                $contact->status = true;
                $contact->ip_address = $ipAddress;
                $contact->user_agent = $userAgent;
                $contact->save();

                $this->message = [
                    'status' => true,
                    'message' => __('validation.message_success')
                ];

                $mail = new SendEmail($contact);
                Mail::to(env('MAIL_BUSINESS_EMAIL'))->send($mail);

            } catch (\Exception $e) {
                $this->message = [
                    'status' => false,
                    'message' => __('validation.contact_error')
                ];
            }
        }

        return response()->json($this->message);
    }
}
