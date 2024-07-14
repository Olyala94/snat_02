<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Routes;
use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Log;

class GenerateSitemap extends Command
{
    protected $signature = 'app:generate-sitemap';
    protected $description = 'Generate the sitemap for the website';

    public function handle()
    {
        try {
            $path = public_path('sitemap.xml');

            Log::info('Sitemap path: ' . $path);

            $routes = Routes::all();
            if ($routes->isEmpty()) {
                Log::error('No routes found');
                $this->error('No routes found');
                return 1;
            }

            $sitemap = Sitemap::create();

            foreach ($routes as $route) {
                if (!empty($route->slug)) {
                    $sitemap->add(Url::create('/' . $route->slug)
                        ->setLastModificationDate(Carbon::now())
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                        ->setPriority(0.5));
                } else {
                    Log::warning('Route slug is empty for route id: ' . $route->id);
                }
            }

            $sitemap->writeToFile($path);

            if (!file_exists($path)) {
                Log::error('Sitemap file not created');
                $this->error('Sitemap file not created');
                return 1;
            }

            Log::info('Sitemap generated successfully at ' . $path);
            $this->info('Sitemap generated successfully.');
            return 0;
        } catch (\Exception $e) {
            Log::error('Error generating sitemap: ' . $e->getMessage());
            $this->error('Error generating sitemap: ' . $e->getMessage());
            return 1;
        }
    }
}
