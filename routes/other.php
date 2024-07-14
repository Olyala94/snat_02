<?php

use App\Http\Middleware\LanguageManager;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('set-language/{lang}', function (Request $request, $lang) {
    $request->session()->put('locale', $lang);
    return redirect()->back();
})
->middleware(LanguageManager::class)
->name('set.language');
