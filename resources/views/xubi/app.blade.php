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
    <link rel="stylesheet" href="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473564/css/signatra-font_yhlzuf.css">
    <link rel="icon" type="image/png" href="{{ asset('xubisoft/assets/images/xubi/cropped-download-32x32.jpg') }}">
    <!-- Place favicon.ico in the root directory -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473563/css/animate_dmpuz6.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
    <link rel="stylesheet" href="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473564/css/magnific-popup_tttv7p.css">
    <link rel="stylesheet" href="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473564/css/owl.carousel.min_qd0csf.css">
    <link rel="stylesheet" href="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473564/css/owl.theme.default.min_b3cizb.css">
    <link rel="stylesheet" href="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473565/css/swiper.min_weyvny.css">
    <link rel="stylesheet" href="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473564/css/rev-settings_ul7oao.css">

    @yield('css')

    <!--For Plugins external css-->
    <link rel="stylesheet" href="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473564/css/plugins_bvimsp.css" />
    <!--font css-->
    <link rel="stylesheet" href="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473563/css/icons_rczxjz.css" />
    <!--Theme custom css -->
    <link rel="stylesheet" href="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473565/css/style_oefpc8.css">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473565/css/responsive_qjrbqn.css" />
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/custom/css/custom.css') }}" />

    <script src="https://kit.fontawesome.com/84b3029d9e.js" crossorigin="anonymous"></script>
  </head>

<style>

@import url('https://fonts.googleapis.com/css?family=Rancho&display=swap');

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

.xs-footer-section{
  background-image: url('https://i.pinimg.com/originals/39/2f/38/392f38884a695299b0b0a295f5edb1a2.png');
  /* background-image: url({{ asset('xubisoft/assets/images/footer-bg.jpg') }}); */
  background-repeat:no-repeat;
  background-size: cover;

}

.xs-footer-section .footer-top-area {
    background-color: rgba(0,0,0,0.8);
}

@media only screen and (max-width: 600px) {
       .footer-logo{
           width: 50% !important;
       }
       .footer-member{
           width: 50% !important;
       }
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
        }(document, 'script', 'facebook-jssdk'));
        </script>

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

  						<a class="navbar-brand" href="{{ route('homepage') }}" target="_blank"><img src="{{ asset('xubisoft/assets/images/xubi/xubi_logo2.png') }}" alt="Xubisoft Ltd"></a>

  						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  							<span class="navbar-toggler-icon"></span>
  						</button>

  						<div class="collapse navbar-collapse" id="navbarSupportedContent">
  							<ul class="navbar-nav ml-auto py-4 py-md-0">
  								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ Route::currentRouteNamed('homepage') ? 'active' : '' }}">
  									<a class="nav-link" href="{{ route('homepage') }}">HOME</a>
  								</li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ Route::currentRouteNamed('services') ? 'active' : '' }}">
  									<a class="nav-link dropdown-toggle" href="{{ route('services') }}">SERVICES <i class="fas fa-angle-down"></i> </a>
  									<div class="dropdown-menu">

                      @foreach (App\Category::all() as $services)
                        <a class="dropdown-item" href="{{ url('/services') }}/{{ $services->id }}"> {{  $services->service_category_name }} </a>
                      @endforeach

  									</div>
  								</li>


                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link dropdown-toggle" href="{{ route('products') }}">PRODUCTS <i class="fas fa-angle-down"></i></i></a>
  									<div class="dropdown-menu">
                      @foreach (App\Product::all() as $products)
                        <a class="dropdown-item" href="{{ url('/products') }}/{{ $products->id }}"> {{  $products->product_name }} </a>
                      @endforeach
  									</div>
  								</li>


                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link dropdown-toggle" href="{{ route('training') }}">TRAINING <i class="fas fa-angle-down"></i></i></a>


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
                          <i class="fa fa-search"></i>
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



        {{-- /* <!-- search panel strart --> */ --}}
        {{-- /* <!-- xs modal --> */ --}}
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
        {{-- /* <!-- End xs modal --> */ --}}
        {{-- /* <!-- end search panel strart --> */ --}}

{{-- /* <!-- header end --> */ --}}

@yield('content')









<!-- END sidebar widget item -->
<!-- END offset cart strart -->
<!-- footer section start -->
<footer class="xs-footer-section footer-style3">
    <div class="footer-top-area">
        {{-- <div class="container">
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
        <!-- .container END --> --}}

        <div class="container py-3">
              <div class="row">
                <div class="col-md-3">
                  {{-- footer-widget Start --}}
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
                  {{-- footer-widget END --}}
                </div>
                <div class="col-md-3">
                  {{-- footer-widget Start --}}
                  <div class="footer-widget">
                      <h4 class="widget-title">SERVICES</h4>
                      <ul class="xs-list">
                        @foreach(App\Services::all() as  $value)

                          <li><a href="{{ $value->id }}"> <i class="lni-phone-handset"></i> {{ $value->title }} </a></li>
                        @endforeach
                        <li><a href="about.html"> <i class="lni-map-marker"></i> Site Map</a></li>
                        <li><a href="about.html"> <i class="lni-map-marker"></i> Site Map</a></li>
                        <li><a href="about.html"> <i class="lni-map-marker"></i> Site Map</a></li>


                          {{-- <li><a href="about.html"> <i class="lni-mobile"></i> +88 01611-609372 </a></li>
                          <li><a href="about.html"> <i class="lni-envelope"></i> contact@xubisoft.com </a></li>
                          <li><a href="about.html"> <i class="lni-invention"></i> info@xubisoft.com </a></li> --}}
                      </ul>
                      <!-- .xs-list END -->
                  </div>
                  {{-- footer-widget END --}}
                </div>
                <div class="col-md-3">
                  {{-- footer-widget Start --}}
                  <div class="footer-widget">
                      <h4 class="widget-title">PRODUCTS</h4>
                      <ul class="xs-list">
                        @foreach(App\Product::all() as  $value)
                          <li><a href="{{ $value->id }}"> <i class="lni-phone-handset"></i> {{ $value->product_name }} </a></li>
                        @endforeach
                        <li><a href="about.html"> <i class="lni-map-marker"></i> Site Map</a></li>
                        <li><a href="about.html"> <i class="lni-map-marker"></i> Site Map</a></li>
                        <li><a href="about.html"> <i class="lni-map-marker"></i> Site Map</a></li>

                      </ul>
                      <!-- .xs-list END -->
                  </div>
                  {{-- footer-widget END --}}
                </div>
                <div class="col-md-3">
                  {{-- footer-widget Start --}}
                  <div class="footer-widget">
                      <h4 class="widget-title">SUPPORTS</h4>
                      <ul class="xs-list">
                          <li><a href="about.html"> <i class="lni-map-marker"></i> About Us </a></li>
                          <li><a href="about.html"> <i class="lni-map-marker"></i> Contact Us</a></li>
                          <li><a href="about.html"> <i class="lni-map-marker"></i> Career</a></li>
                          <li><a href="about.html"> <i class="lni-map-marker"></i> SEIP</a></li>
                          <li><a href="about.html"> <i class="lni-map-marker"></i> BACCO</a></li>
                          <li><a href="about.html"> <i class="lni-map-marker"></i> Site Map</a></li>

                      </ul>
                      <!-- .xs-list END -->
                  </div>
                  {{-- footer-widget END --}}
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 p-3"><img class="img-fluid d-block mx-auto rounded w-25 footer-logo" src="https://xubisoft.com/xubisoft/assets/images/xubi/Xubisoft Logo.png"></div>
              </div>
            </div>





            <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-center widget-title text-uppercase text-white">MEMBER OF</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3"><img class="img-fluid d-block mx-auto w-100 footer-member" src="http://seip-fd.gov.bd/wp-content/uploads/2019/01/logo1.png"></div>
        <div class="col-md-3"><img class="img-fluid d-block mx-auto w-100 footer-member" src="data:image/png;base64,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"></div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>




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
                            <li><a href="https://www.facebook.com/Xubisoft/" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            {{-- <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li> --}}
                            <li><a href="https://www.linkedin.com/company/xubisoft/" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/xubisoft/" class="instagram"><i class="fa fa-instagram"></i></a></li>
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
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473785/js/plugins_fnsqdy.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{{-- <script src="{{ asset('xubisoft/assets/js/jquery.magnific-popup.min.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
{{-- <script src="{{ asset('xubisoft/assets/js/owl.carousel.min.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473785/js/scrollax_dtmyu7.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473784/js/jquery.ajaxchimp.min_qshmoz.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473784/js/jquery.waypoints.min_qr4mky.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473783/js/isotope.pkgd.min_xf5nme.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473786/js/swiper.min_pkhxhu.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyDeZubzJTQgtjreqsdaGMGXxaxP-pv6pSk"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473784/js/jquery.easypiechart.min_zjucw2.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473783/js/delighters_aoz9jm.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473783/js/typed_ynowna.js"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.parallax.js') }}"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473784/js/jquery.themepunch.tools.min_ellld7.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473784/js/jquery.themepunch.revolution.min_twcmne.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571474546/js/extensions/revolution.extension.actions.min_xnvqdm.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571474546/js/extensions/revolution.extension.carousel.min_ryz4vy.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571474546/js/extensions/revolution.extension.kenburn.min_in2eeu.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571474546/js/extensions/revolution.extension.layeranimation.min_hsgzsw.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571474546/js/extensions/revolution.extension.migration.min_s2eagq.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571474546/js/extensions/revolution.extension.navigation.min_rzc4vv.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571474546/js/extensions/revolution.extension.parallax.min_jdbnwl.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571474547/js/extensions/revolution.extension.slideanims.min_yidwxh.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571474547/js/extensions/revolution.extension.video.min_mkiaib.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473785/js/skrollr.min_tomraf.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473785/js/shuffle-letters_yctott.js"></script>

@yield('js')

<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473785/js/main_udaxbe.js"></script>
<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473785/js/sweetalert2.all_g3qaus.js"></script>
<script src="{{ asset('xubisoft/assets/custom/js/custom.js') }}"></script>


<script>
  @include('sweetalert::alert')
</script>


</body>

</html>
