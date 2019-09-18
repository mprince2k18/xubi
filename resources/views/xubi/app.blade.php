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
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/responsive.css') }}" />




  </head>

<style>

.nav-menu li.active>a{
  color: #ecf0f1 !important;
  background-color: #00AEEF;
}
.nav-menu li a:hover{
  background-color: #00AEEF;
  color: #ecf0f1 !important;

}


.xs-header.header-style4 .xs-menus .nav-menu>li>a{
  padding: 15px 15px !important;
  border-radius: 10px;
  }

    /*PRELOADING------------ */

    #global-loader {
        position:fixed;
        z-index:50000;
        background: url('https://static.wixstatic.com/media/a9c507_e7dfa5241a674cd88e4f79eea3ec1013~mv2.gif') no-repeat 50% 50% rgba(255, 255, 255);
        left:0;
        top:0;
        right:0;
        bottom:0;
        margin:0 auto
    }

.header-transparent{
  position: fixed;
}

.case-details-banner{
  margin-top: 105px;
}

/* scroll bar */

body::-webkit-scrollbar {
    width: 0.7em;
}

body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}

body::-webkit-scrollbar-thumb {
background-image: linear-gradient(to top, #505285 0%, #585e92 12%, #65689f 25%, #7474b0 37%, #7e7ebb 50%, #8389c7 62%, #9795d4 75%, #a2a1dc 87%, #b5aee4 100%);
  outline: 1px solid slategrey;
  border-radius: 15px;
}

/* scroll bar end */
.main-menu{
background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
border-radius: 0 0 8px 8px;
}


.xs-footer-section{
  background-image: url({{ asset('xubisoft/assets/images/footer-bg.jpg') }});
  background-repeat:no-repeat;
  background-size: cover;

}

.xs-footer-section .footer-top-area{
  background-color: rgba(0,0,0,0.8);
}

.xs-footer-section.footer-style3 .footer-bottom-area{
  background-color: #2d3436;
}

</style>




<body>
    <!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

  <!-- Loader Start-->
<div id="global-loader" ></div>
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
    <header class="xs-header header-transparent header-style4 bg-dark fixed main-menu">
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
                        <li><a href="{{ route('products') }}">PRODUCTS</a>
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
                        <li>
                          <a href="#modal-popup-2" class="navsearch-button xs-modal-popup">
                            <i class="icon icon-search"></i>
                          </a>
                        </li>

                        <li>
                          <a href="#" class="navSidebar-button">
                            <i class="icon icon-burger-menu">

                            </i>
                          </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- .container END -->

        <!-- search panel strart -->
        <!-- xs modal -->
        <div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="xs-search-panel">
                          <form method="GET" action="{{ route('search') }}" class="xs-search-group">
                            <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                            <button type="submit" class="search-button"><i class="icon icon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End xs modal -->
        <!-- end search panel strart -->


    </header>

<!-- header end -->

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
                        <p>Address <a href="https://goo.gl/maps/QJyb48gb1RVkqV3Q8" target="_blank">HOUSE-19, ROAD-4, SECTOR-4, UTTARA, DHAKA-1230</a></p>
                        <p>Contact Info
                          <a href="+880258955125">+880258955125</a>
                          <a href="+8801611609372">+8801611609372</a>
                           <a href="mailto:contact@xubisoft.com">contact@xubisoft.com</a>
                           <a href="mailto:info@xubisoft.com">info@xubisoft.com</a>
                         </p>
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
<script src="{{ asset('xubisoft/assets/js/sweetalert2.all.js') }}"></script>

<script>
  @include('sweetalert::alert')
</script>

<script type="text/javascript">
// ______________ PAGE LOADING
	$(window).on("load", function(e) {
		$("#global-loader").fadeOut("fast");
	})
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
