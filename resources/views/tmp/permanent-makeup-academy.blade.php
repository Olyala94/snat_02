 <!-- Heýkel Academy Sayfası -->
   <!-- Content -->
   <div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
        style="background-image:url({{ asset('images/nur-art-img/nur-art-036.png') }});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">@lang('permanent-makeup-academy.permanent-makeup_main_header')</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li>
                            <a href="{{ route('route',['/']) }}" title="@lang('permanent-makeup-academy.sart_official_center_home')"
                                target="_self">@lang('permanent-makeup-academy.home')
                            </a>
                        </li>
                        <li>
                            <a href="{{ uniqRt('our_courses') }}" title="@lang('permanent-makeup-academy.our_courses')"
                                target="_self">@lang('permanent-makeup-academy.our_courses')
                            </a>
                        </li>
                        <li>@lang('permanent-makeup-academy.permanent-makeup_main_header')</li>
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

                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('permanent-makeup-academy.permanent-makeup_context_title')</b>
                        <h2 style="font-size: 18px; margin-bottom: 0.3em;">@lang('permanent-makeup-academy.permanent-makeup_context_content')</h2><br/>

                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('permanent-makeup-academy.permanent-makeup_subtitle1')</b>
                        <p class="m-b20">@lang('permanent-makeup-academy.permanent-makeup_subtitle1_cont')</p>

                        <p><h2 style="font-size: 1em;">@lang('permanent-makeup-academy.permanent-makeup_subtitle2')</h2></p>
                        <p class="m-b20">@lang('permanent-makeup-academy.permanent-makeup_subtitle2_1')</p>

                        <div class="text-left">
                            <a href="{{ uniqRt('contact-us') }}" class="site-button outline focus-white"
                                title="@lang('about.sart_official_center_job_explanation_academy')" target="_self">@lang('about.index_section1_contact_redirect_button_academy') &nbsp;&nbsp;&rarr;</a>
                        </div><br><br>

                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('permanent-makeup-academy.permanent-makeup_context_info_title_01')</b><br/><br/>
                        <p class="m-b20">@lang('permanent-makeup-academy.permanent-makeup_context_info_cont_01')</p>
                        <p class="m-b20">@lang('permanent-makeup-academy.permanent-makeup_context_info_cont_02')</p>

                        <div
                            class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('permanent-makeup-academy.permanent-makeup_main_header')"><img
                                                src="{{ asset('images/sart_academy/permanent_makeup_img/dudak_renklendirme_4.webp') }}"
                                                alt="@lang('permanent-makeup-academy.permanent-makeup_main_header')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 250px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell" title="@lang('permanent-makeup-academy.permanent-makeup_main_header')"><i
                                                    class="flaticon-woman"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('permanent-makeup-academy.permanent-makeup_main_header')">@lang('permanent-makeup-academy.permanent-makeup_slide1_title')</a>
                                        </h6>
                                        <p class="m-b15">@lang('permanent-makeup-academy.permanent-makeup_slide1_cont')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('permanent-makeup-academy.permanent-makeup_main_header')"><img
                                                src="{{ asset(('images/sart_academy/permanent_makeup_img/kalici_makeup_egitimi_01.webp')) }}"
                                                alt="@lang('permanent-makeup-academy.permanent-makeup_main_header')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 250px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell" title="@lang('permanent-makeup-academy.permanent-makeup_main_header')"><i
                                                    class="flaticon-mortar"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('permanent-makeup-academy.permanent-makeup_main_header')">@lang('permanent-makeup-academy.permanent-makeup_slide2_title')</a>
                                        </h6>
                                        <p class="m-b15">@lang('permanent-makeup-academy.permanent-makeup_slide2_cont')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('permanent-makeup-academy.permanent-makeup_main_header')"><img
                                                src="{{ asset('images/sart_academy/permanent_makeup_img/microblading 1.webp') }}"
                                                alt="@lang('permanent-makeup-academy.permanent-makeup_main_header')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 250px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell" title="@lang('permanent-makeup-academy.permanent-makeup_main_header')"><i
                                                    class="flaticon-candle"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('permanent-makeup-academy.permanent-makeup_main_header')">@lang('permanent-makeup-academy.permanent-makeup_slide3_title')</a>
                                        </h6>
                                        <p class="m-b15">@lang('permanent-makeup-academy.permanent-makeup_slide3_cont')</p>
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
