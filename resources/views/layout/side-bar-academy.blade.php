<div class="col-lg-3 col-md-4">
    <div class="sticky-top">
        <ul class="service-list m-b30">
            <li class="@if($route->uniq_slug === "silk-eyelash-academy") active @endif"><a href="{{ uniqRt('silk-eyelash-academy') }}" class="dez-page" title="@lang('header.silk_eyelash')">@lang('header.silk_eyelash')</a></li>
            <li class="@if($route->uniq_slug === "prosthetic-nails-academy") active @endif"><a href="{{ uniqRt('prosthetic-nails-academy') }}" class="dez-page" title="@lang('header.prosthetic_nail')">@lang('header.prosthetic_nail')</a></li>
            <li class="@if($route->uniq_slug === "hair-extension-academy") active @endif"><a href="{{ uniqRt('hair-extension-academy') }}" class="dez-page" title="@lang('header.hair_extension')">@lang('header.hair_extension')</a></li>
            <li class="@if($route->uniq_slug === "beauty-master-academy") active @endif"><a href="{{ uniqRt('beauty-master-academy') }}" class="dez-page" title="@lang('header.beauty_master')">@lang('header.beauty_master')</a></li>
            <li class="@if($route->uniq_slug === "permanent-makeup-academy") active @endif"><a href="{{ uniqRt('permanent-makeup-academy') }}" class="dez-page" title="@lang('header.permanent_makeup')">@lang('header.permanent_makeup')</a></li>
        </ul>
        <div class="download-brochure m-b30 ">
            <h4 class="text-primary">@lang('brazillian-blow-dry.sart_on_social_media')</h4>
            <p>@lang('brazillian-blow-dry.follow_us_on_insta')</p>
            <a href="https://www.instagram.com/s.art.beauty" class="site-button"
                title="@lang('brazillian-blow-dry.sart_official_center_instagram')" target="_blank">S.ART.BEAUTY.ACADEMY</a>
        </div>
    </div>
</div>
