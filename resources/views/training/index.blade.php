@extends('xubi.app')

@section('css')


    <!-- Main CSS -->
    <link href="{{ asset('custom/css/training_style.css') }}" rel="stylesheet">

    <!-- {{ asset('custom/') }} -->
@endsection



  @section('content')


  <!-- welcome section -->
  <!--breadcumb start here-->
  <div class="xs-inner-banner inner-banner2" style="background-image:url('assets/images/banner/2.jpg')">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-7 mx-auto">
  				<div class="inner-banner">
  					<h2 class="inner-banner-title">Training & Courses</h2>
  					<ul class="breadcumbs list-inline">
  						<li><a href="{{ route('homepage') }}">Home</a></li>
  						<li>Training & Courses</li>
  					</ul>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  <!--breadcumb end here-->
  <!-- End welcome section -->


  <!-- School Category Courses -->
  	<section id="our-courses" class="our-courses pt90 pt650-992">

  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 offset-lg-3">
  					<div class="main-title text-center">
  						<h3 class="mt0">Xubisoft Training & Courses</h3>
  						<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
  					</div>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-6 col-lg-3">
  					<div class="img_hvr_box" style="background-image: url({{ asset('custom/images/courses/1.jpg') }}">
  						<div class="overlay">
  							<div class="details">
  								<h5>Design</h5>
  								<p>Over 800 Courses</p>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-6 col-lg-3">
  					<div class="img_hvr_box" style="background-image: url({{ asset('custom/images/courses/2.jpg') }}">
  						<div class="overlay">
  							<div class="details">
  								<h5>Business</h5>
  								<p>Over 1,400 Courses</p>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-6 col-lg-3">
  					<div class="img_hvr_box" style="background-image: url({{ asset('custom/images/courses/3.jpg') }})">
  						<div class="overlay">
  							<div class="details">
  								<h5>Software Development</h5>
  								<p>Over 350 Courses</p>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-6 col-lg-3">
  					<div class="img_hvr_box" style="background-image: url({{ asset('custom/images/courses/4.jpg') }})">
  						<div class="overlay">
  							<div class="details">
  								<h5>Web Development</h5>
  								<p>Over 640 Courses</p>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-6 col-lg-3">
  					<div class="img_hvr_box" style="background-image: url({{ asset('custom/images/courses/5.jpg') }})">
  						<div class="overlay">
  							<div class="details">
  								<h5>Photography</h5>
  								<p>Over 740 Courses</p>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-6 col-lg-3">
  					<div class="img_hvr_box" style="background-image: url({{ asset('custom/images/courses/6.jpg') }})">
  						<div class="overlay">
  							<div class="details">
  								<h5>Audio + Music</h5>
  								<p>Over 120 Courses</p>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-6 col-lg-3">
  					<div class="img_hvr_box" style="background-image: url({{ asset('custom/images/courses/7.jpg') }})">
  						<div class="overlay">
  							<div class="details">
  								<h5>Marketing</h5>
  								<p>Over 200 Courses</p>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-6 col-lg-3">
  					<div class="img_hvr_box" style="background-image: url({{ asset('custom/images/courses/8.jpg') }})">
  						<div class="overlay">
  							<div class="details">
  								<h5>3D + Animation</h5>
  								<p>Over 900 Courses</p>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="col-lg-6 offset-lg-3">
  					<div class="courses_all_btn text-center">
  						<a class="btn btn-transparent" href="#">View All Courses</a>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>



    <!-- about4 home4 -->
	<section class="home4_about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-6">
					<div class="about_home3">
						<h3>What We Do</h3>
						<h5>Striving to make the web a more beautiful place every single day</h5>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
						<a href="#" class="btn about_btn_home3">View More</a>
						<ul class="partners_thumb_list">
							<li class="list-inline-item"><a href="#"><img class="img-fluid" src="{{ asset('custom/images/partners/1.png') }}" alt="1.png"></a></li>
							<li class="list-inline-item"><a href="#"><img class="img-fluid" src="{{ asset('custom/images/partners/2.png') }}" alt="2.png"></a></li>
							<li class="list-inline-item"><a href="#"><img class="img-fluid" src="{{ asset('custom/images/partners/3.png') }}" alt="3.png"></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="row">
						<div class="col-sm-6 col-lg-6">
							<div class="home3_about_icon_box five">
								<div class="icon"><span class="flaticon-account"></span></div>
								<div class="details">
									<h4>Create Account</h4>
									<p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6">
							<div class="home3_about_icon_box two">
								<div class="icon"><span class="flaticon-online"></span></div>
								<div class="details">
									<h4>Create Online Course</h4>
									<p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6">
							<div class="home3_about_icon_box six">
								<div class="icon"><span class="flaticon-student-1"></span></div>
								<div class="details">
									<h4>Interact with Students</h4>
									<p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6">
							<div class="home3_about_icon_box seven">
								<div class="icon"><span class="flaticon-employee"></span></div>
								<div class="details">
									<h4>Achieve Your Goals</h4>
									<p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="about_home3_shape_container">
						<div class="about_home3_shape"><img src="{{ asset('custom/images/about/shape1.png') }}" alt="shape1.png"></div>
					</div>
				</div>
			</div>
		</div>
	</section>









  <!-- Top Course home3 -->
  	<section class="home3_top_course pb0 pt0">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 offset-lg-3">
  					<div class="main-title text-center">
  						<h3 class="mt0">Browse Our Top Training & Courses</h3>
  						<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
  					</div>
  				</div>
  			</div>
  			<div class="row">
  			 	<div class="col-lg-12">
  			 		<div id="options" class="alpha-pag full">
  						<div class="option-isotop">
  							<ul id="filter" class="option-set" data-option-key="filter">
  								<li class="list-inline-item"><a href="#all" data-option-value="*" class="selected">Developer</a></li>
  								<li class="list-inline-item"><a href="#business" data-option-value=".business">Business</a></li>
  								<li class="list-inline-item"><a href="#design" data-option-value=".design">Design</a></li>
  								<li class="list-inline-item"><a href="#web" data-option-value=".web">Web</a></li>
  								<li class="list-inline-item"><a href="#marketing" data-option-value=".marketing">Marketing</a></li>
  							</ul>
  						</div>
  					</div><!-- FILTER BUTTONS -->
  			 		<div class="emply-text-sec">
  			 			<div class="row" id="masonry_abc">
  			 				<div class="col-md-6 col-lg-4 col-xl-3 business design">
  								<div class="top_courses">
  									<div class="thumb">
  										<img class="img-whp" src="{{ asset('custom/images/courses/t1.jpg') }}" alt="t1.jpg">
  										<div class="overlay">
  											<div class="tag">Best Seller</div>
  											<div class="icon"><span class="flaticon-like"></span></div>
  											<a class="tc_preview_course" href="#">Preview Course</a>
  										</div>
  									</div>
  									<div class="details">
  										<div class="tc_content">
  											<p>Ali TUFAN</p>
  											<h5>Introduction Web Design with HTML</h5>
  											<ul class="tc_review">
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#">(6)</a></li>
  											</ul>
  										</div>
  										<div class="tc_footer">
  											<ul class="tc_meta float-left">
  												<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
  												<li class="list-inline-item"><a href="#">1548</a></li>
  												<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
  												<li class="list-inline-item"><a href="#">25</a></li>
  											</ul>
  											<div class="tc_price float-right">$69.95</div>
  										</div>
  									</div>
  								</div>
  			 				</div>
  			 				<div class="col-md-6 col-lg-4 col-xl-3 business marketing">
  								<div class="top_courses">
  									<div class="thumb">
  										<img class="img-whp" src="{{ asset('custom/images/courses/t2.jpg') }}" alt="t2.jpg">
  										<div class="overlay">
  											<div class="tag">Top Seller</div>
  											<div class="icon"><span class="flaticon-like"></span></div>
  											<a class="tc_preview_course" href="#">Preview Course</a>
  										</div>
  									</div>
  									<div class="details">
  										<div class="tc_content">
  											<p>Ali TUFAN</p>
  											<h5>Designing a Responsive Mobile Website with Muse</h5>
  											<ul class="tc_review">
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#">(6)</a></li>
  											</ul>
  										</div>
  										<div class="tc_footer">
  											<ul class="tc_meta float-left">
  												<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
  												<li class="list-inline-item"><a href="#">1548</a></li>
  												<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
  												<li class="list-inline-item"><a href="#">25</a></li>
  											</ul>
  											<div class="tc_price float-right">$69.95</div>
  										</div>
  									</div>
  								</div>
  			 				</div>
  			 				<div class="col-md-6 col-lg-4 col-xl-3 web design">
  								<div class="top_courses">
  									<div class="thumb">
  										<img class="img-whp" src="{{ asset('custom/images/courses/t3.jpg') }}" alt="t3.jpg">
  										<div class="overlay">
  											<div class="tag">Top Seller</div>
  											<div class="icon"><span class="flaticon-like"></span></div>
  											<a class="tc_preview_course" href="#">Preview Course</a>
  										</div>
  									</div>
  									<div class="details">
  										<div class="tc_content">
  											<p>Ali TUFAN</p>
  											<h5>Adobe XD: Prototyping Tips and Tricks</h5>
  											<ul class="tc_review">
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#">(6)</a></li>
  											</ul>
  										</div>
  										<div class="tc_footer">
  											<ul class="tc_meta float-left">
  												<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
  												<li class="list-inline-item"><a href="#">1548</a></li>
  												<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
  												<li class="list-inline-item"><a href="#">25</a></li>
  											</ul>
  											<div class="tc_price float-right">$69.95</div>
  										</div>
  									</div>
  								</div>
  			 				</div>
  			 				<div class="col-md-6 col-lg-4 col-xl-3 business Web">
  								<div class="top_courses">
  									<div class="thumb">
  										<img class="img-whp" src="{{ asset('custom/images/courses/t4.jpg') }}" alt="t4.jpg">
  										<div class="overlay">
  											<div class="tag">Best Seller</div>
  											<div class="icon"><span class="flaticon-like"></span></div>
  											<a class="tc_preview_course" href="#">Preview Course</a>
  										</div>
  									</div>
  									<div class="details">
  										<div class="tc_content">
  											<p>Ali TUFAN</p>
  											<h5>Sketch: Creating Responsive SVG</h5>
  											<ul class="tc_review">
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#">(6)</a></li>
  											</ul>
  										</div>
  										<div class="tc_footer">
  											<ul class="tc_meta float-left">
  												<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
  												<li class="list-inline-item"><a href="#">1548</a></li>
  												<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
  												<li class="list-inline-item"><a href="#">25</a></li>
  											</ul>
  											<div class="tc_price float-right">$69.95</div>
  										</div>
  									</div>
  								</div>
  			 				</div>
  			 				<div class="col-md-6 col-lg-4 col-xl-3 marketing">
  								<div class="top_courses">
  									<div class="thumb">
  										<img class="img-whp" src="{{ asset('custom/images/courses/t5.jpg') }}" alt="t5.jpg">
  										<div class="overlay">
  											<div class="tag">Best Seller</div>
  											<div class="icon"><span class="flaticon-like"></span></div>
  											<a class="tc_preview_course" href="#">Preview Course</a>
  										</div>
  									</div>
  									<div class="details">
  										<div class="tc_content">
  											<p>Ali TUFAN</p>
  											<h5>Design Instruments for Communication</h5>
  											<ul class="tc_review">
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#">(6)</a></li>
  											</ul>
  										</div>
  										<div class="tc_footer">
  											<ul class="tc_meta float-left">
  												<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
  												<li class="list-inline-item"><a href="#">1548</a></li>
  												<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
  												<li class="list-inline-item"><a href="#">25</a></li>
  											</ul>
  											<div class="tc_price float-right">$69.95</div>
  										</div>
  									</div>
  								</div>
  			 				</div>
  			 				<div class="col-md-6 col-lg-4 col-xl-3 business marketing">
  								<div class="top_courses">
  									<div class="thumb">
  										<img class="img-whp" src="{{ asset('custom/images/courses/t6.jpg') }}" alt="t6.jpg">
  										<div class="overlay">
  											<div class="tag">Top Seller</div>
  											<div class="icon"><span class="flaticon-like"></span></div>
  											<a class="tc_preview_course" href="#">Preview Course</a>
  										</div>
  									</div>
  									<div class="details">
  										<div class="tc_content">
  											<p>Ali TUFAN</p>
  											<h5>How to be a DJ? Make Electronic Music</h5>
  											<ul class="tc_review">
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#">(6)</a></li>
  											</ul>
  										</div>
  										<div class="tc_footer">
  											<ul class="tc_meta float-left">
  												<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
  												<li class="list-inline-item"><a href="#">1548</a></li>
  												<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
  												<li class="list-inline-item"><a href="#">25</a></li>
  											</ul>
  											<div class="tc_price float-right">$69.95</div>
  										</div>
  									</div>
  								</div>
  			 				</div>
  			 				<div class="col-md-6 col-lg-4 col-xl-3 design Web">
  								<div class="top_courses">
  									<div class="thumb">
  										<img class="img-whp" src="{{ asset('custom/images/courses/t7.jpg') }}" alt="t7.jpg">
  										<div class="overlay">
  											<div class="tag">Top Seller</div>
  											<div class="icon"><span class="flaticon-like"></span></div>
  											<a class="tc_preview_course" href="#">Preview Course</a>
  										</div>
  									</div>
  									<div class="details">
  										<div class="tc_content">
  											<p>Ali TUFAN</p>
  											<h5>How to Make Beautiful Landscape Photos?</h5>
  											<ul class="tc_review">
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#">(6)</a></li>
  											</ul>
  										</div>
  										<div class="tc_footer">
  											<ul class="tc_meta float-left">
  												<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
  												<li class="list-inline-item"><a href="#">1548</a></li>
  												<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
  												<li class="list-inline-item"><a href="#">25</a></li>
  											</ul>
  											<div class="tc_price float-right">$69.95</div>
  										</div>
  									</div>
  								</div>
  			 				</div>
  			 				<div class="col-md-6 col-lg-4 col-xl-3 business">
  								<div class="top_courses">
  									<div class="thumb">
  										<img class="img-whp" src="{{ asset('custom/images/courses/t8.jpg') }}" alt="t8.jpg">
  										<div class="overlay">
  											<div class="tag">Best Seller</div>
  											<div class="icon"><span class="flaticon-like"></span></div>
  											<a class="tc_preview_course" href="#">Preview Course</a>
  										</div>
  									</div>
  									<div class="details">
  										<div class="tc_content">
  											<p>Ali TUFAN</p>
  											<h5>Fashion Photography From Professional</h5>
  											<ul class="tc_review">
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  												<li class="list-inline-item"><a href="#">(6)</a></li>
  											</ul>
  										</div>
  										<div class="tc_footer">
  											<ul class="tc_meta float-left">
  												<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
  												<li class="list-inline-item"><a href="#">1548</a></li>
  												<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
  												<li class="list-inline-item"><a href="#">25</a></li>
  											</ul>
  											<div class="tc_price float-right">$69.95</div>
  										</div>
  									</div>
  								</div>
  			 				</div>
  			 			</div>
  			 		</div>
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-lg-12">
  					<div class="about_home3_shape_container">
  						<div class="about_home3_shape2"><img src="{{ asset('custom/images/about/shape2.png') }}" alt="shape2.png"></div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>







  @endsection


  @section('js')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->



        <script type="text/javascript" src="{{ asset('custom/js/isotop.js') }}"></script>
        <script type="text/javascript" src="{{ asset('custom/js/snackbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('custom/js/simplebar.js') }}"></script>
        <script type="text/javascript" src="{{ asset('custom/js/parallax.js') }}"></script>
        <script type="text/javascript" src="{{ asset('custom/js/scrollto.js') }}"></script>
        <script type="text/javascript" src="{{ asset('custom/js/jquery-scrolltofixed-min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('custom/js/jquery.counterup.js') }}"></script>
        <script type="text/javascript" src="{{ asset('custom/js/wow.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('custom/js/progressbar.js') }}"></script>
        <script type="text/javascript" src="{{ asset('custom/js/slider.js') }}"></script>
        <script type="text/javascript" src="j{{ asset('custom/s/timepicker.js') }}"></script>
        <!-- Custom script for all pages -->
        <script type="text/javascript" src="{{ asset('custom/js/training_script.js') }}"></script>

  @endsection
