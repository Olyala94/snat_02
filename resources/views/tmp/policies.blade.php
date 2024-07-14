{{-- Politikalarımız Sayfası --}}
@extends('layout.master')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary"
            style="background-image:url(/images/sart/sartbeauty_bg_5.webp);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">@lang('policies.our_policies')</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('route',['/']) }}" title="@lang('policies.user_policies_title')">@lang('policies.user_policies_title')</a></li>
                            <li>@lang('policies.our_policies')</li>
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
                        <div class="col-lg-3 col-md-4">
                            <div class="sticky-top">
                                <ul class="service-list m-b30">
                                    <li><a href="#gizlilik" title="@lang('policies.user_policies_main_title1')">@lang('policies.user_policies_main_title1')</a>
                                    </li>
                                    <li><a href="#kullanim" title="@lang('policies.user_policies_main_title2')">@lang('policies.user_policies_main_title2')</a>
                                    </li>
                                    <li><a href="#cerez" title="@lang('policies.user_policies_main_title3')">@lang('policies.user_policies_main_title3')</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-lg-9 col-md-8" id="gizlilik">
                            <h2 class="m-t0 m-b10 fw6 text-primary">@lang('policies.user_policies_main_title1')</h2>
                            <p><i>@lang('policies.user_policies_last_update')</i></p>
                            <p align="justify">@lang('policies.user_policies_subtitle1')<br>@lang('policies.user_policies_subtitle1_cont')</p>

                            <h4>@lang('policies.user_policies_subtitle2')</h4>
                            <p align="justify">@lang('policies.user_policies_subtitle2_cont')</p>

                            <h4>@lang('policies.user_policies_subtitle3')</h4>
                            <p align="justify">@lang('policies.user_policies_subtitle3_cont')</p>

                            <h4>@lang('policies.user_policies_subtitle4')</h4>
                            <p align="justify">@lang('policies.user_policies_subtitle4_cont')</p>

                            <h4>@lang('policies.user_policies_subtitle5')</h4>
                            <p>@lang('policies.user_policies_subtitle5_cont')
                            <ol>
                                <li>@lang('policies.user_policies_subtitle5_li1')</li>
                                <li>@lang('policies.user_policies_subtitle5_li2')</li>
                                <li>@lang('policies.user_policies_subtitle5_li3')</li>
                                <li>@lang('policies.user_policies_subtitle5_li4')</li>
                                <li>@lang('policies.user_policies_subtitle5_li5')</li>
                                <li>@lang('policies.user_policies_subtitle5_li6')</li>
                                <li>@lang('policies.user_policies_subtitle5_li7')</li>
                                <li>@lang('policies.user_policies_subtitle5_li8')</li>
                                <li>@lang('policies.user_policies_subtitle5_li9')</li>
                                </p>
                            </ol>
                            <p align="justify">@lang('policies.user_policies_subtitle5_cont2')</p><br>
                            <h4>@lang('policies.user_policies_subtitle6')</h4>
                            <p align="justify">@lang('policies.user_policies_subtitle6_cont')</p>
                            <div id="kullanim">
                                <h2 class="m-t0 m-b10 fw6 text-primary">@lang('policies.user_policies_main_title2')</h2>
                                <p><i>@lang('policies.user_policies_last_update')</i></p>

                                <p align="justify">@lang('policies.user_policies_subtitle7_cont1')</p>

                                <p align="justify">@lang('policies.user_policies_subtitle7_cont2')</p>

                                <h4>@lang('policies.user_policies_subtitle8')</h4>
                                <p align="justify">@lang('policies.user_policies_subtitle8_cont')</p>

                                <h4>@lang('policies.user_policies_subtitle9')</h4>
                                <p align="justify">@lang('policies.user_policies_subtitle9_cont')</p>

                                <h4>@lang('policies.user_policies_subtitle10')</h4>
                                <p align="justify">@lang('policies.user_policies_subtitle10_cont')</p>

                                <h4>@lang('policies.user_policies_subtitle11')</h4>
                                <p align="justify">
                                    <li>@lang('policies.user_policies_subtitle11_li1')</li>
                                    <li> @lang('policies.user_policies_subtitle11_li2')</li>
                                    <li>@lang('policies.user_policies_subtitle11_li3')</li>
                                    <li>@lang('policies.user_policies_subtitle11_li4')</li>
                                    <li>@lang('policies.user_policies_subtitle11_li5')</li>
                                </p>

                                <h4>@lang('policies.user_policies_subtitle12')</h4>
                                <p align="justify">@lang('policies.user_policies_subtitle12_cont')</p>

                                <p align="justify">@lang('policies.user_policies_subtitle12_cont2')</p>

                            </div>

                            <div id="cerez">
                                <h2 class="m-t0 m-b10 fw6 text-primary">@lang('policies.user_policies_main_title3')</h2>
                                <p><i>@lang('policies.user_policies_last_update')</i></p>

                                <p align="justify">@lang('policies.user_policies_subtitle13_cont1')</p>

                                <p align="justify">@lang('policies.user_policies_subtitle13_cont2')
                                </p>

                                <h4>@lang('policies.user_policies_subtitle14')</h4>
                                <p align="justify">@lang('policies.user_policies_subtitle14_cont')</p>
                                <p align="justify">@lang('policies.user_policies_subtitle14_cont2')</p>

                                <h4>@lang('policies.user_policies_subtitle15')</h4>
                                <p align="justify">@lang('policies.user_policies_subtitle15_cont')</p>

                                <h4>@lang('policies.user_policies_subtitle16')</h4>
                                <p align="justify">@lang('policies.user_policies_subtitle16_cont')</p>

                                <h4>@lang('policies.user_policies_subtitle17')</h4>
                                <p align="justify">@lang('policies.user_policies_subtitle17_cont')</p>

                                <h4>@lang('policies.user_policies_subtitle18')</h4>
                                <p align="justify">@lang('policies.user_policies_subtitle18_cont')</p>

                                <h4>@lang('policies.user_policies_subtitle19')</h4>
                                <p align="justify">@lang('policies.user_policies_subtitle19_cont')</p>

                                <h4>@lang('policies.user_policies_subtitle20')</h4>
                                <p align="justify">@lang('policies.user_policies_subtitle20_cont')</p>

                                <h4>@lang('policies.user_policies_subtitle21')</h4>
                                <p align="justify">@lang('policies.user_policies_subtitle21_cont')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection
