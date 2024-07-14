    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Services -->
        <div class="section-full bg-white content-inner-2 overlay-white-middle"
            style="background-image:url(/images/sart/002.png); background-position: bottom, top; background-size: 100% 100%; background-repeat: no-repeat;">
            <div class="container">
                <div class="section-head text-black text-center">
                    <div class="dlab-separator-outer m-b0">
                        <div class="dlab-separator text-primary style-icon"><img src="/images/sart/logo_fav.png"
                                alt="@lang('services.sart')"></div>
                    </div>
                    <h2 class="text-primary m-b10">@lang('services.services')</h2>
                    <h6 class="m-b10">@lang('services.index_section1_subtitle')</h6>
                    <p>@lang('services.index_section1_content1')</p>
                </div>
                <div
                    class="img-carousel owl-carousel owl-theme owl-none owl-dots-primary-big owl-btn-center-lr owl-loade m-b30">

                    {{-- Kirpik Lifting --}}
                    <div class="item">
                        <div class="service-box text-center">
                            <a href="{{ uniqRt('eyelash-lifting') }}" title="@lang('services.index_section1_slide1_alt')" class="service-link">
                                <div class="service-images m-b15">
                                    <img width="300" height="300" src="/images/sart/kirpik_lifting_6.webp"
                                        alt="@lang('services.index_section1_slide1_alt')" />
                                    <i class="flaticon-woman-1"></i>
                                </div>
                                <div class="service-content">
                                    <h6 class="text-uppercase text-primary">
                                        @lang('services.index_section1_slide1_alt')
                                    </h6>
                                    <p>@lang('services.index_section1_slide1_cont')</p>
                                </div>
                            </a>
                        </div>
                    </div>


                    {{-- Kaş Laminasyon --}}
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/kas_laminasyonu_2.webp"
                                    alt="@lang('services.index_section1_slide2_alt')" />
                                <i class="flaticon-woman-1"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="{{ uniqRt('eyebrow-lamination') }}" class="text-primary"
                                        title="@lang('services.index_section1_slide2_title')" target="_self">@lang('services.index_section1_slide2_title')</a>
                                </h6>
                                <p>@lang('services.index_section1_slide2_cont')</p>
                            </div>
                        </div>
                    </div>

                    {{-- Dudak Renklendirme --}}
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/dudak_renklendirme_islemi.webp"
                                    alt="@lang('services.index_section1_slide3_title')" />
                                <i class="flaticon-lotus"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="{{ uniqRt('lip-coloring') }}" class="text-primary"
                                        title="@lang('services.index_section1_slide3_title')" target="_self">@lang('services.index_section1_slide3_title')</a>
                                </h6>
                                <p>@lang('services.index_section1_slide3_cont')</p>
                            </div>
                        </div>
                    </div>

                    {{-- Protex Tırnak --}}
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/protez_tirnak_tasarim.webp"
                                    alt="@lang('services.index_section1_slide4_title')" />
                                <i class="flaticon-candle-1"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="{{ uniqRt('prosthetic-nails') }}" class="text-primary"
                                        title="@lang('services.index_section1_slide4_title')" target="_self">@lang('services.index_section1_slide4_title')</a>
                                </h6>
                                <p>@lang('services.index_section1_slide4_cont')</p>
                            </div>
                        </div>
                    </div>

                    {{-- İpek Kirpik --}}
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/kirpik_bakim.webp"
                                    alt="@lang('services.index_section1_slide5_alt')" />
                                <i class="flaticon-candle"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="{{ uniqRt('silk-eyelash') }}" class="text-primary"
                                        title="@lang('services.index_section1_slide5_title')" target="_self">@lang('services.index_section1_slide5_title')</a>
                                </h6>
                                <p>@lang('services.index_section1_slide5_cont')</p>
                            </div>
                        </div>
                    </div>

                    {{-- Saç Kesim --}}
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/sac_kesim_model.webp"
                                    alt="@lang('services.index_section1_slide6_alt')" />
                                <i class="flaticon-lotus"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="{{ uniqRt('hair-cut') }}" class="text-primary" title="@lang('services.index_section1_slide6_alt')"
                                        target="_self">@lang('services.index_section1_slide6_alt')</a>
                                </h6>
                                <p>@lang('services.index_section1_slide6_cont')</p>
                            </div>
                        </div>
                    </div>

                    {{-- Tırnak Tasarımı --}}
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/protez_tirnak_2.webp"
                                    alt="@lang('services.index_section1_slide7_alt')" />
                                <i class="flaticon-candle"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="{{ uniqRt('nail-art') }}" class="text-primary"
                                        title="@lang('services.index_section1_slide7_alt')" target="_self">@lang('services.index_section1_slide7_alt')</a>
                                </h6>
                                <p>@lang('services.index_section1_slide7_cont')</p>
                            </div>
                        </div>
                    </div>

                    {{-- Saç Kaynak --}}
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/kaynak_sac_cesitleri.webp"
                                    alt="@lang('services.index_section1_slide8_alt')" />
                                <i class="flaticon-candle-1"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="{{ uniqRt('hair-extension') }}" class="text-primary"
                                        title="@lang('services.index_section1_slide8_alt')" target="_self">@lang('services.index_section1_slide8_alt')</a>
                                </h6>
                                <p>@lang('services.index_section1_slide8_cont')</p>
                            </div>
                        </div>
                    </div>

                    {{-- Kalıcı Oje --}}
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/manikur_kalici_oje.webp"
                                    alt="@lang('services.index_section1_slide10_alt')" />
                                <i class="flaticon-candle"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="{{ uniqRt('permanent-nail-polish') }}" class="text-primary"
                                        title="@lang('services.index_section1_slide10_alt')" target="_self">@lang('services.index_section1_slide10_alt')</a>
                                </h6>
                                <p>@lang('services.index_section1_slide10_cont')</p>
                            </div>
                        </div>
                    </div>

                    {{-- Saç Bayası --}}
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/saç_boyası_3.webp"
                                    alt="@lang('services.index_section1_slide11_alt')" />
                                <i class="flaticon-candle-1"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="{{ uniqRt('hair-dye') }}" class="text-primary"
                                        title="@lang('services.index_section1_slide11_alt')" target="_self">@lang('services.index_section1_slide11_alt')</a>
                                </h6>
                                <p>@lang('services.index_section1_slide11_cont')</p>
                            </div>
                        </div>
                    </div>

                    {{-- Şeker Ağda --}}
                    <div class="item">
                        <div class="service-box text-center">
                            <div class="service-images m-b15">
                                <img width="300" height="300" src="/images/sart/seker_agda_1.webp"
                                    alt="@lang('services.index_section1_slide12_alt')" />
                                <i class="flaticon-lotus"></i>
                            </div>
                            <div class="service-content">
                                <h6 class="text-uppercase">
                                    <a href="{{ uniqRt('wax-application') }}" class="text-primary"
                                        title="@lang('services.index_section1_slide12_alt')" target="_self">@lang('services.index_section1_slide12_alt')</a>
                                </h6>
                                <p>@lang('services.index_section1_slide12_cont')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ uniqRt('services') }}" class="site-button outline focus-white"
                        title="@lang('home.sart_official_center_job_explanation')" target="_self">@lang('home.index_section1_services_redirect_button')</a>
                </div>
            </div>
        </div>
        <!-- Why Chose Us -->
        <div class="section-full content-inner-2 our-portfolio">
            <div class="container">
                <div class="section-head text-black text-center m-b20">
                    <div class="dlab-separator-outer m-b0">
                        <div class="dlab-separator text-primary style-icon"><img src="/images/sart/logo_fav.png"
                                alt="@lang('services.index_section2_img_alt')"></div>
                    </div>
                    <h2 class="text-primary m-b10">@lang('services.index_section2_main_title')</h2>
                    <p class="m-b0">@lang('services.index_section2_subtitle')</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="site-filters style1 clearfix center">
                            <ul class="filters" data-toggle="buttons">
                                <li data-filter="" class="btn active"><a href="#"
                                        title="@lang('services.index_section2_link_title1')"><span>@lang('services.index_section2_link_title1')</span></a></li>
                                <li data-filter="image-1" class="btn"><a href="#"
                                        title="@lang('services.index_section2_link_title2')"><span>@lang('services.index_section2_link_title2')</span></a></li>
                                <li data-filter="image-2" class="btn"><a href="#"
                                        title="@lang('services.index_section2_link_title3')"><span>@lang('services.index_section2_link_title3')</span></a></li>
                                <li data-filter="image-3" class="btn"><a href="#"
                                        title="@lang('services.index_section2_link_title4')"><span>@lang('services.index_section2_link_title4')</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- //Saç -->
                <div class="clearfix">
                    <ul id="masonry"
                        class="portfolio-box dlab-gallery-listing gallery-grid-4 gallery row lightgallery">
                        <li class="image-1  card-container col-lg-3 col-md-3 col-sm-3">
                            <div class="dlab-box">
                                <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                    <img width="385" height="385"img src="/images/sart/kaynak_sac_sq.webp"
                                        alt="@lang('services.hair_extension')">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <span data-exthumbimage="images/gallery/middle/thumb/pic1.webp"
                                                data-src="images/sart/kaynak_sac_sq.webp" class="icon-bx-xs check-km"
                                                title="@lang('services.hair_extension')">
                                                <i class="ti-fullscreen"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dlab-box p-tb30 image-2">
                                <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                    <img width="385" height="385"img src="/images/sart/sac_islemleri.webp"
                                        alt="@lang('services.hair_dye')">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <span data-exthumbimage="/images/gallery/middle/thumb/pic2.webp"
                                                data-src="images/sart/sac_islemleri.webp" class="icon-bx-xs check-km"
                                                title="@lang('services.hair_dye')">
                                                <i class="ti-fullscreen"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="image-2 card-container col-lg-6 col-md-6 col-sm-6">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                    <img src="/images/sart/kirpik_tasarim.webp" alt="@lang('services.silk_eyelash')">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <span data-exthumbimage="/images/gallery/middle/thumb/pic3.webp"
                                                data-src="/images/sart/kirpik_tasarim.webp"
                                                class="icon-bx-xs check-km" title="@lang('services.silk_eyelash')">
                                                <i class="ti-fullscreen"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="image-3 image-4 card-container col-lg-3 col-md-3 col-sm-3">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                    <img width="385" height="385"img src="/images/sart/tirnak_manikur.webp"
                                        alt="@lang('services.mani_pedi')">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <span data-exthumbimage="/images/gallery/middle/thumb/pic4.webp"
                                                data-src="/images/sart/tirnak_manikur.webp"
                                                class="icon-bx-xs check-km" title="@lang('services.mani_pedi')">
                                                <i class="ti-fullscreen"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dlab-box">
                                <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                    <img width="385" height="385"img src="/images/sart/kirpik_bakim.webp"
                                        alt="@lang('services.index_section1_slide1_title')">
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                            <span data-exthumbimage="/images/gallery/middle/thumb/pic5.webp"
                                                data-src="/images/sart/kirpik_bakim.webp" class="icon-bx-xs check-km"
                                                title="@lang('services.index_section1_slide1_title')">
                                                <i class="ti-fullscreen"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <!-- JavaScript -->
                <script>
                    $(document).ready(function() {
                        $(".filters li").on("click", function() {
                            $(".filters li").removeClass("active");
                            $(this).addClass("active");

                            var filterValue = $(this).data("filter");
                            if (filterValue === "") {
                                $(".portfolio-box li").fadeIn();
                            } else {
                                $(".portfolio-box li").fadeOut();
                                $(".portfolio-box ." + filterValue).fadeIn();
                            }
                        });
                    });
                </script>
            </div>
        </div>
        <!-- Why Chose Us End -->
        <!-- Our Portfolio -->
        <div class="section-full video-presentation overlay-black-dark bg-img-fix"
            style="background-image:url(/images/sart/kuafor_bg.webp);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-white text-center">
                        <h2 class="text-primary fw-4">@lang('services.index_section3_main_title')</h2>
                        <p class="max-w700 m-auto">@lang('services.index_section3_content')</p>
                        <div class="video-play-icon m-t50">
                            <a href="/images/sart/guzellik_merkezi.mp4" class="popup-youtube video"
                                title="@lang('services.index_section3_video_title')"><i class="ti-control-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Portfolio END -->
        <!-- Our Professional Team -->
        <div class="section-full content-inner-2 overlay-white-middle"
            style="background-image:url(/images/sart/002-op.png); background-position: bottom, top; background-size: 100% 100%; background-repeat: no-repeat;">
            <div class="container">
                <div class="section-head text-black text-center">
                    <div class="dlab-separator-outer m-b0">
                        <div class="dlab-separator text-primary style-icon"><img src="/images/sart/logo_fav.png"
                                alt="@lang('services.index_section4_img_alt')"></div>
                    </div>
                    <h2 class="text-primary m-b10">@lang('services.index_section4_main_title')</h2>
                    <p>@lang('services.index_section4_cont')</p>
                </div>
                <div
                    class="team-carousel owl-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-dots-primary-full owl-loaded owl-drag">
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/dudak_renklendirme.webp" alt="@lang('services.lip_filler')"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/sac_islemleri.webp" alt="@lang('services.hair_cut')"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/kirpik_bakimi.webp" alt="@lang('services.eyelash_lifting')"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/göz_alti_islemleri.webp" alt="@lang('services.silk_eyelash')"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/desenli_protez_tirnak.webp" alt="@lang('services.nail_art')"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/kas_kirpik_bakimi.webp" alt="@lang('services.silk_eyelash')"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/kalici_oje.webp" alt="@lang('services.perminant_nail_polish')"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/kaynak_sac_modelleri.webp" alt="@lang('services.hair_extension')"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/kas_laminasyonu.webp" alt="@lang('services.eyebrow_lamination')"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/manikur_islemleri.webp" alt="@lang('services.mani_pedi')"></div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="dlab-box text-center team-box">
                            <div class="dlab-media"> <img width="300" height="300"img
                                    src="/images/sart/pedikur_6.webp" alt="@lang('services.mani_pedi')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Portfolio -->
        <div class="section-full content-inner-2"
            style="background-image:url(/images/sart/003.webp); background-position: bottom; background-size:cover;">
            <div class="container">
                <div class="section-head text-black text-center">
                    <div class="dlab-separator-outer m-b0">
                        <div class="dlab-separator text-primary style-icon"><img
                                src="/images/sart/logo-transparent.png" alt="@lang('services.index_section5_img_alt')"></div>
                    </div>
                    <h2 class="text-white m-b10">@lang('services.index_section5_main_title')</h2>
                    <p>@lang('services.index_section5_cont')</p>
                </div>
                <div
                    class="testimonial-two-dots owl-carousel owl-theme owl-dots-primary-full owl-btn-center-lr owl-btn-3">
                    <div class="item p-a5">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1">
                                <img src="/images/sart/dudak_renklendirme_3.webp" width="100" height="100"
                                    alt="@lang('services.index_section5_img_alt')">
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    @lang('services.index_section5_slide1_cont')
                                </p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Sinem ÖZGENÇ</strong>
                                <span class="testimonial-position"></span>
                            </div>
                        </div>
                    </div>

                    <div class="item p-a5">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1">
                                <img src="/images/sart/ipek_kirpik_1.webp" width="100" height="100"
                                    alt="@lang('services.index_section5_img_alt')">
                            </div>
                            <div class="testimonial-text">
                                <p> @lang('services.index_section5_slide2_cont')</p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Burcu TOPRAK</strong>
                                <span class="testimonial-position"></span>
                            </div>
                        </div>
                    </div>

                    <div class="item p-a5">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1">
                                <img src="/images/sart/saç_kesim_sqr.webp" width="100" height="100"
                                    alt="@lang('services.index_section5_img_alt')">
                            </div>
                            <div class="testimonial-text">
                                <p> @lang('services.index_section5_slide3_cont') </p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Ayşenur KADER</strong>
                                <span class="testimonial-position"></span>
                            </div>
                        </div>
                    </div>

                    <div class="item p-a5">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1">
                                <img src="/images/sart/nail_art_5.webp" width="100" height="100"
                                    alt="@lang('services.index_section5_img_alt')">
                            </div>
                            <div class="testimonial-text">
                                <p> @lang('services.index_section5_slide4_cont')</p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Nina ULUTAŞ</strong>
                                <span class="testimonial-position"></span>
                            </div>
                        </div>
                    </div>

                    <div class="item p-a5">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1">
                                <img src="/images/sart/kirpik_lifting_2.webp" width="100" height="100"
                                    alt="@lang('services.index_section5_img_alt')">
                            </div>
                            <div class="testimonial-text">
                                <p>@lang('services.index_section5_slide5_cont')</p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Ezgi KARTAL</strong>
                                <span class="testimonial-position"></span>
                            </div>
                        </div>
                    </div>

                    <div class="item p-a5">
                        <div class="testimonial-9">
                            <div class="testimonial-pic radius style1">
                                <img src="/images/sart/manikur_bakim.webp" width="100" height="100"
                                    alt="MÜŞTERİ YORUMLARI">
                            </div>
                            <div class="testimonial-text">
                                <p>@lang('services.index_section5_slide6_cont')</p>
                            </div>
                            <div class="testimonial-detail">
                                <strong class="testimonial-name">Zeynep TARIK</strong>
                                <span class="testimonial-position"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
