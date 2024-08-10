    <!-- SAç Kaunak Academy Sayfası -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
            style="background-image:url({{ asset('images/nur-art-img/nur-art-046.png') }});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">@lang('hair-extension-academy.hair_extension_main_header')</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('route', ['/']) }}" title="Nur Art Academy"
                                    target="_self">@lang('hair-extension-academy.home')</a></li>
                            <li>
                                <a href="{{ uniqRt('our-courses') }}" title="@lang('hair-extension-academy.our_courses')"
                                    target="_self">@lang('hair-extension-academy.our_courses')
                                </a>
                            </li>
                            <li>@lang('hair-extension-academy.hair_extension_context_title')</li>
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

                            <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('hair-extension-academy.hair_extension_context_title_01')</b>
                            <h2 style="font-size: 18px; margin-bottom: 0.3em;">@lang('hair-extension-academy.hair_extension_context_content')</h2><br />

                            <b class="m-t0 m-b10 fw6 text-primary"
                                style="font-size: 1.9em;">@lang('hair-extension-academy.hair_extension_subtitle1')</b><br /><br />
                            @lang('hair-extension-academy.hair_extension_subtitle1_cont') <br />

                            <h2 style="font-size: 1em; margin-bottom: 0.1em;">@lang('hair-extension-academy.hair_extension_subtitle2')</h2>
                            @lang('hair-extension-academy.hair_extension_subtitle2_1') <br /><br />

                            <div class="text-left">
                                <a href="{{ uniqRt('contact-us') }}" class="site-button outline focus-white"
                                    title="@lang('about.sart_official_center_job_explanation_academy')" target="_self">@lang('about.index_section1_contact_redirect_button_academy') &nbsp;&nbsp;&rarr;</a>
                            </div><br><br>

                            <b class="m-t0 m-b10 fw6 text-primary"
                                style="font-size: 1.9em;">@lang('hair-extension-academy.hair_extension_context_info_title_01')</b><br /><br />
                            <p>@lang('hair-extension-academy.hair_extension_context_info_cont_01') <br /></p>
                            <p>@lang('hair-extension-academy.hair_extension_context_info_cont_02') <br /></p>

                            <div
                                class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
                                {{-- hair_extension_01 --}}
                                <div class="item">
                                    <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"><a href="#"
                                                title="@lang('hair-extension-academy.hair_extension_context_title')"><img src="{{ asset('images/sart_academy/hair_extension_img/sac_kaynak_egitimi_03.webp') }}"
                                                    alt="@lang('hair-extension-academy.hair_extension_context_title')"></a></div>
                                        <div
                                            class="dlab-info p-a30 p-t60 border-1 bg-white text-center"style="height: 250px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"><a href="#"
                                                    class="icon-cell"><i class="flaticon-woman"></i></a></div>
                                            <h6 class="dlab-title m-t0"><a href="#"
                                                    title="@lang('hair-extension-academy.hair_extension_context_title')">@lang('hair-extension-academy.hair_extension_slide1_title')</a></h6>
                                            <p class="m-b15">@lang('hair-extension-academy.hair_extension_slide1_cont')</p>
                                        </div>
                                    </div>
                                </div>

                                {{-- hair_extension_02 --}}
                                <div class="item">
                                    <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"><a href="#"
                                                title="@lang('hair-extension-academy.hair_extension_context_title')"><img src="{{ asset('images/sart_academy/hair_extension_img/sac_kaynak_egitimi_04.webp') }}"
                                                    alt="@lang('hair-extension-academy.hair_extension_context_title')"></a></div>
                                        <div
                                            class="dlab-info p-a30 p-t60 border-1 bg-white text-center"style="height: 250px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"><a href="#"
                                                    class="icon-cell"><i class="flaticon-woman"></i></a></div>
                                            <h6 class="dlab-title m-t0"><a href="#"
                                                    title="@lang('hair-extension-academy.hair_extension_context_title')">@lang('hair-extension-academy.hair_extension_slide2_title')</a></h6>
                                            <p class="m-b15">@lang('hair-extension-academy.hair_extension_slide2_cont')</p>
                                        </div>
                                    </div>
                                </div>

                                {{-- hair_extension_03 --}}
                                <div class="item">
                                    <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                        <div class="dlab-media dlab-img-overlay5"><a href="#"
                                                title="@lang('hair-extension-academy.hair_extension_context_title')"><img src="{{ asset('images/sart_academy/hair_extension_img/sac_kaynak_egitimi_05.webp') }}"
                                                    alt="@lang('hair-extension-academy.hair_extension_context_title')"></a></div>
                                        <div
                                            class="dlab-info p-a30 p-t60 border-1 bg-white text-center"style="height: 250px;">
                                            <div class="icon-bx-sm radius bg-white m-b20"><a href="#"
                                                    class="icon-cell"><i class="flaticon-woman"></i></a></div>
                                            <h6 class="dlab-title m-t0"><a href="#"
                                                    title="@lang('hair-extension-academy.hair_extension_context_title')">@lang('hair-extension-academy.hair_extension_slide3_title')</a></h6>
                                            <p class="m-b15">@lang('hair-extension-academy.hair_extension_slide3_cont')</p>
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
