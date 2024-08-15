<!-- Aýdym-Saz  Aladei Sayfası -->
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
        style="background-image:url({{ asset('images/nur-art-img/nur-art-046.png') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">@lang('prosthetic-nails-academy.prosthetic_nail_academy')</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('route',['/']) }}" title="@lang('prosthetic-nails-academy.sart_official_center_home')"
                                target="_self">@lang('prosthetic-nails-academy.home')</a></li>
                                <li>
                                    <a href="{{ uniqRt('our-courses') }}" title="@lang('prosthetic-nails-academy.our_courses')"
                                        target="_self">@lang('prosthetic-nails-academy.our_courses')
                                    </a>
                                </li>
                        <li>@lang('prosthetic-nails-academy.prosthetic_nail')</li>
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

                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('prosthetic-nails-academy.prosthetic_nail_academy_title_01')</b>
                        <h2 style="font-size: 18px; margin-bottom: 0.3em;">@lang('prosthetic-nails-academy.prosthetic_nail_context_content')</h2><br/>

                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('prosthetic-nails-academy.prosthetic_nail_subtitle1')</b><br/><br/>
                        @lang('prosthetic-nails-academy.prosthetic_nail_subtitle1_cont')<br>

                        <h4 style="font-size: 0.95em; margin-bottom: 0.3em;">@lang('prosthetic-nails-academy.prosthetic_nail_subtitle2')</h4>
                        @lang('prosthetic-nails-academy.prosthetic_nail_subtitle2_1')<br><br>

                        <div class="text-left">
                            <a href="{{ uniqRt('contact-us') }}" class="site-button outline focus-white"
                                title="@lang('about.sart_official_center_job_explanation_academy')" target="_self">@lang('about.index_section1_contact_redirect_button_academy') &nbsp;&nbsp;&rarr;</a>
                        </div><br><br>

                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('prosthetic-nails-academy.prosthetic_nail_context_info_title_01')</b><br/><br/>
                        <p>@lang('prosthetic-nails-academy.prosthetic_nail_context_info_cont_01')</p>
                        <p>@lang('prosthetic-nails-academy.prosthetic_nail_context_info_cont_02')</p><br>

                        <div class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('prosthetic-nails-academy.prosthetic_nail')"><img src="{{ asset('images/sart_academy/prosthetic_nail_img/protez_tirnak_egitimi_01.webp') }}"
                                                alt="@lang('prosthetic-nails-academy.prosthetic_nail')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 200px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell"><i class="flaticon-woman"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#" title="@lang('prosthetic-nails-academy.prosthetic_nail')">
                                            @lang('prosthetic-nails-academy.prosthetic_nail_slide1_title')</a></h6>
                                        <p class="m-b15">@lang('prosthetic-nails-academy.prosthetic_nail_slide1_cont')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('prosthetic-nails-academy.prosthetic_nail_academy')"><img src="{{ asset('images/sart_academy/prosthetic_nail_img/protez_tirnak_egitimi_02.webp') }}"
                                                alt="@lang('prosthetic-nails-academy.prosthetic_nail_academy')"></a></div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 200px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#" title="@lang('prosthetic-nails-academy.prosthetic_nail')">
                                         @lang('prosthetic-nails-academy.prosthetic_nail_slide2_title')</a></h6>
                                        <p class="m-b15">@lang('prosthetic-nails-academy.prosthetic_nail_slide2_cont')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('prosthetic-nails-academy.prosthetic_nail')"><img src="{{ asset('images/sart_academy/prosthetic_nail_img/protez_tirnak_egitimi_03.webp') }}"
                                                alt="@lang('prosthetic-nails-academy.prosthetic_nail')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 200px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell"><i class="flaticon-candle"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('prosthetic-nails-academy.prosthetic_nail')">@lang('prosthetic-nails-academy.prosthetic_nail_slide3_title')</a></h6>
                                        <p class="m-b15">@lang('prosthetic-nails-academy.prosthetic_nail_slide3_cont')</p>
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
