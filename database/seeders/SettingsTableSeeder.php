<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public $settings = [

        // TODO: -------------------------------- EN -------------------------- //
        [
            'lang' => "en",
            'content' => [
                'title' => 'S Art Beauty Center',
                'description' => 'At S Art Beauty Center, we offer a wide range of services, from ice laser epilation to nail care, and from skin care to hair care services.',
            ],
            "name" => "seo",
        ],
        [
            'lang' => "en",
            'content' => [
                "logo" => [
                    'href' => "/images/nur-art-logos/nur-art-logo-06.png",
                    'alt' => 'S Art Beauty Center',
                ],
                "mobileLogo" => [
                    'href' => "images/nur-art-logos/nur-art-logo-06.png",
                    'alt' => 'S Art Beauty Center',
                ],
                "favicon" => [
                    'href' => "images/nur-art-logos/nur-art-logo-06.png",
                ],

            ],
            "name" => "logos",
        ],
        [
            'lang' => "en",
            'content' => [
                'sart' => 'S ART Beauty Center',
                'user_policies' => 'Our User Policies',
                'user_policies_subtitle6' => 'Contact',
            ],
            "name" => "footer",
        ],
        [
            'lang' => "en",
            'content' => [
                'sart_official_center_contact' => 'S Art Beauty Center Contact Page',
                'sart_official_center_whatsapp' => 'S Art Beauty Center Whatsapp Account',
                'sart_official_center_instagram' => 'S Art Beauty Center Instagram Account',
            ],
            "name" => "default_keys",
        ],
        [
            'lang' => "en",
            'content' => [
                'address' => 'Nebit we gaz toplumynda medeni merkezi / "Bagt gül" söwda merkezi',
                "country" => "Türkiye",
                "city" => "İstanbul",
                "street" => "Lise Yolu Sk.",
                "zip" => "34718",
                "state" => "Acıbadem, Kadıköy",
            ],
            "name" => "address",
        ],
        [
            'lang' => "en",
            'content' => [
                'gsm' => '99361212783',
            ],
            "name" => "phones",
        ],
        [
            'lang' => ["en"],
            'content' => [
                'facebook' => [
                    'href' => 'https://www.facebook.com/sartbeautymerkezi',
                    'alt' =>  'S Art Beauty Center Facebook Account',
                ],
                'instagram' => [
                    'href' => 'https://www.instagram.com/studio_ceramic_tm',
                    'alt' => 'S Art Beauty Center Instagram Account',
                ],
                'whatsapp' => [
                    'href' => 'https://api.whatsapp.com/send?phone=99365675732',
                    'alt' => 'S Art Beauty Center Whatsapp Account',
                ],
            ],
            "name" => "social-media",
        ],
        [
            'lang' => ["en"],
            'content' => [
                'map_link' => 'https://goo.gl/maps/MLkCjkQovNnJvqrw6',
                'map_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48177.377705725456!2d28.962574348632792!3d41.001488500000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9651709e8f9%3A0x9552484cb55df7fc!2sSart%20Beauty%20Sa%C3%A7%20Tasar%C4%B1m!5e0!3m2!1str!2str!4v1688567066533!5m2!1str!2str',
                'map_title' => 'S ART Beuty Center Google Map',
            ],
            "name" => "map",
        ],
        [
            'lang' => ["en"],
            'content' => "The name field is required.",
            'name' => 'name_required',
        ],
        [
            'lang' => ["en"],
            'content' => "The name field must contain only letters.",
            'name' => 'name_string',
        ],
        [
            'lang' => ["en"],
            'content' => "The name may not be greater than 100 characters.",
            'name' => 'name_max',
        ],
        [
            'lang' => ["en"],
            'content' => "The email field is required.",
            'name' => 'email_required',
        ],
        [
            'lang' => ["en"],
            'content' => "Please enter a valid email address.",
            'name' => 'email_email',
        ],
        [
            'lang' => ["en"],
            'content' => "The email may not be greater than 50 characters.",
            'name' => 'email_max',
        ],
        [
            'lang' => ["en"],
            'content' => "The phone field is required.",
            'name' => 'phone_required',
        ],
        [
            'lang' => ["en"],
            'content' => "The phone field must contain only numbers.",
            'name' => 'phone_numeric',
        ],
        [
            'lang' => ["en"],
            'content' => "The phone must be 10 digits.",
            'name' => 'phone_digits',
        ],
        [
            'lang' => ["en"],
            'content' => "The message field is required.",
            'name' => 'message_required',
        ],
        [
            'lang' => ["en"],
            'content' => "The message field must contain only letters.",
            'name' => 'message_string',
        ],
        [
            'lang' => ["en"],
            'content' => "The message may not be greater than 1000 characters.",
            'name' => 'message_max',
        ],
        [
            'lang' => ["en"],
            'content' => "The reCAPTCHA verification is required.",
            'name' => 'g-recaptcha-response_required',
        ],
        [
            'lang' => ["en"],
            'content' => "The reCAPTCHA verification failed. Please try again.",
            'name' => 'captcha_error',
        ],
        [
            'lang' => ["en"],
            'content' => "You can only submit the contact form once per hour from the same IP address.",
            'name' => 'message_ip_error',
        ],
        [
            'lang' => ["en"],
            'content' => "Your message was successfully sent!",
            'name' => 'message_success',
        ],
        [
            'lang' => ["en"],
            'content' => "There was an error sending the contact form. Please try again later.",
            'name' => 'contact_error',
        ],

        // TODO: -------------------------------- TK -------------------------- //
        [
            'lang' => "tk",
            'content' => [
                'title' => 'S Art Beauty Center',
                'description' => 'S Art Beauty Center\'da buz lazer epilasyondan tırnak bakımına, cilt bakımından saç bakımına kadar geniş bir hizmet yelpazesi sunuyoruz.',
            ],
            "name" => "seo",
        ],
        [
            'lang' => "tk",
            'content' => [
                "logo" => [
                    'href' => "/images/nur-art-logos/nur-art-logo-06.png",
                    'alt' => 'S Art Beauty Center',
                ],
                "mobileLogo" => [
                    'href' => "images/nur-art-logos/nur-art-logo-06.png",
                    'alt' => 'S Art Beauty Center',
                ],
                "favicon" => [
                    'href' => "images/nur-art-logos/nur-art-logo-06.png",
                ],

            ],
            "name" => "logos",
        ],
        [
            'lang' => "tk",
            'content' => [
                'sart' => 'S ART Beauty Center',
                'user_policies' => 'Kullanıcı Politikalarımız',
                'user_policies_subtitle6' => 'İletişim',
            ],
            "name" => "footer",
        ],
        [
            'lang' => "tk",
            'content' => [
                'sart_official_center_contact' => 'S Art Beauty Center İletişim Sayfası',
                'sart_official_center_whatsapp' => 'S Art Beauty Center Whatsapp Hesabı',
                'sart_official_center_instagram' => 'S Art Beauty Center Instagram Hesabı',
            ],
            "name" => "default_keys",
        ],
        [
            'lang' => "tk",
            'content' => [
                'address' => 'Nebit we gaz toplumynda medeni merkezi / "Bagt gül" söwda merkezi',
                "country" => "Türkiye",
                "city" => "İstanbul",
                "street" => "Lise Yolu Sk.",
                "zip" => "34718",
                "state" => "Acıbadem, Kadıköy",
            ],
            "name" => "address",
        ],
        [
            'lang' => "tk",
            'content' => [
                'gsm' => '99361212783',
            ],
            "name" => "phones",
        ],
        [
            'lang' => ["tk"],
            'content' => [
                'facebook' => [
                    'href' => 'https://www.facebook.com/studio_ceramic_tm',
                    'alt' =>  'S Art Beauty Center Facebook Hesabı',
                ],
                'instagram' => [
                    'href' => 'https://www.instagram.com/studio_ceramic_tm',
                    'alt' => 'S Art Beauty Center Instagram Hesabı',
                ],
                'whatsapp' => [
                    'href' => 'https://api.whatsapp.com/send?phone=99365675732',
                    'alt' => 'S Art Beauty Center Whatsapp Hesabı',
                ],
            ],
            "name" => "social-media",
        ],
        [
            'lang' => ["tk"],
            'content' => [
                'map_link' => 'https://goo.gl/maps/MLkCjkQovNnJvqrw6',
                'map_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48177.377705725456!2d28.962574348632792!3d41.001488500000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9651709e8f9%3A0x9552484cb55df7fc!2sSart%20Beauty%20Sa%C3%A7%20Tasar%C4%B1m!5e0!3m2!1str!2str!4v1688567066533!5m2!1str!2str',
                'map_title' => 'S ART Beuty Center Google Harita',
            ],
            "name" => "map",
        ],
        [
            'lang' => ["tk"],
            'content' => "İsim alanı zorunludur.",
            'name' => 'name_required',
        ],
        [
            'lang' => ["tk"],
            'content' => "İsim alanı sadece harflerden oluşabilir.",
            'name' => 'name_string',
        ],
        [
            'lang' => ["tk"],
            'content' => "İsim 100 karakterden uzun olamaz.",
            'name' => 'name_max',
        ],
        [
            'lang' => ["tk"],
            'content' => "E-mail alanı zorunludur.",
            'name' => 'email_required',
        ],
        [
            'lang' => ["tk"],
            'content' => "Geçerli bir e-mail adresi giriniz.",
            'name' => 'email_email',
        ],
        [
            'lang' => ["tk"],
            'content' => "E-mail 50 karakterden uzun olamaz.",
            'name' => 'email_max',
        ],
        [
            'lang' => ["tk"],
            'content' => "Telefon alanı zorunludur.",
            'name' => 'phone_required',
        ],
        [
            'lang' => ["tk"],
            'content' => "Telefon alanı sadece sayılardan oluşabilir.",
            'name' => 'phone_numeric',
        ],
        [
            'lang' => ["tk"],
            'content' => "Telefon 10 haneli olmalıdır.",
            'name' => 'phone_digits',
        ],
        [
            'lang' => ["tk"],
            'content' => "Mesaj alanı zorunludur.",
            'name' => 'message_required',
        ],
        [
            'lang' => ["tk"],
            'content' => "Mesaj alanı sadece harflerden oluşabilir.",
            'name' => 'message_string',
        ],
        [
            'lang' => ["tk"],
            'content' => "Mesaj 1000 karakterden uzun olamaz.",
            'name' => 'message_max',
        ],
        [
            'lang' => ["tk"],
            'content' => "reCAPTCHA doğrulaması gereklidir.",
            'name' => 'g-recaptcha-response_required',
        ],
        [
            'lang' => ["tk"],
            'content' => "reCAPTCHA doğrulaması başarısız. Lütfen tekrar deneyiniz.",
            'name' => 'captcha_error',
        ],
        [
            'lang' => ["tk"],
            'content' => "Aynı IP adresinden yalnızca bir saat içinde bir kez iletişim formu gönderebilirsiniz.",
            'name' => 'message_ip_error',
        ],
        [
            'lang' => ["tk"],
            'content' => "Mesajınız başarıyla gönderildi!",
            'name' => 'message_success',
        ],
        [
            'lang' => ["tk"],
            'content' => "İletişim formu gönderilirken bir sorun oluştu. Lütfen daha sonra tekrar deneyiniz.",
            'name' => 'contact_error',
        ],

        // TODO: -------------------------------- RU -------------------------- //
        [
            'lang' => "ru",
            'content' => [
                'title' => 'S Art Beauty Center',
                'description' => 'В S Art Beauty Center мы предлагаем широкий спектр услуг: от лазерной эпиляции до ухода за ногтями, от ухода за кожей до ухода за волосами.',
            ],
            "name" => "seo",
        ],
        [
            'lang' => "ru",
            'content' => [
                "logo" => [
                    'href' => "/images/nur-art-logos/nur-art-logo-06.png",
                    'alt' => 'S Art Beauty Center',
                ],
                "mobileLogo" => [
                    'href' => "images/nur-art-logos/nur-art-logo-06.png",
                    'alt' => 'S Art Beauty Center',
                ],
                "favicon" => [
                    'href' => "images/nur-art-logos/nur-art-logo-06.png",
                ],

            ],
            "name" => "logos",
        ],
        [
            'lang' => "ru",
            'content' => [
                'sart' => 'S ART Beauty Center',
                'user_policies' => 'Наши пользовательские политики',
                'user_policies_subtitle6' => 'Контакт',
            ],
            "name" => "footer",
        ],
        [
            'lang' => "ru",
            'content' => [
                'sart_official_center_contact' => 'Страница контактов S Art Beauty Center',
                'sart_official_center_whatsapp' => 'Аккаунт Whatsapp S Art Beauty Center',
                'sart_official_center_instagram' => 'Аккаунт Instagram S Art Beauty Center',
            ],
            "name" => "default_keys",
        ],
        [
            'lang' => "ru",
            'content' => [
                'address' => 'Культурный Центр Нефтегазового комплекса | Гуртлы Ец Багт Гуль',
                "country" => "Туркменистан",
                "city" => "Ашхабат",
                "street" => "Багтыярлык спорткомплекс (старый зооопарк)",
                "zip" => "123456",
                "state" => "Гуртлы, Тц Багт Гуль",
            ],
            "name" => "address",
        ],
        [
            'lang' => "ru",
            'content' => [
                'gsm' => '99361212783',
            ],
            "name" => "phones",
        ],
        [
            'lang' => ["ru"],
            'content' => [
                'facebook' => [
                    'href' => 'https://www.facebook.com/sartbeauty',
                    'alt' =>  'Аккаунт Facebook S Art Beauty Center',
                ],
                'instagram' => [
                    'href' => 'https://www.instagram.com/studio_ceramic_tm', // rusça instagram linki
                    'alt' => 'Аккаунт Instagram S Art Beauty Center',
                ],
                'whatsapp' => [
                    'href' => 'https://api.whatsapp.com/send?phone=99365675732',
                    'alt' => 'Аккаунт Whatsapp S Art Beauty Cente',
                ],
            ],
            "name" => "social-media",
        ],
        [
            'lang' => ["ru"],
            'content' => [
                'map_link' => 'https://goo.gl/maps/MLkCjkQovNnJvqrw6',
                'map_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48177.377705725456!2d28.962574348632792!3d41.001488500000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9651709e8f9%3A0x9552484cb55df7fc!2sSart%20Beauty%20Sa%C3%A7%20Tasar%C4%B1m!5e0!3m2!1str!2str!4v1688567066533!5m2!1str!2str',
                'map_title' => 'S ART Beuty Center Google Карта',
            ],
            "name" => "map",
        ],
        [
            'lang' => ["ru"],
            'content' => "Поле имени обязательно.",
            'name' => 'name_required',
        ],
        [
            'lang' => ["ru"],
            'content' => "Поле имени должно содержать только буквы.",
            'name' => 'name_string',
        ],
        [
            'lang' => ["ru"],
            'content' => "Имя не может превышать 100 символов.",
            'name' => 'name_max',
        ],
        [
            'lang' => ["ru"],
            'content' => "Поле электронной почты обязательно.",
            'name' => 'email_required',
        ],
        [
            'lang' => ["ru"],
            'content' => "Введите действительный адрес электронной почты.",
            'name' => 'email_email',
        ],
        [
            'lang' => ["ru"],
            'content' => "Электронная почта не может превышать 50 символов.",
            'name' => 'email_max',
        ],
        [
            'lang' => ["ru"],
            'content' => "Поле телефона обязательно.",
            'name' => 'phone_required',
        ],
        [
            'lang' => ["ru"],
            'content' => "Поле телефона должно содержать только цифры.",
            'name' => 'phone_numeric',
        ],
        [
            'lang' => ["ru"],
            'content' => "Телефон должен состоять из 10 цифр.",
            'name' => 'phone_digits',
        ],
        [
            'lang' => ["ru"],
            'content' => "Поле сообщения обязательно.",
            'name' => 'message_required',
        ],
        [
            'lang' => ["ru"],
            'content' => "Поле сообщения должно содержать только буквы.",
            'name' => 'message_string',
        ],
        [
            'lang' => ["ru"],
            'content' => "Сообщение не может превышать 1000 символов.",
            'name' => 'message_max',
        ],
        [
            'lang' => ["ru"],
            'content' => "Требуется проверка reCAPTCHA.",
            'name' => 'g-recaptcha-response_required',
        ],
        [
            'lang' => ["ru"],
            'content' => "Ошибка проверки reCAPTCHA. Пожалуйста, попробуйте еще раз.",
            'name' => 'captcha_error',
        ],
        [
            'lang' => ["ru"],
            'content' => "Вы можете отправить контактную форму только один раз в час с одного IP-адреса.",
            'name' => 'message_ip_error',
        ],
        [
            'lang' => ["ru"],
            'content' => "Ваше сообщение было успешно отправлено!",
            'name' => 'message_success',
        ],
        [
            'lang' => ["ru"],
            'content' => "Произошла ошибка при отправке контактной формы. Пожалуйста, попробуйте позже.",
            'name' => 'contact_error',
        ],

        // TODO: -------------------------- FOR ALL LANGS -------------------------- //
        [
            'lang' => ["tk", "en", "ru"],
            'content' => [
                'geo-media' => [
                    'lat' => 41.002914,
                    'log' => 29.038749,
                    'zoom' => '14z',
                ],
            ],
            "name" => "geo-media",
        ],
        [
            'lang' => ["tk", "en", "ru"],
            'content' => [
                'phone' => '+993 61 21 27 83',
                'whatsapp' => '+993 61 21 27 83',
                'email' => 'acibademasbeauty@gmail.com',
            ],
            "name" => "contact",
        ],
        [
            'lang' => ["tk", "en", "ru"],
            'content' => [
                'sart_url' => 'https://www.sartbeauty.com',
            ],
            "name" => "sart_url",
        ],

    ];

    public function run(): void
    {
        foreach ($this->settings as $setting) {
            foreach ((array) $setting['lang'] as $lang) {
                Settings::create([
                    'name' => $setting['name'],
                    'content' => $setting['content'],
                    'lang' => $lang,
                ]);
            }
        }
    }
}
