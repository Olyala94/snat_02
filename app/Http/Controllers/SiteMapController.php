<?php

namespace App\Http\Controllers;

use App\Models\Routes;
use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Log;
use Spatie\Sitemap\SitemapGenerator;

class SiteMapController extends Controller
{

    public function render_view($tags){
        $tags = collect($tags)->unique('url')->filter();

        return view('layout.sitemap-item')
            ->with(compact('tags'))
            ->render();
    }

    public function generate()
    {
        $sitemap = Sitemap::create();
        try {
            $routes = Routes::all();
            if ($routes->isEmpty()) {
                Log::error('No routes found');
                return response()->json(['message' => 'No routes found'], 404);
            }

            foreach ($routes as $route) {
                if (!empty($route->slug)) {
                    $url = Url::create(route('route',['lang' => $route->lang,$route->slug]))
                    ->setLastModificationDate($route->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.5);

                    $sitemap->add($url);
                } else {
                    Log::warning('Route slug is empty for route id: ' . $route->id);
                }
            }

            return response($this->render_view($sitemap->getTags()), 200)->header('Content-Type', 'text/xml');
        } catch (\Exception $e) {
            Log::error('Error generating sitemap: ' . $e->getMessage());
            return response()->json(['message' => 'Error generating sitemap.'], 500);
        }
    }
}
?>
