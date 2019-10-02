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


    <!-- Load Facebook SDK for JavaScript -->
          <div id="fb-root"></div>
          <script>
            window.fbAsyncInit = function() {
              FB.init({
                xfbml            : true,
                version          : 'v4.0'
              });
            };

            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>

          <!-- Your customer chat code -->
          <div class="fb-customerchat"
            attribution=setup_tool
            page_id="197115017424243">
          </div>

    <!-- Load Facebook SDK for JavaScript End -->


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
  margin-top: 83px;
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
/* background-image: linear-gradient(60deg, #29323c 0%, #485563 100%); */
background-color: white;
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

.footer-widget p{
  text-align: left;
}

</style>




<body class="hero-anime">
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
    <div class="navigation-wrap bg-light start-header start-style">
  		<div class="container">
  			<div class="row">
  				<div class="col-12">
  					<nav class="navbar navbar-expand-md navbar-light">

  						<a class="navbar-brand" href="{{ route('homepage') }}" target="_blank"><img src="{{ asset('xubisoft/assets/images/xubi/xubi_logo2.png') }}" alt=""></a>

  						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  							<span class="navbar-toggler-icon"></span>
  						</button>

  						<div class="collapse navbar-collapse" id="navbarSupportedContent">
  							<ul class="navbar-nav ml-auto py-4 py-md-0">
  								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
  									<a class="nav-link" href="{{ route('homepage') }}">HOME</a>
  								</li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('services') }}">SERVICES</a>
  									<div class="dropdown-menu">

                      @foreach (App\Category::all() as $services)
                        <a class="dropdown-item" href="{{ url('/services') }}/{{ $services->id }}"> {{  $services->service_category_name }} </a>
                      @endforeach

  									</div>
  								</li>


                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('products') }}">PRODUCTS</a>
  									<div class="dropdown-menu">

  									</div>
  								</li>


                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('services') }}">TRAINING</a>
  									<div class="dropdown-menu">

  									</div>
  								</li>


  								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link" href="{{ route('contact') }}">CONTACT CENTER</a>
  								</li>

  								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link" href="{{ route('about') }}">ABOUT</a>
  								</li>
  								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<!-- <a class="nav-link" href="#">Contact</a> -->
                    <a href="#modal-popup-2" class="navsearch-button xs-modal-popup">
                          <i class="icon icon-search"></i>
                        </a>
  									<!-- <a class="nav-link" href="#">Contact</a> -->
  								</li>
  							</ul>
  						</div>

  					</nav>
  				</div>
  			</div>
  		</div>
  	</div>


    <!-- Mobile menu -->

    <div class="mobile-menu">
  <nav class="menu__nav">
    <ul class="r-list menu__list">
      <li class="menu__group">
        <a href="{{ route('homepage') }}" class="r-link menu__link">HOME</a>
      </li>
      <li class="menu__group">
        <a href="{{ route('services') }}" class="r-link menu__link">SERVICES</a>
      </li>
      <li class="menu__group">
        <a href="{{ route('products') }}" class="r-link menu__link">PRODUCTS</a>
      </li>
      <li class="menu__group">
        <a href="#" class="r-link menu__link">TRAINING</a>
      </li>
      <li class="menu__group">
        <a href="{{ route('contact') }}" class="r-link menu__link">CONTACT CENTER</a>
      </li>
      <li class="menu__group">
        <a href="{{ route('about') }}" class="r-link menu__link">ABOUT</a>
      </li>

    </ul>
  </nav>
  <div class="menu__toggle">
    <button class="r-button menu__hamburger">
      <span class="m-hamburger">
        <span class="m-hamburger__label">Open menu</span>
      </span>
    </button>
  </div>
</div>

<!-- Mobile menu end -->



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

<script type="text/javascript">


/* Please ❤ this if you like it! */


(function($) { "use strict";

$(function() {
  var header = $(".start-style");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
      header.removeClass('start-style').addClass("scroll-on");
    } else {
      header.removeClass("scroll-on").addClass('start-style');
    }
  });
});

//Animation

$(document).ready(function() {
  $('body.hero-anime').removeClass('hero-anime');
});

//Menu On Hover

$('body').on('mouseenter mouseleave','.nav-item',function(e){
    if ($(window).width() > 750) {
      var _d=$(e.target).closest('.nav-item');_d.addClass('show');
      setTimeout(function(){
      _d[_d.is(':hover')?'addClass':'removeClass']('show');
      },1);
    }
});

//Switch light/dark

$("#switch").on('click', function () {
  if ($("body").hasClass("dark")) {
    $("body").removeClass("dark");
    $("#switch").removeClass("switched");
  }
  else {
    $("body").addClass("dark");
    $("#switch").addClass("switched");
  }
});

})(jQuery);
</script>



<script type="text/javascript">

(function(){
  'use strict';

  class Menu {
    constructor(settings) {
      this.menuNode = settings.menuNode;
    }

    toggleMenuState(className) {
      if (typeof className !== 'string' || className.length === 0) {
        return console.log('you did not give the class for toggleState function');
      }
      return  this.menuNode.classList.toggle(className);
    }
  }

  const jsMenuNode = document.querySelector('.mobile-menu');
  const demoMenu = new Menu ({
    menuNode: jsMenuNode
  });

  function callMenuToggle(event) {
    demoMenu.toggleMenuState('menu_activated');
  }

  jsMenuNode.querySelector('.menu__hamburger').addEventListener('click', callMenuToggle);
})();



</script>






</body>

</html>
