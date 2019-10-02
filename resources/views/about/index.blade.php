@extends('xubi.app')


@section('title')
About
@endsection


@section('content')

<!-- welcome section -->
<!--breadcumb start here-->
<div class="xs-inner-banner" style="background-image:url('assets/images/banner/1.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-7 mx-auto">
				<div class="inner-banner">
					<h2 class="inner-banner-title">@yield('title')</h2>
					<p class="inner-banner-content">Leadership team brings together years ofexperience building analytics products and business to business software companies.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--breadcumb end here--><!-- End welcome section -->

<!-- agency countdown section -->
<section class="agency-countdown-area waypoint-tigger">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="about-countdown-content featured">
                    <h3>XUBISOFT QUICK FACT</h3>
                </div><!-- .about-countdown-content END -->
            </div>

            <div class="col-md-2">
                <div class="about-countdown-content">
                    <h3>PROJECTS</h3>
                    <span class="number-percentage-count number-percentage" data-value="500" data-animation-duration="3500">0</span><span>+</span>
                </div><!-- .about-countdown-content END -->
            </div>
            <div class="col-md-2">
                <div class="about-countdown-content">
                    <h3>CLIENTS</h3>
                    <span class="number-percentage-count number-percentage" data-value="200" data-animation-duration="3500">0</span><span>+</span>
                </div><!-- .about-countdown-content END -->
            </div>
            <div class="col-md-2">
                <div class="about-countdown-content">
                    <h3>EMPLOYEE</h3>
                    <span class="number-percentage-count number-percentage" data-value="53" data-animation-duration="3500">0</span>
                </div><!-- .about-countdown-content END -->
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- end agency countdown section -->

<!-- agency company intro section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="agency-intro">
                    <div class="agency-section-title">
                        <h3 class="sub-title">XUBISOFT</h3>
                        <h4 class="main-title">World’s best <em>Startup</em></h4>
                        <span class="watermark-title">BEST</span>
                    </div><!-- .agency-section-title END -->
                    <p>We work systematically to integrate corporate responsibility in our core business and make our expertise available the benefit of the societies where we</p>
                    <ul class="xs-list list-inline">
                        <li><img src="assets/images/awards/awards-1.png" alt="awards one"></li>
                        <li><img src="assets/images/awards/awards-2.png" alt="awards tnwo"></li>
                        <li><img src="assets/images/awards/awards-3.png" alt="awards three"></li>
                    </ul>
                    <a href="{{ route('contact') }}" target="_blank" class="btn btn-primary">CONTATC US</a>
                </div><!-- .agency-intro END -->
            </div>
            <div class="col-lg-6">
                <div class="agency-intro-video">
                    <img src="assets/images/video/video-1.jpg" alt="video image">
                    <a href="https://www.youtube.com/watch?v=BJq4d1-lHq8" class="xs-video-popup video-content btn-gradient">
                        <i class="icon icon-play2"></i>
                    </a>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- end agency company intro section -->

<!-- agency team area section -->
<section class="agency-team-area">
    <div class="container-fluid px-0">
        <div class="agency-team-slider owl-carousel">
            <div class="agency-single-team">
                <div class="image">
                    <img src="assets/images/team/team-1.jpg" alt="">
                </div>
                <div class="hover-area text-center">
                    <h4 class="xs-title"><a href="#">James Cameron</a></h4>
                    <span>SOFTWARE ENGINEER</span>
                    <p>We work systematically integrate corporate responsibility in our core business and make our expertise available the benefit of the societies where we</p>
                    <ul class="simple-social-list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div><!-- .hover-area END -->
            </div><!-- .agency-single-team END -->
            <div class="agency-single-team">
                <div class="image">
                    <img src="assets/images/team/team-2.jpg" alt="">
                </div>
                <div class="hover-area text-center">
                    <h4 class="xs-title"><a href="#">Mary W. Florence</a></h4>
                    <span>HARDWARE ENGINEER</span>
                    <p>We work systematically integrate corporate responsibility in our core business and make our expertise available the benefit of the societies where we</p>
                    <ul class="simple-social-list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div><!-- .hover-area END -->
            </div><!-- .agency-single-team END -->
            <div class="agency-single-team">
                <div class="image">
                    <img src="assets/images/team/team-3.jpg" alt="">
                </div>
                <div class="hover-area text-center">
                    <h4 class="xs-title"><a href="#">Edith T. Painter</a></h4>
                    <span>C.E.O</span>
                    <p>We work systematically integrate corporate responsibility in our core business and make our expertise available the benefit of the societies where we</p>
                    <ul class="simple-social-list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div><!-- .hover-area END -->
            </div><!-- .agency-single-team END -->
            <div class="agency-single-team">
                <div class="image">
                    <img src="assets/images/team/team-4.jpg" alt="">
                </div>
                <div class="hover-area text-center">
                    <h4 class="xs-title"><a href="#">Clarence D. Ryan</a></h4>
                    <span>SUPPORT ENGINEER</span>
                    <p>We work systematically integrate corporate responsibility in our core business and make our expertise available the benefit of the societies where we</p>
                    <ul class="simple-social-list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div><!-- .hover-area END -->
            </div><!-- .agency-single-team END -->
        </div><!-- .agency-team-slider END -->
    </div><!-- .container-fluid END -->
</section><!-- end agency team area section -->





<!-- Timeline start -->
 <div class="xs-section-padding-bottom">
     <div class="demo-title-wraper text-center">
         <h2 class="demo-title">Timeline <em>version Two</em> </h2>
     </div>
     <!-- horizontal timeline section -->
     <div class="xs-section-padding hr-timeline-section">
 <div class="container">
     <div class="row hr-timeline-group">
         <div class="col-md-6 col-lg-3">
             <div class="hr-single-timeline wow bounceIn">
                 <span class="number-count"></span>
                 <div class="hr-timeline-content-wraper">
                     <div class="hr-timeline-content">
                         <i class="icon icon-working_process_icons_1"></i>
                         <p>Estimate</p>
                     </div>
                 </div><!-- .hr-timeline-content-wraper END -->
             </div><!-- .hr-single-timeline END -->
         </div>
         <div class="col-md-6 col-lg-3">
             <div class="hr-single-timeline color-1 wow bounceIn" data-wow-delay=".5s">
                 <span class="number-count"></span>
                 <div class="hr-timeline-content-wraper">
                     <div class="hr-timeline-content">
                         <i class="icon icon-working_process_icons_2"></i>
                         <p>Idea Making</p>
                     </div>
                 </div><!-- .hr-timeline-content-wraper END -->
             </div><!-- .hr-single-timeline END -->
         </div>
         <div class="col-md-6 col-lg-3">
             <div class="hr-single-timeline color-2 wow bounceIn" data-wow-delay=".7s">
                 <span class="number-count"></span>
                 <div class="hr-timeline-content-wraper">
                     <div class="hr-timeline-content">
                         <i class="icon icon-working_process_icons_3"></i>
                         <p>Working Plan</p>
                     </div>
                 </div><!-- .hr-timeline-content-wraper END -->
             </div><!-- .hr-single-timeline END -->
         </div>
         <div class="col-md-6 col-lg-3">
             <div class="hr-single-timeline color-3 wow bounceIn" data-wow-delay=".9s">
                 <span class="number-count"></span>
                 <div class="hr-timeline-content-wraper">
                     <div class="hr-timeline-content">
                         <i class="icon icon-working_process_icons_4"></i>
                         <p>Handover</p>
                     </div>
                 </div><!-- .hr-timeline-content-wraper END -->
             </div><!-- .hr-single-timeline END -->
         </div>
     </div><!-- .row .hr-timeline-group END -->
 </div><!-- .container END -->
 <div class="timeline-wave">
     <img src="assets/images/timeline-wave-shape.png" alt="">
 </div>
</div>        <!-- horizontal timeline section end -->
 </div>
 <!-- Timeline end -->
















<!-- agency office area section -->
<section class="xs-section-padding agency-office-area" data-scrollax-parent="true">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="agency-section-title text-center">
                    <h3 class="sub-title">XUBISOFT</h3>
                    <h4 class="main-title">Who <em>We Are</em></h4>

                </div><!-- .agency-section-title END -->
            </div>
        </div><!-- .row END -->
    </div>
    <div class="container">

      <div class="row">

        <div class="col-md-8 offset-md-2">
            <p class="text-dark">
                Xubisoft Ltd. is a multi-layered Bangladesh based Software company that focuses highly
                qualitative, timely delivered and cost – effective Software development and training. Xubisoft Ltd. Is register as private limited company assigned in Bangladesh with the express
                purpose of developing a skilled manpower in ICT sector of Bangladesh. We are providing
                high quality professional training through various IT courses. It has industrial level experience and competence in rendering training and allied services to numerous students over
                the years. By doing this, Xubisoft has succeeded in carving a niche training where our prior
                commitment is to develop a sustainable relationship with the students all over Bangladesh. Xubisoft has been providing industrial attachment of polytechnic students for a
                long time.
            </p>
        </div>



      </div>



    </div><!-- .container END -->
</section><!-- agency office area section end -->






<!-- agency office area section -->
<section class="xs-section-padding gray-bg agency-office-area" data-scrollax-parent="true">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="agency-section-title text-center">
                    <h3 class="sub-title">OFFICE LIFE</h3>
                    <h4 class="main-title">Agencify <em>Environmet</em></h4>
                    <span class="watermark-title" data-scrollax="properties: { translateY: '-250px' }">OFFICE</span>
                </div><!-- .agency-section-title END -->
            </div>
        </div><!-- .row END -->
    </div>
    <div class="container-fluid px-0">
        <div class="agency-office-slider owl-carousel">
            <div class="agency-office-single">
                <img src="assets/images/office/office-1.jpg" alt="">
            </div>
            <div class="agency-office-single">
                <img src="assets/images/office/office-2.jpg" alt="">
            </div>
            <div class="agency-office-single">
                <img src="assets/images/office/office-3.jpg" alt="">
            </div>
            <div class="agency-office-single">
                <img src="assets/images/office/office-2.jpg" alt="">
            </div>
            <div class="agency-office-single">
                <img src="assets/images/office/office-1.jpg" alt="">
            </div>
            <div class="agency-office-single">
                <img src="assets/images/office/office-3.jpg" alt="">
            </div>
        </div>
    </div><!-- .container END -->
</section><!-- agency office area section end -->

<!-- agency review area section -->
<section class="xs-section-padding agency_review_section" data-scrollax-parent="true" style="background-image: url(assets/images/doodle-background/1.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="agency-section-title text-center">
                    <h3 class="sub-title">TESTIMONIALS</h3>
                    <h4 class="main-title">Love from <em>Clients</em></h4>
                    <span class="watermark-title" data-scrollax="properties: { translateY: '-250px' }">REVIEW</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="review-slider owl-carousel">
                    <div class="review-content text-center">
                        <i class="icon icon-quote watermark-icon"></i>
                        <p><em>I have read your assessment of yourself and I feel that, in many ways, I could have written it</em></p>
                        <div class="review-image">
                            <img src="assets/images/team/team-1.jpg" alt="">
                        </div>
                        <div class="reviewer-bio">
                            <h5><em>Jenifar Linda</em></h5>
                            <p>HR Head</p>
                        </div>
                    </div><!-- ."review-content END -->
                    <div class="review-content text-center">
                        <i class="icon icon-quote watermark-icon"></i>
                        <p><em>I have read your assessment of yourself and I feel that, in many ways, I could have written it</em></p>
                        <div class="review-image">
                            <img src="assets/images/team/team-2.jpg" alt="">
                        </div>
                        <div class="reviewer-bio">
                            <h5><em>Loren Minda</em></h5>
                            <p>Program Head</p>
                        </div>
                    </div><!-- ."review-content END -->
                    <div class="review-content text-center">
                        <i class="icon icon-quote watermark-icon"></i>
                        <p><em>I have read your assessment of yourself and I feel that, in many ways, I could have written it</em></p>
                        <div class="review-image">
                            <img src="assets/images/team/team-3.jpg" alt="">
                        </div>
                        <div class="reviewer-bio">
                            <h5><em>Jhon Cris</em></h5>
                            <p>Design Head</p>
                        </div>
                    </div><!-- ."review-content END -->
                </div><!-- .review-slider END -->
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- agency review area section end -->

<!-- agency client slider area section -->
<div class="agency_client_slider gray-bg">
    <div class="container">
        <div class="client-slider owl-carousel">
            <div class="item">
                <img src="assets/images/client/client-1.png" alt="">
            </div>
            <div class="item">
                <img src="assets/images/client/client-2.png" alt="">
            </div>
            <div class="item">
                <img src="assets/images/client/client-3.png" alt="">
            </div>
            <div class="item">
                <img src="assets/images/client/client-4.png" alt="">
            </div>
            <div class="item">
                <img src="assets/images/client/client-5.png" alt="">
            </div>
            <div class="item">
                <img src="assets/images/client/client-1.png" alt="">
            </div>
            <div class="item">
                <img src="assets/images/client/client-2.png" alt="">
            </div>
            <div class="item">
                <img src="assets/images/client/client-3.png" alt="">
            </div>
            <div class="item">
                <img src="assets/images/client/client-4.png" alt="">
            </div>
            <div class="item">
                <img src="assets/images/client/client-5.png" alt="">
            </div>
        </div><!-- .client-slider end -->
    </div><!-- .container END -->
</div><!-- agency client slider area section end -->

@endsection
