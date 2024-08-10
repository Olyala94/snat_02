    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary" style="background-image:url('{{asset('images/nur-art-img/nur-art-06.png')}}');">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white fw-4">@lang('about.about_us')</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{ route('route',['/']) }}" title="@lang('about.sart')">@lang('about.home')</a></li>
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
                            <div class="dlab-separator text-primary style-icon"><img src="/images/sart/logo_fav.png" alt="@lang('about.index_section2_img_alt')"></div>
                        </div>
                        <h2 class="text-primary m-b10">@lang('about.sart_academy')</h2>
                        <h6 class="m-b10">@lang('about.about_us_section1_subtitle_academy')</h6>
                        <p>@lang('about.about_us_section1_cont_academy')</p>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ uniqRt('contact-us') }}" class="site-button outline focus-white"
                        title="@lang('about.sart_official_center_job_explanation_academy')" target="_self">@lang('about.index_section1_contact_redirect_button_academy') &nbsp;&nbsp;&rarr;</a>
                </div>
            </div>
            <!-- Why Chose Us -->

            <!-- Our Pricing -->
            <div class="section-full content-inner bg-blue-light"
                style="background-image:url(/images/sart/005.png); background-position: bottom; background-size: cover; background-repeat: no-repeat;">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <h2 class="text-primary m-b10">@lang('about.about_us_section_title_academy')</h2>
                        {{-- <div class="dlab-separator-outer m-b0">
                            <div class="dlab-separator text-primary style-icon"><img src="/images/sart/logo_fav.png" alt="@lang('about.index_section2_img_alt')"></div>
                        </div> --}}
                        {{-- Gözýetimimiz --}}
                        <h6 class="text-primary m-b10">@lang('about.about_us_section1_title_academy')</h6>
                        <p>@lang('about.about_us_section1_cont1_academy')</p>
                        {{-- Wezipämiz --}}
                        <h6 class="text-primary m-b10">@lang('about.about_us_section2_title_academy')</h6>
                        <p>@lang('about.about_us_section2_cont2_academy')</p>
                    </div>
                </div>
            </div>
            <!-- Our Pricing -->

            <!-- Testimonials Of Our Clients -->
            {{-- <div class="section-full content-inner"
                style="background-image:url(/images/sart/003.webp); background-position: bottom; background-size:cover;">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <div class="dlab-separator-outer m-b0">
                            <div class="dlab-separator text-primary style-icon">
                                <img src="/images/sart/logo-transparent.png" alt="@lang('about.index_section2_img_alt')">
                            </div>
                        </div>
                        <h2 class="text-white m-b10">@lang('about.about_us_section3_title')</h2>
                        <p>@lang('about.about_us_section3_cont')</p>
                    </div>
                    <div
                        class="testimonial-two-dots owl-carousel owl-theme owl-dots-primary-full owl-btn-center-lr owl-btn-3">
                        <div class="item p-a5">
                            <div class="testimonial-9">
                                <div class="testimonial-pic radius style1"><img src="/images/sart/kas_laminasyon_5.webp"
                                        width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>@lang('about.about_us_client_comments1')</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Ayşe K.</strong> <span
                                        class="testimonial-position">@lang('about.about_us_client_job1')></span> </div>
                            </div>
                        </div>
                        <div class="item p-a5">
                            <div class="testimonial-9">
                                <div class="testimonial-pic radius style1"><img src="/images/sart/gelin_topuzu_1.webp"
                                        width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>@lang('about.about_us_client_comments2')</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Zeynep Y.</strong> <span
                                        class="testimonial-position">@lang('about.about_us_client_job2')</span> </div>
                            </div>
                        </div>
                        <div class="item p-a5">
                            <div class="testimonial-9">
                                <div class="testimonial-pic radius style1"><img src="/images/sart/dip_boyası_4.webp"
                                        width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>@lang('about.about_us_client_comments3')</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Selin A.</strong> <span
                                        class="testimonial-position">@lang('about.about_us_client_job3')</span> </div>
                            </div>
                        </div>
                        <div class="item p-a5">
                            <div class="testimonial-9">
                                <div class="testimonial-pic radius style1"><img src="/images/sart/protez_tırnak_2.webp"
                                        width="100" height="100" alt="Aýdym-Saz "></div>
                                <div class="testimonial-text">
                                    <p>@lang('about.about_us_client_comments4')</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Elif S.</strong> <span
                                        class="testimonial-position">@lang('about.about_us_client_job4')</span> </div>
                            </div>
                        </div>
                        <div class="item p-a5">
                            <div class="testimonial-9">
                                <div class="testimonial-pic radius style1"><img src="/images/sart/ipek_kirpik_3.webp"
                                        width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>@lang('about.about_us_client_comments5')</p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Suzan B.</strong> <span
                                        class="testimonial-position">@lang('about.about_us_client_job5')</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Testimonials Of Our Clients -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
