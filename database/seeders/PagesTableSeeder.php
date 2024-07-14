<?php

namespace Database\Seeders;

use App\Models\Pages;
use App\Models\Routes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    public $pages = [
        //TODO: EN -------------------------------------------------------------- //
        [
            'lang' => 'en',
            'uniq_slug' => 'services',
            'title' => 'Our Services | S Art Beauty Center',
            'description' => 'Discover our services at S Art Beauty Center in Kadıköy. Visit us for skin care, epilation, hair design, and more.',
            'content' => 'BLADE:tmp.services'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'index',
            'title' => 'Kadıköy - Beauty Center | S Art Beauty Center',
            'description' => 'At S Art Beauty Center, we offer a wide range of services, from ice laser epilation to nail care, and from skin care to hair care services.',
            'content' => 'BLADE:tmp.home'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'about-us',
            'title' => '| S Art Beauty Center',
            'description' => 'At S Art Beauty, we provide the best service to our customers with our expert team and wide range of services.',
            'content' => 'BLADE:tmp.about-us'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'contact-us',
            'title' => 'Contact Us | S Art Beauty Center',
            'description' => 'You can send us a message through our contact page to request an appointment or to get more information about our services.',
            'content' => 'BLADE:tmp.contact-us'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'ice-laser-hair-removal',
            'title' => 'Kadıköy - Ice Laser Epilation | S Art Beauty Center',
            'description' => 'Say goodbye to unwanted hair with ice laser epilation at S Art Beauty Center! Achieve smooth skin with this effective method tailored to your skin type.',
            'content' => 'BLADE:tmp.ice-laser-hair-removal'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'cellulite-massage',
            'title' => 'Kadıköy - G5 Cellulite Massage | S Art Beauty Center',
            'description' => 'Do you want to get rid of cellulite appearance? At S Art Beauty Center, you can reliably and effectively reduce the appearance of cellulite with G5 Cellulite Massage!',
            'content' => 'BLADE:tmp.cellulite-massage'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'roll-shape',
            'title' => 'Kadıköy - Roll Shape | S Art Beauty Center',
            'description' => 'Rollshape combines traditional Far Eastern massage with modern technology to boost circulation and reduce cellulite.',
            'content' => 'BLADE:tmp.roll-shape'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'brazillian-blow-dry',
            'title' => 'Kadıköy - Brazilian Blowout | S Art Beauty Center',
            'description' => 'Pamper your hair with Brazilian Blowout Treatment! Strengthen your hair and achieve a healthier look with our expert team.',
            'content' => 'BLADE:tmp.brazillian-blow-dry'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'skin-care',
            'title' => 'Kadıköy - Skin Care | S Art Beauty Center',
            'description' => 'Rejuvenate your skin with professional skin care at S Art Beauty Center! Refresh your skin with our experienced estheticians.',
            'content' => 'BLADE:tmp.skin-care'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'deepliner',
            'title' => 'Kadıköy - Eyeliner and Dip Eyeliner | S Art Beauty Center',
            'description' => 'A permanent touch for your eyes: Achieve a perfect look with permanent eyeliner and dipliner application at S Art Beauty Center!',
            'content' => 'BLADE:tmp.deepliner'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'lip-coloring',
            'title' => 'Kadıköy - Lip Coloring | S Art Beauty Center',
            'description' => 'Enhance your lips with a natural and attractive color through our lip tinting application. Book your appointment now for lasting beauty!',
            'content' => 'BLADE:tmp.lip-coloring'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'bridal-hair',
            'title' => 'Kadıköy - Bridal Hair | S Art Beauty Center',
            'description' => 'Look stunning on your special day with beautiful bridal hairstyles! Discover your dream bridal hair with our experts.',
            'content' => 'BLADE:tmp.bridal-hair'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'silk-eyelash',
            'title' => 'Kadıköy - Silk Eyelash | S Art Beauty Center',
            'description' => 'Achieve a lasting and natural look with silk eyelash extensions at S Art Beauty Center. Add value to your beauty!',
            'content' => 'BLADE:tmp.silk-eyelash'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'eyebrow-lamination',
            'title' => 'Kadıköy - Eyebrow Lamination | S Art Beauty Center',
            'description' => 'For natural and striking eyebrows, try brow lamination at S Art Beauty Center! Achieve fuller and more defined brows with our experts.',
            'content' => 'BLADE:tmp.eyebrow-lamination'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'permanent-nail-polish',
            'title' => 'Kadıköy - Permanent Nail Polish | S Art Beauty Center',
            'description' => 'Add elegance to your nails with permanent nail polish at S Art Beauty Center! Discover our permanent nail polish applications featuring a wide range of colors.',
            'content' => 'BLADE:tmp.permanent-nail-polish'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'keratin-care',
            'title' => 'Kadıköy - Keratin Care | S Art Beauty Center ',
            'description' => 'A special touch for your hair: Provide deep care for your dry and damaged hair with keratin treatment at S Art Beauty Center.',
            'content' => 'BLADE:tmp.keratin-care'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'eyelash-lifting',
            'title' => 'Kadıköy - Eyelash Lifting | S Art Beauty Center ',
            'description' => 'Highlight Your Eyes: Achieve a Natural and Stunning Look with Lash Lifting! Book your appointment now!',
            'content' => 'BLADE:tmp.eyelash-lifting'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'manicure-pedicure',
            'title' => 'Kadı
            köy - Manicure and Pedicure | S Art Beauty Center ',
            'description' => 'Strengthen your nails and complete your elegance with a manicure and pedicure. Call now to book your appointment.',
            'content' => 'BLADE:tmp.manicure-pedicure'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'microblading',
            'title' => 'Kadıköy - Microblading | S Art Beauty Center ',
            'description' => 'Achieve permanent and natural-looking eyebrows that suit your face with microblading. Book your appointment now!',
            'content' => 'BLADE:tmp.microblading'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'nail-art',
            'title' => 'Kadıköy - Nail Art | S Art Beauty Center ',
            'description' => 'Add color to your nails at S Art Beauty Center! Create unique nail designs with nail art alongside our experts. Book your appointment now!',
            'content' => 'BLADE:tmp.nail-art'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'perming',
            'title' => 'Kadıköy - Perm Hairstyle| S Art Beauty Center ',
            'description' => 'Achieve Wavy and Voluminous Hair with a Perm! Book Your Appointment Now and Get the Hair of Your Dreams!',
            'content' => 'BLADE:tmp.perming'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'prosthetic-nails',
            'title' => 'Kadıköy - Prosthetic Nails | S Art Beauty Center ',
            'description' => 'Create a unique style for your nails with prosthetic nail designs at S Art Beauty Center. Achieve custom-designed nails with our experts.',
            'content' => 'BLADE:tmp.prosthetic-nails'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'hair-color-highlights',
            'title' => 'Kadıköy - Hair Highlights | S Art Beauty Center ',
            'description' => 'Achieve a natural and attractive look with highlights at S Art Beauty Center. Book your appointment now!',
            'content' => 'BLADE:tmp.hair-color-highlights'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'hair-dye',
            'title' => 'Kadıköy - Hair Dye | S Art Beauty Center ',
            'description' => 'Various hair dye options for your hair at S Art Beauty Center! Book your appointment now.',
            'content' => 'BLADE:tmp.hair-dye'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'hair-dip-dye',
            'title' => 'Kadıköy - Hair Dip Dye | S Art Beauty Center ',
            'description' => 'Add vibrancy to your hair with root touch-up at S Art Beauty Center. Trust our experts to achieve a natural and attractive look.',
            'content' => 'BLADE:tmp.hair-dip-dye'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'hair-cut',
            'title' => 'Kadıköy - Hair Cut | S Art Beauty Center ',
            'description' => 'Highlight your style! Achieve a unique look with a haircut at S Art Beauty Center. Book your appointment now!',
            'content' => 'BLADE:tmp.hair-cut'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'hair-extension',
            'title' => 'Kadıköy - Hair Extension | S Art Beauty Center ',
            'description' => 'A special touch for your hair! Achieve your desired style with hair extensions. Call now to book your appointment.',
            'content' => 'BLADE:tmp.hair-extension'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'wax-application',
            'title' => 'Kadıköy - Wax | S Art Beauty Center ',
            'description' => 'Experience smooth, hair-free skin with professional waxing services at S Art Beauty Center. Book your appointment now!',
            'content' => 'BLADE:tmp.wax-application'
        ],
        [
            'lang' => "en",
            'uniq_slug' => 'policies',
            'title' => 'Privacy Policy, Terms of Use, and Cookie Policy',
            'description' => 'Privacy Policy, Terms of Use, and Cookie Policys',
            'content' => 'BLADE:tmp.policies'
        ],

        //TODO: TK ---------------------------------------------------------------------------------------- //
        [
            'lang' => 'tk',
            'uniq_slug' => 'services',
            'title' => 'Kadıköy Güzellik Salonu Hizmetlerimiz | S Art Beauty Center',
            'description' => 'Kadıköy güzellik merkezi olarak, profesyonel cilt bakımı, lazer epilasyon, masaj, saç bakımı ve makyaj hizmetlerimizle güzelliğinize değer katıyoruz.',
            'content' => 'BLADE:tmp.services'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'index',
            'title' => 'Kadıköy Güzellik Merkezi | S Art Beauty Center',
            'description' => 'S Art Beauty Güzellik Merkezinde buz lazer epilasyondan tırnak bakımına, cilt bakımından saç bakım hizmetlerine kadar geniş bir yelpazede hizmet sunuyoruz.',
            'content' => 'BLADE:tmp.home'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'about-us',
            'title' => 'Hakkımızda | S Art Beauty Center',
            'description' => 'S Art Beauty olarak, uzman kadromuz ve geniş hizmet yelpazemizle, müşterilerimize en iyi hizmeti sunmaktayız.',
            'content' => 'BLADE:tmp.about-us'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'contact-us',
            'title' => 'Kadıköy - İletişim | S Art Beauty Center',
            'description' => 'İletişim sayfamız üzerinden bize mesaj göndererek, randevu talebinde bulunabilir veya hizmetlerimiz hakkında daha fazla bilgi alabilirsiniz.',
            'content' => 'BLADE:tmp.contact-us'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'ice-laser-hair-removal',
            'title' => 'Kadıköy - Buz Lazer Epilasyon | S Art Beauty Center',
            'description' => 'S Art Beauty Centerda buz lazer epilasyon ile tüylerle vedalaşın! Cilt tipinize uygun olarak uygulanan bu etkili yöntemle pürüzsüz bir cilde sahip olun. ',
            'content' => 'BLADE:tmp.ice-laser-hair-removal'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'cellulite-massage',
            'title' => 'Kadıköy - G5 Selülit Masajı | S Art Beauty Center',
            'description' => 'Selülit görünümünden kurtulmak mı istiyorsunuz? S Art Beauty Centerda G5 Selülit Masajı ile selülit görünümünü güvenilir ve etkili bir şekilde azaltabilirsiniz!',
            'content' => 'BLADE:tmp.cellulite-massage'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'roll-shape',
            'title' => 'Kadıköy - Roll Shape  | S Art Beauty Center',
            'description' => 'Geleneksel Uzakdoğu masaj tekniğinin modern teknolojiyle birleştiği Rollshape, kan dolaşımını hızlandırarak, rahatlama ve selülit giderme etkileri sunar.',
            'content' => 'BLADE:tmp.roll-shape'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'brazillian-blow-dry',
            'title' => 'Kadıköy - Brezilya Fönü Set Bakımı | S Art Beauty Center',
            'description' => 'Saçlarınıza Brezilya Fönü Set Bakımı ile özen gösterin! Uzman ekibimizle, saçlarınızı güçlendirin ve daha sağlıklı bir görünüm elde edin.',
            'content' => 'BLADE:tmp.brazillian-blow-dry'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'skin-care',
            'title' => 'Kadıköy - Profesyonel Cilt Bakımı | S Art Beauty Center',
            'description' => "S Art Beauty Center'da profesyonel cilt bakımı ile cildinizi yeniden canlandırın! Deneyimli estetisyenlerimizle birlikte cildinizini yenileyin.",
            'content' => "BLADE:tmp.skin-care"
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'deepliner',
            'title' => 'Kadıköy - Kalıcı Eyeliner ve Dipliner | S Art Beauty Center',
            'description' => "Gözlerinize kalıcı bir dokunuş: S Art Beauty Center'da kalıcı eyeliner ve dipliner uygulaması ile mükemmel bir görünüm elde edin!",
            'content' => 'BLADE:tmp.deepliner'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'lip-coloring',
            'title' => 'Kadıköy - Dudak Renklendirme | S Art Beauty Center',
            'description' => 'Dudak renklendirme uygulamasıyla dudaklarınıza doğal ve çekici bir renk kazandırın. Kalıcı güzellik için hemen randevunuzu alın! ',
            'content' => 'BLADE:tmp.lip-coloring'
        ],

        [
            'lang' => 'tk',
            'uniq_slug' => 'bridal-hair',
            'title' => 'Kadıköy - Gelin Saç Modelleri | S Art Beauty Center',
            'description' => "Muhteşem gelin saç modelleriyle özel gününüzde muhteşem görünün! Uzmanlarımızla birlikte hayalinizdeki gelin saçını keşfedin.",
            'content' => 'BLADE:tmp.bridal-hair'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'silk-eyelash',
            'title' => "Kadıköy - İpek Kirpik Uygulamaları | S Art Beauty Center",
            'description' => "S Art Beauty Center'da ipek kirpik uygulamalarıyla kalıcı ve doğal bir görünüm elde edin. Güzelliğinize değer katın!",
            'content' => 'BLADE:tmp.silk-eyelash'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'eyebrow-lamination',
            'title' => "Kadıköy - Kaş Laminasyonu | S Art Beauty Center",
            'description' => "Doğal ve çarpıcı kaşlar için S Art Beauty Center'da kaş laminasyonu! Uzmanlarımızla birlikte kaşlarınıza daha dolgun ve düzgün bir görünüm kazandırın.",
            'content' => 'BLADE:tmp.eyebrow-lamination'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'permanent-nail-polish',
            'title' => "Kadıköy - Kalıcı Oje Modelleri | S Art Beauty Center",
            'description' => "S Art Beauty Center'da kalıcı oje modelleriyle tırnaklarınıza şıklık katın! Geniş renk seçenekleriyle öne çıkan kalıcı oje uygulamalarımızı keşfedin. ",
            'content' => 'BLADE:tmp.permanent-nail-polish'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'keratin-care',
            'title' => "Kadıköy - Keratin Bakımı | S Art Beauty Center ",
            'description' => "Saçlarınıza özel bir dokunuş: S Art Beauty Center'da keratin bakımı ile kuru ve yıpranmış saçlarınıza derinlemesine bakım yapın.",
            'content' => 'BLADE:tmp.keratin-care'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'eyelash-lifting',
            'title' => "Kadıköy - Kirpik Lifting | S Art Beauty Center ",
            'description' => "Gözlerinizi Ön Plana Çıkarın: Kirpik Lifting ile Doğal ve Etkileyici Bir Görünüm! Hemen randevunuzu alın! ",
            'content' => 'BLADE:tmp.eyelash-lifting'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'manicure-pedicure',
            'title' => "Kadıköy - Manikür ve Pedikür | S Art Beauty Center ",
            'description' => "Manikür ve pedikür ile tırnaklarınızı güçlendirin ve şıklığınızı tamamlayın. Randevu için hemen arayın.",
            'content' => 'BLADE:tmp.manicure-pedicure'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'microblading',
            'title' => "Kadıköy - Microblading | S Art Beauty Center ",
            'description' => "Microblading ile yüzünüze uygun, kalıcı ve doğal görünümlü kaşlara sahip olun. Randevunuzu hemen alın!",
            'content' => 'BLADE:tmp.microblading'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'nail-art',
            'title' => "Kadıköy - Nail Art Modelleri | S Art Beauty Center ",
            'description' => "S Art Beauty Center'da tırnaklarınıza renk katın! Uzmanlarımızla birlikte nail art ile benzersiz tırnak tasarımları yaratın. Şimdi randevunuzu alın!",
            'content' => 'BLADE:tmp.nail-art'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'perming',
            'title' => "Kadıköy - Perma Saç Modelleri | S Art Beauty Center ",
            'description' => "Perma Saç ile Dalgalı ve Hacimli Saçlara Sahip Olun! Hemen Randevunuzu Alın ve Hayalini Kurduğunuz Saçlara Sahip Olun!",
            'content' => 'BLADE:tmp.perming'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'prosthetic-nails',
            'title' => "Kadıköy - Protez Tırnak Modelleri | S Art Beauty Center ",
            'description' => "S Art Beauty Center'da protez tırnak modelleri ile tırnaklarınızda benzersiz bir tarz yaratın. Uzmanlarımızla birlikte özel tasarım tırnaklara sahip olun.",
            'content' => 'BLADE:tmp.prosthetic-nails'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'hair-color-highlights',
            'title' => "Kadıköy - Röfle Saç Modelleri | S Art Beauty Center ",
            'description' => "Röfle saç modelleri için S Art Beauty Center'da doğal ve çekici görünüme kavuşun. Hemen randevunuzu alın!",
            'content' => 'BLADE:tmp.hair-color-highlights'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'hair-dye',
            'title' => "Kadıköy - Saç Boyası Modelleri | S Art Beauty Center ",
            'description' => "Saçlarınız için S Art Beauty Center'da çeşitli saç boyası seçenekleri! Hemen randevunuzu oluşturun.",
            'content' => 'BLADE:tmp.hair-dye'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'hair-dip-dye',
            'title' => "Kadıköy - Dip Boya Uygulaması | S Art Beauty Center ",
            'description' => "Dip boya uygulaması ile S Art Beauty Center'da saçlarınıza canlılık katın. Uzman ellere güvenin, doğal ve çekici bir görünüm elde edin. ",
            'content' => 'BLADE:tmp.hair-dip-dye'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'hair-cut',
            'title' => "Kadıköy - Saç Kesim Modelleri | S Art Beauty Center ",
            'description' => "Tarzınızı ön plana çıkarın! S Art Beauty Center'da saç kesimiyle benzersiz bir görünüm elde edin. Randevunuzu şimdi oluşturun!",
            'content' => 'BLADE:tmp.hair-cut'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'hair-extension',
            'title' => "Kadıköy - Saç Kaynak Uygulaması | S Art Beauty Center ",
            'description' => "Saçlarınıza özel bir dokunuş! Saç kaynak uygulaması ile istediğiniz tarzı yakalayın. Randevu için hemen arayın.",
            'content' => 'BLADE:tmp.hair-extension'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'wax-application',
            'title' => "Kadıköy - Şeker Ağda Uygulaması | S Art Beauty Center ",
            'description' => "Şeker ağda uygulaması ile hassas ve doğal bir tüy alma deneyimi yaşayın. Randevunuzu hemen alın!",
            'content' => 'BLADE:tmp.wax-application'
        ],
        [
            'lang' => "tk",
            'uniq_slug' => 'policies',
            'title' => "Gizlilik Politikası, Kullanım Şartları ve Çerez Politikası",
            'description' => "Gizlilik Politikası, Kullanım Şartları ve Çerez Politikası",
            'content' => 'BLADE:tmp.policies',
        ],

        // TODO: RU ------------------------------------------------------------------------- //
        [
            'lang' => 'ru', 'uniq_slug' => 'services',
            'title' => "Кадыкёй - Наши услуги | S Art Beauty Center",
            'description' => "Откройте для себя наши услуги в S Art Beauty Center в Кадыкёй. Посетите нас для ухода за кожей, эпиляции, дизайна прически и многого другого.",
            'content' => 'BLADE:tmp.services'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'index',
            'title' => "Кадыкёй - Салон красоты | S Art Beauty Center",
            'description' => "В S Art Beauty Center мы предлагаем широкий спектр услуг: от лазерной эпиляции до ухода за ногтями, а также от ухода за кожей до ухода за волосами. ",
            'content' => 'BLADE:tmp.home'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'about-us',
            'title' => "О нас | S Art Beauty Center",
            'description' => "В S Art Beauty мы предоставляем нашим клиентам наилучший сервис благодаря нашей команде экспертов и широкому спектру услуг.",
            'content' => 'BLADE:tmp.about-us'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'contact-us',
            'title' => "Кадыкёй - Свяжитесь с нами | S Art Beauty Center",
            'description' => "Вы можете отправить нам сообщение через нашу контактную страницу, чтобы запросить встречу или получить больше информации о наших услугах.",
            'content' => 'BLADE:tmp.contact-us'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'ice-laser-hair-removal',
            'title' => "Кадыкёй - Лазерная эпиляция | S Art Beauty Center",
            'description' => "Попрощайтесь с нежелательными волосами с лазерной эпиляцией в S Art Beauty Center! Добейтесь гладкой кожи эффективно.",
            'content' => 'BLADE:tmp.ice-laser-hair-removal'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'cellulite-massage',
            'title' => "G5 антицеллюлитный массаж | S Art Beauty Center",
            'description' => "Хотите избавиться от целлюлита? В S Art Beauty Center вы можете надежно и эффективно уменьшить проявление целлюлита с помощью антицеллюлитного массажа G5!",
            'content' => 'BLADE:tmp.cellulite-massage'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'roll-shape',
            'title' => "Кадыкёй - Ажыбадем Roll Shape | S Art Beauty Center",
            'description' => "Rollshape сочетает традиционный восточный массаж с современной технологией, чтобы улучшить кровообращение и уменьшить целлюлит.",
            'content' => 'BLADE:tmp.roll-shape'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'brazillian-blow-dry',
            'title' => "Кадыкёй - Бразильское выпрямление | S Art Beauty Center",
            'description' => "Побалуйте свои волосы с помощью бразильского выпрямления! Укрепите свои волосы и добейтесь более здорового вида с нашей командой экспертов.",
            'content' => 'BLADE:tmp.brazillian-blow-dry'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'skin-care',
            'title' => "Кадыкёй - Уход за кожей | S Art Beauty Center",
            'description' => "Омолодите свою кожу с профессиональным уходом за кожей в S Art Beauty Center! Обновите свою кожу с помощью наших опытных косметологов.",
            'content' => 'BLADE:tmp.skin-care'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'deepliner',
            'title' => "Кадыкёй - Подводка для глаз | S Art Beauty Center",
            'description' => "Постоянное прикосновение к вашим глазам: добейтесь идеального вида с помощью перманентной подводки и диплайнера в S Art Beauty Center!",
            'content' => 'BLADE:tmp.deepliner'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'lip-coloring',
            'title' => "Кадыкёй - Окрашивание губ | S Art Beauty Center",
            'description' => "Придайте губам естественный и привлекательный цвет с помощью окрашивания. Запишитесь на прием для длительной красоты!",
            'content' => 'BLADE:tmp.lip-coloring'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'bridal-hair',
            'title' => "Кадыкёй - Свадебные прически | S Art Beauty Center",
            'description' => "Выглядите великолепно в свой особенный день с красивыми свадебными прическами! Откройте для себя свою мечту о свадебной прическе с нашими экспертами.",
            'content' => 'BLADE:tmp.bridal-hair'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'silk-eyelash',
            'title' => "Кадыкёй - Шелковые ресницы | S Art Beauty Center",
            'description' => "Добейтесь долговечного и естественного вида с шелковыми ресницами в S Art Beauty Center. Придайте красоту своей внешности!",
            'content' => 'BLADE:tmp.silk-eyelash'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'eyebrow-lamination',
            'title' => "Кадыкёй - Ламинирование бровей | S Art Beauty Center",
            'description' => "Для естественных и выразительных бровей попробуйте ламинирование бровей в S Art Beauty Center! Добейтесь более густых и четких бровей с нашими экспертами.",
            'content' => 'BLADE:tmp.eyebrow-lamination'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'permanent-nail-polish',
            'title' => "Кадыкёй - Перманентный лак | S Art Beauty Center",
            'description' => "Ногти выглядят элегантно с перманентным лаком в S Art Beauty Center! Откройте для себя наши приложения с широким выбором цветов.",
            'content' => 'BLADE:tmp.permanent-nail-polish'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'keratin-care',
            'title' => "Кадыкёй - Кератиновое выпрямление | S Art Beauty Center",
            'description' => "Особое прикосновение к вашим волосам: обеспечьте глубокий уход для ваших сухих и поврежденных волос с помощью кератинового лечения в S Art Beauty Center.",
            'content' => 'BLADE:tmp.keratin-care'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'eyelash-lifting',
            'title' => "Кадыкёй - Лифтинг ресниц | S Art Beauty Center",
            'description' => "Подчеркните свои глаза: добейтесь естественного и потрясающего вида с помощью лифтинга ресниц! Запишитесь на прием прямо сейчас!",
            'content' => 'BLADE:tmp.eyelash-lifting'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'manicure-pedicure',
            'title' => "Кадыкёй - Маникюр и педикюр | S Art Beauty Center",
            'description' => "Укрепите свои ногти и завершите свою элегантность с маникюром и педикюром. Позвоните прямо сейчас, чтобы записаться на прием.",
            'content' => 'BLADE:tmp.manicure-pedicure'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'microblading',
            'title' => "Кадыкёй - Микроблейдинг | S Art Beauty Center",
            'description' => "Добейтесь постоянных и естественно выглядящих бровей, подходящих к вашему лицу, с помощью микроблейдинга. Запишитесь на прием прямо сейчас!",
            'content' => 'BLADE:tmp.microblading'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'nail-art',
            'title' => "Кадыкёй - Дизайн ногтей | S Art Beauty Center",
            'description' => "Придайте цвет своим ногтям в S Art Beauty Center! Создавайте уникальные дизайны ногтей с помощью наших экспертов. Запишитесь на прием прямо сейчас!",
            'content' => 'BLADE:tmp.nail-art'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'perming',
            'title' => "Кадыкёй - Химическая завивка | S Art Beauty Center",
            'description' => "Добейтесь волнистых и объемных волос с помощью химической завивки! Запишитесь на прием прямо сейчас и получите волосы своей мечты!",
            'content' => 'BLADE:tmp.perming'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'prosthetic-nails',
            'title' => "Кадыкёй - Протезирование ногтей | S Art Beauty Center",
            'description' => "Создайте уникальный стиль для своих ногтей с протезированием ногтей в S Art Beauty Center. Добейтесь индивидуально разработанных ногтей с нашими экспертами.",
            'content' => 'BLADE:tmp.prosthetic-nails'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'hair-color-highlights',
            'title' => "Кадыкёй - Мелирование | S Art Beauty Center",
            'description' => "Добейтесь естественного и привлекательного вида с мелированием в S Art Beauty Center. Запишитесь на прием прямо сейчас!",
            'content' => 'BLADE:tmp.hair-color-highlights'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'hair-dye',
            'title' => "Кадыкёй - Окрашивание волос | S Art Beauty Center",
            'description' => "Различные варианты окрашивания волос для ваших волос в S Art Beauty Center! Запишитесь на прием прямо сейчас.",
            'content' => 'BLADE:tmp.hair-dye'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'hair-dip-dye',
            'title' => "Кадыкёй - Окрашивание корней | S Art Beauty Center",
            'description' => "Придайте живость волосам с окрашиванием корней в S Art Beauty Center. Доверьтесь нашим экспертам для естественного и привлекательного вида.",
            'content' => 'BLADE:tmp.hair-dip-dye'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'hair-cut',
            'title' => "Кадыкёй - Стрижка | S Art Beauty Center",
            'description' => "Подчеркните свой стиль! Добейтесь уникального вида с помощью стрижки в S Art Beauty Center. Запишитесь на прием прямо сейчас!",
            'content' => 'BLADE:tmp.hair-cut'
        ],
        [
            'lang' => 'ru', 'uniq_slug' => 'hair-extension',
            'title' => "Кадыкёй - Наращивание волос | S Art Beauty Center",
            'description' => "Особое прикосновение к вашим волосам! Добейтесь желаемого стиля с помощью наращивания волос. Позвоните прямо сейчас, чтобы записаться на прием.",
            'content' => 'BLADE:tmp.hair-extension'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'wax-application',
            'title' => "Кадыкёй - Ваксинг | S Art Beauty Center",
            'description' => "Испытайте гладкость кожи без волос с профессиональными услугами ваксинга в S Art Beauty Center. Запишитесь на прием прямо сейчас!",
            'content' => 'BLADE:tmp.wax-application'
        ],
        [
            'lang' => "ru",
            'uniq_slug' => 'policies',
            'title' => "Политика конфиденциальности, Условия использования и Политика использования файлов cookie",
            'description' => "Политика конфиденциальности, Условия использования и Политика использования файлов cookie",
            'content' => 'BLADE:tmp.policies',
        ],
    ];

    public function run(): void
    {
        $routes = Routes::all();

        $this->pages = collect($this->pages);

        $routes->each(function ($route) {
            $model = new \App\Models\Pages();

            if ($page = $this->pages->where('lang', $route['lang'])->where('uniq_slug', $route['uniq_slug'])->first()) {
                $model = new Pages();
                $model->route_id = $route->id;

                $model->title = $page['title'];
                $model->description = $page['description'];

                $model->meta_information = [
                    'title' => $page['title'],
                    'description' => $page['description'],
                ];

                if (str_contains($page['content'], 'BLADE:'))
                    $model->view_path = (trim(str_replace('BLADE:', "", $page['content'])));
                else
                    $model->view_path = $page['content'];

                $model->meta_information = null;
                $model->save();
            }
        });
    }
}
