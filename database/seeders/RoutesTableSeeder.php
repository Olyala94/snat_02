<?php

namespace Database\Seeders;

use App\Models\Routes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    public $routes = [
        // TODO: -------------------------------- EN -------------------------- //
        [
            'lang' => 'en',
            'slug' => 'services',
            'uniq_slug' => 'services',
            "meta_information" => [
                "title" => "Our Services | S Art Beauty Center",
                "description" => "Discover our services at S Art Beauty Center in Kadıköy. Visit us for skin care, epilation, hair design, and more.",
            ]
        ],
        [
            'lang' => 'en', 'slug' => '/',
            'uniq_slug' => 'index',
            "meta_information" => [
                "title" => "Kadıköy - Beauty Center | S Art Beauty Center",
                "description" => "At S Art Beauty Center, we offer a wide range of services, from ice laser epilation to nail care, and from skin care to hair care services.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'about-us',
            'uniq_slug' => 'about-us',
            "meta_information" => [
                "title" => "Kadıköy Beauty Center | S Art Beauty Center",
                "description" => "At S Art Beauty Center, we offer a wide range of services, from ice laser epilation to nail care, and from skin care to hair care services.",
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'contact-us',
            'uniq_slug' => 'contact-us',
            "meta_information" => [
                "title" => "About | S Art Beauty Center",
                "description" => "At S Art Beauty, we provide the best service to our customers with our expert team and wide range of services.",

            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/ice-laser-hair-removal',
            'uniq_slug' => 'ice-laser-hair-removal',
            "meta_information" => [
                "title" => "Kadıköy - Ice Laser Epilation | S Art Beauty Center",
                "description" => "Say goodbye to unwanted hair with ice laser epilation at S Art Beauty Center! Achieve smooth skin with this effective method tailored to your skin type.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What is Ice Laser Hair Removal?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Diode laser is considered the 'Gold Standard' in hair removal. One of its most significant advantages is that it combines a broad energy spectrum with maximum safety for the human body, ensuring highly efficient destruction of hair follicles.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Is it possible to have laser hair removal if you have tattoos?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "It is not recommended. Infrared radiation can destroy all dark pigments, including tattoo ink, posing a risk of fading the tattoo.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Laser Hair Removal Harmful?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "No, the procedure is entirely safe when performed correctly.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Can you have laser hair removal during pregnancy or breastfeeding?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "It is not recommended.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/cellulite-massage',
            'uniq_slug' => 'cellulite-massage',
            "meta_information" => [
                "title" => "Kadıköy - G5 Cellulite Massage | S Art Beauty Center",
                "description" => "Do you want to get rid of cellulite appearance? At S Art Beauty Center, you can reliably and effectively reduce the appearance of cellulite with G5 Cellulite Massage!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What is G5 Massage?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "G5 massage is a type of massage performed using a special device. This device provides a skin tightening and cellulite reduction effect through rapid vibrations. G5 massage is particularly used for cellulite treatment and localized slimming. It is also highly effective in relieving muscle lactic acid buildup, reducing edema, and treating spasms.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "G5 Massage is Applied in Which Areas?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "G5 massage is widely used today, both in the field of health and for aesthetic purposes. The vibrations provided help burn excess fat in the body and improve blood circulation. Therefore, G5 massage contributes to better health as it leads to a faster metabolism, resulting in a soothing effect on the body. Additionally, G5 massage eliminates localized fat deposits and completely removes cellulite, which is responsible for an undesirable appearance, allowing individuals to achieve a tighter and more desired aesthetic appearance",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How is G5 Massage Done?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "G5 massage can be applied to various parts of the body, but it is primarily preferred for areas such as the waist, hips, thighs, and arms. This massage is performed by trained professionals. First, oil is applied to the area where the massage will be administered, and then the procedure begins. The vibrations applied to the treatment area during the process not only accelerate blood circulation but also make fat burning easier. G5 massage sessions typically last for approximately 30 minutes and are conducted in sessions.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "G5 Massage Risks and Side Effects",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "G5 massage is an extremely safe procedure. Therefore, individuals who have experienced it often express their satisfaction. The vibrations provided during the treatment stimulate all cells, and as a result, bodily functions begin to perform their duties. Due to this characteristic, G5 massage does not carry any risks or side effects.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/roll-shape',
            'uniq_slug' => 'roll-shape',
            "meta_information" => [
                "title" => "Kadıköy - Roll Shape | S Art Beauty Center",
                "description" => "Rollshape combines traditional Far Eastern massage with modern technology to boost circulation and reduce cellulite.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What is Roll Shape?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Roll Shape is designed for body massage using infrared technology. This treatment aims to eliminate cellulite and support achieving a slimmer body shape. With regular use, Roll Shape helps visibly reduce cellulite, tighten the skin, and diminish body imperfections.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Is there any pain when using Roll Shape?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Roll Shape is a painless application method.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How often is Roll Shape usage recommended?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The usage frequency can vary depending on personal preferences and desired results. However, it is generally recommended to use it for a specific duration several times a week.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/brazillian-blow-dry',
            'uniq_slug' => 'brazillian-blow-dry',
            "meta_information" => [
                "title" => "Kadıköy - Brazilian Blowout | S Art Beauty Center",
                "description" => "Pamper your hair with Brazilian Blowout Treatment! Strengthen your hair and achieve a healthier look with our expert team.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What is Brazilian Blowout?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The Brazilian Blowout process allows for hair straightening. This procedure is performed by applying a protein layer called keratin to the hair and then setting it into the hair with the help of heat.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "When will the results be visible?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The results will be visible immediately after the treatment. Your hair will become straight, healthy, smooth, shiny, and silky.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Does Brazilian Blowout damage hair?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "No, Brazilian Blowout is beneficial for hair as it involves a keratin supplement, which provides strength and shine to the hair.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Is it possible to do a Brazilian Blowout at home?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Experts do not recommend doing the procedure at home.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/skin-care',
            'uniq_slug' => 'skin-care',
            "meta_information" => [
                "title" => "Kadıköy - Skin Care | S Art Beauty Center",
                "description" => "Rejuvenate your skin with professional skin care at S Art Beauty Center! Refresh your skin with our experienced estheticians.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What is Professional skin care?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "It is a comprehensive treatment process conducted by trained experts, using professional products tailored to the specific needs of the skin.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "What are the Benefits of Skin Care?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "A comprehensive skin care treatment performed by trained professionals using the right products can provide the following benefits: resolving or alleviating acne problems, lightening blemishes, anti-aging and lifting effects, tightening of pores, moisturizing the skin, enhancing its radiance, and achieving smoother skin.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "What is the difference between at-home skincare and professional skincare?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The difference lies in the products we use, which should be applied under the supervision of an expert to prevent unwanted effects and achieve significant results. Additionally, during the procedure, you'll have the opportunity for relaxation and rejuvenation.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How often should Professional Skin Care be done?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The skin renewal cycle is approximately 30 days, during which new cells are formed, and some cells die. To get rid of these dead skin cells, a person can opt for professional skin care once a month.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/deepliner',
            'uniq_slug' => 'deepliner',
            "meta_information" => [
                "title" => "Kadıköy - Eyeliner and Dip Eyeliner | S Art Beauty Center",
                "description" => "A permanent touch for your eyes: Achieve a perfect look with permanent eyeliner and dipliner application at S Art Beauty Center!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What is Permanent Dip Eyeliner?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Permanent Dip Eyeliner is a permanent makeup method applied to make eyelashes and lash lines more defined. With Dip Eyeliner, it is possible to achieve more striking, defined, and beautiful looks permanently.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Is dipliner application difficult?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Dipliner application may require some practice initially, but you will get the hang of it with time. With a good brush and patience, you can achieve excellent results.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Which color of dipliner should I choose?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Black dipliner is a classic and bold choice. However, you can also use colored dipliners to create a creative look that complements your eye color and clothing style.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " How do I choose the right dipliner for my eye shape?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "To choose the right dipliner style for your eye shape, you can seek advice from makeup experts or online resources. Finding the technique that best emphasizes your eye structure is crucial.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How long does dipliner last?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The longevity depends on the product quality and your skin type. Waterproof formulas tend to last longer. You can also use makeup primer to enhance the durability of your application.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "What makeup products can be combined with dipliner?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Dipliner applications are often combined with mascara, eyeshadow, and eyebrow products to complete your eye makeup. Using these products correctly ensures the integrity of your eye makeup.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/lip-coloring',
            'uniq_slug' => 'lip-coloring',
            "meta_information" => [
                "title" => "Kadıköy - Lip Coloring | S Art Beauty Center",
                "description" => "Enhance your lips with a natural and attractive color through our lip tinting application. Book your appointment now for lasting beauty!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What is Lip Tinting?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Lip coloring is a beauty procedure that enhances the natural lip color and defines your lip lines. It helps rejuvenate faded or pale lip colors while giving you fuller and more youthful-looking lips.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Is Lip Coloring Painful?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "You may feel slight discomfort during the application, but it typically does not cause pain. Local anesthetic creams can be used in the area before the procedure to ensure a comfortable experience.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Is the Color Choice Made?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Your expert esthetician will help you make the most suitable color choice based on your skin tone and personal preferences.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Is Lip Coloring Permanent?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Lip coloring is a permanent procedure, but it may fade over time. Generally, a touch-up may be required within 1-3 years.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Who Can Get Lip Coloring?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Anyone who wants to enhance their lip color and appearance can get lip coloring. However, caution should be exercised in cases like pregnancy, certain skin conditions, or allergies.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "What Is the Recovery Process Like?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "After the procedure, there may be mild swelling and redness in the lips. The initial few days may require careful care, but generally, you can return to your daily life quickly."
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/bridal-hair',
            'uniq_slug' => 'bridal-hair',
            "meta_information" => [
                "title" => "Kadıköy - Bridal Hair | S Art Beauty Center",
                "description" => "Look stunning on your special day with beautiful bridal hairstyles! Discover your dream bridal hair with our experts.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What Is a Bridal Updo?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "A bridal updo is a hairstyle commonly chosen by brides on their wedding day. In this style, the hair is gathered at the top of the head and secured in a bun shape.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Which Wedding Dress Style Does a Bridal Updo Suit?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "A bridal updo complements all styles of wedding dresses. You can achieve a fantastic look with a mermaid, princess cut, or a simple wedding dress.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Does a Bridal Updo Last?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "When professionally done, a bridal updo design can stay flawless throughout your wedding day.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Is a Pre-Wedding Trial Necessary for Bridal Updo?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Generally, yes, it is recommended to have a trial for the bridal updo before the wedding. This ensures the desired result is achieved.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " What Accessories Can Be Combined with a Bridal Updo?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "A bridal updo can be combined with a tiara, hair accessories, or flowers. These accessories can make your updo even more special and elegant.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "What Hair Length and Type Are Suitable for a Bridal Updo?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "A bridal updo can be adapted to different hair types. It's ideal for medium to long hair. However, for short hair, a bridal updo can be created using hair extensions.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/silk-eyelash',
            'uniq_slug' => 'silk-eyelash',
            "meta_information" => [
                "title" => "Kadıköy - Silk Eyelash | S Art Beauty Center",
                "description" => "Achieve a lasting and natural look with silk eyelash extensions at S Art Beauty Center. Add value to your beauty!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What is Silk Eyelashes?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Silk Eyelashes extensions are a popular cosmetic procedure for lengthening and adding volume to natural eyelashes by attaching synthetic fibers with a special adhesive. The procedure can be performed by a cosmetologist, makeup artist, or a lashmaker.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Is Silk Eyelash Application Painful?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Silk eyelash application is generally a painless and comfortable process. If it is done professionally by an expert esthetician, it can be easily applied.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Will My Eyelashes Be Damaged?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "With correct application and quality products, the risk of damaging the eyelashes is low. Application can be done safely by getting help from an expert.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " How Long Will It Last?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Silk eyelashes generally last for 3-4 weeks. Maintenance times may vary depending on the shedding cycle of natural eyelashes.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Which Lash Styles Can Be Preferred?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Different styles such as natural, dramatic or cat eye can be preferred for silk eyelashes. You can determine the style that best suits you by talking to your expert.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Who Can Get Silk Eyelashes?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Silk eyelashes can be applied to almost everyone. However, expert advice is recommended for those with eye allergies or infections.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/eyebrow-lamination',
            'uniq_slug' => 'eyebrow-lamination',
            "meta_information" => [
                "title" => "Kadıköy - Eyebrow Lamination | S Art Beauty Center",
                "description" => "For natural and striking eyebrows, try brow lamination at S Art Beauty Center! Achieve fuller and more defined brows with our experts.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What is Eyebrow Lamination?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Eyebrow lamination is an eyebrow care procedure that allows for long-lasting shaping of the eyebrows. It helps keep the eyebrows fixed in an upward direction while also assisting in making them look combed and shaped.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Is Eyebrow Lamination Painful?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "No, eyebrow lamination is a painless procedure. You will not feel any pain while the eyebrow hairs are shaped with special products.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Does 2nd Eyebrow Lamination Take?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Eyebrow lamination process is usually completed between 45 minutes and 1 hour. It is a fast and effective method.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Does the Result Last?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The result of eyebrow lamination usually lasts for 4-6 weeks. Treatment time may vary depending on the natural hair loss cycle.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Who Can Have Eyebrow Lamination?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Eyebrow lamination is suitable for almost everyone. However, in cases such as pregnancy or skin conditions, expert advice is recommended beforehand.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "What Should the Care Be Like After Eyebrow Lamination?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "It is important to protect the eyebrows from water contact and not use special products for the first 24 hours. Then you can continue your normal daily care.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/permanent-nail-polish',
            'uniq_slug' => 'permanent-nail-polish',
            "meta_information" => [
                "title" => "Kadıköy - Permanent Nail Polish | S Art Beauty Center",
                "description" => "Add elegance to your nails with permanent nail polish at S Art Beauty Center! Discover our permanent nail polish applications featuring a wide range of colors.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What Is Permanent Nail Polish?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Permanent nail polish is a specially formulated type of nail polish that cures under UV light. This allows you to achieve long-lasting color and shine on your nails. Permanent nail polish stays on your nails for an extended period without chipping, peeling, or fading.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Does Permanent Nail Polish Application Take Time?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Permanent nail polish application takes approximately 1 hour. You can have shiny and long-lasting nails in a short time.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Does Permanent Polish Last?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Permanent nail polish can last for 2 to 3 weeks. Renewal may be required as your nails grow.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Does It Harm Your Nails?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "When applied with the right technique and products, permanent nail polish does not harm your nails. It is important to work with expert nail technicians.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "What Color and Design Options Are Available?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Permanent nail polish offers a wide range of color and design options. You can choose from both classic and trendy colors.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Who Can Get Permanent Nail Polish?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Generally, anyone can get permanent nail polish. However, it is recommended to seek expert consultation for those with nail diseases or allergies.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/keratin-care',
            'uniq_slug' => 'keratin-care',
            "meta_information" => [
                "title" => "Kadıköy - Keratin Care | S Art Beauty Center ",
                "description" => "A special touch for your hair: Provide deep care for your dry and damaged hair with keratin treatment at S Art Beauty Center.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What is Cold Spa Keratin Treatment?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Keratin treatment is a hair care method that harnesses the power of keratin protein to improve hair health.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Who Is Keratin Care Suitable For?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Keratin care is generally suitable for anyone with dry, damaged, and lifeless hair. Expert consultation is recommended.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Does Keratin Care Take?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Keratin care treatment typically takes between 1.5 to 3 hours. It may vary depending on the length and condition of the hair.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Is Special Care Needed After Keratin Care?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Yes, it is recommended to use special shampoos and hair care products after keratin care. This helps maintain its effectiveness for a longer period.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Is Keratin Care Harmful?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "When applied correctly, keratin care does not harm the hair. Instead, it rejuvenates and nourishes the hair.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Does the Result Last?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The duration of the effect of keratin care can vary depending on hair type and structure. Generally, it lasts between 2 to 5 months.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/eyelash-lifting',
            'uniq_slug' => 'eyelash-lifting',
            "meta_information" => [
                "title" => "Kadıköy - Eyelash Lifting | S Art Beauty Center ",
                "description" => "Highlight Your Eyes: Achieve a Natural and Stunning Look with Lash Lifting! Book your appointment now!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What Is Eyelash Lifting?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Eyelash lifting is a procedure that strengthens and volumizes eyelashes from root to tip, enhancing their appearance. It is used to revitalize and add volume to lashes that appear thin and lifeless.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Does Eyelash Lifting Take?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Eyelash lifting treatment typically takes between 45 minutes to 1 hour. You can achieve quick and effective results in a short time.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Does Eyelash Lifting Cause Discomfort?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Eyelash lifting treatment is generally painless and doesn't cause discomfort. Most people comfortably relax during the procedure.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Does the Result Last?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The results of eyelash lifting typically last for 6 to 8 weeks. This duration may vary depending on the natural shedding cycle of your lashes.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Who Can Get Eyelash Lifting?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Eyelash lifting is generally suitable for everyone, but it is recommended to consult before the procedure, especially during pregnancy or for those with certain skin conditions.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Is Post-Eyelash Lifting Care Needed?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Eyelash lifting doesn't require special care after the procedure. However, you can use eyelash serums or nourishing oils to prolong the impressive results.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/manicure-pedicure',
            'uniq_slug' => 'manicure-pedicure',
            "meta_information" => [
                "title" => "Kadıköy - Manicure and Pedicure | S Art Beauty Center ",
                "description" => "Strengthen your nails and complete your elegance with a manicure and pedicure. Call now to book your appointment.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What Is Manicure and Pedicure?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Manicure involves a series of procedures such as softening the skin, shaping, polishing, applying nail polish, pushing back cuticles, removing dead skin from the nail bed, filing nails, and hand massage. In pedicure, the same procedures are applied to the feet and toenails as in manicure treatment.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Often Should Manicure and Pedicure Be Done?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Generally, it is recommended to have a manicure and pedicure every 2 to 4 weeks. Regular care of nails and skin ensures healthy results.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Does the Manicure and Pedicure Procedure Take?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The duration of the procedure can vary based on whether it's for the hands or feet. On average, it can take about 1 hour.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "What Products Are Used?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "For manicures, nail files, skin exfoliants, and moisturizing products are used, while for pedicures, foot files, skin softeners, and nail polish can be used.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/microblading',
            'uniq_slug' => 'microblading',
            "meta_information" => [
                "title" => "Kadıköy - Microblading | S Art Beauty Center ",
                "description" => "Achieve permanent and natural-looking eyebrows that suit your face with microblading. Book your appointment now!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What Is Microblading?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Microblading is a process where eyebrow hairs are manually drawn with a semi-permanent pigment using a special hand tool. This method gives the eyebrows a fuller and more natural appearance.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Does the Microblading Procedure Hurt?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The Microblading procedure may create a slight discomfort. However, pain is usually minimized by using local anesthetic creams.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Does the Result Last?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The result of Microblading can typically last between 1 to 2 years. This duration can vary depending on your eyebrow structure, skin type, and care.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Who Can Get Microblading Done?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Generally, anyone can get Microblading done. However, if you are pregnant, have skin conditions, or certain health issues, it is advisable to consult with an expert beforehand.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/nail-art',
            'uniq_slug' => 'nail-art',
            "meta_information" => [
                "title" => "Kadıköy - Nail Art | S Art Beauty Center ",
                "description" => "Add color to your nails at S Art Beauty Center! Create unique nail designs with nail art alongside our experts. Book your appointment now!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What Is Nail Art?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Nail art is the decoration of nails with different materials to create various colors and designs.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "What Designs and Decorations Can Be Used?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "There are no limits in nail art! You can use flower patterns, geometric shapes, rhinestones, gems, stickers, and more.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Does It Last?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Nail art designs typically last between 1 to 2 weeks, depending on the growth rate of your nails.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/perming',
            'uniq_slug' => 'perming',
            "meta_information" => [
                "title" => "Kadıköy - Perm Hairstyle| S Art Beauty Center ",
                "description" => "Achieve Wavy and Voluminous Hair with a Perm! Book Your Appointment Now and Get the Hair of Your Dreams!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What Is Perming?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Perm is a process applied to straight or slightly wavy hair to make it more curly in shape.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Does the Perming Process Damage Hair?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The perming process can affect the hair to some extent. However, our experts use special products to protect your hair and provide post-treatment care recommendations.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Does Perming Last?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The results of perming typically last between 4 to 6 months, depending on the growth of your hair.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/prosthetic-nails',
            'uniq_slug' => 'prosthetic-nails',
            "meta_information" => [
                "title" => "Kadıköy - Prosthetic Nails | S Art Beauty Center ",
                "description" => "Create a unique style for your nails with prosthetic nail designs at S Art Beauty Center. Achieve custom-designed nails with our experts.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What Are Prosthetic Nails?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Prosthetic nails are artificial nails used to lengthen, shape, and strengthen the nails.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Do Prosthetic Nails Look Realistic?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Yes, prosthetic nails are prepared to match the natural nail appearance and offer a realistic look.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Long Do Prosthetic Nails Last?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Prosthetic nails typically last between 2 to 4 weeks. The duration may vary depending on the nail growth rate.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/hair-color-highlights',
            'uniq_slug' => 'hair-color-highlights',
            "meta_information" => [
                "title" => "Kadıköy - Hair Highlights | S Art Beauty Center ",
                "description" => "Achieve a natural and attractive look with highlights at S Art Beauty Center. Book your appointment now!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What Are Highlights?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Highlights are a process where strands of hair are symmetrically dyed several shades lighter than the hair's current color.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Do Highlights Damage the Hair?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Our experts carefully perform highlight procedures and take care of hair health. Damage is minimized with the right products and techniques.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Who Is Suitable for Highlights?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The highlight technique is generally suitable for every hair type. Our experts will offer you the most suitable color options based on your hair condition and preferences.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/hair-dye',
            'uniq_slug' => 'hair-dye',
            "meta_information" => [
                "title" => "Kadıköy - Hair Dye | S Art Beauty Center",
                "description" => "Various hair dye options for your hair at S Art Beauty Center! Book your appointment now.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What Is Hair Dye?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Hair dye is a chemical product used to change or enhance the color of hair. It offers a wide range of colors to create different styles",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Often Should Hair Dye Be Applied?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The duration of hair dye depends on hair type and color. It is generally recommended to refresh it every 4 to 8 weeks.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Is Hair Dye Harmful?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "When applied by experts using the right products and techniques, hair dye is not harmful. Hair health should be taken into account.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/hair-dip-dye',
            'uniq_slug' => 'hair-dip-dye',
            "meta_information" => [
                "title" => "Kadıköy - Hair Dip Dye | S Art Beauty Center  ",
                "description" => "Add vibrancy to your hair with root touch-up at S Art Beauty Center. Trust our experts to achieve a natural and attractive look.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What Is Hair Dip Dye?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "The coloring process applied to the roots of the hair is called hair dip dye. Our experts apply the hair dye prepared by them to completely cover the natural color. After the ideal waiting time, the hair is washed, and if necessary, a gloss application can be done.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How Is Hair Dip Dye Applied?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Hair dip dye is generally applied to the root area. Our experts use the right color and technique to refresh the roots and provide a natural look.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " How Often Should Hair Dip Dye Be Applied?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Depending on the rate of hair growth, it is recommended to refresh hair dip dye approximately every 4 to 6 weeks.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/hair-cut',
            'uniq_slug' => 'hair-cut',
            "meta_information" => [
                "title" => "Kadıköy - Hair Cut | S Art Beauty Center ",
                "description" => "Highlight your style! Achieve a unique look with a haircut at S Art Beauty Center. Book your appointment now!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Different Haircuts",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "At S Art Beauty Center, you can choose from different hair cutting styles, including straight cuts, layered cuts, short hair, and long hair. Our experts will recommend the most suitable haircut for you, taking into consideration your hair type and facial features.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Which Hair Cut Style Is Suitable for Me?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Our experts will guide you to determine the hair cut style that suits your hair type, facial features, and style.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " How Often Should I Get a Hair Cut?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Depending on the rate of hair growth, it is recommended to get a hair cut approximately every 6 to 8 weeks.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/hair-extension',
            'uniq_slug' => 'hair-extension',
            "meta_information" => [
                "title" => "Kadıköy - Hair Extension | S Art Beauty Center ",
                "description" => "A special touch for your hair! Achieve your desired style with hair extensions. Call now to book your appointment.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "How To Wash Hair Extensions?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "When washing hair extensions, the most important factor is to pay attention to the water temperature. Using lukewarm water helps prevent damage to the hair. Additionally, during washing, avoid applying shampoo directly to the roots and attachment points to help maintain the health of the hair.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "What Are The Types of Hair Extensions?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Types of hair extensions include micro extensions, which provide a natural look with thin hair strands, and keratin extensions, which use keratin-based adhesives for a long-lasting method.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Which Hair Extension Method Is Most Suitable?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Our experts will recommend the most suitable hair extension method for you based on your hair type, desired length, and hair structure.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'en',
            'slug' => 'services/wax-application',
            'uniq_slug' => 'wax-application',
            "meta_information" => [
                "title" => "Kadıköy - Wax | S Art Beauty Center ",
                "description" => "Experience smooth, hair-free skin with professional waxing services at S Art Beauty Center. Book your appointment now!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "What is wax?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Wax is a completely natural and hypoallergenic type of wax. It removes hair from the root, nourishes the skin, and makes it smooth.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How is it different from other waxing methods?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Wax is less painful, causes less irritation, and stretches the skin less compared to other methods.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "How long do the effects of waxing last?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Usually, the results are long-lasting for 3 to 6 weeks. This duration may vary depending on your skin type.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => "en",
            'slug' => 'policies',
            'uniq_slug' => 'policies',
            "meta_information" => [
                "title" => "Privacy Policy, Terms of Use, and Cookie Policy",
                "description" => "Privacy Policy, Terms of Use, and Cookie Policys",
            ]
        ],
        // TODO: ---------------------------- TK ---------------------------- //
        [
            'lang' => 'tk', 'slug' => 'hizmetlerimiz',
            'uniq_slug' => 'services',
            "meta_information" => [
                "title" => "Kadıköy Güzellik Salonu Hizmetlerimiz | S Art Beauty Center",
                "description" => "Kadıköy güzellik merkezi olarak, profesyonel cilt bakımı, lazer epilasyon, masaj, saç bakımı ve makyaj hizmetlerimizle güzelliğinize değer katıyoruz.",
            ]
        ],
        [
            'lang' => 'tk', 'slug' => '/',
            'uniq_slug' => 'index',
            "meta_information" => [
                "title" => "Kadıköy Güzellik Merkezi | S Art Beauty Center",
                "description" => "S Art Beauty Güzellik Merkezi'nde buz lazer epilasyondan tırnak bakımına, cilt bakımından saç bakım hizmetlerine kadar geniş bir yelpazede hizmet sunuyoruz.",
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hakkimizda',
            'uniq_slug' => 'about-us',
            "meta_information" => [
                "title" => "Hakkımızda | S Art Beauty Center",
                "description" => "S Art Beauty olarak, uzman kadromuz ve geniş hizmet yelpazemizle, müşterilerimize en iyi hizmeti sunmaktayız.",
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'iletisim',
            'uniq_slug' => 'contact-us',
            "meta_information" => [
                "title" => "Kadıköy - İletişim | S Art Beauty Center",
                "description" => "İletişim sayfamız üzerinden bize mesaj göndererek, randevu talebinde bulunabilir veya hizmetlerimiz hakkında daha fazla bilgi alabilirsiniz.",
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/buz-lazer-epilasyon',
            'uniq_slug' => 'ice-laser-hair-removal',
            "meta_information" => [
                "title" => "Kadıköy - Buz Lazer Epilasyon | S Art Beauty Center",
                "description" => "S Art Beauty Center'da buz lazer epilasyon ile tüylerle vedalaşın! Cilt tipinize uygun olarak uygulanan bu etkili yöntemle pürüzsüz bir cilde sahip olun. ",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Lazer Epilasyon Zararlı Mıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "1. Hayır, işlem doğru şekilde yapıldığı takdirde tamamen güvenlidir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Hamilelik veya emzirme döneminde epilasyon yapılabilir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "2. Tavsiye edilmez.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Dövmeleriniz varsa lazer epilasyon yaptırmak mümkün mü?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Tavsiye edilmez. Kızılötesi radyasyon, dövme boyası da dahil olmak üzere tüm koyu pigmentleri yok eder. Dövmenin solma riski vardır.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/selulit-masaji',
            'uniq_slug' => 'cellulite-massage',
            "meta_information" => [
                "title" => "Kadıköy - G5 Selülit Masajı | S Art Beauty Center",
                "description" => "Selülit görünümünden kurtulmak mı istiyorsunuz? S Art Beauty Center'da G5 Selülit Masajı ile selülit görünümünü güvenilir ve etkili bir şekilde azaltabilirsiniz!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "G5 masajı Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "G5 masajı, özel bir cihaz kullanılarak uygulanan masajdır. Bu cihaz, hızlı titreşimler aracılığıyla cilt sıkılaştırma ve selülit giderme etkisi sunar. Özellikle selülit tedavisinde ve bölgesel incelmede kullanılan G5, kaslarda biriken laktik asidi ve ödemi gidermede, ayrıca spazmların tedavisinde de oldukça etkilidir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " G5 Masajı Hangi Alanlarda Uygulanır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => " Günümüzde yaygın bir şekilde kullanılan G5 masajı hem sağlık alanında hem de estetik açıdan tercih edilen bir yöntemdir. Verilen titreşimler sayesinde vücutta bulunan fazla yağlar yakılır kan dolaşımı ise daha hızlı bir hale gelir. Bu nedenle G5 masajı sayesinde insanlar daha sağlıklı olurlar. Çünkü hızlı bir şekilde çalışan metabolizma sayesinde vücut rahatlatıcı bir etkiye sahip olur. Bunun dışında bölgesel yağlanmaları ortadan kaldıran ve kötü görüntüye neden olan selilütleri tamamen yok eden G5 masajı ile insanlar daha sıkı bir vücuda sahip olarak istedikleri estetik görüntü yakalayabilirler.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "G5 Masajı Nasıl Yapılır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "G5 masajı vücudun tüm noktalarında kullanılabilir. Bu yöntem daha çok bel, kalça, uyluk bölgesi ve kol gibi alanlarda tercih edilir. Uzman kişiler tarafından gerçekleştirilen bu masaj sırasında uygulanacak bölgeye önce yağ sürülür ardından işleme başlanır. İşlemin gerçekleştiği bölgeye verilen titreşimler sayesinde kan akışı hızlandığı gibi yağ yakımı da daha kolay hale gelir. Yaklaşık olarak 30 dakika süren G5 masajı seanslar halinde gerçekleştirilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "G5 Masajının Riskleri ve Yan Etkileri Nelerdir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "G5 masajı son derece sağlıklı bir uygulamadır. Bu nedenle bu yöntemi kullanan kişiler duydukları memnuniyeti fazlasıyla dile getirirler. Uygulama sırasında verilen titreşimler sayesinde tüm hücreler harekete geçer ve böylece vücut fonksiyonları da görevlerini yerine getirmeye başlar. Bu özelliğinden dolayı G5 masajının herhangi bir riski ve yan etkisi bulunmaz.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'roll-shape',
            'uniq_slug' => 'roll-shape',
            "meta_information" => [
                "title" => "Kadıköy - Roll Shape  | S Art Beauty Center",
                "description" => "Geleneksel Uzakdoğu masaj tekniğinin modern teknolojiyle birleştiği Rollshape, kan dolaşımını hızlandırarak, rahatlama ve selülit giderme etkileri sunar.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Roll Shape Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Roll Shape, kızılötesi teknolojisini kullanarak vücut masajı yapmak için tasarlanmıştır. Bu tedavi, selülitlerin ortadan kaldırılmasını ve ince vücut şeklinin elde edilmesini desteklemeyi amaçlar. Düzenli kullanımda, Roll Shape gözle görülür şekilde selülitlerin giderilmesine, sıkılaşmaya ve vücut kusurlarının azalmasına yardımcı olur.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Roll Shape Kullanırken Ağrı Hissedilir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => " Roll Shape ağrısız bir uygulama yöntemidir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Roll Shape Kullanımı Ne Kadar Sıklıkta Önerilir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kullanım süresi kişisel tercihlere ve hedeflenen sonuçlara göre değişebilir. Ancak, genellikle haftada birkaç kez belirli bir süre kullanılması tavsiye edilir.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/brezilya-fonu',
            'uniq_slug' => 'brazillian-blow-dry',
            "meta_information" => [
                "title" => "Kadıköy - Brezilya Fönü Set Bakımı | S Art Beauty Center",
                "description" => "Saçlarınıza Brezilya Fönü Set Bakımı ile özen gösterin! Uzman ekibimizle, saçlarınızı güçlendirin ve daha sağlıklı bir görünüm elde edin.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Brezilya Fönü Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Brezilya fönü işlemi, saçların düzleştirilmesini sağlar. Bu işlem, keratin adı verilen bir protein tabakasının saça uygulanması ve ardından bu tabakanın ısı yardımıyla saça yerleştirilmesi ile gerçekleştirilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Sonuç Ne Zaman Görünür Olacak?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Sonuç işlemden hemen sonra görülecektir. Saçlar düz, sağlıklı, pürüzsüz, parlak ve ipeksi hale gelecektir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Brezilya fönü saça zarar verir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Öncelikle saçlar için çok yararlı olan keratin takviyesi yapıldığı için faydalıdır. Saçınıza güç ve parlaklık verir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Evde Brezilya fönü yapmak mümkün mü?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Uzmanlar işlemin evde yapılmasını önermiyor.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/cilt-bakimi',
            'uniq_slug' => 'skin-care',
            "meta_information" => [
                "title" => "Kadıköy - Profesyonel Cilt Bakımı | S Art Beauty Center",
                "description" => "S Art Beauty Center'da profesyonel cilt bakımı ile cildinizi yeniden canlandırın! Deneyimli estetisyenlerimizle birlikte cildinizini yenileyin.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Profesyonel cilt bakımı nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Eğitimli uzmanlar tarafından, soruna yönelik profesyonel ürünlerle ve cildin ihtiyaçlarına uygun olarak yapılan kapsamlı bakım işlemidir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Cilt Bakımının Faydaları Nelerdir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => " Uzman ellerde, doğru ürünlerle yapılan bir cilt bakımı; akne sorunlarının giderilmesini ya da hafifletilmesini, lekelerin hafifletilmesini, anti-againg ve lifting etkisi, gözeneklerin sıkılaşmasını, cildin nemlenmesini, parlamasını ve pürüzsüzleşmesini sağlar.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Evde cilt bakımı ile profesyonel cilt bakımı arasındaki fark nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kullandığımız ürünler, istenmeyen etkileri önlemek ve belirgin sonuçlar elde etmek için bir uzman gözetimi altında kullanılmalıdır. Ayrıca prosedür sırasında rahatlama ve dinlenme fırsatı da bulacaksınız.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Profesyonel Cilt Bakımı Ne Sıklıkla Yapılmalı?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Cilt yenilenme döngüsü yaklaşık 30 gündür. Bu sürede yeni hücreler oluşur, bazı hücreler ise ölür. Bu ölü derilerden kurtulmak için kişi ayda bir kez olmak üzere profesyonel cilt bakımını yaptırabilir.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/dipliner',
            'uniq_slug' => 'deepliner',
            "meta_information" => [
                "title" => "Kadıköy - Kalıcı Eyeliner ve Dipliner | S Art Beauty Center",
                "description" => "Gözlerinize kalıcı bir dokunuş: S Art Beauty Center'da kalıcı eyeliner ve dipliner uygulaması ile mükemmel bir görünüm elde edin!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Kalıcı Dipliner Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kalıcı Dipliner kirpikleri ve kirpik diplerini daha belirgin hale getirmek için uygulanan bir kalıcı makyaj yöntemidir. Dipliner ile kalıcı olarak daha etkileyici, daha belirgin ve daha güzel bakışlar elde edebilmek mümkündür.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Dipliner uygulaması zor mu?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Dipliner uygulaması başlangıçta biraz pratik gerektirebilir, ancak zamanla alışacaksınız. İyi bir fırça ve sabır ile mükemmel sonuçlar elde edebilirsiniz.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Hangi renk dipliner tercih etmeliyim?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Siyah dipliner klasik ve belirgin bir seçenektir. Ancak göz renginize ve kıyafet stilinize göre renkli diplinerlar da kullanarak yaratıcı bir görünüm elde edebilirsiniz.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Göz şeklime uygun dipliner nasıl seçerim?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Göz şeklinize uygun dipliner stili seçmek için makyaj uzmanlarından veya online kaynaklardan tavsiye alabilirsiniz. Göz yapınızı en iyi vurgulayan tekniği bulmak önemlidir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Dipliner ne kadar süreyle kalıcıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kalıcılık ürün kalitesine ve cilt tipinize göre değişebilir. Su geçirmez formüller daha uzun süre dayanabilir. Uygulamanızın kalıcılığını artırmak için makyaj bazı kullanabilirsiniz.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Dipliner ile hangi makyaj ürünleri kombinlenir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Dipliner uygulaması genellikle maskara, far ve kaş ürünleri ile kombinlenir. Göz makyajınızın bütünlüğünü sağlamak için bu ürünleri doğru bir şekilde kullanabilirsiniz.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/dudak-renklendirme',
            'uniq_slug' => 'lip-coloring',
            "meta_information" => [
                "title" => "Kadıköy - Dudak Renklendirme | S Art Beauty Center",
                "description" => "Dudak renklendirme uygulamasıyla dudaklarınıza doğal ve çekici bir renk kazandırın. Kalıcı güzellik için hemen randevunuzu alın! ",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Soğuk Spa Keratin Bakımı Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Keratin bakımı, saç sağlığını iyileştirmek için keratin proteininin gücünden yararlanan bir saç bakım şeklidir. ",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Keratin Bakımı Kimler İçin Uygundur?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Keratin bakımı genellikle kuru, yıpranmış, cansız saçları olan herkes için uygundur. Uzman danışmanlık önerilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Keratin Bakımı Ne Kadar Sürer?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Keratin bakım işlemi genellikle 1.5 ila 3 saat arasında değişir. Saçın uzunluğu ve durumuna bağlı olarak değişkenlik gösterebilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Keratin Bakımı Sonrası Özel Bakım Gerekir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Evet, keratin bakımı sonrası özel şampuan ve saç bakım ürünleri kullanmak önerilir. Bu, etkinliği daha uzun süre korumanıza yardımcı olur.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Keratin Bakımı Zararlı mıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Doğru şekilde uygulandığında keratin bakımı saça zarar vermez, aksine saçları yeniler ve besler.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Sonuç Ne Kadar Süre Kalıcıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Keratin bakımının etkisi saç tipine ve saçın yapısına bağlı olarak değişebilir. Genellikle 2 ila 5 ay arasında kalıcılığını korur.",
                            ]
                        ],

                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/gelin-topuzu',
            'uniq_slug' => 'bridal-hair',
            "meta_information" => [
                "title" => "Kadıköy - Gelin Saç Modelleri | S Art Beauty Center",
                "description" => "Muhteşem gelin saç modelleriyle özel gününüzde muhteşem görünün! Uzmanlarımızla birlikte hayalinizdeki gelin saçını keşfedin.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Gelin Topuzu Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Gelin topuzu, düğün gününde gelinlerin sıkça tercih ettiği bir saç modelidir. Bu modelde saçlar başın en üst kısmında toplanarak topuz şeklinde tutturulur.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Gelin Topuzu Hangi Gelinlik Tarzına Uyar?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Gelin topuzu, her türlü gelinlik tarzına uyum sağlar. Balık model, prenses kesim veya sade bir gelinlikle de harika görünüm elde edebilirsiniz.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Gelin Topuzu Ne Kadar Süreyle Kalıcıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Gelin topuzu tasarımı, profesyonel bir şekilde yapıldığında düğün gününüz boyunca kusursuz bir şekilde kalabilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Düğün Öncesi Prova Gerekir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Genellikle evet, düğün öncesinde gelin topuzu için bir prova yapmak önerilir. Böylece istediğiniz sonucun elde edilmesi sağlanır.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Hangi Aksesuarlarla Kombine Edilebilir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Gelin topuzu, taç, saç aksesuarları veya çiçeklerle kombinlenebilir. Bu aksesuarlar, topuzunuzu daha da özel ve şık hale getirebilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Hangi Saç Uzunluğu ve Tipi Gelin Topuzu İçin Uygundur?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Gelin topuzu farklı saç tiplerine uyar. Orta uzunlukta veya uzun saçlar için idealdir. Ancak kısa saçlar için saç ekleri kullanarak da gelin topuzu oluşturulabilir.

                                En özel gününüzde gelin topuzu ile büyüleyici bir görünüm elde edin. S Art Beauty Center'da size özel hazırlanan gelin topuzu tasarımlarıyla düğününüzü taçlandırın.",
                            ]
                        ]
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/ipek-kirpik',
            'uniq_slug' => 'silk-eyelash',
            "meta_information" => [
                "title" => "Kadıköy - İpek Kirpik Uygulamaları | S Art Beauty Center",
                "description" => "S Art Beauty Center'da ipek kirpik uygulamalarıyla kalıcı ve doğal bir görünüm elde edin. Güzelliğinize değer katın!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "İpek Kirpik Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "İpek Kirpik, doğal kirpiklerin uzunluğunu ve hacmini artırmak için sentetik tüylerin özel bir yapıştırıcı ile yapıştırılması yoluyla gerçekleştirilen popüler bir kozmetik işlemdir. Bu işlemi bir kozmetolog, makyaj artisti veya bir kirpik uzmanı (lashmaker) yapabilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "İpek Kirpik Uygulaması Ağrılı mıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "İpek kirpik uygulaması genellikle ağrısız ve rahat bir süreçtir. Uzman bir estetisyen tarafından profesyonelce yapılırsa rahatlıkla uygulanabilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kirpiklerim Zarar Görür mü?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Doğru uygulama ve kaliteli ürünlerle kirpiklere zarar verme riski düşüktür. Uzman birinden yardım alarak güvenli bir şekilde uygulama yapılabilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Ne Kadar Süre Dayanır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "İpek kirpikler genellikle 3-4 hafta boyunca kalıcılık gösterir. Doğal kirpiklerin dökülme döngüsüne bağlı olarak bakım süreleri farklılık gösterebilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Hangi Kirpik Stilleri Tercih Edilebilir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "İpek kirpiklerde doğal, dramatik veya kedi gözü gibi farklı stiller tercih edilebilir. Uzmanınızla konuşarak size en uygun stilinizi belirleyebilirsiniz.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kimler İpek Kirpik Yaptırabilir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "İpek kirpikler hemen hemen herkese uygulanabilir. Ancak göz alerjisi veya enfeksiyon durumları olanlar için uzman bir danışmanlık önerilir.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/kas-laminasyon',
            'uniq_slug' => 'eyebrow-lamination',
            "meta_information" => [
                "title" => "Kadıköy - Kaş Laminasyonu | S Art Beauty Center",
                "description" => "Doğal ve çarpıcı kaşlar için S Art Beauty Center'da kaş laminasyonu! Uzmanlarımızla birlikte kaşlarınıza daha dolgun ve düzgün bir görünüm kazandırın.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Kaş Laminasyonu Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kaş laminasyonu, kaşların uzun süreli şekillendirilmesini sağlayan kaş bakım işlemidir. Kaşların yukarı doğru sabit kalmasını sağlarken bir yandan da kaşların taranmış ve şekilli görünmesine yardımcı olur.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kaş Laminasyonu Ağrılı mıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Hayır, kaş laminasyonu ağrısız bir işlemdir. Kaş tüyleri özel ürünlerle şekillendirilirken herhangi bir ağrı hissetmezsiniz.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kaş Laminasyonu Ne Kadar Sürer?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kaş laminasyonu işlemi genellikle 45 dakika ile 1 saat arasında tamamlanır. Hızlı ve etkili bir yöntemdir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kaş Laminasyonu Ne Kadar Fiyatlıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kaş laminasyonu işlemi çok ucuza mal olsa da, kaliteli ürünlerle yapılması için uzman danışmanlık ve tavsiye alma sürecimizden yararlanabilirsiniz.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kaş Laminasyonu Nasıl Yapılır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kaşlarınızı uzmanlarımızla birlikte tarayarak kaşlarınızı daha kaliteli ve daha çarpıcı bir şekilde şekillendirin.",
                            ]
                        ]
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/kalici-oje',
            'uniq_slug' => 'permanent-nail-polish',
            "meta_information" => [
                "title" => "Kadıköy - Kalıcı Oje Modelleri | S Art Beauty Center",
                "description" => "S Art Beauty Center'da kalıcı oje modelleriyle tırnaklarınıza şıklık katın! Geniş renk seçenekleriyle öne çıkan kalıcı oje uygulamalarımızı keşfedin. ",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Kalıcı Oje Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kalıcı oje, özel olarak formüle edilmiş oje türüdür ve UV ışığı altında sertleşir. Bu sayede tırnaklarınızda uzun süre dayanıklı bir renk ve parlaklık elde edebilirsiniz. Kalıcı oje, çatlamadan, soyulmadan ve solmadan uzun süre tırnaklarınızda kalır.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Kalıcı Oje Uygulaması Zaman Alır mı?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kalıcı oje uygulaması yaklaşık 1 saat kadar sürer. Kısa sürede parlak ve uzun süre dayanan tırnaklara sahip olursunuz.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kalıcı Ojenin Dayanıklılığı Ne Kadar?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kalıcı oje, 2 ila 3 hafta boyunca dayanabilir. Tırnak büyümesiyle birlikte yenileme işlemi gerekebilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Tırnaklara Zarar Verir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kalıcı oje, doğru teknik ve ürünlerle uygulandığında tırnaklara zarar vermez. Uzman tırnak teknisyenleri ile çalışmak önemlidir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Tırnaklara Zarar Verir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kalıcı oje, doğru teknik ve ürünlerle uygulandığında tırnaklara zarar vermez. Uzman tırnak teknisyenleri ile çalışmak önemlidir.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/keratin-bakimi',
            'uniq_slug' => 'keratin-care',
            "meta_information" => [
                "title" => "Kadıköy - Keratin Bakımı | S Art Beauty Center ",
                "description" => "Saçlarınıza özel bir dokunuş: S Art Beauty Center'da keratin bakımı ile kuru ve yıpranmış saçlarınıza derinlemesine bakım yapın.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Soğuk Spa Keratin Bakımı Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Keratin bakımı, saç sağlığını iyileştirmek için keratin proteininin gücünden yararlanan bir saç bakım şeklidir. ",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Keratin Bakımı Ne Kadar Sürer?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Keratin bakım işlemi genellikle 1.5 ila 3 saat arasında değişir. Saçın uzunluğu ve durumuna bağlı olarak değişkenlik gösterebilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Keratin Bakımı Sonrası Özel Bakım Gerekir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Evet, keratin bakımı sonrası özel şampuan ve saç bakım ürünleri kullanmak önerilir. Bu, etkinliği daha uzun süre korumanıza yardımcı olur.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Keratin Bakımı Zararlı mıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Doğru şekilde uygulandığında keratin bakımı saça zarar vermez, aksine saçları yeniler ve besler. ",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Sonuç Ne Kadar Süre Kalıcıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Keratin bakımının etkisi saç tipine ve saçın yapısına bağlı olarak değişebilir. Genellikle 2 ila 5 ay arasında kalıcılığını korur.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/kirpik-lifting',
            'uniq_slug' => 'eyelash-lifting',
            "meta_information" => [
                "title" => "Kadıköy - Kirpik Lifting | S Art Beauty Center ",
                "description" => "Gözlerinizi Ön Plana Çıkarın: Kirpik Lifting ile Doğal ve Etkileyici Bir Görünüm! Hemen randevunuzu alın! ",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Kirpik Lifting Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kirpik lifting hacimsiz ve cansız görülen kirpiklerin kökten uca güçlendirilmesini ve hacimli hale getirilerek belirginleştirilmesini sağlayan bir uygulamadır.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kirpik Lifting Ne Kadar Sürer?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kirpik lifting işlemi genellikle 45 dakika ile 1 saat arasında değişir. Hızlı ve etkili sonuçlar için kısa bir süre içinde sonuç alabilirsiniz.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kirpik Lifting İşlemi Rahatsızlık Verir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kirpik lifting işlemi genellikle acısız ve rahatsızlık vermez. Çoğu kişi işlem sırasında rahatça dinlenir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Sonuç Ne Kadar Süre Kalıcıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kirpik lifting sonucu genellikle 6 ila 8 hafta boyunca kalır. Bu süre kirpiklerinizin doğal dökülme döngüsüne bağlı olarak değişebilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Kimler Kirpik Lifting Yaptırabilir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kirpik lifting genellikle herkes için uygundur, ancak hamilelik döneminde veya bazı cilt rahatsızlıkları olanlarda öncesinde danışmanlık önerilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kirpik Lifting Sonrası Bakım Gerekir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kirpik lifting sonrası özel bir bakım gerektirmez. Ancak kirpik serumları veya besleyici yağlar kullanarak etkileyici sonucunuzun uzun süre kalmasını sağlayabilirsiniz.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/manikur-ve-pedikur',
            'uniq_slug' => 'manicure-pedicure',
            "meta_information" => [
                "title" => "Kadıköy - Manikür ve Pedikür | S Art Beauty Center ",
                "description" => "Manikür ve pedikür ile tırnaklarınızı güçlendirin ve şıklığınızı tamamlayın. Randevu için hemen arayın.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Manikür ve Pedikür Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Manikür; cildi yumuşatma, şekil verme, parlatma, cilalama, oje sürme, tırnak derisi geriye itme, tırnak diplerini ölü deriden arındırma, tırnakları törpüleme ve el masajı gibi işlemler dizisidir. Pedikürde ise ayak ve ayak tırnaklarına, manikür tedavisinde olduğu gibi aynı işlemler uygulanır.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Manikür ve Pedikür Hangi Sıklıkla Yapılmalıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Genellikle 2 ila 4 haftada bir manikür ve pedikür yaptırmak önerilir. Tırnakların ve cildin düzenli bakımı sağlıklı sonuçlar elde etmenizi sağlar.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Manikür ve Pedikür İşlemi Ne Kadar Sürer?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "İşlem süresi ellere veya ayaklara göre değişebilir. Ortalama olarak 1 saat kadar sürebilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Acı Verir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Manikür ve pedikür işlemi genellikle acısızdır. Ancak tırnak etlerinin kesilmesi veya sert cilt bölgelerinin temizlenmesi sırasında hafif bir rahatsızlık hissedebilirsiniz.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Hangi Durumlarda Tavsiye Edilir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Manikür ve pedikür, düzenli bakım ve özel günler için idealdir. Aynı zamanda tırnaklarda kırılma, çatlama veya ciltte kuruluk gibi sorunları gidermek için de uygundur.",
                            ]
                        ]
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/microblading',
            'uniq_slug' => 'microblading',
            "meta_information" => [
                "title" => "Kadıköy - Microblading | S Art Beauty Center ",
                "description" => "Microblading ile yüzünüze uygun, kalıcı ve doğal görünümlü kaşlara sahip olun. Randevunuzu hemen alın!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Microblading Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Microblading, özel bir el aleti kullanılarak kaş tüylerinin kısmen kalıcı bir boyayla elle çizildiği işlemdir. Bu yöntemle kaşlar daha dolgun ve doğal bir görünüm kazanır.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Microblading İşlemi Acı Verir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Microblading işlemi genellikle hafif bir rahatsızlık hissi yaratabilir. Ancak genellikle lokal anestezik kremler kullanılarak acı en aza indirilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Sonuç Ne Kadar Süre Kalıcıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Microblading sonucu genellikle 1 ila 2 yıl arasında kalıcı olabilir. Bu süre kaş yapısı, cilt tipi ve bakıma bağlı olarak değişebilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kimler Microblading Yaptırabilir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Genellikle herkes microblading yaptırabilir. Ancak hamilelik, cilt rahatsızlıkları veya bazı sağlık durumları varsa öncesinde uzmanla danışmanlık yapılmalıdır.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kaşlarımın Doğal Görünmesini Nasıl Sağlayabilirim?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Microblading işlemi ile uzmanlar kaş yapınıza uygun doğal bir renk ve şekil seçimi yapar. Böylece kaşlarınızın doğallığını koruyabilirsiniz.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Microblading İşlemi Sonrası Bakım Gerekir mi?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Evet, işlem sonrası belirtilen bakım talimatlarını takip etmek önemlidir. Kaşlarınızın uzun süre güzel görünmesi için bu talimatlara dikkat etmelisiniz.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/nail-art',
            'uniq_slug' => 'nail-art',
            "meta_information" => [
                "title" => "Kadıköy - Nail Art Modelleri | S Art Beauty Center ",
                "description" => "S Art Beauty Center'da tırnaklarınıza renk katın! Uzmanlarımızla birlikte nail art ile benzersiz tırnak tasarımları yaratın. Şimdi randevunuzu alın!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Nail Art Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Tırnakların farklı materyaller kullanılarak değişik renk ve figürlerde süslenmesine nail art denir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Hangi Desenler ve Süslemeler Kullanılabilir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Nail artta sınırlar yok! Çiçek desenleri, geometrik şekiller, pullar, taşlar, çıkartmalar ve daha fazlasını kullanabilirsiniz.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Ne Kadar Süre Kalıcıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Nail art tasarımları, tırnaklarınızın büyüme hızına bağlı olarak genellikle 1 ila 2 hafta arasında kalıcı olabilir.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/perma',
            'uniq_slug' => 'perming',
            "meta_information" => [
                "title" => "Kadıköy - Perma Saç Modelleri | S Art Beauty Center ",
                "description" => "Perma Saç ile Dalgalı ve Hacimli Saçlara Sahip Olun! Hemen Randevunuzu Alın ve Hayalini Kurduğunuz Saçlara Sahip Olun!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Perma Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Perma, düz veya az dalgalı saçları daha kıvırcık forma sokmak için uygulanan işlemdir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Perma İşlemi Saçı Zararlı mı Yapar?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Perma işlemi saçı bazı ölçülerde etkileyebilir. Ancak uzmanlarımız saçınızı korumak için özel ürünler kullanır ve işlem sonrası bakım önerileri sunar.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Perma Ne Kadar Süre Kalıcıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Perma sonucu saçınızın uzamasına bağlı olarak genellikle 4 ila 6 ay arasında kalıcı bir etki sağlar.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/protez-tirnak',
            'uniq_slug' => 'prosthetic-nails',
            "meta_information" => [
                "title" => "Kadıköy - Protez Tırnak Modelleri | S Art Beauty Center ",
                "description" => "S Art Beauty Center'da protez tırnak modelleri ile tırnaklarınızda benzersiz bir tarz yaratın. Uzmanlarımızla birlikte özel tasarım tırnaklara sahip olun.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Protez Tırnak Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Protez tırnaklar, tırnakların uzatılması, şekillendirilmesi ve güçlendirilmesi için kullanılan yapay tırnaklardır.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Protez Tırnaklar Gerçekçi mi Durur?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Evet, protez tırnaklar doğal tırnak görünümüne uygun olarak hazırlanır ve gerçekçi bir görünüm sunar.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Protez Tırnaklar Ne Kadar Süre Kalıcıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Protez tırnaklar genellikle 2 ila 4 hafta arasında kalıcıdır. Süre, tırnak büyüme hızına bağlı olarak değişebilir.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/rofle',
            'uniq_slug' => 'hair-color-highlights',
            "meta_information" => [
                "title" => "Kadıköy - Röfle Saç Modelleri | S Art Beauty Center ",
                "description" => "Röfle saç modelleri için S Art Beauty Center'da doğal ve çekici görünüme kavuşun. Hemen randevunuzu alın!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Röfle Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Röfle, saç tutamlarının simetrik olarak saçların mevcut renginden birkaç ton açık renkte boyanmasıyla yapılan bir işlemdir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Röfle Saçı Zararlı mı Yapar?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Uzmanlarımız özenle röfle işlemi yapar ve saç sağlığına dikkat eder. Doğru ürünler ve teknikler ile zarar en aza indirilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Röfle Kimlere Uygundur?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Röfle tekniği genellikle her saç tipine uygundur. Saç durumunuz ve istekleriniz doğrultusunda uzmanlarımız size en uygun renk seçeneklerini sunar.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/sac-boyasi',
            'uniq_slug' => 'hair-dye',
            "meta_information" => [
                "title" => "Kadıköy - Saç Boyası Modelleri | S Art Beauty Center ",
                "description" => "Saçlarınız için S Art Beauty Center'da çeşitli saç boyası seçenekleri! Hemen randevunuzu oluşturun.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Saç Boyası Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Saç boyası, saçın rengini değiştirmek veya canlandırmak için kullanılan kimyasal bir üründür. Geniş renk skalası ile farklı stiller yaratmanıza olanak sağlar.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Saç Boyası Hangi Sıklıkla Yapılmalıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Saç boyası süresi saç tipi ve rengine bağlıdır. Genellikle 4 ila 8 hafta arasında tazelenmesi önerilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Saç Boyası Zararlı mıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Uzmanlar tarafından doğru ürünlerle ve yöntemlerle yapıldığında saç boyası zararlı değildir. Saç sağlığına dikkat edilmelidir.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/dip-boyasi',
            'uniq_slug' => 'hair-dip-dye',
            "meta_information" => [
                "title" => "Kadıköy - Dip Boya Uygulaması | S Art Beauty Center ",
                "description" => "Dip boya uygulaması ile S Art Beauty Center'da saçlarınıza canlılık katın. Uzman ellere güvenin, doğal ve çekici bir görünüm elde edin. ",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Dip Boyası Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Saçların diplerine yapılan boyama işlemi dip boyası olarak adlandırılır. Uzmanlarımız tarafından hazırlanan saç boyası, doğal rengi tamamen kapatacak şekilde sürülür. İdeal süre beklendikten sonra saçlar yıkanır ve gerek görülmesi halinde cila uygulaması yapılabilir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Dip Boyası Nasıl Uygulanır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Dip boyası genellikle kök bölgesine uygulanır. Uzmanlarımız doğru renk ve teknik ile kökleri tazeleyerek doğal bir görünüm sağlar.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Dip Boyası Hangi Sıklıkla Yapılmalıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Saç uzama hızına bağlı olarak ortalama 4 ila 6 haftada bir saç dip boyası tazelenmesi önerilir.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/sac-kesim',
            'uniq_slug' => 'hair-cut',
            "meta_information" => [
                "title" => "Kadıköy - Saç Kesim Modelleri | S Art Beauty Center ",
                "description" => "Tarzınızı ön plana çıkarın! S Art Beauty Center'da saç kesimiyle benzersiz bir görünüm elde edin. Randevunuzu şimdi oluşturun!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Saç Kesim Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => " Saç kesimi, yüze en uygun modelin tespit edilerek saçta yapılan farklı kesim işlemlerinin tümüdür.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Hangi Saç Kesimi Stili Bana Uygun Olur?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Uzmanlarımız, saç tipiniz, yüz hatlarınız ve tarzınıza uygun saç kesimi stilini belirlemek için size rehberlik eder.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kaç Ayda Bir Saç Kesimi Yapılmalıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Saç büyüme hızınıza bağlı olarak ortalama 6 ila 8 haftada bir saç kesimi önerilir.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/sac-kaynak',
            'uniq_slug' => 'hair-extension',
            "meta_information" => [
                "title" => "Kadıköy - Saç Kaynak Uygulaması | S Art Beauty Center ",
                "description" => "Saçlarınıza özel bir dokunuş! Saç kaynak uygulaması ile istediğiniz tarzı yakalayın. Randevu için hemen arayın.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Saç Kaynak Nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kaynak saç, kısa saçları uzatmak veya seyrek saçları daha dolgun göstermek için kullanılan bir saç uzatma yöntemi. Saç kaynağı gerçek saçlardan yapılabildiği gibi yapay saçlardan da elde edilebilir.  ",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Kaynak Saç Ne İle Yıkanır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Kaynak saçları yıkarken en önemli husus suyun sıcaklık ayarına dikkat etmektir. Ilık su kullanarak saçın zarar görmesini önleyebilirsiniz. Yıkama sırasında şampuanı köklerden uzak tutmak ve kaynak noktalarına fazla temas etmemek, saçın sağlığını korumaya yardımcı olur.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Saç Kaynak Çeşitleri Nelerdir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Saç kaynak çeşitleri arasında mikro kaynak, ince saç telleriyle doğal bir görünüm sağlar ve keratin kaynak, keratin bazlı yapıştırıcılarla saça eklenen uzun ömürlü bir yöntemdir.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'tk',
            'slug' => 'hizmetlerimiz/seker-agda',
            'uniq_slug' => 'wax-application',
            "meta_information" => [
                "title" => "Kadıköy - Şeker Ağda Uygulaması | S Art Beauty Center ",
                "description" => "Şeker ağda uygulaması ile hassas ve doğal bir tüy alma deneyimi yaşayın. Randevunuzu hemen alın!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "1. Şeker Ağda nedir?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Şeker Ağda, tamamen doğal ve hypoalerjenik bir şeker ağda türüdür. Tüyleri kökünden çeker, cildi besler ve pürüzsüz hale getirir.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Diğer şeker ağda yöntemlerinden nasıl farklıdır?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Şeker Ağda, diğer yöntemlere göre daha az acı verir, daha az tahrişe yol açar ve cildi daha az gerer.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Şeker Ağdanın etkileri ne kadar sürer?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Genellikle sonuçlar 3 ila 6 hafta boyunca kalıcıdır. Bu süre cilt tipinize bağlı olarak değişebilir.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => "tk",
            'slug' => 'politikalarimiz',
            'uniq_slug' => 'policies',
            "meta_information" => [
                "title" => "Gizlilik Politikası, Kullanım Şartları ve Çerez Politikası",
                "description" => "Gizlilik Politikası, Kullanım Şartları ve Çerez Politikası",
            ]
        ],

        // TODO: -------------------- RU ----------------------------- //
        [
            'lang' => 'ru', 'slug' => 'uslugi',
            'uniq_slug' => 'services', "meta_information" => [
                "title" => "Наши услуги | S Art Beauty Center",
                "description" => "Откройте для себя наши услуги в S Art Beauty Center в Кадыкёй. Посетите нас для ухода за кожей, эпиляции, дизайна прически и многого другого.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => '/',
            'uniq_slug' => 'index',
            "meta_information" => [
                "title" => "Кадыкёй - Салон красоты | S Art Beauty Center",
                "description" => "В S Art Beauty Center мы предлагаем широкий спектр услуг: от лазерной эпиляции до ухода за ногтями, а также от ухода за кожей до ухода за волосами. ",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'o-nas',
            'uniq_slug' => 'about-us',
            "meta_information" => [
                "title" => "О нас | S Art Beauty Center",
                "description" => "В S Art Beauty мы предоставляем нашим клиентам наилучший сервис благодаря нашей команде экспертов и широкому спектру услуг.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'kontakty',
            'uniq_slug' => 'contact-us',
            "meta_information" => [
                "title" => "Кадыкёй - Свяжитесь с нами | S Art Beauty Center",
                "description" => "Вы можете отправить нам сообщение через нашу контактную страницу, чтобы запросить встречу или получить больше информации о наших услугах.",
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/udaleniye-volos-lazerom',
            'uniq_slug' => 'ice-laser-hair-removal',
            "meta_information" => [
                "title" => "Кадыкёй - Лазерная эпиляция | S Art Beauty Center",
                "description" => "Попрощайтесь с нежелательными волосами с лазерной эпиляцией в S Art Beauty Center! Добейтесь гладкой кожи эффективно.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое сахарная депиляция?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Сахарная депиляция - это полностью натуральный и гипоаллергенный вид депиляции. Она удаляет волосы у корней, питает кожу и делает ее гладкой.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " В чем разница между сахарной депиляцией и другими методами депиляции?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Сахарная депиляция меньше болезненна, вызывает меньше раздражения и растяжения кожи по сравнению с другими методами.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Как долго длится эффект сахарной депиляции?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Обычно результаты держатся в течение 3-6 недель. Этот срок может изменяться в зависимости от типа кожи.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Может быть боль при сахарной депиляции?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "При профессиональном применении сахарной депиляции боль минимальна. Эффект можно регулировать в зависимости от чувствительности кожи.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Какие услуги сахарной депиляции предоставляются?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Мы предлагаем услуги сахарной депиляции для ног, рук, лица и тела. Мы также предоставляем услуги по уходу за кожей.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/selulitniy-massazh',
            'uniq_slug' => 'cellulite-massage',
            "meta_information" => [
                "title" => "G5 антицеллюлитный массаж | S Art Beauty Center",
                "description" => "Хотите избавиться от целлюлита? В S Art Beauty Center вы можете надежно и эффективно уменьшить проявление целлюлита с помощью антицеллюлитного массажа G5!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что тако массаж G5?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Массаж G5 — это приложение, которое применяется с помощью специального устройства ритмического массажа , которое обеспечивает подтяжку с помощью быстрых вибраций и имеет эффект удаления целлюлита. G5, который особенно используется при уменьшение целлюлита и локальном истончении, также очень эффективен для удаления отеков, накопленных в мышцах, а также для лечения спазмов.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "В каких областях применяется массаж G5?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => " Массаж G5, который широко используется сегодня, является предпочтительным методом как в области здоровья, так и с эстетической точки зрения. Применяемые вибрации помогают сжигать лишние жиры в организме и ускоряют кровообращение. В результате массаж G5 делает людей здоровее. Это связано с тем, что быстрый обмен веществ оказывает расслабляющее действие на организм. С помощью массажа G5, который устраняет избыточное локальное накопление жира и полностью устраняет целлюлит, вызывающий нежелательный внешний вид, люди также могут достичь желаемого эстетического вида за счет более подтянутого тела.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как применяется антицеллюлитный массаж G5?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Массаж G5 можно применять ко всем частям тела. Эта процедура в основном предпочтительна в таких областях, как талия, бедра и руки. Во время этого массажа, проводимого специалистами, сначала на область наносится масло, а затем запускается процесс. Вибрации, применяемые на зону проведения процедуры, ускоряют кровоток и облегчают сжигание жира.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Каковы риски и побочные эффекты массажа G5?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Массаж G5 – чрезвычайно полезная процедура. Люди очень счастливы результатами этой процедуры. Благодаря вибрациям, подаваемым во время процедуры, активизируются все клетки, в результате чего функции организма начинают выполнять свои задачи. Благодаря этой особенности массаж G5 не имеет побочных эффектов и не несет никаких рисков.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/roll-shape',
            'uniq_slug' => 'roll-shape',
            "meta_information" => [
                "title" => "Кадыкёй - Ажыбадем Roll Shape | S Art Beauty Center",
                "description" => "Rollshape сочетает традиционный восточный массаж с современной технологией, чтобы улучшить кровообращение и уменьшить целлюлит.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Применение ROLL SHAPE?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "ROLL SHAPE разработан для выполнения массажа тела с использованием инфракрасной технологии. Эта процедура направлена на устранение целлюлита и достижение стройной формы тела. При регулярном использовании ROLL SHAPE заметно помогает устранять целлюлит, укреплять кожу и уменьшать дефекты.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Ощущается ли боль при использовании ROLL SHAPE?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "ROLL SHAPE - это безболезненная процедура.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как часто рекомендуется использовать Roll Shape?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Продолжительность использования может варьироваться в зависимости от личных предпочтений и желаемых результатов. Однако, обычно рекомендуется использовать его несколько раз в неделю на протяжении определенного времени.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/keratinovoye-vypryamleniye-volos',
            'uniq_slug' => 'brazillian-blow-dry',
            "meta_information" => [
                "title" => "Кадыкёй - Бразильское выпрямление | S Art Beauty Center",
                "description" => "Побалуйте свои волосы с помощью бразильского выпрямления! Укрепите свои волосы и добейтесь более здорового вида с нашей командой экспертов.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что тако бразильское кератиновое выпрямление волос?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Процедура кератиновое выпрямление волос выполняется для выпрямления волос. Этот процесс осуществляется путем нанесения на волосы слоя белка, называемого кератином, а затем этот слой закрепляется на волосах с помощью тепла.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Когда будет виден результат?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => " Результат будет виден сразу после обработки. Волосы станут прямыми, здоровыми, гладкими, блестящими и шелковистыми.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Вредит ли кератиновое выпрямление волосам?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Прежде всего, она полезна, поскольку включает добавление кератина, который очень полезен для волос. Она придает вашим волосам силу и блеск.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Возможно ли кератиновое выпрямление дома?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Мастера не рекомендуют проводить эту процедуру дома.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/uhod-za-kozhey',
            'uniq_slug' => 'skin-care',
            "meta_information" => [
                "title" => "Кадыкёй - Уход за кожей | S Art Beauty Center",
                "description" => "Омолодите свою кожу с профессиональным уходом за кожей в S Art Beauty Center! Обновите свою кожу с помощью наших опытных косметологов.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое Уход за кожей лица?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Это комплексный процесс ухода, выполняемый обученными специалистами с использованием профессиональных продуктов для решения проблемы и в соответствии с потребностями кожи.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "В чем преимущества ухода за кожей лица?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => " Уход за кожей, проведенный умелыми руками с использованием правильных препаратов обеспечивает устранение или осветление проблемных участков с акне, осветление прыщиков, лифтинга, сужения пор, увлажнения, сияния и разглаживания кожи.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Чем отличается уход за кожей дома от профессионального ухода?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "У нас используются продукты с высокой концентрацией, которые должны применяться под наблюдением специалиста, чтобы избежать нежелательных эффектов и добиться заметных результатов. А еще во время процедуры есть прекрасная возможность расслабиться и отдохнуть.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как часто следует делать профессиональный уход за кожей?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Цикл обновления кожи составляет примерно 30 дней. В течение этого времени образуются новые клетки, а некоторые клетки умирают. Чтобы избавиться от этой мертвой кожи, человек может проходить профессиональный уход за кожей раз в месяц.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/diplayner',
            'uniq_slug' => 'deepliner',
            "meta_information" => [
                "title" => "Кадыкёй - Подводка для глаз | S Art Beauty Center",
                "description" => "Постоянное прикосновение к вашим глазам: добейтесь идеального вида с помощью перманентной подводки и диплайнера в S Art Beauty Center!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое Межресничный контур века?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "межресничный контур верхнего века — краситель вводится между ресницами, что делает образ более ярким; межресничная стрелка — прорисовывается линия роста ресниц, которая продлевается за границу век небольшой тонкой линией.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Насколько сложно наносить дипломата?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Сначала нанесение дипломата может потребовать некоторой практики, но вы быстро научитесь. С правильной кистью и терпением вы можете достичь отличных результатов.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Какой цвет дипломата мне выбрать?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Черный дипломат является классическим и выразительным выбором. Однако, в зависимости от цвета ваших глаз и стиля одежды, вы также можете использовать цветные дипломаты для создания креативного образа.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как мне выбрать подходящий дипломат для формы моих глаз?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Чтобы выбрать стиль дипломата, подходящий для формы ваших глаз, вы можете получить советы от визажистов или посмотреть онлайн-рекомендации. Важно найти технику, которая лучше всего подчеркивает структуру ваших глаз.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/permanentniy-makiyazh-gub',
            'uniq_slug' => 'lip-coloring',
            "meta_information" => [
                "title" => "Кадыкёй - Окрашивание губ | S Art Beauty Center",
                "description" => "Придайте губам естественный и привлекательный цвет с помощью окрашивания. Запишитесь на прием для длительной красоты!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое Пудровое напыление губ?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Окраска губ - это процедура красоты, которая выделяет контур и цвет ваших естественных губ. Она помогает оживить цвет губ, который со временем может выцвететь или стать бледным, а также придает губам более объемный и молодой вид.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Болит ли окрашивание губ?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Вы можете почувствовать легкое беспокойство во время процедуры, но обычно это не вызывает боли. Перед процедурой местное обезболивающее средство может обеспечить комфортный опыт.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как принимать решение о выборе цвета?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Профессиональный косметолог поможет вам выбрать наиболее подходящий цвет, учитывая ваш тип кожи и ваши личные предпочтения.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/svadebnaya-prichoska',
            'uniq_slug' => 'bridal-hair',
            "meta_information" => [
                "title" => "Кадыкёй - Свадебные прически | S Art Beauty Center",
                "description" => "Выглядите великолепно в свой особенный день с красивыми свадебными прическами! Откройте для себя свою мечту о свадебной прическе с нашими экспертами.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Свадебная прическа?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "это главная часть в создании свадебного образа она должна сочетаться с платьем невесты, фатой и аксессуарами для волос (декоративными шпильками, диадемой, короной, живыми цветами и т. п) для того, чтобы образ смотрелся гармонично.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Какой стиль свадебного платья подходит для гребня невесты?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Гребень невесты подходит под любой стиль свадебных платьев. Он может быть прекрасным дополнением как к платьям в стиле рыбки, принцессы, так и к простым свадебным платьям.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Насколько долго держится гребень невесты?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Дизайн гребня невесты, выполненный профессионалами, может сохраняться в идеальном состоянии весь день свадьбы.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/narashivaniye-resnits',
            'uniq_slug' => 'silk-eyelash',
            "meta_information" => [
                "title" => "Кадыкёй - Шелковые ресницы | S Art Beauty Center",
                "description" => "Добейтесь долговечного и естественного вида с шелковыми ресницами в S Art Beauty Center. Придайте красоту своей внешности!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое Наращивание ресниц?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Наращивание ресниц – это популярная косметическая процедура удлинения и увеличения объема натуральных (природных) ресниц, путем приклеивания синтетических волосков специальным клеем. Выполнять процедуру может косметолог, визажист или мастер-лашмейкер (lashmaker).",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Связана ли процедура наращивания шелковых ресниц с болями?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Процедура наращивания шелковых ресниц обычно безболезненна и комфортна. При профессиональном выполнении специалистом, её можно провести легко.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Могут ли ресницы пострадать?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "С правильным выполнением и использованием качественных материалов риск повреждения ресниц минимален. Процедуру можно безопасно проводить, получив помощь от специалиста.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/laminirovaniye-brovey',
            'uniq_slug' => 'eyebrow-lamination',
            "meta_information" => [
                "title" => "Кадыкёй - Ламинирование бровей | S Art Beauty Center",
                "description" => "Для естественных и выразительных бровей попробуйте ламинирование бровей в S Art Beauty Center! Добейтесь более густых и четких бровей с нашими экспертами.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое ламинирование бровей?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Ламинирование бровей - это процедура по уходу за бровями, которая обеспечивает их длительную укладку. Она помогает бровям оставаться зафиксированными в направлении вверх, а также способствует их упорядоченному и формированному виду.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Болезненно ли ламинирование бровей?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Нет, ламинирование бровей обычно болезненным не является. Во время процедуры брови формируются с использованием специальных средств, и вы не ощутите никаких болевых ощущений.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Сколько времени занимает ламинирование бровей?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Процедура ламинирования бровей, как правило, занимает от 45 минут до 1 часа. Это быстрый и эффективный метод.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/permanentniy-lak-dlya-nogtey',
            'uniq_slug' => 'permanent-nail-polish',
            "meta_information" => [
                "title" => "Кадыкёй - Перманентный лак | S Art Beauty Center",
                "description" => "Ногти выглядят элегантно с перманентным лаком в S Art Beauty Center! Откройте для себя наши приложения с широким выбором цветов.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое перманентный лак?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Перманентный маникюр – это процедура, представляющая собой нанесения на ногти особо стойкого покрытия. ",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "В чем разница лака и гель лака?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Гель-лак: не имеет запаха. Лак: за счет того, что лак для ногтей содержит такие ингредиентов как: полимеры, растворители, пластификаторы, пигменты, у них довольно-таки специфический запах. Гель-лак: спиливание фрезой или размачивание в жидкости для снятия гель-лака. Лак: жидкостью для снятия лака (ацетон)",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Что значит Полуперманентный маникюр?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Понятие «полуперманентный маникюр» обычно относится к маникюру с долговечная эмаль , независимо от того, наносится ли она на искусственные ногти – гель или акрил – или наносится непосредственно на натуральный ноготь.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/keratinoviy-ukhod',
            'uniq_slug' => 'keratin-care',
            "meta_information" => [
                "title" => "Кадыкёй - Кератиновое выпрямление | S Art Beauty Center",
                "description" => "Особое прикосновение к вашим волосам: обеспечьте глубокий уход для ваших сухих и поврежденных волос с помощью кератинового лечения в S Art Beauty Center.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое SPA Кератиновый Уход?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Кератиновый уход - это вид ухода за волосами, который использует силу кератинового белка для улучшения здоровья волос.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Для кого подходит кератиновый уход?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Кератиновый уход обычно подходит для всех, у кого сухие, поврежденные, безжизненные волосы. Рекомендуется консультация специалиста.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Сколько времени занимает кератиновая процедура?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Процедура кератинового ухода обычно занимает от 1,5 до 3 часов. Это может варьировать в зависимости от длины и состояния волос.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/lifting-resnits',
            'uniq_slug' => 'eyelash-lifting',
            "meta_information" => [
                "title" => "Кадыкёй - Лифтинг ресниц | S Art Beauty Center",
                "description" => "Подчеркните свои глаза: добейтесь естественного и потрясающего вида с помощью лифтинга ресниц! Запишитесь на прием прямо сейчас!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое поднятие ресниц?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "ламинирование ресниц- это процедура, которая укрепляет ресницы от корней до кончиков, делая их объемными и выразительными.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как долго длится процедура поднятия ресниц?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Процедура поднятия ресниц обычно занимает от 45 минут до 1 часа. Вы можете получить быстрые и эффективные результаты всего за короткое время.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Мешает ли процедура поднятия ресниц?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Процедура поднятия ресниц обычно безболезненна и не вызывает дискомфорта. Большинство людей чувствуют себя комфортно во время процедуры.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как долго сохраняются результаты поднятия ресниц?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Обычно результаты поднятия ресниц сохраняются в течение 6-8 недель. Этот период может варьировать в зависимости от естественного цикла выпадения ресниц.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/manikyur-pedikyur',
            'uniq_slug' => 'manicure-pedicure',
            "meta_information" => [
                "title" => "Кадыкёй - Маникюр и педикюр | S Art Beauty Center",
                "description" => "Укрепите свои ногти и завершите свою элегантность с маникюром и педикюром. Позвоните прямо сейчас, чтобы записаться на прием.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое маникюр и педикюр?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Маникюр включает в себя процедуры, такие как умягчение кожи, придание формы, полировка, нанесение лака, отодвигание кутикулы, удаление мертвой кожи. Пилочная обработка ногтей и массаж рук. В педикюре применяются те же процедуры к ногам и ногтям на ногах, что и в маникюре.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как часто следует делать маникюр и педикюр?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Обычно рекомендуется делать маникюр и педикюр каждые 2-4 недели. Регулярный уход за ногтями и кожей обеспечивает здоровые результаты.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Сколько времени занимает процедура маникюра и педикюра?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Время процедуры может варьироваться в зависимости от состояния рук и ног. В среднем, это может занять около 1 часа.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/microblading',
            'uniq_slug' => 'microblading',
            "meta_information" => [
                "title" => "Кадыкёй - Микроблейдинг | S Art Beauty Center",
                "description" => "Добейтесь постоянных и естественно выглядящих бровей, подходящих к вашему лицу, с помощью микроблейдинга. Запишитесь на прием прямо сейчас!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое микроблейдинг?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Микроблейдинг - это процесс, при котором брови рисуются вручную полуперманентным пигментом с помощью специального ручного инструмента. Этот метод придает бровям более плотный и естественный вид.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Процедура микроблейдинга болезненная?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Процедура микроблейдинга обычно может вызвать легкое чувство дискомфорта. Однако обычно с использованием местных обезболивающих кремов болевые ощущения минимизируются.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Насколько долгим является результат процедуры микроблейдинга?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Результат микроблейдинга обычно может сохраняться от 1 до 2 лет. Этот срок может изменяться в зависимости от структуры бровей, типа кожи и ухода за ними.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/dizayn-nogtey',
            'uniq_slug' => 'nail-art',
            "meta_information" => [
                "title" => "Кадыкёй - Дизайн ногтей | S Art Beauty Center",
                "description" => "Придайте цвет своим ногтям в S Art Beauty Center! Создавайте уникальные дизайны ногтей с помощью наших экспертов. Запишитесь на прием прямо сейчас!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое nail art?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "это украшение ногтей с использованием различных материалов для создания уникальных цветовых решений и рисунков.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Какие узоры и украшения могут использоваться?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "В nail art нет ограничений! Вы можете использовать цветочные узоры, геометрические фигуры, стразы, камни, наклейки и многое другое.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Насколько долговечны дизайны nail art?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Дизайны nail art, как правило, могут сохраняться от 1 до 2 недель в зависимости от скорости роста ваших ногтей.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/permanentnaya-zavivka-volos',
            'uniq_slug' => 'perming',
            "meta_information" => [
                "title" => "Кадыкёй - Химическая завивка | S Art Beauty Center",
                "description" => "Добейтесь волнистых и объемных волос с помощью химической завивки! Запишитесь на прием прямо сейчас и получите волосы своей мечты!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое перманентная завивка?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "завивка - это процедура, применяемая для придания более кудрявой формы прямым или слегка волнистым волосам.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Наносит ли процедура перманентной завивки волосам вред?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Процедура перманентной завивки может повлиять на ваши волосы в определенной степени. Однако наши специалисты используют специальные средства для защиты ваших волос и предоставляют рекомендации по уходу после процедуры.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как долго длится эффект перманентной завивки?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Обычно результаты перманентной завивки сохраняются в течение 4-6 месяцев в зависимости от скорости роста ваших волос.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/protezirovaniye-nogtey',
            'uniq_slug' => 'prosthetic-nails',
            "meta_information" => [
                "title" => "Кадыкёй - Протезирование ногтей | S Art Beauty Center",
                "description" => "Создайте уникальный стиль для своих ногтей с протезированием ногтей в S Art Beauty Center. Добейтесь индивидуально разработанных ногтей с нашими экспертами.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое протезирование ногтей?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Наращенные ногти используются для удлинения, формирования и укрепления натуральных ногтей.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Протезы ногтей выглядят естественно?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Да, протезы ногтей изготавливаются, чтобы соответствовать естественному виду ногтей и иметь реалистичный вид.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как долго продержатся протезы ногтей?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Протезы ногтей, как правило, остаются на ногтях от 2 до 4 недель, в зависимости от скорости роста ваших ногтей.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/melirovaniye',
            'uniq_slug' => 'hair-color-highlights',
            "meta_information" => [
                "title" => "Кадыкёй - Мелирование | S Art Beauty Center",
                "description" => "Добейтесь естественного и привлекательного вида с мелированием в S Art Beauty Center. Запишитесь на прием прямо сейчас!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое мелирование?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Рельефное Окрашивание Волос - это процесс, при котором пряди волос окрашиваются симметрично на несколько тонов светлее существующего цвета волос.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Мелирование вредно для волос?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Наши специалисты бережно выполняют мелирование и следят за здоровьем ваших волос. Правильные продукты и техники позволяют минимизировать вред.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Для кого подходит мелирование?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Техника мелирования обычно подходит для всех типов волос. Наши специалисты предложат вам подходящие оттенки в соответствии с состоянием ваших волос и вашими пожеланиями.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/okrashivaniye-volos',
            'uniq_slug' => 'hair-dye',
            "meta_information" => [
                "title" => "Кадыкёй - Окрашивание волос | S Art Beauty Center",
                "description" => "Различные варианты окрашивания волос для ваших волос в S Art Beauty Center! Запишитесь на прием прямо сейчас.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое краска для волос?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Краска для волос - это химический продукт, используемый для изменения цвета волос или его освежения. Она предоставляет широкий выбор цветов для создания различных стилей.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Вредна ли краска для волос?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Краска для волос не вредна, если ее наносить правильными продуктами и методами. Но следует ухаживать за здоровьем волос.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как выбрать цвет, соответствующий моему натуральному цвету волос?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Специалисты S Art Beauty Center помогут вам выбрать цвет, который соответствует вашему натуральному цвету волос.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/okrashivaniye-dip-dye',
            'uniq_slug' => 'hair-dip-dye',
            "meta_information" => [
                "title" => "Кадыкёй - Окрашивание корней | S Art Beauty Center",
                "description" => "Придайте живость волосам с окрашиванием корней в S Art Beauty Center. Доверьтесь нашим экспертам для естественного и привлекательного вида.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое краска для волос на корнях?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Окрашивание корней — обязательная процедура для тех девушек, которые полностью изменили цвет волос. Отросшая прикорневая зона смотрится непривлекательно, способна испортить внешний вид идеально уложенной прически. Регулярную коррекцию корней лучше делать в салоне красоты под чутким руководством профессионала.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => " Как применять краску для волос на корнях?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Обычно краску для волос наносят на корни волос. Наши специалисты подберут правильный цвет и технику, чтобы обеспечить натуральный вид.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как часто следует использовать краску для волос на корнях?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Обычно рекомендуется обновление цвета корней каждые 4-6 недель, в зависимости от скорости роста ваших волос.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/strizhka',
            'uniq_slug' => 'hair-cut',
            "meta_information" => [
                "title" => "Кадыкёй - Стрижка | S Art Beauty Center",
                "description" => "Подчеркните свой стиль! Добейтесь уникального вида с помощью стрижки в S Art Beauty Center. Запишитесь на прием прямо сейчас!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Какой стиль стрижки подойдет мне?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Наши эксперты помогут вам выбрать стиль стрижки, который подходит именно вам, учитывая ваш тип волос, форму лица и стиль.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как часто следует делать стрижку волос?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Рекомендуется делать стрижку волос примерно каждые 6-8 недель, в зависимости от скорости роста ваших волос.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Подходит ли короткая стрижка?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Наши эксперты оценят, подходит ли короткая стрижка вам, учитывая ваш тип волос и форму лица.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/narashivaniye-volos',
            'uniq_slug' => 'hair-extension',
            "meta_information" => [
                "title" => "Кадыкёй - Наращивание волос | S Art Beauty Center",
                "description" => "Особое прикосновение к вашим волосам! Добейтесь желаемого стиля с помощью наращивания волос. Позвоните прямо сейчас, чтобы записаться на прием.",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Как мыть наращенные волосы?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "При мытье наращенных волос температура воды является важнейшим фактором.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Какой метод наращивания волос наиболее подходит?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Наши эксперты порекомендуют вам наиболее подходящий метод наращивания волос, учитывая ваш тип волос, желаемую длину и структуру ваших волос.Использование теплой воды помогает предотвратить повреждение волос. Кроме того, во время мытья избегайте нанесения шампуня непосредственно на корни и места крепления, чтобы сохранить здоровье волос.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Какие бывают виды наращивания волос?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Существуют такие виды наращивания волос, как микронаращивание, которое обеспечивает естественный вид благодаря тонким прядям, и кератиновое наращивание, использующее кератиновые клеи для долговременного результата.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => 'ru',
            'slug' => 'uslugi/shugaring',
            'uniq_slug' => 'wax-application',
            "meta_information" => [
                "title" => "Кадыкёй - Ваксинг | S Art Beauty Center",
                "description" => "Испытайте гладкость кожи без волос с профессиональными услугами ваксинга в S Art Beauty Center. Запишитесь на прием прямо сейчас!",
                "snippets" => [
                    "faqs" => [
                        [
                            "@type" => "Question",
                            "name" => "Что такое сахарная депиляция?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Сахарная депиляция - это полностью натуральный и гипоаллергенный вид депиляции. Она удаляет волосы у корней, питает кожу и делает ее гладкой.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "В чем разница между сахарной депиляцией и другими методами депиляции?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Сахарная депиляция меньше болезненна, вызывает меньше раздражения и растяжения кожи по сравнению с другими методами.",
                            ]
                        ],
                        [
                            "@type" => "Question",
                            "name" => "Как долго длится эффект сахарной депиляции?",
                            "acceptedAnswer" => [
                                "type" => "Answer",
                                "text" => "Обычно результаты держатся в течение 3-6 недель. Этот срок может изменяться в зависимости от типа кожи.",
                            ]
                        ],
                    ]
                ],
            ]
        ],
        [
            'lang' => "ru",
            'slug' => 'politiki',
            'uniq_slug' => 'policies',
            "meta_information" => [
                "title" => "Политика конфиденциальности, Условия использования и Политика использования файлов cookie",
                "description" => "Политика конфиденциальности, Условия использования и Политика использования файлов cookie",
            ]
        ],
    ];

    public function run(): void
    {
        try {
            collect($this->routes)->each(function ($route) {
                $model = new Routes();
                $model->slug = $route['slug'];
                $model->amp = 0;
                $model->is_active = 1;
                $model->uniq_slug = $route['uniq_slug'];
                $model->meta_information = [
                    'title' => $route['meta_information']['title'],
                    'description' => $route['meta_information']['description'],
                    'snippets' => $route['meta_information']['snippets'] ?? [],
                ];
                $model->lang = $route['lang'];
                $model->save();
            });
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
