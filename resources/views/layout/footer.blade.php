<footer>
    <!-- Footer Bottom  -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 text-center text-md-left">

                    <span><div class="dlab-topbar-left">
                        <ul>
                            <li><i class="fa fa-phone m-r5"></i> <a href="https://api.whatsapp.com/send?phone=99365675732" target="_blank" title="@lang('header.whatsapp_line')" rel="nofollow">@lang('header.contact_us_section1_subtitle3_cont_academy')</a></li>
                            <li><i class="fa fa-map-marker m-r5"></i><a href="https://goo.gl/maps/MLkCjkQovNnJvqrw6" target="_blank" title="location" rel="nofollow">@lang('header.contact_us_section1_subtitle1_cont_academy')</a></li>
                        </ul>
                    </div>
                </span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 text-center text-md-right ">
                    <div class="widget-link ">
                        <ul>
                            <li><a href="{{ uniqRt('policies') }}" title="@lang('footer.user_policies')">@lang('footer.user_policies')</a>
                            </li>
                            <li><a href="{{ uniqRt('contact-us') }}" title="@lang('footer.sart_official_center_contact')"
                                    target="_self">@lang('footer.user_policies_subtitle6')</a>
                            </li>
                        </ul>
                        <span>Copyright © - @lang('footer.sart')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END-->
<button class="scroltop fa fa-chevron-up"></button>
<a target="_blank" href="{{ settings('social-media')->whatsapp->href ?? '#' }}" rel="nofollow"
    title="@lang('footer.sart_official_center_whatsapp')"><button class="footer_contact fa fa-whatsapp"></button></a>
<a target="_blank" href="{{ settings('social-media')->instagram->href ?? '#' }}" rel="nofollow"
    title="@lang('footer.sart_official_center_instagram')"><button class="footer_contact fa fa-instagram position-b"></button></a>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="/plugins/wow/wow.js"></script><!-- WOW JS -->
<script src="/plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->

<script src="/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="/plugins/imagesloaded/imagesloaded.js"></script>
<script src="/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="/plugins/rangeslider/rangeslider.js"></script><!-- Rangeslider -->
<script src="/plugins/lightgallery/js/lightgallery-all.js"></script><!-- LIGHT GALLERY -->
<script src="/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="/js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
{{-- <script src="/js/dz.ajax.js"></script> --}}<!-- CONTACT JS  -->  <!-- bu dosyayı silmiştim ve buradan kaldırmadığım için hata alıyordum -->

<!-- Revolution JS FILES -->
<script src="/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="/js/rev.slider.js"></script>
<script>
    jQuery(document).ready(function() {
        'use strict';
        dz_rev_slider_1();
    });
    $(document).ready(function() {
        $('.DZ-bt-buy-now').css('display', 'none'); // Doğru, çünkü jQuery'de .css() yöntemi var
    });
    // $(document).ready(function() {
    //     $('.DZ-bt-buy-now').style('display', 'none'); // Hatalı, çünkü jQuery'de .style() yöntemi yok
    // });
</script>
</body>

</html>
