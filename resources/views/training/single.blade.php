@extends('xubi.app')

@section('css')


    <!-- Main CSS -->
    <link href="{{ asset('https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571470961/css/training_style_uby2kb.css') }}" rel="stylesheet">


    <style media="screen">
      .inner_page_breadcrumb{
        background-image: url(https://res.cloudinary.com/dvd2tat8q/image/upload/v1574057868/img/images_xyhups.jpg);
        background-size: cover;
      }
    </style>


@endsection



  @section('content')
  <!-- Inner Page Breadcrumb -->
  	<section class="inner_page_breadcrumb csv3">
  		<div class="container">
  			<div class="row">
  				<div class="col-xl-12">
  					<div class="breadcrumb_content">
  						<div class="cs_row_one csv3">
  							<div class="cs_ins_container">
  								<!-- <div class="cs_instructor">
  									<ul class="cs_instrct_list float-left mb0">
  										<li class="list-inline-item"><img class="thumb" src="{{ asset('custom/images/team/4.png') }}" alt="4.png"></li>
  										<li class="list-inline-item"><a class="color-white" href="#">Ali TUFAN</a></li>
  										<li class="list-inline-item"><a class="color-white" href="#">Last updated 11/2019</a></li>
  									</ul>
  								</div> -->
  								<h3 class="cs_title color-white">{{ $single_training_details->relationshipBetweenTraining->name }}</h3>
  								<ul class="cs_review_seller">
  									<li class="color-white">Last updated {{ $single_training_details->updated_at->diffForHumans() }}</li>
  								</ul>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

  	<!-- Our Team Members -->
  	<section class="our-team pb40">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12 col-lg-8 col-xl-9">
  					<div class="row">
  						<div class="col-lg-12">
  							<div class="courses_single_container">
  								<div class="cs_row_one">
  									<div class="cs_ins_container">
  										<div class="courses_big_thumb">
  											<div class="thumb">
                          <img src="{{ asset('uploads/training_page') }}/{{ $single_training_details->thumbnail }}" alt="">
  											</div>
  										</div>
  									</div>
  								</div>
  								<div class="cs_row_two">
  									<div class="cs_overview b0p0">
  										<h4 class="title">Overview</h4>
  										<h4 class="subtitle">Course Description</h4>
  										<p class="mb30">{{ $single_training_details->course_description }}</p>
  										<h4 class="subtitle">What you'll learn</h4>
  										<ul class="cs_course_syslebus">
  											<li><i class="fa fa-check"></i><p>{{ $single_training_details->what_u_will_learn_1 }}</p></li>
  											<li><i class="fa fa-check"></i><p>{{ $single_training_details->what_u_will_learn_2 }}</p></li>
  											<li><i class="fa fa-check"></i><p>{{ $single_training_details->what_u_will_learn_3 }}</p></li>
  											<li><i class="fa fa-check"></i><p>{{ $single_training_details->what_u_will_learn_4 }}</p></li>
  											<li><i class="fa fa-check"></i><p>{{ $single_training_details->what_u_will_learn_5 }}</p></li>
  										</ul>
  										<ul class="cs_course_syslebus2">
  											<li><i class="fa fa-check"></i><p>{{ $single_training_details->what_u_will_learn_6 }}</p></li>
  											<li><i class="fa fa-check"></i><p>{{ $single_training_details->what_u_will_learn_7 }}</p></li>
  											<li><i class="fa fa-check"></i><p>{{ $single_training_details->what_u_will_learn_8 }}</p></li>
  											<li><i class="fa fa-check"></i><p>{{ $single_training_details->what_u_will_learn_9 }}</p></li>
  											<li><i class="fa fa-check"></i><p>{{ $single_training_details->what_u_will_learn_10 }}</p></li>
  										</ul>
  										<h4 class="subtitle">Requirements</h4>
  										<ul class="list_requiremetn">
  											<li><i class="fa fa-circle"></i><p>{{ $single_training_details->requirements_1 }}</p></li>
  											<li><i class="fa fa-circle"></i><p>{{ $single_training_details->requirements_2 }}</p></li>
  											<li><i class="fa fa-circle"></i><p>{{ $single_training_details->requirements_3 }}</p></li>
  										</ul>
  									</div>
  								</div>
  								<div class="cs_row_three">
  									<div class="course_content b0p0">
  										<div class="cc_headers">
  											<h4 class="title">Course Content</h4>
  											<ul class="course_schdule float-right">
  												{{-- <li class="list-inline-item"><a href="#">92 Lectures</a></li>
  												<li class="list-inline-item"><a href="#">10:56:11</a></li> --}}
  											</ul>
  										</div>
  										<br>
  										<div class="details">
  										  	<div id="accordion" class="panel-group cc_tab">
  											    <div class="panel">
  											      	<div class="panel-heading">
  												      	<h4 class="panel-title">
  												        	<a href="#panelBodyCourseStart" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">{{ $single_training_details->course_lecture_title_1 }}</a>
  												        </h4>
  											      	</div>
  												    <div id="panelBodyCourseStart" class="panel-collapse collapse show">
  												        <div class="panel-body">
  												        	<ul class="cs_list mb0">
  												        		{{-- <li><a href="#"><span class="flaticon-play-button-1 icon"></span> {{ $single_training_details->lecture_title_1 }} <span class="cs_time">02:53</span> <span class="cs_preiew">Preview</span></a></li> --}}
  												        		<li><a href="#"><span class="flaticon-play-button-1 icon"></span> {{ $single_training_details->lecture_title_1 }} </a></li>
  												        		<li><a href="#"><span class="flaticon-play-button-1 icon"></span> {{ $single_training_details->lecture_title_2 }} </a></li>
  												        		<li><a href="#"><span class="flaticon-play-button-1 icon"></span> {{ $single_training_details->lecture_title_3 }} </a></li>
  												        		<li><a href="#"><span class="flaticon-play-button-1 icon"></span> {{ $single_training_details->lecture_title_4 }} </a></li>
  												        		<li><a href="#"><span class="flaticon-play-button-1 icon"></span> {{ $single_training_details->lecture_title_5 }} </a></li>
  												        	</ul>
  												        </div>
  												    </div>
  											    </div>
  											</div>
  										</div>
  										<div class="details">
  										  	<div id="accordion" class="panel-group cc_tab">
  											    <div class="panel">
  											      	<div class="panel-heading">
  												      	<h4 class="panel-title">
  												        	<a href="#panelBodyCourseBrief" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion">{{ $single_training_details->course_lecture_title_2 }}</a>
  												        </h4>
  											      	</div>
  												    <div id="panelBodyCourseBrief" class="panel-collapse collapse">
  												        <div class="panel-body">
  												        	<ul class="cs_list mb0">
  												        		<li><a href="#"><span class="flaticon-play-button-1 icon"></span> {{ $single_training_details->lecture_title_6 }} </a></li>
  												        		<li><a href="#"><span class="flaticon-play-button-1 icon"></span> {{ $single_training_details->lecture_title_7 }} </a></li>
  												        		<li><a href="#"><span class="flaticon-play-button-1 icon"></span> {{ $single_training_details->lecture_title_8 }} </a></li>
  												        		<li><a href="#"><span class="flaticon-play-button-1 icon"></span> {{ $single_training_details->lecture_title_9 }} </a></li>
  												        		<li><a href="#"><span class="flaticon-play-button-1 icon"></span> {{ $single_training_details->lecture_title_10 }} </a></li>
  												        	</ul>
  												        </div>
  												    </div>
  											    </div>
  											</div>
  										</div>

  									</div>
  								</div>
  								{{-- <div class="cs_row_four">
  									<div class="about_ins_container b0p0">
  										<h4 class="aii_title">About the instructor</h4>
  										<div class="about_ins_info">
  											<div class="thumb"><img src="{{ asset('custom/images/team/6.png') }}" alt="6.png"></div>
  										</div>
  										<div class="details">
  											<ul class="review_list">
  												<li class="list-inline-item"><i class="fa fa-star"></i></li>
  												<li class="list-inline-item"><i class="fa fa-star"></i></li>
  												<li class="list-inline-item"><i class="fa fa-star"></i></li>
  												<li class="list-inline-item"><i class="fa fa-star"></i></li>
  												<li class="list-inline-item"><i class="fa fa-star"></i></li>
  												<li class="list-inline-item">4.5 Instructor Rating</li>
  											</ul>
  											<ul class="about_info_list">
  												<li class="list-inline-item"><span class="flaticon-comment"></span> 12,197 Reviews </li>
  												<li class="list-inline-item"><span class="flaticon-profile"></span> 141,745 Students </li>
  												<li class="list-inline-item"><span class="flaticon-play-button-1"></span> 5Courses </li>
  											</ul>
  											<h4>Ali Tufan</h4>
  											<p class="subtitle">UX/UI Designer</p>
  											<p class="mb25">UI/UX Designer, with 7+ Years Experience. Guarantee of High Quality Work. </p>
  											<p class="mb25">Skills: Web Design, UI Design, UX/UI Design, Mobile Design, User Interface Design, Sketch, Photoshop, GUI, Html, Css, Grid Systems, Typography, Minimal, Template, English, Bootstrap, Responsive Web Design, Pixel Perfect, Graphic Design, Corporate, Creative, Flat, Luxury and much more.</p>
  											<ul class="about_ins_list mb0">
  												<li><p>Available for:</p></li>
  												<li><a href="#">1. Full Time Office Work</a></li>
  												<li><a href="#">2. Remote Work</a></li>
  												<li><a href="#">3. Freelance</a></li>
  												<li><a href="#">4. Contract</a></li>
  												<li><a href="#">5. Worldwide</a></li>
  											</ul>
  										</div>
  									</div>
  								</div> --}}


  								<!-- <div class="cs_row_five">
  									<div class="student_feedback_container b0p0">
  										<h4 class="aii_title">Student feedback</h4>
  										<div class="s_feeback_content">
  									        <ul class="skills">
  									        	<li class="list-inline-item">Stars 5</li>
  									            <li class="list-inline-item progressbar1" data-width="84" data-target="100">%84</li>
  									        </ul>
  									        <ul class="skills">
  									        	<li class="list-inline-item">Stars 4</li>
  									            <li class="list-inline-item progressbar2" data-width="9" data-target="100">%9</li>
  									        </ul>
  									        <ul class="skills">
  									        	<li class="list-inline-item">Stars 3</li>
  									            <li class="list-inline-item progressbar3" data-width="3" data-target="100">%3</li>
  									        </ul>
  									        <ul class="skills">
  									        	<li class="list-inline-item">Stars 2</li>
  									            <li class="list-inline-item progressbar4" data-width="1" data-target="100">%1</li>
  									        </ul>
  									        <ul class="skills">
  									        	<li class="list-inline-item">Stars 1</li>
  									            <li class="list-inline-item progressbar5" data-width="2" data-target="100">%2</li>
  									        </ul>
  										</div>
  										<div class="aii_average_review text-center">
  											<div class="av_content">
  												<h2>4.5</h2>
  												<ul class="aii_rive_list mb0">
  													<li class="list-inline-item"><i class="fa fa-star"></i></li>
  													<li class="list-inline-item"><i class="fa fa-star"></i></li>
  													<li class="list-inline-item"><i class="fa fa-star"></i></li>
  													<li class="list-inline-item"><i class="fa fa-star"></i></li>
  													<li class="list-inline-item"><i class="fa fa-star"></i></li>
  												</ul>
  												<p>Course Rating</p>
  											</div>
  										</div>
  									</div>
  								</div> -->

  								<!-- <div class="cs_row_six">
  									<div class="sfeedbacks b0p0">
  										<h4 class="aii_title">Review</h4>
  										<div class="mbp_pagination_comments">
  											<div class="mbp_first media csv1">
  												<img src="images/resource/review1.png" class="mr-3" alt="review1.png">
  												<div class="media-body">
  											    	<h4 class="sub_title mt-0">Warren Bethell
  														<span class="sspd_review float-right">
  															<ul>
  																<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																<li class="list-inline-item"></li>
  															</ul>
  														</span>
  											    	</h4>
  											    	<a class="sspd_postdate fz14" href="#">6 months ago</a>
  											    	<p class="fz15 mt20">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first.</p>
  											    	<p class="fz15 mt25 mb25">The sound and video quality is of a good standard. Thank you Cristian.</p> <div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
  											    	<div class="sspd_review_liked"><a href="#"><i class="flaticon-like-1"></i> <span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a></div>
  													<div class="custom_hr style2"></div>
  												    <div class="mbp_sub media csv1">
  												    	<a href="#"><img src="images/resource/review1.png" class="mr-3" alt="review1.png"></a>
  												        <div class="media-body">
  												        	<h4 class="sub_title mt-0">Anton Hilton
  																<span class="sspd_review float-right">
  																	<ul>
  																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																		<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																		<li class="list-inline-item"></li>
  																	</ul>
  																</span>
  												        	</h4>
  													    	<a class="sspd_postdate fz14" href="#">6 months ago</a>
  													    	<p class="fz15 mt20 mb50">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the</p>
  													    	<div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
  											    			<div class="sspd_review_liked">
  											    				<a href="#"><i class="flaticon-like-1"></i><span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a>
  											    			</div>
  												    	</div>
  												    </div>
  												</div>
  											</div>
  											<div class="custom_hr"></div>
  											<div class="mbp_second media csv1">
  												<img src="images/resource/review1.png" class="align-self-start mr-3" alt="review1.png">
  												<div class="media-body">
  											    	<h4 class="sub_title mt-0">Warren Bethell
  														<span class="sspd_review float-right">
  															<ul>
  																<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
  																<li class="list-inline-item"></li>
  															</ul>
  														</span>
  											    	</h4>
  											    	<a class="sspd_postdate fz14" href="#">6 months ago</a>
  											    	<p class="fz15 mt20">This is the second Photoshop course I have completed with Cristian. Worth every penny and recommend it highly. To get the most out of this course, its best to to take the Beginner to Advanced course first.</p>
  											    	<p class="fz15 mt25 mb25">The sound and video quality is of a good standard. Thank you Cristian.</p> <div class="ssp_reply float-right"><span class="flaticon-consulting-message"></span><span class="pl10">Reply</span></div>
  											    	<div class="sspd_review_liked"><a href="#"><i class="flaticon-like-1"></i> <span class="text-thm6 pl5 pr5 fz15">15</span> Thank Waren</a></div>
  												</div>
  											</div>
  											<div class="text-center mt50">
  												<div class="custom_hr"></div>
  												<button type="button" class="more-review-btn btn">See more reviews</button>
  											</div>
  										</div>
  									</div>
  								</div> -->

  								<!-- <div class="cs_row_seven">
  									<div class="sfeedbacks b0p0">
  										<div class="mbp_comment_form style2 pb0">
  											<h4>Add Reviews & Rate</h4>
  											<ul>
  												<li class="list-inline-item pr15"><p>What is it like to Course?</p></li>
  												<li class="list-inline-item">
  													<span class="sspd_review">
  														<ul>
  															<li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
  															<li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
  															<li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
  															<li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
  															<li class="list-inline-item"><a href="#"><i class="fa fa-star fz18"></i></a></li>
  															<li class="list-inline-item"></li>
  														</ul>
  													</span>
  												</li>
  											</ul>
  											<form class="comments_form">
  												<div class="form-group">
  											    	<label for="exampleInputName1">Review Title</label>
  											    	<input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp">
  												</div>
  												<div class="form-group">
  												    <label for="exampleFormControlTextarea1">Review Content</label>
  												    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
  												</div>
  												<button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span></button>
  											</form>
  										</div>
  									</div>
  								</div> -->


  							</div>
  						</div>
  					</div>

<!--
  					<div class="row">
  						<div class="col-lg-12">
  							<h3 class="r_course_title">Related Courses</h3>
  						</div>
  						<div class="col-lg-6 col-xl-4">
  							<div class="top_courses">
  								<div class="thumb">
  									<img class="img-whp" src="images/courses/t1.jpg" alt="t1.jpg">
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
  						<div class="col-lg-6 col-xl-4">
  							<div class="top_courses">
  								<div class="thumb">
  									<img class="img-whp" src="images/courses/t2.jpg" alt="t2.jpg">
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
  						<div class="col-lg-6 col-xl-4">
  							<div class="top_courses">
  								<div class="thumb">
  									<img class="img-whp" src="images/courses/t3.jpg" alt="t3.jpg">
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
  					</div> -->

  				</div>
  				<div class="col-lg-4 col-xl-3">
  					<div class="instructor_pricing_widget">
  						<div class="price"><span>Price</span> Free </div>
  						{{-- <div class="price"><span>Price</span> $49.00 <small>$69.00</small></div> --}}
  						<a href="{{ route('seip_registration') }}" class="cart_btnss">Join</a>

  						{{-- <h5 class="subtitle text-left">Includes</h5>
  						<ul class="price_quere_list text-left">
  							<li><a href="#"><span class="flaticon-play-button-1"></span> 11 hours on-demand video</a></li>
  							<li><a href="#"><span class="flaticon-download"></span> 69 downloadable resources</a></li>
  							<li><a href="#"><span class="flaticon-key-1"></span> Full lifetime access</a></li>
  							<li><a href="#"><span class="flaticon-responsive"></span> Access on mobile and TV</a></li>
  							<li><a href="#"><span class="flaticon-flash"></span> Assignments</a></li>
  							<li><a href="#"><span class="flaticon-award"></span> Certificate of Completion</a></li>
  						</ul> --}}
  					</div>
  					{{-- <div class="feature_course_widget">
  						<ul class="list-group">
  							<h4 class="title">Course Features</h4>
  							<li class="d-flex justify-content-between align-items-center">
  						    	Lectures <span class="float-right">6</span>
  							</li>
  							<li class="d-flex justify-content-between align-items-center">
  						    	Quizzes <span class="float-right">1</span>
  							</li>
  							<li class="d-flex justify-content-between align-items-center">
  						    	Duration <span class="float-right">3 hours</span>
  							</li>
  							<li class="d-flex justify-content-between align-items-center">
  						    	Skill level <span class="float-right">All level</span>
  							</li>
  							<li class="d-flex justify-content-between align-items-center">
  						    	Language <span class="float-right">English</span>
  							</li>
  							<li class="d-flex justify-content-between align-items-center">
  						    	Assessments <span class="float-right">Yes</span>
  							</li>
  						</ul>
  					</div> --}}
  					{{-- <div class="blog_tag_widget">
  						<h4 class="title">Tags</h4>
  						<ul class="tag_list">
  							<li class="list-inline-item"><a href="#">Photoshop</a></li>
  							<li class="list-inline-item"><a href="#">Sketch</a></li>
  							<li class="list-inline-item"><a href="#">Beginner</a></li>
  						</ul>
  					</div> --}}
  					<div class="selected_filter_widget style2">
  						{{-- <span class="float-left"><img class="mr20" src="{{ asset('custom/images/resource/2.png') }}" alt="2.png"></span>
  						<h4 class="mt15 fz20 fw500">Not sure?</h4> --}}
  						<br>
  						<p>We will provide job placement after successfull course complete</p>
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
