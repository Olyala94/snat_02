<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Models\Routes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class RouteController extends Controller
{
    public $snippets = [
        'faq' => [],
        'article' => [],
        'breadcrumb' => [],
        'organization' => [],
        'beauty_salon' => [],
    ];

    public $serviceSlugs = [
        'services',
        'permanent-nail-polish',
        'manicure-pedicure',
        'prosthetic-nails',
        'nail-art',
        'silk-eyelash',
        'eyelash-lifting',
        'deepliner',
        'eyebrow-lamination',
        'microblading',
        'wax-application',
        'ice-laser-hair-removal',
        'skin-care',
        'cellulite-massage',
        'roll-shape',
        'lip-coloring',
        'keratin-care',
        'perma',
        'brazillian-blow-dry',
        'hair-color-highlights',
        'hair-dye',
        'hair-dip-dye',
        'hair-cut',
        'hair-extension',
        'bridal-hair',
    ];

    public function index($lang, $route = null)
    {
        $route = $route ?? '/'; ///Bu satır: $route değişkenine değer atanmış mı diye kontrol eder. Eğer atanmışsa o değeri kullanır, atanmış değilse / değerini atar. Bu, $route değişkeninin null olup olmadığını kontrol etmek için kullanılır.
        if (in_array($lang, config('app.langs'))) {
            App::setLocale($lang);
        } else {
            App::setLocale(config('app.fallback_locale'));
        }


        $route = Routes::where('slug', $route)
            ->where('lang', $lang)
            ->first();

        if ($route) {
            $page = Pages::where("route_id", $route->id)->first();

            $this->snippets = Cache::remember(
                'route' . $route->id,
                now()->addMonth(),
                function () use ($route) {
                    return $this->snippet_load($route);
                }
            );

            return view('pages.default', ['route' => $route, 'page' => $page, 'serviceSlugs' => $this->serviceSlugs, 'snippets' => $this->snippets]);
        } else {
            return view('pages.404');
        }
    }

    public function snippet_load($route)
    {
        $this->snippet_organization();

        $this->snippet_breadcrumb($route);

        if (isset($route->meta_information->snippets) && isset($route->meta_information->snippets->faqs))
            $this->snippet_faqs($route->meta_information->snippets->faqs);

        $this->snippet_article($route);

        $this->snippet_beauty_salon();


        return $this->snippet_render();
    }

    public function get_setting($name)
    {
        if ($setting = config('settings')->where('name', $name)->where('lang', App::getLocale())->first())
            return $setting['content'];
        else
            return [];
    }

    public function snippet_organization()
    {
        $this->snippets['organization'] = [
            'name' => $this->get_setting('seo')->title ?? '-',
            "url" => uniqRt('about-us'),
            "logo" => asset($this->get_setting('logos')->logo->href),
            "contactPoint" => [
                "telephone" => $this->get_setting('phones')->gsm ?? '-',
                "areaServed" => app()->getLocale(),
                "availableLanguage" => [app()->getLocale()],
            ],
            "sameAs" => collect($this->get_setting('social-media'))->map(function ($item) {
                return $item->href;
            })->values()->toArray(),
            "address" => [
                "addressCountry" => $this->get_setting('address')->country ?? '-',
                "addressLocality" => $this->get_setting('address')->city ?? '-',
                "streetAddress" => $this->get_setting('address')->street ?? '-',
                "postalCode" => $this->get_setting('address')->zip ?? '-',
                "addressRegion" => $this->get_setting('address')->state ?? '-',
            ],
            "description" => $this->get_setting('seo')->description ?? '-',
            "mission" => trans('about.about_us_section2_cont1'),
            "vision"  => trans('about.about_us_section2_cont2')
        ];
    }

    public function snippet_breadcrumb($route)
    {
        $position = 1;
        $this->snippets['breadcrumb'][] = [
            'name' => $this->get_setting('seo')->title ?? '-',
            "@type" => "ListItem",
            "position" => $position++,
            "item" => uniqRt('index'),
        ];

        if ($route->uniq_slug != "services" && in_array($route->uniq_slug, $this->serviceSlugs)) {
            $service_route = config('routes')->where('uniq_slug', $route->uniq_slug)->where('lang', app()->getLocale())->first();
            $this->snippets['breadcrumb'][] = [

                'name' => $service_route->meta_information->title ?? 'Services',
                "@type" => "ListItem",
                "position" => $position++,
                "item" => uniqRt('services'),
            ];
        }

        if ($route->uniq_slug !== 'index')
            $this->snippets['breadcrumb'][] = [
                'name' => $route->meta_information->title ?? 'Services',
                "@type" => "ListItem",
                "position" => $position++,
                "item" => uniqRt($route->uniq_slug),
            ];
    }

    public function snippet_faqs($faqs)
    {
        collect($faqs)->map(function ($faq) {
            $this->snippets['faq'][] = $faq;
        });
    }

    public function snippet_article($route)
    {
        $this->snippets['article'] = [
            "headline" => $route->meta_information->title ?? '-',
            "author" => [
                "name" => $this->get_setting('seo')->title ?? '-',
            ],
            "publisher" => [
                "name" => $this->get_setting('seo')->title ?? '-',
                "logo" => [
                    "url" => asset($this->get_setting('logos')->logo->href),
                ]
            ],
            "datePublished" => $route->created_at->format('Y-m-d'),
            "dateModified" => $route->updated_at->format('Y-m-d'),
        ];
    }

    public function snippet_render()
    {
        $html = '';
        if ($this->snippets['article'] && count($this->snippets['article']) > 0)
            $html .= view('snippets.article', ['article' => $this->snippets['article']])->render();

        if ($this->snippets['organization'])
            $html .= view('snippets.organization', ['organization' => $this->snippets['organization']])->render();

        if ($this->snippets['breadcrumb'] && count($this->snippets['breadcrumb']) > 0)
            $html .= view('snippets.breadcrumb', ['breadcrumb' => $this->snippets['breadcrumb']])->render();


        if ($this->snippets['faq'] && count($this->snippets['faq']) > 0)
            $html .= view('snippets.faqs', ['faqs' => $this->snippets['faq']])->render();

        if ($this->snippets['beauty_salon'] && count($this->snippets['beauty_salon']) > 0)
            $html .= view('snippets.beauty_salon', ['beauty_salon' => $this->snippets['beauty_salon']])->render();


        return Str::of($html)->replaceMatches('/\s+/', ' ');
    }

    public function snippet_beauty_salon()
    {
        $this->snippets['beauty_salon'] = [
            "name" => $this->get_setting('seo')->title ?? '-',
            "image" => asset($this->get_setting('logos')->logo->href),
            "@id" => uniqRt('/'),
            "url" => "https://www.sartbeauty.com",
            "telephone" => $this->get_setting('phones')->gsm ?? '-',
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => $this->get_setting('address')->street ?? '-',
                "addressLocality" => $this->get_setting('address')->city ?? '-',
                "addressRegion" => $this->get_setting('address')->state ?? '-',
                "postalCode" => $this->get_setting('address')->zip ?? '-',
                "addressCountry" => $this->get_setting('address')->country ?? '-',
            ],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => 41.001626119737544,
                "longitude" => 29.03923187873123
            ],
            "openingHoursSpecification" => [
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => [
                        __('week-days.monday'),
                        __('week-days.tuesday'),
                        __('week-days.wednesday'),
                        __('week-days.thursday'),
                        __('week-days.friday'),
                        __('week-days.saturday'),
                    ],
                    "opens" => "09:00",
                    "closes" => "20:00"
                ],
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => __('week-days.sunday'),
                    "opens" => "10:00",
                    "closes" => "18:00"
                ]
            ],
            "sameAs" => collect($this->get_setting('social-media'))->map(function ($item) {
                return $item->href;
            })->values()->toArray(),
        ];

        // dd($this->snippets['beauty_salon']);
    }

    public function show404()
    {
        return view('pages.404');
    }
}
