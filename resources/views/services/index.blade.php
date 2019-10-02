@extends('xubi.app')

@section('title')

{{ $single_service_info->service_category_name }}

@endsection

@section('content')
<!-- agency banner case details section -->
<section class="case-details-banner" data-scrollax-parent="true">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <div class="case-details-banner-content">
                    <div class="agency-banner-content">
                        <h1 class="banner-title">


                          {{ $single_service_info->relationBetweenServices->title }}


                        </h1>
                        <p>{{ $single_service_info->relationBetweenServices->sub_title }}</p>
                        <span class="watermark-title">{{ $single_service_info->relationBetweenServices->title_watermark_single }}</span>
                    </div><!-- .agency-banner-content END -->
                    <ul class="case-info-list">
                        <li><i class="icon icon-bell"></i><span>Front-End</span></li>
                        <li><i class="icon icon-idea"></i><span>UI/UX</span></li>
                        <li><i class="icon icon-money-bag"></i><span>Back-End</span></li>
                    </ul><!-- .case-info-list END -->
                    <div class="case-details-image">
                        <span class="watermark-title" data-scrollax="properties: { translateY: '-250px' }">{{ $single_service_info->relationBetweenServices->title_watermark_full }}</span>
                        <img src="{{asset('xubisoft/assets/images/welcome/case-details.jpg')}}" alt="">
                    </div><!-- .case-details-image END -->
                </div><!-- .case-details-banner-content END -->
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
    <div class="banner-icon-image"></div>
</section><!-- agency banner case details section end -->

<!-- agency case details about section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="case-details-about">
                    <div class="agency-section-title">
                        <h3 class="sub-title">OVERVIEW</h3>
                        <h4 class="main-title">About the <em>{{ $single_service_info->relationBetweenServices->about_service_title }}</em></h4>
                    </div>
                    <p>{{ $single_service_info->relationBetweenServices->details_about_service }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-info">
                    <h2 class="section-title">Info</h2>
                    <ul class="list-group">
                        <li><strong>Category :</strong>{{ $single_service_info->service_category_name }}</li>
                        <li><strong>Date :</strong>25 June, 2018</li>
                        <!-- <li><strong>Client :</strong>Oniblue</li> -->
                        <li>
                            <strong>Share :</strong>
                            <ul class="simple-social-list">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="googlePlus"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- agency case details about section end -->

<!-- agency project brief section -->
<section class="xs-section-padding gray-bg" data-scrollax-parent="true">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="agency-section-title text-center">
                    <h3 class="sub-title">PROJECT BRIEF</h3>
                    <h4 class="main-title">The Working <em>Challenge</em></h4>
                    <span class="watermark-title" data-scrollax="properties: { translateY: '-250px' }">BRIEF</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="project-brief-img">
                    <img src="{{ asset('xubisoft/assets/images/project_brief.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="project-brief-content">
                    <p>{{ $single_service_info->relationBetweenServices->service_info_details }}</p>
                    <ol class="order-list">
                        <li>{{ $single_service_info->relationBetweenServices->service_info_items_1 }}</li>
                        <li>{{ $single_service_info->relationBetweenServices->service_info_items_2 }} </li>
                        <li>{{ $single_service_info->relationBetweenServices->service_info_items_3 }} </li>
                    </ol>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- agency project brief section end -->

<!-- agency project progress section -->
<section class="xs-section-padding working-progress-area" data-scrollax-parent="true">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="agency-section-title text-center">
                    <h3 class="sub-title">SOLUTION</h3>
                    <h4 class="main-title">Our Working <em>Process</em></h4>
                    <span class="watermark-title" data-scrollax="properties: { translateY: '-250px' }">PROCESS</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto single-working-progress">
                <div class="row">
                    <div class="col-md-6">
                        <div class="working-progress-content">
                            <span class="count-number wow spin"></span>
                            <h2 class="section-title">Gather all the informations</h2>
                            <p>We work systematic integrate corporate responsibility in our core business and make our expertise available the benefit of the societies where we</p>
                        </div><!-- .working-progress-content END -->
                    </div>
                    <div class="col-md-6">
                        <div class="working-progress-images">

                            <img src="{{ asset('xubisoft/assets/images/progress/progress-1.jpg') }}" alt="">
                        </div><!-- .working-progress-images END -->
                    </div>
                </div>
            </div><!-- .single-working-progress END -->
            <div class="col-lg-10 mx-auto single-working-progress">
                <div class="row">
                    <div class="col-md-6">
                        <div class="working-progress-content">
                            <span class="count-number wow spin"></span>
                            <h2 class="section-title">Find Solution and Solve it</h2>
                            <p>We work systematic integrate corporate responsibility in our core business and make our expertise available the benefit of the societies where we</p>
                        </div><!-- .working-progress-content END -->
                    </div>
                    <div class="col-md-6">
                        <div class="working-progress-images">

                            <img src="{{ asset('xubisoft/assets/images/progress/progress-2.jpg') }}" alt="">
                        </div><!-- .working-progress-images END -->
                    </div>
                </div>
            </div><!-- .single-working-progress END -->
            <div class="col-lg-10 mx-auto single-working-progress">
                <div class="row">
                    <div class="col-md-6">
                        <div class="working-progress-content">
                            <span class="count-number wow spin"></span>
                            <h2 class="section-title">Finally get the Result</h2>
                            <p>We work systematic integrate corporate responsibility in our core business and make our expertise available the benefit of the societies where we</p>
                        </div><!-- .working-progress-content END -->
                    </div>
                    <div class="col-md-6">
                        <div class="working-progress-images">

                            <img src="{{ asset('xubisoft/assets/images/progress/progress-3.jpg') }}" alt="">
                        </div><!-- .working-progress-images END -->
                    </div>
                </div>
            </div><!-- .single-working-progress END -->
        </div><!-- .row END -->
    </div><!-- .container END -->
    <div class="doodle-parallax">
        <img src="assets/images/doodle/5.png" data-scrollax="properties: { translateY: '-200%' }" class="single-doodle one" alt="">
        <img src="assets/images/doodle/6.png" data-scrollax="properties: { translateY: '-150%' }" class="single-doodle two" alt="">
    </div>
</section><!-- agency project progress section end -->

<!-- agency call to action section -->

<section class="agency_callto_action xs-section-padding" style="background-image:url('{{ asset('xubisoft/assets/images/doodle-background/3.png') }}')">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <div class="call-to-action-content">
                    <h2 class="section-title">Have any project for us?</h2>
                    <p>We work systematic integrate corporate responsibility in our core business </p>
                    <a href="pricing.html" class="btn btn-primary">ESTIMATE PROJECT</a>
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</section><!-- agency call to action section end -->


<!-- agency client slider area section -->
    <div class="agency_client_slider client-slider-style2 gray-bg">
        <div class="container">
            <div class="client-slider owl-carousel">
                <div class="item"> <img src="{{ asset('xubisoft/assets/images/xubi/acer.png') }}" alt=""> </div>
                <div class="item"> <img src="{{ asset('xubisoft/assets/images/xubi/astrazeneca.png') }}" alt=""> </div>
                <div class="item"> <img src="{{ asset('xubisoft/assets/images/xubi/bacco.jpg') }}" alt=""> </div>
                <div class="item"> <img src="{{ asset('xubisoft/assets/images/xubi/basis-1.jpg') }}" alt=""> </div>
                <div class="item"> <img src="{{ asset('xubisoft/assets/images/xubi/cablenas.png') }}" alt=""> </div>
                <div class="item"> <img src="{{ asset('xubisoft/assets/images/xubi/dhl.png') }}" alt=""> </div>
                <div class="item"> <img src="{{ asset('xubisoft/assets/images/xubi/erecsion.png') }}" alt=""> </div>
                <div class="item"> <img src="{{ asset('xubisoft/assets/images/xubi/frialsa.png') }}" alt=""> </div>
                <div class="item"> <img src="{{ asset('xubisoft/assets/images/xubi/fuji.png') }}" alt=""> </div>
                <div class="item"> <img src="{{ asset('xubisoft/assets/images/xubi/astrazeneca.png') }}" alt=""> </div>
            </div>
            <!-- .client-slider end -->
        </div>
        <!-- .container END -->
    </div>
    <!-- agency client slider area section end -->


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
<!-- end search panel strart -->

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

            </div>
        </div>
    </div>
</div>    <!-- END sidebar widget item -->    <!-- END offset cart strart -->

@endsection
