<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Redirect
{
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->getPathInfo();

        // Veritabanında bu $path'e uygun yönlendirme kuralını ara
        $redirect = \App\Models\Redirect::where('old_url', $path)->first();
        if ($redirect) {
            return redirect($redirect->new_url, $redirect->http_status_code);
        }

        return $next($request);
    }
}
