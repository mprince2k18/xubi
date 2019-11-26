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
        background-repeat: no-repeat;
        left:0;
        top:0;
        right:0;
        bottom:0;
        margin:0 auto;
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


.footer-logo{
  width: 20% !important;
}

@media only screen and (max-width: 600px) {
       .footer-logo{
           width: 50% !important;
       }
       .footer-member{
           width: 50% !important;
       }
   }

   .construction_mood{
     margin-bottom: 0px !important;
     text-align: center;1
   }

   .footer-bottom-area{
     background-color: #2d3436 !important;
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
            version          : 'v5.0'
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




{{-- onmyway --}}


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">

      <img src="https://res.cloudinary.com/dvd2tat8q/image/upload/v1574059247/img/undraw_under_construction_46pa_tijvsl.png" alt="">

      <div class="alert alert-success construction_mood" role="alert">
        We are constructing something amazing
      </div>

    </div>

  </div>
</div>

{{-- onmyway end --}}



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
  									<a class="nav-link dropdown-toggle" href="{{ route('products') }}">PRODUCTS <i class="fas fa-angle-down"></i></a>
  									<div class="dropdown-menu">
                      @foreach (App\Product::all() as $products)
                        <a class="dropdown-item" href="{{ url('/products') }}/{{ $products->id }}"> {{  $products->product_name }} </a>
                      @endforeach
  									</div>
  								</li>


                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link dropdown-toggle" href="{{ route('training') }}">TRAINING
                       {{-- <i class="fas fa-angle-down"></i> --}}
                     </a>


                    {{-- <div class="dropdown-menu">
                      @foreach (App\Training::all() as $trainings)
                        <a class="dropdown-item" href="{{ $trainings->id }}"> {{ $trainings->name }} </a>
                      @endforeach
  									</div> --}}


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


<footer class="xs-footer-section footer-style5 delighter started" data-delighter="start:0.80">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-widget">
                                <div class="footer-logo-wraper">
                                    <a href="index.html" class="footer-logo">
                                        <img src="https://res.cloudinary.com/dvd2tat8q/image/upload/v1571742480/img/Xubisoft_Logo_l1ikli.png" alt="Xubisoft" draggable="false">
                                    </a>
                                </div>
                            </div><!-- .footer-widget END -->
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="footer-widget">
                                <h4 class="widget-title">About</h4>
                                <ul class="xs-list">
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="service.html">Service</a></li>
                                    <li><a href="blog-grid-sidebar.html">News &amp; Blog</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="cases.html">Case</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                </ul><!-- .xs-list END -->
                            </div><!-- .footer-widget END -->
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="footer-widget">
                                <h4 class="widget-title">Company</h4>
                                <ul class="xs-list">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Legal info</a></li>
                                    <li><a href="#">Knowledge Base</a></li>
                                    <li><a href="#">GDPR Update</a></li>
                                </ul><!-- .xs-list END -->
                            </div><!-- .footer-widget END -->
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="footer-widget">
                                <h4 class="widget-title">Social Media</h4>
                                <ul class="xs-list">
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Google Plus</a></li>
                                    <li><a href="#">Linkedin</a></li>
                                </ul><!-- .xs-list END -->
                            </div><!-- .footer-widget END -->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-widget">
                                <h4 class="widget-title">Get Updates</h4>
                                <form action="#" method="POST" class="subscribe-form subscribe-from-style3" novalidate="true">
                                    <label for="sub-input2"></label>
                                    <div class="form-group">
                                        <input type="email" name="EMAIL" id="sub-input2" placeholder="Enter your mail here..." class="form-control">
                                        <button class="sub-btn" type="submit"><i class="icon icon-right-arrow"></i></button>
                                    </div>
                                </form>
                                <div class="copyright-text">
                                    <p>Copyright 2018, <a href="https://themeforest.net/user/xpeedstudio/portfolio" target="_blank">XpeedStudio.</a>.</p>
                                </div>
                            </div><!-- .footer-widget END -->
                        </div>
                    </div><!-- .row END -->
                </div><!-- .container END -->
            </div><!-- .footer-top-area END -->
            <div class="wave-shape">
                <img src="assets/images/footer-wave-shape.png" alt="" draggable="false">
            </div>




            <div class="footer-bottom-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="coyright-section">
                                            <p class="text-white">© {{ now()->year }}  <a href="{{ route('homepage') }}" class="text-white">{{ env('APP_NAME') }}</a>.
                                                All Rights Reserved.</p>
                                        </div><!-- .copyright-section END -->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="footer-bottom-logo text-center">
                                            <a href="index.html" class="footer-logo">
                                                <img src="assets/images/footer-logo-3.png" alt="" draggable="false">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="copyright-content">
                                            <ul class="simple-social-list">
                                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





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

<script type="text/javascript">

  $(document).ready(function(){
    $('#myModal').modal('show');
   });

</script>

</body>

</html>
