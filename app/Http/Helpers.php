<?php

function settings($key)
{
    // `config('settings')` fonksiyonu ayarları getirir ve dil (`lang`) filtresi uygular.
    $config = config('settings')->where('lang', app()->getLocale());

    // İlk değeri kontrol eder ve eğer varsa, 'name' alanı `$key` ile eşleşen ayarın `content` değerini döndürür.
    if ($config->where('name', $key)->first()) {
        return $config->where('name', $key)->first()['content'];
    }
}

function uniqRt($slug)
{
    // `config('routes')` fonksiyonu rotaları getirir ve dil (`lang`) filtresi uygular.
    $routes = config('routes');
    $route = $routes
        ->where('lang', app()->getLocale())
        ->where('uniq_slug', $slug)
        ->first();

    // Eğer rota mevcutsa, bu rotayı döndürür. Aksi halde `$slug` değerini döndürür.
    if ($route ?? false)
        return route('route', ['lang' => app()->getLocale(), 'route' => $route->slug]);
    else {
        return $slug;
    }
}

function langRt($lang, $slug)
{
    //Config'den tüm rotaları al ve belirtilen dili filtrele
    $routes = config('routes')->where('lang', $lang);

    // Beliirtilen uniq_slug ile eşleşen rotayı bul
    $route = $routes->where('uniq_slug', $slug)->first();

    // Eger rota mevcutsa, o rotanın URL'sini döndür.
    if ($route) {
        return route('route', ['lang' => $lang, 'route' => $route->slug]);
    } else {
        // Eger rota bulunamazsa, original slug'ı döndür
        return route('route', ['lang' => $lang, 'route' => 'index']); // Default olarak anasayfaya yönlendir
    }
}
