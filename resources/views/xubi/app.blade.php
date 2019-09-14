<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> @yield('title') </title>



    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!-- signatra-font -->
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/signatra-font.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('xubisoft/assets/images/xubi/cropped-download-32x32.jpg') }}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/rev-settings.css') }}">
    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/plugins.css') }}" />
    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/style.css') }}">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/responsive.css') }}" /> </head>
<style>



    .blog-slider {
        width: 95%;
        position: relative;
        max-width: 800px;
        margin: auto;
        background: #fff;
        box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
        padding: 25px;
        border-radius: 25px;
        height: 400px;
        transition: all .3s;
    }

    @media screen and (max-width: 992px) {
        .blog-slider {
            max-width: 680px;
            height: 400px;
        }
    }

    @media screen and (max-width: 768px) {
        .blog-slider {
            min-height: 500px;
            height: auto;
            margin: 180px auto;
        }
    }

    @media screen and (max-height: 500px) and (min-width: 992px) {
        .blog-slider {
            height: 350px;
        }
    }

    .blog-slider__item {
        display: flex;
        align-items: center;
    }

    @media screen and (max-width: 768px) {
        .blog-slider__item {
            flex-direction: column;
        }
    }

    .blog-slider__item.swiper-slide-active .blog-slider__img img {
        opacity: 1;
        transition-delay: .3s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > * {
        opacity: 1;
        transform: none;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(1) {
        transition-delay: 0.3s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(2) {
        transition-delay: 0.4s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(3) {
        transition-delay: 0.5s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(4) {
        transition-delay: 0.6s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(5) {
        transition-delay: 0.7s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(6) {
        transition-delay: 0.8s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(7) {
        transition-delay: 0.9s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(8) {
        transition-delay: 1s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(9) {
        transition-delay: 1.1s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(10) {
        transition-delay: 1.2s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(11) {
        transition-delay: 1.3s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(12) {
        transition-delay: 1.4s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(13) {
        transition-delay: 1.5s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(14) {
        transition-delay: 1.6s;
    }

    .blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(15) {
        transition-delay: 1.7s;
    }

    .blog-slider__img {
        width: 300px;
        flex-shrink: 0;
        height: 300px;
        /*  background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);*/
        box-shadow: 4px 13px 30px 1px rgba(252, 56, 56, 0.2);
        border-radius: 20px;
        transform: translateX(-80px);
        overflow: hidden;
    }

    .blog-slider__img:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /*  background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);*/
        border-radius: 20px;
        opacity: 0.8;
    }

    .blog-slider__img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        opacity: 0;
        border-radius: 20px;
        transition: all .3s;
    }

    @media screen and (max-width: 768px) {
        .blog-slider__img {
            transform: translateY(-50%);
            width: 90%;
        }
    }

    @media screen and (max-width: 576px) {
        .blog-slider__img {
            width: 95%;
        }
    }

    @media screen and (max-height: 500px) and (min-width: 992px) {
        .blog-slider__img {
            height: 270px;
        }
    }

    .blog-slider__content {
        padding-right: 25px;
    }

    @media screen and (max-width: 768px) {
        .blog-slider__content {
            margin-top: -80px;
            text-align: center;
            padding: 0 30px;
        }
    }

    @media screen and (max-width: 576px) {
        .blog-slider__content {
            padding: 0;
        }
    }

    .blog-slider__content > * {
        opacity: 0;
        transform: translateY(25px);
        transition: all .4s;
    }

    .blog-slider__code {
        color: #7b7992;
        margin-bottom: 15px;
        display: block;
        font-weight: 500;
    }

    .blog-slider__title {
        font-size: 24px;
        font-weight: 700;
        color: #0d0925;
        margin-bottom: 20px;
    }

    .blog-slider__text {
        color: #4e4a67;
        margin-bottom: 30px;
        line-height: 1.5em;
    }

    .blog-slider__button {
        display: inline-flex;
        background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
        padding: 15px 35px;
        border-radius: 50px;
        color: #fff;
        box-shadow: 0px 14px 80px rgba(252, 56, 56, 0.4);
        text-decoration: none;
        font-weight: 500;
        justify-content: center;
        text-align: center;
        letter-spacing: 1px;
    }

    @media screen and (max-width: 576px) {
        .blog-slider__button {
            width: 100%;
        }
    }

    .blog-slider .swiper-container-horizontal > .swiper-pagination-bullets,
    .blog-slider .swiper-pagination-custom,
    .blog-slider .swiper-pagination-fraction {
        bottom: 10px;
        left: 0;
        width: 100%;
    }

    .blog-slider__pagination {
        position: absolute;
        z-index: 21;
        right: 20px;
        width: 11px !important;
        text-align: center;
        left: auto !important;
        top: 50%;
        bottom: auto !important;
        transform: translateY(-50%);
    }

    @media screen and (max-width: 768px) {
        .blog-slider__pagination {
            transform: translateX(-50%);
            left: 50% !important;
            top: 205px;
            width: 100% !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
        margin: 8px 0;
    }

    @media screen and (max-width: 768px) {
        .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 5px;
        }
    }

    .blog-slider__pagination .swiper-pagination-bullet {
        width: 11px;
        height: 11px;
        display: block;
        border-radius: 10px;
        background: #062744;
        opacity: 0.2;
        transition: all .3s;
    }

    .blog-slider__pagination .swiper-pagination-bullet-active {
        opacity: 1;
        background: #fd3838;
        height: 30px;
        box-shadow: 0px 0px 20px rgba(252, 56, 56, 0.3);
    }

    @media screen and (max-width: 768px) {
        .blog-slider__pagination .swiper-pagination-bullet-active {
            height: 11px;
            width: 30px;
        }
    }




</style>




<body>
    <!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

  <!-- Loader Start-->

  <!-- Loader End-->

    <!-- prelaoder -->
    <!--
	 <div id="preloader">
        <div class="preloader-wrapper">
            <div class="spinner"></div>
        </div>
     </div>
-->
    <!-- END prelaoder -->
    <!-- header section -->
    <header class="xs-header header-transparent header-style2">
        <div class="container">
            <nav class="xs-menus clearfix">
                <div class="nav-header">

                    <a class="nav-brand" href="{{ route('homepage') }}"> <img src="{{ asset('xubisoft/assets/images/xubi/xubi_logo2.png') }}" alt=""> </a>
                    <div class="nav-toggle"></div>
                </div>
                <div class="nav-menus-wrapper align-to-right">
                    <!-- menu list -->
                    <ul class="nav-menu">
                        <li><a href="{{ route('homepage') }}">HOME</a></li>
                        <li> <a href="{{ route('services') }}">SERVICES</a>
                            <ul class="nav-dropdown xs-icon-menu">
                                <li class="single-menu-item"> <a href="{{ route('custom_software') }}"><i class="icon icon-customer-service"></i> CUSTOM SOFTWARE DEVELOPMENT</a> </li>
                                <li class="single-menu-item"> <a href="{{ route('web_design_development') }}"><i class="icon icon-customer-service"></i> WEB DESIGN & DEVELOPMENT</a> </li>
                                <li class="single-menu-item"> <a href="{{ route('apps_development') }}"><i class="icon icon-customer-service"></i> APPS DEVELOPMENT</a> </li>
                                <li class="single-menu-item"> <a href="{{ route('graphics_solution') }}"><i class="icon icon-customer-service"></i> GRAPHICS SOLUTION</a> </li>
                                <li class="single-menu-item"> <a href="{{ route('career_development') }}"><i class="icon icon-customer-service"></i>CAREER DEVELOPMENT</a> </li>
                                <li class="single-menu-item"> <a href="{{ route('domain_hosting') }}"><i class="icon icon-customer-service"></i> DOMAIN AND HOSTING</a> </li>
                                <li class="single-menu-item"> <a href="{{ route('clipping_path_services') }}"><i class="icon icon-customer-service"></i> CLIPPING PATH SERVICE</a> </li>
                                <li class="single-menu-item"> <a href="{{ route('register') }}"><i class="icon icon-customer-service"></i> REGISTRATION</a> </li>
                            </ul>
                        </li>
                        <li><a href="#">PRODUCTS</a>
                            <ul class="nav-dropdown xs-icon-menu">
                                <li class="single-menu-item"><a href="cases.html"><i class="icon icon-direction"></i> ERP SOFTWARE</a></li>
                                <li class="single-menu-item"><a href="case-details.html"><i class="icon icon-document"></i> POS SOFTWARE</a></li>
                                <li class="single-menu-item"><a href="portfolio.html"><i class="icon icon-image"></i> HR & PAYROLL SOFTWARE</a></li>
                                <li class="single-menu-item"><a href="portfolio-masonry.html"><i class="icon icon-image"></i> FREIGHT FORWARDING SOFTWARE</a></li>
                                <li class="single-menu-item"><a href="pricing.html"><i class="icon icon-bullhorn"></i> ACCOUNTING & INVENTORY SOFTWARE</a></li>
                                <li class="single-menu-item"><a href="contact.html"><i class="icon icon-envelope"></i> SCHOOL MANAGEMENT SOFTWARE</a></li>
                            </ul>
                        </li>
                        <li><a href="#">TRAINING</a>
                            <ul class="nav-dropdown xs-icon-menu">
                                <li class="single-menu-item"><a href="news-list.html"><i class="icon icon-presentation2"></i>        WEB DESIGN & DEVELOPMENT
</a></li>
                                <li class="single-menu-item"><a href="blog-grid.html"><i class="icon icon-presentation2"></i> GRAPHICS & ANIMATION
</a></li>
                                <li class="single-menu-item"><a href="blog-grid-sidebar.html"><i class="icon icon-presentation"></i> ANDROID APPS DEVELOPMENT
</a></li>
                                <li class="single-menu-item"><a href="blog-single.html"><i class="icon icon-presentation"></i> NETWORKING
</a></li>
                                <li class="single-menu-item"><a href="blog-single-sidebar.html"><i class="icon icon-presentation"></i> WORDPRESS CUSTOMIZATION
</a></li>
                                <li class="single-menu-item"><a href="blog-single-sidebar.html"><i class="icon icon-presentation"></i> SOFTWARE DEVELOPMENT

</a></li>
                                <li class="single-menu-item"><a href="blog-single-sidebar.html"><i class="icon icon-presentation"></i>SEIP
</a></li>
                            </ul>
                        </li>
                        <li> <a href="{{ route('contact') }}">CONTACT CENTER</a></li>
                        <li> <a href="#">ABOUT</a></li>
                    </ul>
                    <!-- End menu list -->
                    <ul class="xs-menu-tools">
<!--                        <li> <a href="#" class="offset-side-bar"><i class="icon icon-cart2"></i></a> </li>-->
                        <li> <a href="#modal-popup-2" class="navsearch-button xs-modal-popup"><i class="icon icon-search"></i></a> </li>
                        <li> <a href="#" class="navSidebar-button"><i class="icon icon-burger-menu"></i></a> </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- .container END -->
    </header>


@yield('content')



<!-- END sidebar widget item -->
<!-- END offset cart strart -->
<!-- footer section start -->
<footer class="xs-footer-section footer-style3">
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <div class="footer-logo-wraper">
                            <a href="index.html" class="footer-logo"> <img src="{{ asset('xubisoft/assets/images/xubi/xubi_logo2.png') }}" alt="footer logo"> </a>
                        </div>
                        <p>Address <a href="https://www.google.com/maps/place/London,+UK/@51.528308,-0.3817812,10z/data=!3m1!4b1!4m5!3m4!1s0x47d8a00baf21de75:0x52963a5addd52a99!8m2!3d51.5073509!4d-0.1277583" target="_blank">5272 Lyngate Ct Burke, VA 2015-1688</a></p>
                        <p>Contact Info <a href="tel:+1%20998%20150%30%2020"> +1 998 150 30 20</a> <a href="mailto:info@agencify.com">info@agencify.com</a></p>
                    </div>
                    <!-- .footer-widget END -->
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <h4 class="widget-title">Useful Links</h4>
                        <ul class="xs-list">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li><a href="blog-grid-sidebar.html">News & Blog</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="cases.html">Case</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                        </ul>
                        <!-- .xs-list END -->
                    </div>
                    <!-- .footer-widget END -->
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <h4 class="widget-title">About Us</h4>
                        <ul class="xs-list">
                            <li><a href="about.html">Our Company</a></li>
                            <li><a href="about.html">Advisory Board</a></li>
                        </ul>
                        <!-- .xs-list END -->
                    </div>
                    <!-- .footer-widget END -->
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <h4 class="widget-title">Our Services</h4>
                        <ul class="xs-list">
                            <li><a href="portfolio.html">Web Design</a></li>
                            <li><a href="portfolio-masonry.html">Web Application</a></li>
                            <li><a href="portfolio.html">Android Apps</a></li>
                            <li><a href="portfolio-masonry.html">iOS Apps</a></li>
                            <li><a href="portfolio.html">Mobile Application</a></li>
                            <li><a href="portfolio-masonry.html">Web Development</a></li>
                            <li><a href="portfolio.html">Corporate Service</a></li>
                        </ul>
                        <!-- .xs-list END -->
                    </div>
                    <!-- .footer-widget END -->
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <h4 class="widget-title">Useful Links</h4>
                        <ul class="xs-list">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Legal info</a></li>
                        </ul>
                        <!-- .xs-list END -->
                    </div>
                    <!-- .footer-widget END -->
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <h4 class="widget-title">Other Links</h4>
                        <ul class="xs-list">
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">Adchoies</a></li>
                        </ul>
                        <!-- .xs-list END -->
                    </div>
                    <!-- .footer-widget END -->
                </div>
            </div>
            <!-- .row END -->
        </div>
        <!-- .container END -->
    </div>
    <!-- .footer-top-area END -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright-section">
                        <p>Copyright 2019, <a href="#">Xubisoft</a> All Rights Reserved.</p>
                    </div>
                    <!-- .copyright-section END -->
                </div>
                <div class="col-md-6">
                    <div class="copyright-content">
                        <ul class="social-list version-2">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer-bottom-area END -->
</footer>
<!-- footer section end -->

<!-- js file start -->
<script src="{{ asset('xubisoft/assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/plugins.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/Popper.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/scrollax.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/swiper.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyDeZubzJTQgtjreqsdaGMGXxaxP-pv6pSk"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/delighters.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/typed.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.parallax.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/skrollr.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/shuffle-letters.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>

<script>
  @include('sweetalert::alert')
</script>




<!-- End js file -->
<script>
    var swiper = new Swiper('.blog-slider', {
        spaceBetween: 30
        , effect: 'fade'
        , loop: false
        , mousewheel: {
            invert: false
        , }
        , // autoHeight: true,
        pagination: {
            el: '.blog-slider__pagination'
            , clickable: true
        , }
    });
</script>



</body>

</html>
