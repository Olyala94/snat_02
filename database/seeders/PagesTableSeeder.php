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
         // Sart Academy için eklenenler
         [
            'lang' => 'en',
            'uniq_slug' => 'our-courses',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.our-courses'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'silk-eyelash-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.silk-eyelash-academy'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'prosthetic-nails-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.prosthetic-nails-academy'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'hair-extension-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.hair-extension-academy'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'beauty-master-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.beauty-master-academy'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'permanent-makeup-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.permanent-makeup-academy'
        ],
        // end of Sart Academy için eklenenler
        [
            'lang' => 'en',
            'uniq_slug' => 'services',
            'title' => 'Our Services | Nur Art Nur Art',
            'description' => 'Discover our services at Nur Art Nur Art in Ashgabat. Visit us for skin care, epilation, hair design, and more.',
            'content' => 'BLADE:tmp.services'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'index',
            'title' => 'Ashgabat - Beauty Nur Art | Nur Art Nur Art',
            'description' => 'At Nur Art Nur Art, we offer a wide range of services, from ice laser epilation to nail care, and from skin care to hair care services.',
            'content' => 'BLADE:tmp.home'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'about-us',
            'title' => '| Nur Art Nur Art',
            'description' => 'At Nur Art, we provide the best service to our customers with our expert team and wide range of services.',
            'content' => 'BLADE:tmp.about-us'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'contact-us',
            'title' => 'Contact Us | Nur Art Nur Art',
            'description' => 'You can send us a message through our contact page to request an appointment or to get more information about our services.',
            'content' => 'BLADE:tmp.contact-us'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'galery',
            'title' => 'Contact Us | Nur Art Nur Art',
            'description' => 'You can send us a message through our contact page to request an appointment or to get more information about our services.',
            'content' => 'BLADE:tmp.galery'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'blog',
            'title' => 'Contact Us | Nur Art Nur Art',
            'description' => 'You can send us a message through our contact page to request an appointment or to get more information about our services.',
            'content' => 'BLADE:tmp.blog'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'testimonials',
            'title' => 'Contact Us | Nur Art Nur Art',
            'description' => 'You can send us a message through our contact page to request an appointment or to get more information about our services.',
            'content' => 'BLADE:tmp.testimonials'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'ice-laser-hair-removal',
            'title' => 'Ashgabat - Ice Laser Epilation | Nur Art Nur Art',
            'description' => 'Say goodbye to unwanted hair with ice laser epilation at Nur Art Nur Art! Achieve smooth skin with this effective method tailored to your skin type.',
            'content' => 'BLADE:tmp.ice-laser-hair-removal'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'cellulite-massage',
            'title' => 'Ashgabat - G5 Cellulite Massage | Nur Art Nur Art',
            'description' => 'Do you want to get rid of cellulite appearance? At Nur Art Nur Art, you can reliably and effectively reduce the appearance of cellulite with G5 Cellulite Massage!',
            'content' => 'BLADE:tmp.cellulite-massage'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'roll-shape',
            'title' => 'Ashgabat - Roll Shape | Nur Art Nur Art',
            'description' => 'Rollshape combines traditional Far Eastern massage with modern technology to boost circulation and reduce cellulite.',
            'content' => 'BLADE:tmp.roll-shape'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'brazillian-blow-dry',
            'title' => 'Ashgabat - Brazilian Blowout | Nur Art Nur Art',
            'description' => 'Pamper your hair with Brazilian Blowout Treatment! Strengthen your hair and achieve a healthier look with our expert team.',
            'content' => 'BLADE:tmp.brazillian-blow-dry'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'skin-care',
            'title' => 'Ashgabat - Skin Care | Nur Art Nur Art',
            'description' => 'Rejuvenate your skin with professional skin care at Nur Art Nur Art! Refresh your skin with our experienced estheticians.',
            'content' => 'BLADE:tmp.skin-care'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'deepliner',
            'title' => 'Ashgabat - Eyeliner and Dip Eyeliner | Nur Art Nur Art',
            'description' => 'A permanent touch for your eyes: Achieve a perfect look with permanent eyeliner and dipliner application at Nur Art Nur Art!',
            'content' => 'BLADE:tmp.deepliner'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'lip-coloring',
            'title' => 'Ashgabat - Lip Coloring | Nur Art Nur Art',
            'description' => 'Enhance your lips with a natural and attractive color through our lip tinting application. Book your appointment now for lasting beauty!',
            'content' => 'BLADE:tmp.lip-coloring'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'bridal-hair',
            'title' => 'Ashgabat - Bridal Hair | Nur Art Nur Art',
            'description' => 'Look stunning on your special day with beautiful bridal hairstyles! Discover your dream bridal hair with our experts.',
            'content' => 'BLADE:tmp.bridal-hair'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'silk-eyelash',
            'title' => 'Ashgabat - Silk Eyelash | Nur Art Nur Art',
            'description' => 'Achieve a lasting and natural look with silk eyelash extensions at Nur Art Nur Art. Add value to your beauty!',
            'content' => 'BLADE:tmp.silk-eyelash'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'eyebrow-lamination',
            'title' => 'Ashgabat - Eyebrow Lamination | Nur Art Nur Art',
            'description' => 'For natural and striking eyebrows, try brow lamination at Nur Art Nur Art! Achieve fuller and more defined brows with our experts.',
            'content' => 'BLADE:tmp.eyebrow-lamination'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'permanent-nail-polish',
            'title' => 'Ashgabat - Permanent Nail Polish | Nur Art Nur Art',
            'description' => 'Add elegance to your nails with permanent nail polish at Nur Art Nur Art! Discover our permanent nail polish applications featuring a wide range of colors.',
            'content' => 'BLADE:tmp.permanent-nail-polish'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'keratin-care',
            'title' => 'Ashgabat - Keratin Care | Nur Art Nur Art ',
            'description' => 'A special touch for your hair: Provide deep care for your dry and damaged hair with keratin treatment at Nur Art Nur Art.',
            'content' => 'BLADE:tmp.keratin-care'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'eyelash-lifting',
            'title' => 'Ashgabat - Eyelash Lifting | Nur Art Nur Art ',
            'description' => 'Highlight Your Eyes: Achieve a Natural and Stunning Look with Lash Lifting! Book your appointment now!',
            'content' => 'BLADE:tmp.eyelash-lifting'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'manicure-pedicure',
            'title' => 'Kadı
            köy - Manicure and Pedicure | Nur Art Nur Art ',
            'description' => 'Strengthen your nails and complete your elegance with a manicure and pedicure. Call now to book your appointment.',
            'content' => 'BLADE:tmp.manicure-pedicure'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'microblading',
            'title' => 'Ashgabat - Microblading | Nur Art Nur Art ',
            'description' => 'Achieve permanent and natural-looking eyebrows that suit your face with microblading. Book your appointment now!',
            'content' => 'BLADE:tmp.microblading'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'nail-art',
            'title' => 'Ashgabat - Nail Art | Nur Art Nur Art ',
            'description' => 'Add color to your nails at Nur Art Nur Art! Create unique nail designs with nail art alongside our experts. Book your appointment now!',
            'content' => 'BLADE:tmp.nail-art'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'perming',
            'title' => 'Ashgabat - Perm Hairstyle| Nur Art Nur Art ',
            'description' => 'Achieve Wavy and Voluminous Hair with a Perm! Book Your Appointment Now and Get the Hair of Your Dreams!',
            'content' => 'BLADE:tmp.perming'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'prosthetic-nails',
            'title' => 'Ashgabat - Prosthetic Nails | Nur Art Nur Art ',
            'description' => 'Create a unique style for your nails with prosthetic nail designs at Nur Art Nur Art. Achieve custom-designed nails with our experts.',
            'content' => 'BLADE:tmp.prosthetic-nails'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'hair-color-highlights',
            'title' => 'Ashgabat - Hair Highlights | Nur Art Nur Art ',
            'description' => 'Achieve a natural and attractive look with highlights at Nur Art Nur Art. Book your appointment now!',
            'content' => 'BLADE:tmp.hair-color-highlights'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'hair-dye',
            'title' => 'Ashgabat - Hair Dye | Nur Art Nur Art ',
            'description' => 'Various hair dye options for your hair at Nur Art Nur Art! Book your appointment now.',
            'content' => 'BLADE:tmp.hair-dye'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'hair-dip-dye',
            'title' => 'Ashgabat - Hair Dip Dye | Nur Art Nur Art ',
            'description' => 'Add vibrancy to your hair with root touch-up at Nur Art Nur Art. Trust our experts to achieve a natural and attractive look.',
            'content' => 'BLADE:tmp.hair-dip-dye'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'hair-cut',
            'title' => 'Ashgabat - Hair Cut | Nur Art Nur Art ',
            'description' => 'Highlight your style! Achieve a unique look with a haircut at Nur Art Nur Art. Book your appointment now!',
            'content' => 'BLADE:tmp.hair-cut'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'hair-extension',
            'title' => 'Ashgabat - Hair Extension | Nur Art Nur Art ',
            'description' => 'A special touch for your hair! Achieve your desired style with hair extensions. Call now to book your appointment.',
            'content' => 'BLADE:tmp.hair-extension'
        ],
        [
            'lang' => 'en',
            'uniq_slug' => 'wax-application',
            'title' => 'Ashgabat - Wax | Nur Art Nur Art ',
            'description' => 'Experience smooth, hair-free skin with professional waxing services at Nur Art Nur Art. Book your appointment now!',
            'content' => 'BLADE:tmp.wax-application'
        ],
        [
            'lang' => "en",
            'uniq_slug' => 'policies',
            'title' => 'Privacy Policy, Terms of Use, and Cookie Policy',
            'description' => 'Privacy Policy, Terms of Use, and Cookie Policys',
            'content' => 'BLADE:tmp.policies'
        ],

        //TODO: tk ---------------------------------------------------------------------------------------- //
        // Sart Academy için eklenenler
        [
            'lang' => 'tk',
            'uniq_slug' => 'our-courses',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.our-courses'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'silk-eyelash-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.silk-eyelash-academy'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'prosthetic-nails-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.prosthetic-nails-academy'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'hair-extension-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.hair-extension-academy'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'beauty-master-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.beauty-master-academy'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'permanent-makeup-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.permanent-makeup-academy'
        ],
        // Güzellik Merkezinin
        [
            'lang' => 'tk',
            'uniq_slug' => 'services',
            'title' => 'Ashgabat Güzellik Salonu Hizmetlerimiz | Nur Art Nur Art',
            'description' => 'Ashgabat güzellik merkezi olarak, profesyonel cilt bakımı, lazer epilasyon, masaj, saç bakımı ve makyaj hizmetlerimizle güzelliğinize değer katıyoruz.',
            'content' => 'BLADE:tmp.services'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'index',
            'title' => 'Ashgabat Nur Art Merkezi | Nur Art Academy',
            'description' => 'Nur Art Güzellik Merkezinde buz lazer epilasyondan tırnak bakımına, cilt bakımından saç bakım hizmetlerine kadar geniş bir yelpazede hizmet sunuyoruz.',
            'content' => 'BLADE:tmp.home'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'about-us',
            'title' => 'Biz Hakda | Nur Art Nur Art',
            'description' => 'Nur Art olarak, uzman kadromuz ve geniş hizmet yelpazemizle, müşterilerimize en iyi hizmeti sunmaktayız.',
            'content' => 'BLADE:tmp.about-us'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'contact-us',
            'title' => 'Ashgabat - İletişim | Nur Art Nur Art',
            'description' => 'İletişim sayfamız üzerinden bize mesaj göndererek, randevu talebinde bulunabilir veya hizmetlerimiz hakkında daha fazla bilgi alabilirsiniz.',
            'content' => 'BLADE:tmp.contact-us'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'galery',
            'title' => 'Ashgabat - İletişim | Nur Art Nur Art',
            'description' => 'İletişim sayfamız üzerinden bize mesaj göndererek, randevu talebinde bulunabilir veya hizmetlerimiz hakkında daha fazla bilgi alabilirsiniz.',
            'content' => 'BLADE:tmp.galery'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'blog',
            'title' => 'Contact Us | Nur Art Nur Art',
            'description' => 'You can send us a message through our contact page to request an appointment or to get more information about our services.',
            'content' => 'BLADE:tmp.blog'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'testimonials',
            'title' => 'Contact Us | Nur Art Nur Art',
            'description' => 'You can send us a message through our contact page to request an appointment or to get more information about our services.',
            'content' => 'BLADE:tmp.testimonials'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'ice-laser-hair-removal',
            'title' => 'Ashgabat - Buz Lazer Epilasyon | Nur Art Nur Art',
            'description' => 'Nur Art Nur Artda buz lazer epilasyon ile tüylerle vedalaşın! Cilt tipinize uygun olarak uygulanan bu etkili yöntemle pürüzsüz bir cilde sahip olun. ',
            'content' => 'BLADE:tmp.ice-laser-hair-removal'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'cellulite-massage',
            'title' => 'Ashgabat - G5 Selülit Masajı | Nur Art Nur Art',
            'description' => 'Selülit görünümünden kurtulmak mı istiyorsunuz? Nur Art Nur Artda G5 Selülit Masajı ile selülit görünümünü güvenilir ve etkili bir şekilde azaltabilirsiniz!',
            'content' => 'BLADE:tmp.cellulite-massage'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'roll-shape',
            'title' => 'Ashgabat - Roll Shape  | Nur Art Nur Art',
            'description' => 'Geleneksel Uzakdoğu masaj tekniğinin modern teknolojiyle birleştiği Rollshape, kan dolaşımını hızlandırarak, rahatlama ve selülit giderme etkileri sunar.',
            'content' => 'BLADE:tmp.roll-shape'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'brazillian-blow-dry',
            'title' => 'Ashgabat - Brezilya Fönü Set Bakımı | Nur Art Nur Art',
            'description' => 'Saçlarınıza Brezilya Fönü Set Bakımı ile özen gösterin! Uzman ekibimizle, saçlarınızı güçlendirin ve daha sağlıklı bir görünüm elde edin.',
            'content' => 'BLADE:tmp.brazillian-blow-dry'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'skin-care',
            'title' => 'Ashgabat - Profesyonel Cilt Bakımı | Nur Art Nur Art',
            'description' => "Nur Art Nur Art'da profesyonel cilt bakımı ile cildinizi yeniden canlandırın! Deneyimli estetisyenlerimizle birlikte cildinizini yenileyin.",
            'content' => "BLADE:tmp.skin-care"
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'deepliner',
            'title' => 'Ashgabat - Kalıcı Eyeliner ve Dipliner | Nur Art Nur Art',
            'description' => "Gözlerinize kalıcı bir dokunuş: Nur Art Nur Art'da kalıcı eyeliner ve dipliner uygulaması ile mükemmel bir görünüm elde edin!",
            'content' => 'BLADE:tmp.deepliner'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'lip-coloring',
            'title' => 'Ashgabat - Dudak Renklendirme | Nur Art Nur Art',
            'description' => 'Dudak renklendirme uygulamasıyla dudaklarınıza doğal ve çekici bir renk kazandırın. Kalıcı güzellik için hemen randevunuzu alın! ',
            'content' => 'BLADE:tmp.lip-coloring'
        ],

        [
            'lang' => 'tk',
            'uniq_slug' => 'bridal-hair',
            'title' => 'Ashgabat - Gelin Saç Modelleri | Nur Art Nur Art',
            'description' => "Muhteşem gelin saç modelleriyle özel gününüzde muhteşem görünün! Uzmanlarımızla birlikte hayalinizdeki gelin saçını keşfedin.",
            'content' => 'BLADE:tmp.bridal-hair'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'silk-eyelash',
            'title' => "Ashgabat - Surat çekmek Uygulamaları | Nur Art Nur Art",
            'description' => "Nur Art Nur Art'da ipek kirpik uygulamalarıyla kalıcı ve doğal bir görünüm elde edin. Güzelliğinize değer katın!",
            'content' => 'BLADE:tmp.silk-eyelash'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'eyebrow-lamination',
            'title' => "Ashgabat - Kaş Laminasyonu | Nur Art Nur Art",
            'description' => "Doğal ve çarpıcı kaşlar için Nur Art Nur Art'da kaş laminasyonu! Uzmanlarımızla birlikte kaşlarınıza daha dolgun ve düzgün bir görünüm kazandırın.",
            'content' => 'BLADE:tmp.eyebrow-lamination'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'permanent-nail-polish',
            'title' => "Ashgabat - Kalıcı Oje Modelleri | Nur Art Nur Art",
            'description' => "Nur Art Nur Art'da kalıcı oje modelleriyle tırnaklarınıza şıklık katın! Geniş renk seçenekleriyle öne çıkan kalıcı oje uygulamalarımızı keşfedin. ",
            'content' => 'BLADE:tmp.permanent-nail-polish'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'keratin-care',
            'title' => "Ashgabat - Keratin Bakımı | Nur Art Nur Art ",
            'description' => "Saçlarınıza özel bir dokunuş: Nur Art Nur Art'da keratin bakımı ile kuru ve yıpranmış saçlarınıza derinlemesine bakım yapın.",
            'content' => 'BLADE:tmp.keratin-care'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'eyelash-lifting',
            'title' => "Ashgabat - Kirpik Lifting | Nur Art Nur Art ",
            'description' => "Gözlerinizi Ön Plana Çıkarın: Kirpik Lifting ile Doğal ve Etkileyici Bir Görünüm! Hemen randevunuzu alın! ",
            'content' => 'BLADE:tmp.eyelash-lifting'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'manicure-pedicure',
            'title' => "Ashgabat - Manikür ve Pedikür | Nur Art Nur Art ",
            'description' => "Manikür ve pedikür ile tırnaklarınızı güçlendirin ve şıklığınızı tamamlayın. Randevu için hemen arayın.",
            'content' => 'BLADE:tmp.manicure-pedicure'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'microblading',
            'title' => "Ashgabat - Microblading | Nur Art Nur Art ",
            'description' => "Microblading ile yüzünüze uygun, kalıcı ve doğal görünümlü kaşlara sahip olun. Randevunuzu hemen alın!",
            'content' => 'BLADE:tmp.microblading'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'nail-art',
            'title' => "Ashgabat - Nail Art Modelleri | Nur Art Nur Art ",
            'description' => "Nur Art Nur Art'da tırnaklarınıza renk katın! Uzmanlarımızla birlikte nail art ile benzersiz tırnak tasarımları yaratın. Şimdi randevunuzu alın!",
            'content' => 'BLADE:tmp.nail-art'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'perming',
            'title' => "Ashgabat - Perma Saç Modelleri | Nur Art Nur Art ",
            'description' => "Perma Saç ile Dalgalı ve Hacimli Saçlara Sahip Olun! Hemen Randevunuzu Alın ve Hayalini Kurduğunuz Saçlara Sahip Olun!",
            'content' => 'BLADE:tmp.perming'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'prosthetic-nails',
            'title' => "Ashgabat - Aýdym-Saz  Modelleri | Nur Art Nur Art ",
            'description' => "Nur Art Nur Art'da Aýdym-Saz  modelleri ile tırnaklarınızda benzersiz bir tarz yaratın. Uzmanlarımızla birlikte özel tasarım tırnaklara sahip olun.",
            'content' => 'BLADE:tmp.prosthetic-nails'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'hair-color-highlights',
            'title' => "Ashgabat - Röfle Saç Modelleri | Nur Art Nur Art ",
            'description' => "Röfle saç modelleri için Nur Art Nur Art'da doğal ve çekici görünüme kavuşun. Hemen randevunuzu alın!",
            'content' => 'BLADE:tmp.hair-color-highlights'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'hair-dye',
            'title' => "Ashgabat - Saç Boyası Modelleri | Nur Art Nur Art ",
            'description' => "Saçlarınız için Nur Art Nur Art'da çeşitli saç boyası seçenekleri! Hemen randevunuzu oluşturun.",
            'content' => 'BLADE:tmp.hair-dye'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'hair-dip-dye',
            'title' => "Ashgabat - Dip Boya Uygulaması | Nur Art Nur Art ",
            'description' => "Dip boya uygulaması ile Nur Art Nur Art'da saçlarınıza canlılık katın. Uzman ellere güvenin, doğal ve çekici bir görünüm elde edin. ",
            'content' => 'BLADE:tmp.hair-dip-dye'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'hair-cut',
            'title' => "Ashgabat - Saç Kesim Modelleri | Nur Art Nur Art ",
            'description' => "Tarzınızı ön plana çıkarın! Nur Art Nur Art'da saç kesimiyle benzersiz bir görünüm elde edin. Randevunuzu şimdi oluşturun!",
            'content' => 'BLADE:tmp.hair-cut'
        ],
        [
            'lang' => 'tk', 'uniq_slug' => 'hair-extension',
            'title' => "Ashgabat - Keramika Sapagy Uygulaması | Nur Art Nur Art ",
            'description' => "Saçlarınıza özel bir dokunuş! Keramika Sapagy uygulaması ile istediğiniz tarzı yakalayın. Randevu için hemen arayın.",
            'content' => 'BLADE:tmp.hair-extension'
        ],
        [
            'lang' => 'tk',
            'uniq_slug' => 'wax-application',
            'title' => "Ashgabat - Şeker Ağda Uygulaması | Nur Art Nur Art ",
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
         // Sart Academy için eklenenler
         [
            'lang' => 'ru',
            'uniq_slug' => 'our-courses',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.our-courses'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'silk-eyelash-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.silk-eyelash-academy'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'prosthetic-nails-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.prosthetic-nails-academy'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'hair-extension-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.hair-extension-academy'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'beauty-master-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.beauty-master-academy'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'permanent-makeup-academy',
            'title' => 'Ashgabat Nur Art Academy Sapaklarymyz | Nur Art Academy',
            'description' => 'Nur Art Academy Testi Yapılıyor',
            'content' => 'BLADE:tmp.permanent-makeup-academy'
        ],
        // end of Sart Academy için eklenenler
        [
            'lang' => 'ru',
            'uniq_slug' => 'services',
            'title' => "Кадыкёй - Наши услуги | Nur Art Nur Art",
            'description' => "Откройте для себя наши услуги в Nur Art Nur Art в Кадыкёй. Посетите нас для ухода за кожей, эпиляции, дизайна прически и многого другого.",
            'content' => 'BLADE:tmp.services'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'index',
            'title' => "Ашгабат | Nur Art Nur Art",
            'description' => "В Nur Art Nur Art мы предлагаем широкий спектр услуг: от лазерной эпиляции до ухода за ногтями, а также от ухода за кожей до ухода за волосами. ",
            'content' => 'BLADE:tmp.home'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'about-us',
            'title' => "О нас | Nur Art Nur Art",
            'description' => "В Nur Art мы предоставляем нашим клиентам наилучший сервис благодаря нашей команде экспертов и широкому спектру услуг.",
            'content' => 'BLADE:tmp.about-us'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'contact-us',
            'title' => "Кадыкёй - Свяжитесь с нами | Nur Art Nur Art",
            'description' => "Вы можете отправить нам сообщение через нашу контактную страницу, чтобы запросить встречу или получить больше информации о наших услугах.",
            'content' => 'BLADE:tmp.contact-us'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'galery',
            'title' => "Кадыкёй - Свяжитесь с нами | Nur Art Nur Art",
            'description' => "Вы можете отправить нам сообщение через нашу контактную страницу, чтобы запросить встречу или получить больше информации о наших услугах.",
            'content' => 'BLADE:tmp.galery'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'blog',
            'title' => 'Contact Us | Nur Art Nur Art',
            'description' => 'You can send us a message through our contact page to request an appointment or to get more information about our services.',
            'content' => 'BLADE:tmp.blog'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'testimonials',
            'title' => 'Contact Us | Nur Art Nur Art',
            'description' => 'You can send us a message through our contact page to request an appointment or to get more information about our services.',
            'content' => 'BLADE:tmp.testimonials'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'ice-laser-hair-removal',
            'title' => "Кадыкёй - Лазерная эпиляция | Nur Art Nur Art",
            'description' => "Попрощайтесь с нежелательными волосами с лазерной эпиляцией в Nur Art Nur Art! Добейтесь гладкой кожи эффективно.",
            'content' => 'BLADE:tmp.ice-laser-hair-removal'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'cellulite-massage',
            'title' => "G5 антицеллюлитный массаж | Nur Art Nur Art",
            'description' => "Хотите избавиться от целлюлита? В Nur Art Nur Art вы можете надежно и эффективно уменьшить проявление целлюлита с помощью антицеллюлитного массажа G5!",
            'content' => 'BLADE:tmp.cellulite-massage'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'roll-shape',
            'title' => "Кадыкёй - Ажыбадем Roll Shape | Nur Art Nur Art",
            'description' => "Rollshape сочетает традиционный восточный массаж с современной технологией, чтобы улучшить кровообращение и уменьшить целлюлит.",
            'content' => 'BLADE:tmp.roll-shape'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'brazillian-blow-dry',
            'title' => "Кадыкёй - Бразильское выпрямление | Nur Art Nur Art",
            'description' => "Побалуйте свои волосы с помощью бразильского выпрямления! Укрепите свои волосы и добейтесь более здорового вида с нашей командой экспертов.",
            'content' => 'BLADE:tmp.brazillian-blow-dry'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'skin-care',
            'title' => "Кадыкёй - Уход за кожей | Nur Art Nur Art",
            'description' => "Омолодите свою кожу с профессиональным уходом за кожей в Nur Art Nur Art! Обновите свою кожу с помощью наших опытных косметологов.",
            'content' => 'BLADE:tmp.skin-care'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'deepliner',
            'title' => "Кадыкёй - Подводка для глаз | Nur Art Nur Art",
            'description' => "Постоянное прикосновение к вашим глазам: добейтесь идеального вида с помощью перманентной подводки и диплайнера в Nur Art Nur Art!",
            'content' => 'BLADE:tmp.deepliner'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'lip-coloring',
            'title' => "Кадыкёй - Окрашивание губ | Nur Art Nur Art",
            'description' => "Придайте губам естественный и привлекательный цвет с помощью окрашивания. Запишитесь на прием для длительной красоты!",
            'content' => 'BLADE:tmp.lip-coloring'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'bridal-hair',
            'title' => "Кадыкёй - Свадебные прически | Nur Art Nur Art",
            'description' => "Выглядите великолепно в свой особенный день с красивыми свадебными прическами! Откройте для себя свою мечту о свадебной прическе с нашими экспертами.",
            'content' => 'BLADE:tmp.bridal-hair'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'silk-eyelash',
            'title' => "Кадыкёй - Шелковые ресницы | Nur Art Nur Art",
            'description' => "Добейтесь долговечного и естественного вида с шелковыми ресницами в Nur Art Nur Art. Придайте красоту своей внешности!",
            'content' => 'BLADE:tmp.silk-eyelash'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'eyebrow-lamination',
            'title' => "Кадыкёй - Ламинирование бровей | Nur Art Nur Art",
            'description' => "Для естественных и выразительных бровей попробуйте ламинирование бровей в Nur Art Nur Art! Добейтесь более густых и четких бровей с нашими экспертами.",
            'content' => 'BLADE:tmp.eyebrow-lamination'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'permanent-nail-polish',
            'title' => "Кадыкёй - Перманентный лак | Nur Art Nur Art",
            'description' => "Ногти выглядят элегантно с перманентным лаком в Nur Art Nur Art! Откройте для себя наши приложения с широким выбором цветов.",
            'content' => 'BLADE:tmp.permanent-nail-polish'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'keratin-care',
            'title' => "Кадыкёй - Кератиновое выпрямление | Nur Art Nur Art",
            'description' => "Особое прикосновение к вашим волосам: обеспечьте глубокий уход для ваших сухих и поврежденных волос с помощью кератинового лечения в Nur Art Nur Art.",
            'content' => 'BLADE:tmp.keratin-care'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'eyelash-lifting',
            'title' => "Кадыкёй - Лифтинг ресниц | Nur Art Nur Art",
            'description' => "Подчеркните свои глаза: добейтесь естественного и потрясающего вида с помощью лифтинга ресниц! Запишитесь на прием прямо сейчас!",
            'content' => 'BLADE:tmp.eyelash-lifting'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'manicure-pedicure',
            'title' => "Кадыкёй - Маникюр и педикюр | Nur Art Nur Art",
            'description' => "Укрепите свои ногти и завершите свою элегантность с маникюром и педикюром. Позвоните прямо сейчас, чтобы записаться на прием.",
            'content' => 'BLADE:tmp.manicure-pedicure'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'microblading',
            'title' => "Кадыкёй - Микроблейдинг | Nur Art Nur Art",
            'description' => "Добейтесь постоянных и естественно выглядящих бровей, подходящих к вашему лицу, с помощью микроблейдинга. Запишитесь на прием прямо сейчас!",
            'content' => 'BLADE:tmp.microblading'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'nail-art',
            'title' => "Кадыкёй - Дизайн ногтей | Nur Art Nur Art",
            'description' => "Придайте цвет своим ногтям в Nur Art Nur Art! Создавайте уникальные дизайны ногтей с помощью наших экспертов. Запишитесь на прием прямо сейчас!",
            'content' => 'BLADE:tmp.nail-art'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'perming',
            'title' => "Кадыкёй - Химическая завивка | Nur Art Nur Art",
            'description' => "Добейтесь волнистых и объемных волос с помощью химической завивки! Запишитесь на прием прямо сейчас и получите волосы своей мечты!",
            'content' => 'BLADE:tmp.perming'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'prosthetic-nails',
            'title' => "Кадыкёй - Протезирование ногтей | Nur Art Nur Art",
            'description' => "Создайте уникальный стиль для своих ногтей с протезированием ногтей в Nur Art Nur Art. Добейтесь индивидуально разработанных ногтей с нашими экспертами.",
            'content' => 'BLADE:tmp.prosthetic-nails'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'hair-color-highlights',
            'title' => "Кадыкёй - Мелирование | Nur Art Nur Art",
            'description' => "Добейтесь естественного и привлекательного вида с мелированием в Nur Art Nur Art. Запишитесь на прием прямо сейчас!",
            'content' => 'BLADE:tmp.hair-color-highlights'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'hair-dye',
            'title' => "Кадыкёй - Окрашивание волос | Nur Art Nur Art",
            'description' => "Различные варианты окрашивания волос для ваших волос в Nur Art Nur Art! Запишитесь на прием прямо сейчас.",
            'content' => 'BLADE:tmp.hair-dye'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'hair-dip-dye',
            'title' => "Кадыкёй - Окрашивание корней | Nur Art Nur Art",
            'description' => "Придайте живость волосам с окрашиванием корней в Nur Art Nur Art. Доверьтесь нашим экспертам для естественного и привлекательного вида.",
            'content' => 'BLADE:tmp.hair-dip-dye'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'hair-cut',
            'title' => "Кадыкёй - Стрижка | Nur Art Nur Art",
            'description' => "Подчеркните свой стиль! Добейтесь уникального вида с помощью стрижки в Nur Art Nur Art. Запишитесь на прием прямо сейчас!",
            'content' => 'BLADE:tmp.hair-cut'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'hair-extension',
            'title' => "Кадыкёй - Наращивание волос | Nur Art Nur Art",
            'description' => "Особое прикосновение к вашим волосам! Добейтесь желаемого стиля с помощью наращивания волос. Позвоните прямо сейчас, чтобы записаться на прием.",
            'content' => 'BLADE:tmp.hair-extension'
        ],
        [
            'lang' => 'ru',
            'uniq_slug' => 'wax-application',
            'title' => "Кадыкёй - Ваксинг | Nur Art Nur Art",
            'description' => "Испытайте гладкость кожи без волос с профессиональными услугами ваксинга в Nur Art Nur Art. Запишитесь на прием прямо сейчас!",
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
