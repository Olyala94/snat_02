 {{-- İpek Kirpik Sayfası --}}
 <!-- Content -->
 <div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
        style="background-image:url(/images/sart/sartbeauty_bg_5.webp);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">@lang('silk-eyelash.silk_eyelash_main_header')</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('route',['/']) }}" title="@lang('silk-eyelash.sart_official_center_home')"
                                target="_self">@lang('silk-eyelash.home')</a></li>
                                <li>
                                    <a href="{{ uniqRt('services') }}" title="@lang('silk-eyelash.services')"
                                        target="_self">@lang('silk-eyelash.services')
                                    </a>
                                </li>
                        <li>@lang('silk-eyelash.silk_eyelash_main_header')</li>
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
                        <b class="m-t0 m-b10 fw6 text-primary" style="font-size: 1.9em;">@lang('silk-eyelash.silk_eyelash_context_title')</b>
                        <p>@lang('silk-eyelash.silk_eyelash_context_content')</p>

                        <div
                            class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('silk-eyelash.silk_eyelash_main_header')"><img
                                                src="/images/sart/ipek_kirpik_1.webp"
                                                alt="@lang('silk-eyelash.silk_eyelash_main_header')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 200px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell"><i class="flaticon-woman"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('silk-eyelash.silk_eyelash_main_header')">@lang('silk-eyelash.silk_eyelash_slide1_title')</a>
                                        </h6>
                                        <p class="m-b15">@lang('silk-eyelash.silk_eyelash_slide1_cont')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('silk-eyelash.silk_eyelash_main_header')"><img
                                                src="/images/sart/ipek_kirpik_4.webp"
                                                alt="@lang('silk-eyelash.silk_eyelash_main_header')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 200px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('silk-eyelash.silk_eyelash_main_header')">@lang('silk-eyelash.silk_eyelash_slide2_title')</a>
                                        </h6>
                                        <p class="m-b15">@lang('silk-eyelash.silk_eyelash_slide2_cont')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="dlab-box service-iconbox" style="margin-right: 20px;">
                                    <div class="dlab-media dlab-img-overlay5"> <a href="#"
                                            title="@lang('silk-eyelash.silk_eyelash_main_header')"><img
                                                src="/images/sart/ipek_kirpik_3.webp"
                                                alt="@lang('silk-eyelash.silk_eyelash_main_header')"></a> </div>
                                    <div class="dlab-info p-a30 p-t60 border-1 bg-white text-center"
                                        style="height: 200px;">
                                        <div class="icon-bx-sm radius bg-white m-b20"> <a href="#"
                                                class="icon-cell"><i class="flaticon-candle"></i></a> </div>
                                        <h6 class="dlab-title m-t0"><a href="#"
                                                title="@lang('silk-eyelash.silk_eyelash_main_header')">@lang('silk-eyelash.silk_eyelash_slide3_title')</a>
                                        </h6>
                                        <p class="m-b15">@lang('silk-eyelash.silk_eyelash_slide3_cont')</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 style="font-size: 1em; margin-bottom: 0.3em;">@lang('silk-eyelash.silk_eyelash_subtitle2_1')</h2>
                        @lang('silk-eyelash.silk_eyelash_subtitle2_1_cont')
                        </p>

                        <div class="m-tb20">
                            <div class="accordion no-gap" id="accordion1">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq1"
                                                class="" aria-expanded="true">
                                                @lang('silk-eyelash.silk_eyelash_context_question1')</a>
                                        </h2>
                                    </div>
                                    <div id="faq1" class="acod-body collapse show" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">@lang('silk-eyelash.silk_eyelash_context_answer1')</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq2"
                                                class="collapsed" aria-expanded="false">
                                                @lang('silk-eyelash.silk_eyelash_context_question2')</a>
                                        </h2>
                                    </div>
                                    <div id="faq2" class="acod-body collapse" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">@lang('silk-eyelash.silk_eyelash_context_answer2')</div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq3"
                                                class="collapsed" aria-expanded="false">
                                                @lang('silk-eyelash.silk_eyelash_context_question3')</a>
                                        </h2>
                                    </div>
                                    <div id="faq3" class="acod-body collapse" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">@lang('silk-eyelash.silk_eyelash_context_answer3')</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq4"
                                                class="collapsed" aria-expanded="false">
                                                @lang('silk-eyelash.silk_eyelash_context_question4') </a>
                                        </h2>
                                    </div>
                                    <div id="faq4" class="acod-body collapse" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">@lang('silk-eyelash.silk_eyelash_context_answer4')</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h2 style="font-size: 1em;" class="acod-title">
                                            <a href="#" data-toggle="collapse" data-target="#faq5"
                                                class="collapsed" aria-expanded="false">
                                                @lang('silk-eyelash.silk_eyelash_context_question5')</a>
                                        </h2>
                                    </div>
                                    <div id="faq5" class="acod-body collapse" data-parent="#accordion1"
                                        style="">
                                        <div class="acod-content">@lang('silk-eyelash.silk_eyelash_context_answer5')</div>
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
