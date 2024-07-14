<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function index(): View
    {
        return view('lang');
    }

    public function setLanguage($lang)
    {
        if (in_array($lang, ['tk', 'ru', 'en'])) {
            App::setLocale($lang);
            Session::put('locale', $lang);
        }
        return redirect()->back();  // kullanıcıyı önceki sayfaya yönlendirir
    }
}
