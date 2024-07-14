<?php

namespace Database\Seeders;

use App\Models\Redirect;
use App\Models\RedirectRule;
use Illuminate\Database\Seeder;

class RedirectRulesTableSeeder extends Seeder
{
    public $redirects = [
        [
            'old_url' => '/iletisim.php',
            'new_url' => '/tk/iletisim',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/ru/ru/o-nas',
            'new_url' => '/tk/hakkimizda',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/tk/hizmetlerimiz/kalici-oje%20class=',
            'new_url' => '/tk/anasayfa',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/index.php?error=invalid_before_lang',
            'new_url' => '/tk/anasayfa',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/',
            'new_url' => '/tk/anasayfa',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/index',
            'new_url' => '/tk/anasayfa',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/index.php',
            'new_url' => '/tk/anasayfa',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/dipliner.php',
            'new_url' => '/tk/hizmetlerimiz/dipliner',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/nail-art.php',
            'new_url' => '/tk/hizmetlerimiz/nail-art',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/gelin-topuzu.php',
            'new_url' => '/tk/hizmetlerimiz/gelin-topuzu',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/sac-kesim.php',
            'new_url' => '/tk/hizmetlerimiz/sac-kesim',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/kalici-oje.php',
            'new_url' => '/tk/hizmetlerimiz/kalici-oje',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/sac-boyasi.php',
            'new_url' => '/tk/hizmetlerimiz/sac-boyasi',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/selülit-masajı.php',
            'new_url' => '/tk/hizmetlerimiz/selulit-masaji',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/sac-boyasi.php',
            'new_url' => '/tk/hizmetlerimiz/sac-boyasi',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/selülit-masajı.php',
            'new_url' => '/tk/hizmetlerimiz/selulit-masaji',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/lang.php?lang=en',
            'new_url' => '/en/home',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/lang.php?lang=tk',
            'new_url' => '/tk/anasayfa',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/brezilya-fönü.php',
            'new_url' => '/tk/hizmetlerimiz/brezilya-fonu',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/ipek-kirpik.php',
            'new_url' => '/tk/hizmetlerimiz/ipek-kirpik',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/cilt-bakımı.php',
            'new_url' => '/tk/hizmetlerimiz/cilt-bakimi',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/lazer-epilasyon.php',
            'new_url' => '/tk/hizmetlerimiz/buz-lazer-epilasyon',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/lang.php?lang=ru',
            'new_url' => '/ru/glavnaya',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/roll-shape.php',
            'new_url' => '/tk/hizmetlerimiz/roll-shape',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/iletisim',
            'new_url' => '/tk/iletisim',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/kirpik-lifting.php',
            'new_url' => '/tk/hizmetlerimiz/kirpik-lifting',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/roll-shape',
            'new_url' => '/tk/hizmetlerimiz/roll-shape',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/ru/hakkimizda.php',
            'new_url' => '/ru/o-nas',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/tk/iletisim.php',
            'new_url' => '/tk/iletisim',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/ru/dipliner.php',
            'new_url' => '/ru/uslugi/diplayner',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/ru/uslugi/permanentniy-lak-dlya-nogtey class=',
            'new_url' => '/ru/uslugi/permanentniy-lak-dlya-nogtey',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/tk/dipliner.php',
            'new_url' => '/tk/hizmetlerimiz/dipliner',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/en/hakkimizda.php',
            'new_url' => '/en/about-us',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/en/services/permanent-nail-polish class=',
            'new_url' => '/en/services/nail-ar',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/lang.php?lang=ru&callback_url=/ru/uslugi/permanentnyy-makiyazh-gub',
            'new_url' => '/ru/uslugi/permanentniy-makiyazh-gub',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/ru/iletisim.php',
            'new_url' => '/tk/iletisim',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/tk/hizmetlerimiz/kalici-oje class=',
            'new_url' => '/tk/hizmetlerimiz/kalici-oje',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/ru/uslugi/udaleniye-volos-ledyanym-lazerom',
            'new_url' => '/ru/uslugi/udaleniye-volos-lazerom',
            'http_status_code' => 301,
        ],
        [
            'old_url' => '/ru/uslugi/permanentnyy-makiyazh-gub',
            'new_url' => '/ru/uslugi/permanentniy-makiyazh-gub',
            'http_status_code' => 301,
        ],
        // [
        //     'old_url' => '',
        //     'new_url' => '',
        //     'http_status_code' => 301,
        // ],
    ];

    public function run(): void
    {
        foreach ($this->redirects as $redirect) {
            Redirect::create([
                'old_url' => $redirect['old_url'],
                'new_url' => $redirect['new_url'],
                'http_status_code' => $redirect['http_status_code'],
            ]);
        }
    }
}
