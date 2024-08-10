 {{-- Surat çekmek Academy Sayfası --}}
 <!-- Content -->
 <div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
        style="background-image:url({{ asset('images/nur-art-img/nur-art-039.png') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">@lang('silk-eyelash-academy.silk_eyelash_main_header')</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('route', ['/']) }}" title="@lang('silk-eyelash-academy.sart_official_center_home')"
                                target="_self">@lang('silk-eyelash-academy.home')</a></li>
                        <li>
                            <a href="{{ uniqRt('our-courses') }}" title="@lang('silk-eyelash-academy.our_courses')"
                                target="_self">@lang('silk-eyelash-academy.our_courses')
                            </a>
                        </li>
                        <li>@lang('silk-eyelash-academy.silk_eyelash_main_header_02')</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-block">
        <div class="section-full content-inner-2">
            <div class="container">
                <div class="row">
                    @include('layout.side-bar-academy')
                    <div class="col-lg-9 col-md-8">
                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('silk-eyelash-academy.silk_eyelash_main_header_01')</b>
                        <h2 style="font-size: 18px; margin-bottom: 0.3em;">@lang('silk-eyelash-academy.silk_eyelash_context_content')</h2><br>

                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('silk-eyelash-academy.silk_eyelash_context_question1')</b>
                        <p style="margin-bottom: 0.5em;">@lang('silk-eyelash-academy.silk_eyelash_context_answer1')</p>

                        <h2 style="font-size: 1em; margin-bottom: 0.3em;">@lang('silk-eyelash-academy.silk_eyelash_context_info_title_01')</h2>
                        <p>@lang('silk-eyelash-academy.silk_eyelash_context_info_cont_01')</p>

                        <div class="text-left">
                           <a href="{{ uniqRt('contact-us') }}" class="site-button outline focus-white"
                               title="@lang('about.sart_official_center_job_explanation_academy')" target="_self">@lang('about.index_section1_contact_redirect_button_academy') &nbsp;&nbsp;&rarr;</a>
                       </div><br><br>

                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('silk-eyelash-academy.silk_eyelash_context_info_title_02')</b><br/><br/>
                        <p>@lang('silk-eyelash-academy.silk_eyelash_context_info_cont_02')</p><br>
                        <p>@lang('silk-eyelash-academy.silk_eyelash_context_info_cont_03')</p><br>

                       <div class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('silk-eyelash-academy.silk_eyelash_main_header')"><img src="/images/sart/ipek_kirpik_1.webp"
                                                alt="@lang('silk-eyelash-academy.silk_eyelash_main_header')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 200px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell"><i class="flaticon-woman"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('silk-eyelash-academy.silk_eyelash_main_header')">@lang('silk-eyelash-academy.silk_eyelash_slide1_title')</a>
                                        </h6>
                                        <p class="m-b15">@lang('silk-eyelash-academy.silk_eyelash_slide1_cont')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('silk-eyelash-academy.silk_eyelash_main_header')"><img src="/images/sart/ipek_kirpik_4.webp"
                                                alt="@lang('silk-eyelash-academy.silk_eyelash_main_header')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 200px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('silk-eyelash-academy.silk_eyelash_main_header')">@lang('silk-eyelash-academy.silk_eyelash_slide2_title')</a>
                                        </h6>
                                        <p class="m-b15">@lang('silk-eyelash-academy.silk_eyelash_slide2_cont')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('silk-eyelash-academy.silk_eyelash_main_header')"><img src="/images/sart/ipek_kirpik_3.webp"
                                                alt="@lang('silk-eyelash-academy.silk_eyelash_main_header')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 200px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell"><i class="flaticon-candle"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('silk-eyelash-academy.silk_eyelash_main_header')">@lang('silk-eyelash-academy.silk_eyelash_slide3_title')</a>
                                        </h6>
                                        <p class="m-b15">@lang('silk-eyelash-academy.silk_eyelash_slide3_cont')</p>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->
</div>
<!-- Content END-->
