<?php

namespace App\Providers;

use App\Http\Controllers\SiteMapController;
use App\Http\Middleware\Redirect;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/home';

    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::redirect('/', '/'.app()->getLocale());

            Route::get('/sitemap.xml', [SiteMapController::class, 'generate']);

            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));
            Route::middleware([
                'web',
                Redirect::class,
            ])
            ->group(base_path('routes/other.php'));

            Route::middleware([
                'web',
                Redirect::class,
            ])
            ->prefix('{lang?}')  //Bu Route grubu, web middleware'ını kullanarak tanımlanmıştır ve isteğe bağlı bir dil parametresi ({lang?}) içermektedir. Bu, URL'lerde dil desteği sağlamak için kullanılır. Örneğin, example.com/en/... veya example.com/tk/... gibi URL yapıları oluşturabilir. base_path('routes/web.php') ifadesi ise routes/web.php dosyasındaki Route tanımlarını bu grubun içine alır.
                ->group(base_path('routes/web.php'));
        });
    }

    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
