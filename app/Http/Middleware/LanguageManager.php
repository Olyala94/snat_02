<?php

namespace App\Http\Middleware;

use App\Models\Routes;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class LanguageManager
{
    public function handle(Request $request, Closure $next): Response
    {
        // Eğer oturumda 'locale' anahtarı varsa, uygulamanın dilini ayarla
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }

        // Rotayı önbelleğe al veya önbellekten getir
        $routes = Cache::remember('routes', now()->addMonth(), function () {
            return Routes::where('is_active', 1)->get();
        });

        // Rotaları yapılandırmaya ekle
        config(['routes' => $routes]);

        // Ayarları veritabanından getir
        $settings = \App\Models\Settings::get();

        // Ayarları yapılandırmaya ekle
        config(['settings' => $settings]);

        // İsteği bir sonraki middleware veya kontrolcüye ilet
        return $next($request);
    }
}
