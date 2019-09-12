@extends('xubi.app')


@section('title')
Contact
@endsection


@section('content')
<!-- welcome section -->
<!--breadcumb start here-->
<div class="xs-inner-banner inner-banner2" style="background-image:url('assets/images/banner/2.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-7 mx-auto">
				<div class="inner-banner">
					<h2 class="inner-banner-title">Contact Us</h2>
					<ul class="breadcumbs list-inline">
						<li><a href="{{ route('homepage') }}">Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--breadcumb end here--><!-- End welcome section -->

<!-- map -->
<div class="xs-map">
    <div id="xs-map"></div>
</div><!-- End map -->

<!-- agency contact section -->
<div class="agency-contactus gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info-wraper">
                    <ul class="contact-info-list">
                        <li>
                            <i class="icon icon-map-marker2"></i>
                            <div class="list-content">
                                <a href="https://www.google.com/maps/place/Baker+St,+Marylebone,+London,+UK/@51.5206114,-0.1589883,17z/data=!3m1!4b1!4m5!3m4!1s0x48761ace9a2e67d7:0xd458de8d0fdc498e!8m2!3d51.5206114!4d-0.1567996" target="_blank">155 Mark Street, Dixon Avenue New York, NY-45845</a>
                            </div>
                        </li>
                        <li>
                            <i class="icon icon-phone3"></i>
                            <div class="list-content">
                                <a href="tel:+1%20(254)%20587-2548">+1 (254) 587-2548</a>
                                <a href="tel:+1%20(548)%20215-3658">+1(548) 215-3658</a>
                            </div>
                        </li>
                        <li>
                            <i class="icon icon-envelope2"></i>
                            <div class="list-content">
                                <a href="mailto:info@website.com">info@website.com</a>
                                <a href="mailto:query@website.com">query@website.com</a>
                            </div>
                        </li>
                    </ul><!-- .contact-info-list END -->
                    <ul class="social-list version-2">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div><!-- .contact-info-wraper END -->
            </div>
            <div class="col-md-8">


							    <!-- SESSION -->

							        @if (session('success'))
							       <div class="alert alert-success">
							           {{ session('success') }}
							       </div>
							       @endif

							       @if ($errors->any())
							       <div class="alert alert-danger">
							           <ul>
							               @foreach ($errors->all() as $error)
							               <li>{{ $error }}</li>
							               @endforeach
							           </ul>
							       </div><br />
							       @endif

							    <!-- SESSION END-->
                <div class="from-wraper">
									<!-- contact form -->
                    <form action="{{ route('contact_insert') }}" class="contact-form" method="post">
											@csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name *" name="name" id="xs_contact_name" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Email *" name="email" id="xs_contact_email" class="form-control">
                            </div>
                        </div>

                        <input type="text" placeholder="Subject *" name="subject" id="xs_contact_subject" class="form-control">

                        <textarea name="message" id="x_contact_massage" placeholder="Your Message... *" class="form-control" cols="30" rows="10"></textarea>

                        <button type="submit" class="btn btn-primary ml-auto">Send Message</button>
                    </form>
										<!-- contact form ends-->
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</div><!-- agency contact section end -->

<!-- language switcher strart -->
<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="language-content">
                <p>Switch The Language</p>
                <ul class="flag-lists">
                    <li><a href="#"><img src="assets/images/flags/006-united-states.svg" alt=""><span>English</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/002-canada.svg" alt=""><span>English</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/003-vietnam.svg" alt=""><span>Vietnamese</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/004-france.svg" alt=""><span>French</span></a></li>
                    <li><a href="#"><img src="assets/images/flags/005-germany.svg" alt=""><span>German</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- End xs modal --><!-- end language switcher strart -->

<!-- search panel strart -->
<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="xs-search-panel">
                <form action="#" method="POST" class="xs-search-group">
                    <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                    <button type="submit" class="search-button"><i class="icon icon-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div><!-- End xs modal --><!-- end search panel strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group cart-group">
    <div class="xs-overlay black-bg"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading media">
                <div class="media-body">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
            </div>
            <div class="xs-empty-content">
                <h3 class="widget-title">Shopping cart</h3>
                <h4 class="xs-title">No products in the cart.</h4>
                <p class="empty-cart-icon">
                    <i class="icon icon-shopping-cart"></i>
                </p>
                <p class="xs-btn-wraper">
                    <a class="btn btn-primary" href="shop.html">Return To Shop</a>
                </p>
            </div>
        </div>
    </div>
</div>    <!-- END sidebar cart item -->    <!-- END offset cart strart -->

<!-- offset cart strart -->
<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay black-bg"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    <i class="icon icon-cross"></i>
                </a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-logo-wraper">
                    <a href="index.html">
                        <img src="assets/images/color-logo.png" alt="sidebar logo">
                    </a>
                </div>
                <p>Far far away, behind the word moun tains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of  </p>
                <ul class="sideabr-list-widget">
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/location.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>759 Pinewood Avenue</p>
                                <span>Marquette, Michigan</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/mail.png" alt="">
                            </div>
                            <div class="media-body">
                                <a href="mailto:info@domain.com">info@domain.com</a>
                                <span>Online Support</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                    <li>
                        <div class="media">
                            <div class="d-flex">
                                <img src="assets/images/phone.png" alt="">
                            </div>
                            <div class="media-body">
                                <a href="tel:906-624-2565">906-624-2565</a>
                                <span>Mon-Fri 8am-5pm</span>
                            </div>
                        </div><!-- address 1 -->
                    </li>
                </ul><!-- .sideabr-list-widget -->
                <div class="subscribe-form-wraper">
                    <p>Get Subscribed!</p>
                    <form action="#" method="POST" class="subscribe-form">
                        <label for="sub-input"></label>
                        <div class="form-group">
                            <input type="email" name="email" id="sub-input" placeholder="Enter your mail here" class="form-control">
                            <button class="sub-btn" type="submit"><i class="icon icon-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
                <ul class="social-list version-2">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
                </ul><!-- .social-list -->
                <div class="text-center">
                    <a href="https://themeforest.net/user/xpeedstudio/portfolio" class="btn btn-primary">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</div>    <!-- END sidebar widget item -->
@endsection
