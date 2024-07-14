{{-- 404 Sayfası Sayfası --}}
@extends('layout.master')
@section('content')
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr dlab-bnr-inr  bg-pt iletisim-position bg-primary">
        <div class="pattern-layer" style="background-image:url(/images/sart/contact_us.png);"></div>
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">404</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{ route('route',['/']) }}" title="@lang('bridal-hair.sart_official_center_home')"
                            target="_self">@lang('bridal-hair.home')</a></li>
                        <li>404</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->

<!-- Error Page -->
<div class="section-full content-inner-3 error-page" style="background-image:url(images/background/bg6.jpg); background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 m-b30 align-self-center text-center">
                <h2 class="dz_error text-secondry">404</h2>
                <h3>OOPS!</h3>
                <h4>@lang('404.text_404')</h4>
                <a href="{{ uniqRt('index') }}" class="site-button">@lang('404.button_back_home')</a>
            </div>
        </div>
    </div>
</div>
<!-- Error Page END -->
</div>
@endsection
