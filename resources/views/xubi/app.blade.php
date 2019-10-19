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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/font-awesome.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/rev-settings.css') }}">

    @yield('css')

    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/plugins.css') }}" />
    <!--font css-->
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/icons.css') }}" />
    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/style.css') }}">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/responsive.css') }}" />


  </head>

<style>

@import url('https://fonts.googleapis.com/css?family=Rancho&display=swap');

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

.watermark-title{
  top: -70px !important;
}

.inner-banner-title{
  font-family: 'Rancho', cursive !important;
}

.dropdown-item{
  padding: 15px 15px !important;
}

.menu__toggle::before{
  background-color: #2d3436 !important;
  opacity: .7;
}

.menu__nav{
  text-align: center;
}

.widget-title{
  font-size: 20px !important;
}
.xs-list li a{
  font-size: 16px !important;
}

.footer-logo-wraper{
  text-align: center;
}
.footer-client{
  padding: 20px;
}

.footer-logo img{
  width: 35%;
}

.footer-client-1 img{
  width: 100%;
}

.footer-client-1{
  text-align: center;
}

.footer-client-2 img{
  width: 100%;
}

.footer-client-2{
  text-align: center;
}


</style>

@yield('css')




<body class="hero-anime">


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
          page_id="392182544670451">
        </div>


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
  								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ Route::currentRouteNamed('homepage') ? 'active' : '' }}">
  									<a class="nav-link" href="{{ route('homepage') }}">HOME</a>
  								</li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ Route::currentRouteNamed('services') ? 'active' : '' }}">
  									<a class="nav-link dropdown-toggle" href="{{ route('services') }}">SERVICES <i class="pe-7s-angle-down"></i> </a>
  									<div class="dropdown-menu">

                      @foreach (App\Category::all() as $services)
                        <a class="dropdown-item" href="{{ url('/services') }}/{{ $services->id }}"> {{  $services->service_category_name }} </a>
                      @endforeach

  									</div>
  								</li>


                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link dropdown-toggle" href="{{ route('products') }}">PRODUCTS <i class="pe-7s-angle-down"></i></a>
  									<div class="dropdown-menu">
                      @foreach (App\Product::all() as $products)
                        <a class="dropdown-item" href="{{ url('/products') }}/{{ $products->id }}"> {{  $products->product_name }} </a>
                      @endforeach
  									</div>
  								</li>


                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link dropdown-toggle" href="{{ route('training') }}">TRAINING <i class="pe-7s-angle-down"></i></a>


                    <div class="dropdown-menu">
                      @foreach (App\Training::all() as $trainings)
                        <a class="dropdown-item" href="{{ $trainings->id }}"> {{ $trainings->name }} </a>
                      @endforeach
  									</div>


  								</li>


  								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link" href="{{ route('contact') }}">CONTACT US</a>
  								</li> -->


  								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link" href="{{ route('contact_center') }}">CONTACT CENTER</a>
  								</li>

  								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
  								</li>

  								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link" href="{{ route('career_index') }}">CAREER</a>
  								</li> -->

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
        <a href="{{ route('training') }}" class="r-link menu__link">TRAINING</a>
      </li>
      <li class="menu__group">
        <a href="{{ route('contact') }}" class="r-link menu__link">CONTACT US</a>
      </li>
      <li class="menu__group">
        <a href="{{ route('contact_center') }}" class="r-link menu__link">CONTACT CENTER</a>
      </li>
      <li class="menu__group">
        <a href="{{ route('career_index') }}" class="r-link menu__link">CAREER</a>
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

                <div class="col-md-3">
                    <div class="footer-widget">
                        <h4 class="widget-title">GET IN TOUCH</h4>
                        <ul class="xs-list">
                            <li><a href="about.html"> <i class="lni-map-marker"></i> House-19, Road-4, Sector-4, Uttara, Dhaka-1230 </a></li>
                            <li><a href="about.html"> <i class="lni-phone-handset"></i> +88 02 58955125 </a></li>
                            <li><a href="about.html"> <i class="lni-mobile"></i> +88 01611-609372 </a></li>
                            <li><a href="about.html"> <i class="lni-envelope"></i> contact@xubisoft.com </a></li>
                            <li><a href="about.html"> <i class="lni-invention"></i> info@xubisoft.com </a></li>
                        </ul>
                        <!-- .xs-list END -->
                    </div>
                    <!-- .footer-widget END -->
                </div>


                <div class="col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo-wraper">
                            <a href="{{ route('homepage') }}" class="footer-logo"> <img src="{{ asset('xubisoft/assets/images/xubi/Xubisoft Logo.png') }}" alt="footer logo"> </a>


                        <div class="footer-client">
                          <label class="widget-title">MEMBER OF</label>
                          <div class="row">
                            <div class="col-md-4 footer-client-1 offset-md-2">
                              <a href="{{ route('homepage') }}" class="footer-logo"> <img src="{{ asset('xubisoft/assets/images/xubi/BASSIS.png') }}" alt="footer logo"> </a>

                            </div>
                            <div class="col-md-4 footer-client-2">
                              <a href="{{ route('homepage') }}" class="footer-logo"> <img src="{{ asset('xubisoft/assets/images/xubi/BACCO.png') }}" alt="footer logo"> </a>

                            </div>
                          </div>
                        </div>



                        </div>
                    </div>
                    <!-- .footer-widget END -->
                </div>



                <div class="col-md-3">
                    <div class="footer-widget">
                        <h4 class="widget-title">SUPPORTS</h4>
                        <ul class="xs-list">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="{{ route('career_index') }}">Career</a></li>
                            <li><a href="#">Terms & Policies</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Cookies</a></li>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('xubisoft/assets/js/plugins.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

@yield('js')

<script src="{{ asset('xubisoft/assets/js/main.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/sweetalert2.all.js') }}"></script>
<script src="{{ asset('xubisoft/assets/custom/js/custom.js') }}"></script>


<script>
  @include('sweetalert::alert')
</script>


</body>

</html>
