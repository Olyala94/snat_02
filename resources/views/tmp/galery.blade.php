     <!-- Content -->
     <div class="page-content bg-white">
         <!-- Main Slider -->
         {{-- <div class="dlab-bnr-inr overlay-primary"
             style="background-image:url('{{ asset('images/nur-art-img/nur-art-06.png') }}');">
             <div class="container">
                 <div class="dlab-bnr-inr-entry">
                     <h1 class="text-white fw-4">@lang('about.about_us')</h1>
                     <!-- Breadcrumb row -->
                     <div class="breadcrumb-row">
                         <ul class="list-inline">
                             <li><a href="{{ route('route', ['/']) }}" title="@lang('about.sart')">@lang('about.home')</a>
                             </li>
                             <li>@lang('about.about_us')</li>
                         </ul>
                     </div>
                     <!-- Breadcrumb row END -->
                 </div>
             </div>
         </div> --}}
         <!-- Main Slider -->

         <!-- Why Chose Us -->
         <div class="section-full content-inner-2 our-portfolio">
             <div class="container">
                 <div class="section-head text-black text-center m-b20">
                     <div class="dlab-separator-outer m-b0">
                         <div class="dlab-separator text-primary style-icon"><img
                                 src="{{ asset('images/nur-art-logos/nur-art-logo-06.png') }}" alt="@lang('home.index_section2_img_alt_academy')">
                         </div>
                     </div>
                     <h2 class="text-primary m-b10">@lang('home.index_section2_main_title_academy')</h2>
                     <p class="m-b0">@lang('home.index_section2_subtitle_academy')</p>
                 </div>
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12">
                         <div class="site-filters style1 clearfix center">
                             <ul class="filters" data-toggle="buttons">
                                 <li data-filter="" class="btn active"><a href="#"
                                         title="@lang('home.index_section2_link_title1_academy')"><span>@lang('home.index_section2_link_title1_academy')</span></a></li>
                                 <li data-filter="image-1" class="btn"><a href="#"
                                         title="@lang('home.index_section2_link_title2_academy')"><span>@lang('home.index_section2_link_title2_academy')</span></a></li>
                                 <li data-filter="image-2" class="btn"><a href="#"
                                         title="@lang('home.index_section2_link_title3_academy')"><span>@lang('home.index_section2_link_title3_academy')</span></a></li>
                                 <li data-filter="image-3" class="btn"><a href="#"
                                         title="@lang('home.index_section2_link_title4_academy')"><span>@lang('home.index_section2_link_title4_academy')</span></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <!-- // Saç -->
                 <div class="clearfix">
                     <ul id="masonry"
                         class="portfolio-box dlab-gallery-listing gallery-grid-4 gallery row lightgallery">

                         <li class="image-1  card-container col-lg-3 col-md-3 col-sm-3">
                             <div class="dlab-box">
                                 <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                     <img width="385" height="385"img
                                         src="{{ asset('images/nur-art-img/nur-art-01.png') }}"
                                         alt="@lang('home.hair_extension')">
                                     <div class="overlay-bx">
                                         <div class="overlay-icon">
                                             <span data-exthumbimage="{{ asset('images/nur-art-img/nur-art-01.png') }}"
                                                 data-src="{{ asset('images/nur-art-img/nur-art-01.png') }}"
                                                 class="icon-bx-xs check-km" title="@lang('home.hair_extension')">
                                                 <i class="ti-fullscreen"></i>
                                             </span>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="dlab-box p-tb30 image-2">
                                 <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                     <img width="385" height="385"img
                                         src="{{ asset('images/nur-art-img/nur-art-02.png') }}"
                                         alt="@lang('home.hair_dye')">
                                     <div class="overlay-bx">
                                         <div class="overlay-icon">
                                             <span data-exthumbimage="{{ asset('images/nur-art-img/nur-art-02.png') }}"
                                                 data-src="{{ asset('images/nur-art-img/nur-art-02.png') }}"
                                                 class="icon-bx-xs check-km" title="@lang('home.hair_dye')">
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
                                     <img src="{{ asset('images/nur-art-img/nur-art-023.png') }}"
                                         alt="@lang('home.silk_eyelash')">
                                     <div class="overlay-bx">
                                         <div class="overlay-icon">
                                             <span
                                                 data-exthumbimage="{{ asset('images/nur-art-img/nur-art-023.png') }}"
                                                 data-src="{{ asset('images/nur-art-img/nur-art-023.png') }}"
                                                 class="icon-bx-xs check-km" title="@lang('home.silk_eyelash')">
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
                                     <img width="385" height="385"img
                                         src="{{ asset('images/nur-art-img/nur-art-016.png') }}"
                                         alt="@lang('home.mani_pedi')">
                                     <div class="overlay-bx">
                                         <div class="overlay-icon">
                                             <span
                                                 data-exthumbimage="{{ asset('images/nur-art-img/nur-art-016.png') }}"
                                                 data-src="{{ asset('images/nur-art-img/nur-art-016.png') }}"
                                                 class="icon-bx-xs check-km" title="@lang('home.mani_pedi')">
                                                 <i class="ti-fullscreen"></i>
                                             </span>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <div class="dlab-box">
                                 <div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
                                     <img width="385" height="385"img
                                         src="{{ asset('images/nur-art-img/nur-art-07.png') }}"
                                         alt="@lang('home.solarium')">
                                     <div class="overlay-bx">
                                         <div class="overlay-icon">
                                             <span
                                                 data-exthumbimage="{{ asset('images/nur-art-img/nur-art-07.png') }}"
                                                 data-src="{{ asset('images/nur-art-img/nur-art-07.png') }}"
                                                 class="icon-bx-xs check-km" title="@lang('home.solarium')">
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
         <!-- Our Professional Team -->
         <div class="section-full content-inner-2 overlay-white-middle"
             style="background-image:url(/images/sart/002-op.png); background-position: bottom, top; background-size: 100% 100%; background-repeat: no-repeat;">
             <div class="container">
                 <div class="section-head text-black text-center">
                     <div class="dlab-separator-outer m-b0">
                         <div class="dlab-separator text-primary style-icon"><img
                                 src="/images/nur-art-logos/nur-art-logo-06.png" alt="@lang('home.index_section4_img_alt_academy')">
                         </div>
                     </div>
                     <h2 class="text-primary m-b10">@lang('home.index_section4_main_title_academy')</h2>
                     <p>@lang('home.index_section4_cont_academy')</p>
                 </div>
                 <div
                     class="team-carousel owl-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-dots-primary-full owl-loaded owl-drag">
                     <div class="item">
                         <div class="dlab-box text-center team-box">
                             <div class="dlab-media"> <img width="300" height="300"img
                                     src="/images/nur-art-img/nur-art-034.png" alt="@lang('home.index_section1_slide3_alt')"></div>

                         </div>
                     </div>
                     <div class="item">
                         <div class="dlab-box text-center team-box">
                             <div class="dlab-media"> <img width="300" height="300"img
                                     src="/images/nur-art-img/nur-art-024.png" alt="@lang('home.index_section1_slide6_alt')"></div>

                         </div>
                     </div>
                     <div class="item">
                         <div class="dlab-box text-center team-box">
                             <div class="dlab-media"> <img width="300" height="300"img
                                     src="/images/nur-art-img/nur-art-025.png" alt="@lang('home.index_section1_slide1_title')"></div>

                         </div>
                     </div>
                     <div class="item">
                         <div class="dlab-box text-center team-box">
                             <div class="dlab-media"> <img width="300" height="300"img
                                     src="/images/nur-art-img/nur-art-026.png" alt="@lang('home.index_section1_slide5_title')"></div>

                         </div>
                     </div>
                     <div class="item">
                         <div class="dlab-box text-center team-box">
                             <div class="dlab-media"> <img width="300" height="300"img
                                     src="/images/nur-art-img/nur-art-027.png" alt="@lang('home.nail_art')"></div>

                         </div>
                     </div>
                     <div class="item">
                         <div class="dlab-box text-center team-box">
                             <div class="dlab-media"> <img width="300" height="300"img
                                     src="/images/nur-art-img/nur-art-035.png" alt="@lang('home.index_section1_slide5_title')"></div>

                         </div>
                     </div>
                     <div class="item">
                         <div class="dlab-box text-center team-box">
                             <div class="dlab-media"> <img width="300" height="300"img
                                     src="/images/nur-art-img/nur-art-029.png" alt="@lang('home.perminant_nail_polish')"></div>

                         </div>
                     </div>
                     <div class="item">
                         <div class="dlab-box text-center team-box">
                             <div class="dlab-media"> <img width="300" height="300"img
                                     src="/images/nur-art-img/nur-art-030.png" alt="@lang('home.hair_extension')"></div>

                         </div>
                     </div>
                     <div class="item">
                         <div class="dlab-box text-center team-box">
                             <div class="dlab-media"> <img width="300" height="300"img
                                     src="/images/nur-art-img/nur-art-031.png" alt="@lang('home.')Kaş Laminasyon">
                             </div>

                         </div>
                     </div>
                     <div class="item">
                         <div class="dlab-box text-center team-box">
                             <div class="dlab-media"> <img width="300" height="300"img
                                     src="/images/nur-art-img/nur-art-032.png" alt="@lang('home.index_section1_slide2_title')"></div>

                         </div>
                     </div>
                     <div class="item">
                         <div class="dlab-box text-center team-box">
                             <div class="dlab-media"> <img width="300" height="300"img
                                     src="/images/nur-art-img/nur-art-033.png" alt="@lang('home.mani_pedi')">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Content END-->
