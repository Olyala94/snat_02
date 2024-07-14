   <!-- Content -->
   <div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
        style="background-image:url(/images/sart/sartbeauty_bg_5.webp);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">@lang('skin-care.skin-care_main_header')</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('route',['/']) }}" title="@lang('skin-care.sart_official_center_home')"
                                target="_self">@lang('skin-care.home')</a></li>
                                <li>
                                    <a href="{{ uniqRt('services') }}" title="@lang('skin-care.services')"
                                        target="_self">@lang('skin-care.services')
                                    </a>
                                </li>
                        <li>@lang('skin-care.skin-care_main_header')</li>
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
                    @include('layout.side-bar')
                    <div class="col-lg-9 col-md-8">
                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('skin-care.skin-care_context_title')</b>
                        <p>@lang('skin-care.skin-care_context_content')</b></p>

                        <div
                            class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('skin-care.skin-care_context_title')"><img
                                                src="/images/sart/img_cilt_bakimi/skincare2.jpeg"
                                                alt="@lang('skin-care.skin-care_context_title')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 250px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell" title="@lang('skin-care.skin-care_context_title')"><i
                                                    class="flaticon-woman"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('skin-care.skin-care_context_title')">@lang('skin-care.skin-care_slide1_title')</a>
                                        </h6>
                                        <p class="m-b15">@lang('skin-care.skin-care_slide1_cont')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('skin-care.skin-care_context_title')"><img
                                                src="/images/sart/img_cilt_bakimi/skincare6.jpeg"
                                                alt="@lang('skin-care.skin-care_context_title')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 250px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell" title="@lang('skin-care.skin-care_context_title')"><i
                                                    class="flaticon-mortar"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('skin-care.skin-care_context_title')">@lang('skin-care.skin-care_slide2_title')</a>
                                        </h6>
                                        <p class="m-b15">@lang('skin-care.skin-care_slide2_cont')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('skin-care.skin-care_context_title')"><img
                                                src="/images/sart/img_cilt_bakimi/skincare1.jpeg"
                                                alt="@lang('skin-care.skin-care_context_title')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 250px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell" title="@lang('skin-care.skin-care_context_title')"><i
                                                    class="flaticon-candle"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('skin-care.skin-care_context_title')">@lang('skin-care.skin-care_slide3_title')</a>
                                        </h6>
                                        <p class="m-b15">@lang('skin-care.skin-care_slide3_cont')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                        <h2 style="font-size: 1em;">@lang('skin-care.skin-care_subtitle1')</h2>
                        </p>
                        <p class="m-b20">@lang('skin-care.skin-care_subtitle1_cont')</p>
                        <div class="m-tb20">
                            <div class="accordion no-gap" id="accordion1">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq1"
                                                class="" aria-expanded="true">
                                                @lang('skin-care.skin-care_context_question1')</a>
                                        </h2>
                                    </div>
                                    <div id="faq1" class="acod-body collapse show" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">@lang('skin-care.skin-care_context_answer1')</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq2"
                                                class="collapsed" aria-expanded="false">
                                               @lang('skin-care.skin-care_context_question2')</a>
                                        </h2>
                                    </div>
                                    <div id="faq2" class="acod-body collapse" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">@lang('skin-care.skin-care_context_answer2')</div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq3"
                                                class="collapsed" aria-expanded="false">
                                              @lang('skin-care.skin-care_context_question3')</a>
                                        </h2>
                                    </div>
                                    <div id="faq3" class="acod-body collapse" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">@lang('skin-care.skin-care_context_answer3')</div>
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
