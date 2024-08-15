<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>@yield('title', settings('seo')->title)</title>
    {{-- Title deki icon resmi --}}
    <link rel="icon" href="{{ asset('images/nur-art-logos/nur-art-logo-06.png') }}" type="image/x-icon" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="@yield('description', settings('seo')->description)">

    @isset($route)
        <link rel="canonical" href="{{ uniqRt($route->uniq_slug) }}" />
        @foreach (config('routes')->where('uniq_slug', $route->uniq_slug)->where('id', '!=', $route->id) as $item)
<link rel="alternate" href="{{ langRt($item->lang, $item->uniq_slug) }}" hreflang="{{ $item->lang }}" />
@endforeach
@endisset

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/templete.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="/css/skin/skin-1.css">
    <!--font family-->

    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="/plugins/revolution/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/plugins/revolution/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/plugins/revolution/revolution/css/navigation.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Revolution Navigation Style -->

    <!-- Rich Snippets -->
    {!! $snippets ?? null !!}

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PTRPHW37');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>

        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTRPHW37" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- header -->
        <header class="site-header header mo-left">
            <div class="top-bar bg-secondary text-white">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="dlab-topbar-left">
                            {{-- <ul>
                                <li><i class="fa fa-phone m-r5"></i> <a href="https://api.whatsapp.com/send?phone=99365675732" target="_blank" title="@lang('header.whatsapp_line')" rel="nofollow">@lang('header.contact_us_section1_subtitle3_cont_academy')</a></li>
                                <li><i class="fa fa-map-marker m-r5"></i><a href="https://goo.gl/maps/MLkCjkQovNnJvqrw6" target="_blank" title="location" rel="nofollow">@lang('header.contact_us_section1_subtitle1_cont_academy')</a></li>
                            </ul> --}}
                        </div>
                        <div class="dlab-topbar-right topbar-social">
                            <ul>
                                <li><a target="_blank" href="{{ settings('social-media')->facebook->href ?? '#' }}" class="site-button-link facebook hover" rel="nofollow" title="{{ settings('social-media')->facebook->alt ?? '#' }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="{{ settings('social-media')->whatsapp->href ?? '#' }}" class="site-button-link whatsapp hover" rel="nofollow" title="{{ settings('social-media')->whatsapp->alt ?? '#' }}"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a target="_blank" href="{{ settings('social-media')->instagram->href ?? '#' }}" class="site-button-link instagram hover" rel="nofollow" title="{{ settings('social-media')->instagram->alt ?? '#' }}"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- main header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container clearfix">
                        <!-- website logo -->
                        <div class="logo-header mostion">
                            <a href="{{ route('route', ['/']) }}" class="dez-page" title="{{ settings('footer')->sart }}"><img class="logo-img" src="{{ asset(settings('logos')->logo->href) }}" alt="{{ settings('logos')->logo->alt }}"></a>
                        </div>
                        <!-- nav toggle button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <!-- MENÜ START -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="nav navbar-nav">
                                <!-- Anasayfa -->
                                <li class="@if (isset($route) && $route['uniq_slug'] == 'index') active @endif"><a href="{{ route('route', ['/']) }}">@lang('header.home')</a></li>
                                <!-- Biz Hakda -->
                                <li class="@if (isset($route) && $route['uniq_slug'] == 'about-us') active @endif"><a href="{{ uniqRt('about-us') }}" class="dez-page" title="@lang('header.about_us')">@lang('header.about_us')</a></li>
                                <!-- Sapaklarymyz -->
                                   <li class="@if (isset($route) && in_array($route['uniq_slug'], $educationSlugs ?? [])) active @endif">
                                    <a href="#" onclick="toggleSubMenu(event, 'sub-menu-3')" title="@lang('header.sart_official_center_job_explanation_academy')"><span>@lang('header.our_courses')</span><i class="fa fa-chevron-down"></i></a>
                                                <ul id="sub-menu-3" class="sub-menu">
                                                    <li><a href="{{ uniqRt('silk-eyelash-academy') }}" class="dez-page" title="@lang('header.silk_eyelash')">@lang('header.silk_eyelash')</a></li>
                                                    <li><a href="{{ uniqRt('prosthetic-nails-academy') }}" class="dez-page" title="@lang('header.prosthetic_nail')">@lang('header.prosthetic_nail')</a></li>
                                                    <li><a href="{{ uniqRt('hair-extension-academy') }}" class="dez-page" title="@lang('header.hair_extension')">@lang('header.hair_extension')</a></li>
                                                    <li><a href="{{ uniqRt('beauty-master-academy') }}" class="dez-page" title="@lang('header.beauty_master')">@lang('header.beauty_master')</a></li>
                                                    <li><a href="{{ uniqRt('permanent-makeup-academy') }}" class="dez-page" title="@lang('header.permanent_makeup')">@lang('header.permanent_makeup')</a></li>
                                                    <li><a href="{{ uniqRt('permanent-makeup-academy') }}" class="dez-page" title="@lang('header.date_pottery')">@lang('header.date_pottery')</a></li>
                                                </ul>
                                            </li>

                                            {{-- <!-- Расписание -->
                                        <li class="@if (isset($route) && $route['uniq_slug'] == 'contact-us') active @endif">
                                            <a href="{{ uniqRt('contact-us') }}" class="dez-page" title="@lang('header.schedule')">@lang('header.schedule')</a>
                                        </li> --}}

                                            <!-- Галерея -->
                                            <li class="@if (isset($route) && $route['uniq_slug'] == 'galery') active @endif">
                                                <a href="{{ uniqRt('galery') }}" class="dez-page" title="@lang('header.galery')">@lang('header.galery')</a>
                                            </li>

                                            <!-- Блог -->
                                            <li class="@if (isset($route) && $route['uniq_slug'] == 'blog') active @endif">
                                                <a href="{{ uniqRt('blog') }}" class="dez-page" title="@lang('header.blog')">@lang('header.blog')</a>
                                            </li>

                                            <!-- Отзывы -->
                                            <li class="@if (isset($route) && $route['uniq_slug'] == 'testimonials') active @endif">
                                                <a href="{{ uniqRt('testimonials') }}" class="dez-page" title="@lang('header.testimonials')">@lang('header.testimonials')</a>
                                            </li>

                                             <!-- Расписание -->
                                             <li class="@if (isset($route) && $route['uniq_slug'] == 'contact-us') active @endif">
                                                <a href="{{ uniqRt('contact-us') }}" class="dez-page" title="@lang('header.contact_us')">@lang('header.contact_us')</a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0);" class="dez-page" title="{{ __('header.sart_official_center_lang_options_academy') }}">
                                                    <i class="fa fa-globe fa-3x globe-fs-20"></i>
                                                    <span class="current-lang">({{ app()->getLocale() }})</span>
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>

                                                <ul class="sub-menu">
                                                    <li class="@if (app()->getLocale() == 'tk') selected @endif">
                                                        <a href="{{ langRt('tk', $route['uniq_slug'] ?? 'index') }}" class="dez-page" title="{{ __('header.turkish') }}">
                                                            <img src="/images/tk.webp" class="lang-img" alt="{{ __('header.turkish') }}"> TK
                                                        </a>
                                                    </li>
                                                    <li class="@if (app()->getLocale() == 'ru') selected @endif">
                                                        <a href="{{ langRt('ru', $route['uniq_slug'] ?? 'index') }}" class="dez-page" title="{{ __('header.russian') }}">
                                                            <img src="/images/ru.webp" class="lang-img" alt="{{ __('header.russian') }}"> RU
                                                        </a>
                                                    </li>
                                                    <li class="@if (app()->getLocale() == 'en') selected @endif">
                                                        <a href="{{ langRt('en', $route['uniq_slug'] ?? 'index') }}" class="dez-page" title="{{ __('header.english') }}">
                                                            <img src="/images/us.webp" class="lang-img" alt="{{ __('header.english') }}"> EN
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </li>
                                    </div>
                                    <!-- MENÜ END-->
                                </div>
                            </div>
                        </div>
                        <!-- main header END -->
                    </header>
                    <!-- header END -->
                </div>

                <script>
                    function toggleSubMenu(event, subMenuId) {
                        event.preventDefault(); // Varsayılan link davranışını engelle
                        const subMenu = document.getElementById(subMenuId);
                        if (subMenu) {
                            subMenu.style.display = subMenu.style.display === 'none' || subMenu.style.display === '' ? 'block' : 'none';
                        }
                    }


                    function setActive(event) {
                        // Tüm aktif sınıfları kaldır
                        document.querySelectorAll('.dez-page.active').forEach(function(element) {
                            element.classList.remove('active');
                        });

                        // Tıklanan öğeye aktif sınıfını ekle
                        event.currentTarget.classList.add('active');
                    }
                </script>
            </body>

            </html>)
