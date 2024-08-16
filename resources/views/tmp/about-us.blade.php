    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary"
            style="background-image:url('{{ asset('images/nur-art-img/nur-art-06.png') }}');">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white fw-4">@lang('about.about_us')</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('route', ['/']) }}" title="@lang('about.sart')">@lang('about.home')</a></li>
                            <li>@lang('about.about_us')</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="content-block">
            <div class="section-full content-inner overlay-white-middle"
                style="background-image:url(/images/sart/002.png); background-position: bottom, top; background-size: 100% 100%; background-repeat: no-repeat;">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <div class="dlab-separator-outer m-b0">
                            <div class="dlab-separator text-primary style-icon"><img
                                    src="/images/nur-art-logos/nur-art-logo-06.png" alt="@lang('about.index_section2_img_alt')"></div>
                        </div>
                        <h6 class="m-b10">@lang('about.about_us_section1_subtitle_academy')</h6>
                        <p>@lang('about.about_us_section1_cont_academy')</p>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ uniqRt('contact-us') }}" class="site-button outline focus-white"
                        title="@lang('about.sart_official_center_job_explanation_academy')" target="_self">@lang('about.index_section1_contact_redirect_button_academy') &nbsp;&nbsp;&rarr;</a>
                </div>
            </div>
            <!-- Our Pricing -->
            <div class="section-full content-inner bg-blue-light"
                style="background-image:url(/images/sart/005.png); background-position: bottom; background-size: cover; background-repeat: no-repeat;">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <h2 class="text-primary m-b10">@lang('about.about_us_section_title_academy')</h2>
                        <h6 class="text-primary m-b10">@lang('about.about_us_section1_title_academy')</h6>
                        <p>@lang('about.about_us_section1_cont1_academy')</p>
                        {{-- Wezipämiz --}}
                        <h6 class="text-primary m-b10">@lang('about.about_us_section2_title_academy')</h6>
                        <p>@lang('about.about_us_section2_cont2_academy')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
