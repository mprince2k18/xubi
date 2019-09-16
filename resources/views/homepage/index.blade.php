@extends('xubi.app')

@section('title')

Xubisoft | IT Solution

@endsection

@section('content')


    <!-- End header section -->
    <!-- agency banner section -->
    <section class="banner-area-wraper">
        <div class="banner-slider-area">

            <div class="banner-slider owl-carousel">

              {{-- single-banner-slider strats --}}
              
              @foreach ($banners as $banner)

                <div class="single-banner-slider" style="background-image: url({{ asset('uploads/banner')}}/{{ $banner ->header_banner }}">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 mr-auto">
                                <div class="agency-banner-content banner-style2">
                                    <h1 class="banner-title">{{ $banner->header_headline  }}</h1>
                                    <p>{{ $banner->header_message  }}</p>
                                    <div class="btn-wraper"> <a href="#" class="btn btn-primary btn-gradient3">GET STARTED</a> </div>
                                </div>
                                <!-- .agency-banner-content END -->
                            </div>
                        </div>
                        <!-- .row END -->
                    </div>
                    <!-- .container END -->
                </div>
              @endforeach
                <!-- .single-banner-slider END -->


            </div>

            <!-- .banner-slider END -->
        </div>
        <div class="banner-overlay-bg"> <img src="{{ asset('xubisoft/assets/images/welcome/home2-banner-icon1.png)') }}" alt="" class="banner-image1"> <img src="{{ asset('xubisoft/assets/images/welcome/home2-banner-icon2.png') }}" alt="" class="banner-image2"> <img src="{{ asset('xubisoft/assets/images/welcome/banner-dots.png') }}" alt="" class="banner-dots banner-dots1"> <img src="{{ asset('xubisoft/assets/images/welcome/banner-dots.png') }}" alt="" class="banner-dots banner-dots2"> </div>
    </section>
    <!-- end agency banner section -->
    <!-- business info section -->
    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="agency-section-title text-center section-title-style2">
                        <h2 class="main-title">We are young but not bold</h2>
                        <p>We work systematically to integrate corporate responsibility in our core business We work systematically to integrate corporate responsibility in our core business</p>
                    </div>
                </div>
            </div>
            <!-- .row end -->
            <div class="row">
              @foreach ($infos as $info)

                <div class="col-md-6 col-lg-4">
                    <div class="single-info-block text-center">

                        <div class="info-header"> <img src="{{ asset('uploads/info')}}/{{ $info ->Info_banner }}" alt=""> </div>
                        <h3 class="small">{{ $info->Info_headline }}</h3>
                        <p>{{ $info->Info_message }}</p>
                    </div>
                    <!-- .single-info-block END -->
                  </div>

              @endforeach

            </div>
            <!-- .row END -->
        </div>
        <!-- .container END -->
    </section>
    <!-- end business info section -->
    <!-- about section -->
    <section class="xs-section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-slider-wraper">
                        <div class="about-slider owl-carousel">
                            <div class="single-slider"> <img src="{{ asset('xubisoft/assets/images/about-slider/about-slider1.png') }}" alt=""> </div>
                            <div class="single-slider"> <img src="{{ asset('xubisoft/assets/images/about-slider/about-slider2.png') }}" alt=""> </div>
                            <div class="single-slider"> <img src="{{ asset('xubisoft/assets/images/about-slider/about-slider3.png') }}" alt=""> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="about-summary-content"> <i class="icon icon-agenda gradient-icon"></i>
                        <h2 class="section-title">We don’t hide,  <span class="gradient-title"><em>we stand tall in front of challenge</em></span></h2>
                        <p>In the world of information technology, the concept of ‘today’ is abstract. its all about what is coming tomorrow. Anyone who is prepared for today only, will be obsolete tomorrow. we must be prepared for tomorrow to keep up today. We, Xubisoft, are a group of professionals banded together to take on the IT challenges of tomorrow. we have weathered storms and learnt to stand tall when it is rough and navigate our way through it. to us, no challenge is too big and no job is too small. We welcome you all to our world; together we will build a better, brighter and sustainable future for us all.</p>
                        <div class="btn-wraper"> <a href="#" class="btn btn-primary btn-gradient3">Get Started</a> </div>
                    </div>
                </div>
            </div>
            <!-- .row END -->
        </div>
        <!-- .container END -->
    </section>
    <!-- end about section -->


    <!-- testimonial version four start -->
    <div class="xs-section-padding-bottom">

        <!-- client says strart -->
        <section class="client-says-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="client-title-wraper">
                    <h2 class="client-title">CEO's Message</h2>
                    <span class="content-separete-border"></span>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="swiper-container vertical-slider">


@foreach ($ceos as $ceo)
<div class="swiper-wrapper">
    <div class="swiper-slide">
        <div class="client-comments">
            <div class="client-massage">
                <p> {{ $ceo->ceo_message }} </p>
            </div>
            <div class="client-info clearfix">
                <div class="client-avatar">

                    <img src="{{ asset('uploads/ceo')}}/{{ $ceo ->ceo_photo }}" alt="{{ $ceo->ceo_name}}">
                    <!-- <div class="client-sign">
                        <img src="{{ asset('xubisoft/assets/images/client-sign.png') }}" alt="">
                    </div> -->
                </div>
                <div class="client-bio">
                    <h3 class="client-name">{{ $ceo->ceo_name}}</h3>
                    <p class="designation">{{ $ceo->ceo_position }}</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endforeach


                </div>
            </div>
        </div><!-- .row END -->
        <div class="swiper-pagination vertical-pagination"></div>
    </div><!-- .container END -->
</section>        <!-- end client says -->
    </div>
    <!-- testimonial version four end -->




    <!-- sucess history section -->
    <section class="xs-section-padding waypoint-tigger">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="success-summary">
                        <div class="success-summary-content"> <i class="icon icon-coins-2 gradient-icon"></i>
                            <h3 class="content-title">A Satisfied Customer is best for business</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                        <div class="piechats-wraper clearfix">
                            <div class="single-piechart">
                                <div class="chart" data-percent="75">
                                    <div class="chart-content"></div>
                                </div>
                                <p>Laravel</p>
                            </div>
                            <!-- .single-piechart END -->
                            <div class="single-piechart">
                                <div class="chart" data-percent="85">
                                    <div class="chart-content"></div>
                                </div>
                                <p>iOS Apps</p>
                            </div>
                            <!-- .single-piechart END -->
                            <div class="single-piechart">
                                <div class="chart" data-percent="88">
                                    <div class="chart-content"></div>
                                </div>
                                <p>Android</p>
                            </div>
                            <!-- .single-piechart END -->
                        </div>
                    </div>
                    <!-- .success-summary END -->
                </div>
                <div class="col-lg-6">

                    <div class="success-summary-image"> <img src="{{ asset('xubisoft/assets/images/success-summary-img.png') }}" alt=""> </div>
                </div>
            </div>
            <!-- .row END -->
        </div>
        <!-- .container END -->
    </section>
    <!-- end sucess history section -->
    <!-- agency portfolio area section -->
    <section class="agency_portfolio_section">
        <div class="agency-portfolio-slider owl-carousel owl-theme">
            <div class="single-portfolio portfolio-style2"> <img src="{{ asset('xubisoft/assets/images/portfolio-slider/portfolio-slider-6.jpg') }}" alt="">
                <div class="hover-area">
                    <div class="hover-content">
                        <h4 class="xs-title"><a href="#">Software Lounge</a></h4> <a href="#" class="portfolio-tag">Interface Design</a> </div>
                </div>
                <!-- .hover-area END -->
            </div>
            <!-- .single-portfolio END -->
            <div class="single-portfolio portfolio-style2"> <img src="{{ asset('xubisoft/assets/images/portfolio-slider/portfolio-slider-7.jpg') }}" alt="">
                <div class="hover-area">
                    <div class="hover-content">
                        <h4 class="xs-title"><a href="#">Software Lounge</a></h4> <a href="#" class="portfolio-tag">Interface Design</a> </div>
                </div>
                <!-- .hover-area END -->
            </div>
            <!-- .single-portfolio END -->
            <div class="single-portfolio portfolio-style2"> <img src="{{ asset('xubisoft/assets/images/portfolio-slider/portfolio-slider-8.jpg') }}" alt="">
                <div class="hover-area">
                    <div class="hover-content">
                        <h4 class="xs-title"><a href="#">Software Lounge</a></h4> <a href="#" class="portfolio-tag">Interface Design</a> </div>
                </div>
                <!-- .hover-area END -->
            </div>
            <!-- .single-portfolio END -->
            <div class="single-portfolio portfolio-style2"> <img src="{{ asset('xubisoft/assets/images/portfolio-slider/portfolio-slider-9.jpg') }}" alt="">
                <div class="hover-area">
                    <div class="hover-content">
                        <h4 class="xs-title"><a href="#">Software Lounge</a></h4> <a href="#" class="portfolio-tag">Interface Design</a> </div>
                </div>
                <!-- .hover-area END -->
            </div>
            <!-- .single-portfolio END -->
            <div class="single-portfolio portfolio-style2"> <img src="{{ asset('xubisoft/assets/images/portfolio-slider/portfolio-slider-10.jpg') }}" alt="">
                <div class="hover-area">
                    <div class="hover-content">
                        <h4 class="xs-title"><a href="#">Software Lounge</a></h4> <a href="#" class="portfolio-tag">Interface Design</a> </div>
                </div>
                <!-- .hover-area END -->
            </div>
            <!-- .single-portfolio END -->

            <div class="single-portfolio portfolio-style2"> <img src="{{ asset('xubisoft/assets/images/portfolio-slider/portfolio-slider-6.jpg') }}" alt="">
                <div class="hover-area">
                    <div class="hover-content">
                        <h4 class="xs-title"><a href="#">Software Lounge</a></h4> <a href="#" class="portfolio-tag">Interface Design</a> </div>
                </div>
                <!-- .hover-area END -->
            </div>
            <!-- .single-portfolio END -->
            <div class="single-portfolio portfolio-style2"> <img src="{{ asset('xubisoft/assets/images/portfolio-slider/portfolio-slider-7.jpg') }}" alt="">
                <div class="hover-area">
                    <div class="hover-content">
                        <h4 class="xs-title"><a href="#">Software Lounge</a></h4> <a href="#" class="portfolio-tag">Interface Design</a> </div>
                </div>
                <!-- .hover-area END -->
            </div>
            <!-- .single-portfolio END -->
            <div class="single-portfolio portfolio-style2"> <img src="{{ asset('xubisoft/assets/images/portfolio-slider/portfolio-slider-8.jpg') }}" alt="">
                <div class="hover-area">
                    <div class="hover-content">
                        <h4 class="xs-title"><a href="#">Software Lounge</a></h4> <a href="#" class="portfolio-tag">Interface Design</a> </div>
                </div>
                <!-- .hover-area END -->
            </div>
            <!-- .single-portfolio END -->
            <div class="single-portfolio portfolio-style2"> <img src="{{ asset('xubisoft/assets/images/portfolio-slider/portfolio-slider-9.jpg') }}" alt="">
                <div class="hover-area">
                    <div class="hover-content">
                        <h4 class="xs-title"><a href="#">Software Lounge</a></h4> <a href="#" class="portfolio-tag">Interface Design</a> </div>
                </div>
                <!-- .hover-area END -->
            </div>
            <!-- .single-portfolio END -->

            <div class="single-portfolio portfolio-style2"> <img src="{{ asset('xubisoft/assets/images/portfolio-slider/portfolio-slider-10.jpg') }}" alt="">
                <div class="hover-area">
                    <div class="hover-content">
                        <h4 class="xs-title"><a href="#">Software Lounge</a></h4> <a href="#" class="portfolio-tag">Interface Design</a> </div>
                </div>
                <!-- .hover-area END -->
            </div>
            <!-- .single-portfolio END -->
        </div>
    </section>
    <!-- agency portfolio area section end -->
    <!-- funfact area section -->
    <section class="xs-section-padding waypoint-tigger funfact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="agency-section-title text-center section-title-style2">
                        <h4 class="content-title"> The True measure of the value of any business leader and manager is performance</h4>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                    <!-- .agency-section-title .section-title-style2 END -->
                </div>
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-funfact">

                        <div class="funfact-header"> <img src="{{ asset('xubisoft/assets/images/funfact/funfact-icon-1.png') }}" alt=""> </div> <span class="number-percentage-count number-percentage" data-value="25485" data-animation-duration="3500">0</span>
                        <p>Support Given</p>
                    </div>
                    <!-- .single-funfact END -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-funfact">
                        <div class="funfact-header"> <img src="{{ asset('xubisoft/assets/images/funfact/funfact-icon-2.png') }}" alt=""> </div> <span class="number-percentage-count number-percentage" data-value="784" data-animation-duration="3500">0</span>
                        <p>Video Tutorial</p>
                    </div>
                    <!-- .single-funfact END -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-funfact">
                        <div class="funfact-header"> <img src="{{ asset('xubisoft/assets/images/funfact/funfact-icon-3.png') }}" alt=""> </div> <span class="number-percentage-count number-percentage" data-value="35" data-animation-duration="3500">0</span><span>+</span>
                        <p>Expert Stuff</p>
                    </div>
                    <!-- .single-funfact END -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-funfact">
                        <div class="funfact-header"> <img src="{{ asset('xubisoft/assets/images/funfact/funfact-icon-4.png') }}" alt=""> </div> <span class="number-percentage-count number-percentage" data-value="6548" data-animation-duration="3500">0</span>
                        <p>Expert Stuff</p>
                    </div>
                    <!-- .single-funfact END -->
                </div>
            </div>
            <!-- .row END -->
        </div>
        <!-- .container END -->
    </section>
    <!-- funfact area section end -->
    <!-- agency team section -->
    <section class="xs-section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="agency-section-title text-center section-title-style2">
                        <div class="title-icon"> <i class="icon icon-users3 gradient-icon"></i> </div>
                        <h4 class="main-title">Meet Our Team</h4>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <!-- .row end -->
            <div class="row xs-mb-5">
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-style2">
                        <div class="image"> <img src="{{ asset('xubisoft/assets/images/team/team-5.jpg') }}" alt="">
                            <div class="hover-area text-center">
                                <div class="team-content">
                                    <h4 class="xs-title">CHARLOTTE GRACE</h4> <span>Chief Executive</span> </div>
                                <ul class="social-list version-5">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <!-- .social-list -->
                            </div>
                            <!-- .hover-area END -->
                        </div>
                    </div>
                    <!-- .single-team-style2 END -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-style2">
                        <div class="image"> <img src="{{ asset('xubisoft/assets/images/team/team-6.jpg') }}" alt="">
                            <div class="hover-area text-center">
                                <div class="team-content">
                                    <h4 class="xs-title">ROBERT S NUNN</h4> <span>Talent Director</span> </div>
                                <ul class="social-list version-5">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <!-- .social-list -->
                            </div>
                            <!-- .hover-area END -->
                        </div>
                    </div>
                    <!-- .single-team-style2 END -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-style2">
                        <div class="image"> <img src="{{ asset('xubisoft/assets/images/team/team-7.jpg') }}" alt="">
                            <div class="hover-area text-center">
                                <div class="team-content">
                                    <h4 class="xs-title">JOSEPH L KEESLER</h4> <span>Interior Design</span> </div>
                                <ul class="social-list version-5">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <!-- .social-list -->
                            </div>
                            <!-- .hover-area END -->
                        </div>
                    </div>
                    <!-- .single-team-style2 END -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-style2">
                        <div class="image"> <img src="{{ asset('xubisoft/assets/images/team/team-8.jpg') }}" alt="">
                            <div class="hover-area text-center">
                                <div class="team-content">
                                    <h4 class="xs-title">GERALD Y KOHL</h4> <span>Product Investigator</span> </div>
                                <ul class="social-list version-5">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <!-- .social-list -->
                            </div>
                            <!-- .hover-area END -->
                        </div>
                    </div>
                    <!-- .single-team-style2 END -->
                </div>
            </div>
            <div class="team-bottom-info text-center">
                <h4 class="content-title">Interested to Working With?</h4> <a href="contact.html" class="btn btn-primary btn-gradient3">Join Our Team</a> </div>
        </div>
    </section>
    <!-- agency team section end -->
    <!-- agency media area section -->
    <section class="xs-section-padding agency_media_section" data-scrollax-parent="true">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="agency-section-title text-center section-title-style2">
                        <h4 class="main-title">Our News Desk</h4>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog blog-style2">
                        <div class="post-image"> <img src="{{ asset('xubisoft/assets/images/blog/agency-blog-4.jpg') }}" alt=""> </div>
                        <!-- .post-image end -->
                        <div class="post-body">
                            <div class="entry-header">
                                <div class="entry-meta"> <a href="#" class="post-cat gradient-title"><i class="icon icon-folder"></i> WEB DEVELOPMENT</a> </div>
                                <h4 class="entry-title">
                                <a href="blog-single.html">We design platform for all global customers</a>
                            </h4> </div>
                            <div class="post-footer media">
                                <div class="media-body"> <img src="{{ asset('xubisoft/assets/images/team/team-3.jpg')}}" alt=""> <a href="#">ROBERTO</a> </div>
                                <ul class="xs-list list-inline">
                                    <li><a href="#"><i class="icon icon-chat-1s"></i> 10</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- .post-body end -->
                    </div>
                    <!-- .single-blog post end -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog blog-style2">
                        <div class="post-image"> <img src="{{ asset('xubisoft/assets/images/blog/agency-blog-5.jpg') }}" alt=""> </div>
                        <!-- .post-image end -->
                        <div class="post-body">
                            <div class="entry-header">
                                <div class="entry-meta"> <a href="#" class="post-cat gradient-title"><i class="icon icon-folder"></i> IOS APPS</a> </div>
                                <h4 class="entry-title">
                                <a href="blog-single.html">Alphabet Village and the subline of her own</a>
                            </h4> </div>
                            <div class="post-footer media">
                                <div class="media-body"> <img src="{{ asset('xubisoft/assets/images/team/team-2.jpg') }}" alt=""> <a href="#">GILBERTO</a> </div>
                                <ul class="xs-list list-inline">
                                    <li><a href="#"><i class="icon icon-chat-1s"></i> 15</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- .post-body end -->
                    </div>
                    <!-- .single-blog post end -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post-list">
                        <div class="single-blog blog-style2">
                            <div class="entry-header">
                                <div class="entry-meta"> <a href="#" class="post-cat gradient-title"><i class="icon icon-folder"></i> MARKETING</a> </div>
                                <h4 class="entry-title">
                                <a href="blog-single.html">Italic Mountains, she had a last view back</a>
                            </h4> </div>
                        </div>
                        <!-- .single-blog post end -->
                        <div class="single-blog blog-style2">
                            <div class="entry-header">
                                <div class="entry-meta"> <a href="#" class="post-cat gradient-title"><i class="icon icon-folder"></i> FRONT END</a> </div>
                                <h4 class="entry-title">
                                <a href="blog-single.html">t is a country, in which roasted parts</a>
                            </h4> </div>
                        </div>
                        <!-- .single-blog post end -->
                        <div class="single-blog blog-style2">
                            <div class="entry-header">
                                <div class="entry-meta"> <a href="#" class="post-cat gradient-title"><i class="icon icon-folder"></i> IOS APPS</a> </div>
                                <h4 class="entry-title">
                                <a href="blog-single.html">The Big Oxmox advised her not to do so, because </a>
                            </h4> </div>
                        </div>
                        <!-- .single-blog post end -->
                    </div>
                </div>
            </div>
            <!-- .row END -->
            <div class="btn-wraper text-center"> <a href="news-list.html" class="btn btn-primary btn-gradient3 icon-right">VIEW ALL <i class="icon icon-arrow-right"></i></a> </div>
        </div>
        <!-- .container END -->
    </section>
    <!-- agency media area section end -->
    <!-- call to action section -->
    <section class="calltoaction-area" style="background-image: url({{ asset('xubisoft/assets/images/call-to-action.jpg') }};">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="call-to-action text-center">
                        <h4 class="content-title">Interested! <br> Have any Project to Work With</h4>
                        <div class="btn-wraper"> <a href="#" class="btn btn-primary style2 icon-right">Hire us <i class="icon icon-arrow-right"></i></a> <a href="#" class="btn btn-outline-secondary">Learn More</a> </div>
                    </div>
                </div>
            </div>
            <!-- .row END -->
        </div>
        <!-- .container END -->
        <div class="xs-overlay gradient-bg"></div>
    </section>
    <!-- call to action section end -->
    <!-- agency review section -->
    <section class="review-area xs-section-padding" style="background-image: url({{ asset('xubisoft/assets/images/map-bg.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="agency-section-title text-center section-title-style2">
                        <h4 class="main-title">Our Client Says</h4> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="review-slider-thumb owl-carousel">

                        <div class="single-review-thumb"> <img src="{{ asset('xubisoft/assets/images/team/team-1.jpg') }}" alt=""> </div>
                        <div class="single-review-thumb"> <img src="{{ asset('xubisoft/assets/images/team/team-2.jpg') }}" alt=""> </div>
                        <div class="single-review-thumb"> <img src="{{ asset('xubisoft/assets/images/team/team-3.jpg') }}" alt=""> </div>
                        <div class="single-review-thumb"> <img src="{{ asset('xubisoft/assets/images/team/team-4.jpg') }}" alt=""> </div>
                        <div class="single-review-thumb"> <img src="{{ asset('xubisoft/assets/images/team/team-1.jpg') }}" alt=""> </div>
                    </div>
                    <div class="review-slider-preview owl-carousel">
                        <div class="review-content text-center review-style2">
                            <div class="star-rating-wraper">
                                <ul class="list-inline star-rating-list">
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                </ul>
                            </div>
                            <p><em>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with</em></p>
                            <hr>
                            <div class="reviewer-bio">
                                <h5>Charlotte Grace</h5>
                                <p>System Engineer</p>
                            </div>
                        </div>
                        <!-- ."review-content END -->
                        <div class="review-content text-center review-style2">
                            <div class="star-rating-wraper">
                                <ul class="list-inline star-rating-list">
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                </ul>
                            </div>
                            <p><em>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with</em></p>
                            <hr>
                            <div class="reviewer-bio">
                                <h5>Ronald F Perez</h5>
                                <p>Dental Assistant</p>
                            </div>
                        </div>
                        <!-- ."review-content END -->
                        <div class="review-content text-center review-style2">
                            <div class="star-rating-wraper">
                                <ul class="list-inline star-rating-list">
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                </ul>
                            </div>
                            <p><em>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with</em></p>
                            <hr>
                            <div class="reviewer-bio">
                                <h5>Ladonna E Taylor</h5>
                                <p>Health Specialties Teacher, Postsecondary</p>
                            </div>
                        </div>
                        <!-- ."review-content END -->
                        <div class="review-content text-center review-style2">
                            <div class="star-rating-wraper">
                                <ul class="list-inline star-rating-list">
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                </ul>
                            </div>
                            <p><em>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with</em></p>
                            <hr>
                            <div class="reviewer-bio">
                                <h5>Madge B Anderson</h5>
                                <p>Survey Researcher</p>
                            </div>
                        </div>
                        <!-- ."review-content END -->
                        <div class="review-content text-center review-style2">
                            <div class="star-rating-wraper">
                                <ul class="list-inline star-rating-list">
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                    <li><a href="#"><i class="icon icon-star-1"></i></a></li>
                                </ul>
                            </div>
                            <p><em>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with</em></p>
                            <hr>
                            <div class="reviewer-bio">
                                <h5>Debra R Buss</h5>
                                <p>General and Operations Manager</p>
                            </div>
                        </div>
                        <!-- ."review-content END -->
                    </div>
                    <!-- .review-slider END -->
                </div>
            </div>
            <!-- .row END -->
        </div>
        <!-- .container END -->
    </section>
    <!-- agency review section end -->
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
    <!-- get subscribe now area section -->
    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="get-subscribenow-content">
                        <h2 class="section-title">Get Subscribed Now!</h2>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden</p>
                        <form action="#" class="get-subscribe my-newsletter" method="POST">
                            <input type="email" name="email" id="sub-input-two" placeholder="Your Email" class="form-control">
                            <label for="sub-input-two"></label>
                            <button type="submit" class="btn btn-primary btn-gradient3 icon-left"><i class="icon icon-envelope4"></i> Subscribe Now</button>
                        </form>
                        <!-- .get-subscribe my-newslette END -->
                    </div>
                    <!-- .get-subscribenow-content END -->
                </div>
                <div class="col-md-6">

                    <div class="get-subscribe-image"> <img src="{{ asset('xubisoft/assets/images/getSubscribe-img.png') }}" alt=""> </div>
                </div>
            </div>
            <!-- .row END -->
        </div>
        <!-- .container END -->
    </section>
    <!-- get subscribe now area section end -->
    <!-- language switcher strart -->
    <!-- xs modal -->
    <div class="zoom-anim-dialog mfp-hide modal-language" id="modal-popup-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="language-content">
                    <p>Switch The Language</p>
                    <ul class="flag-lists">
                        <li>
                            <a href="#"><img src="assets/images/flags/006-united-states.svg" alt=""><span>English</span></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/images/flags/002-canada.svg" alt=""><span>English</span></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/images/flags/003-vietnam.svg" alt=""><span>Vietnamese</span></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/images/flags/004-france.svg" alt=""><span>French</span></a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/images/flags/005-germany.svg" alt=""><span>German</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End xs modal -->
    <!-- end language switcher strart -->
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
    <!-- offset cart strart -->
    <!-- sidebar cart item -->
    <div class="xs-sidebar-group cart-group">
        <div class="xs-overlay black-bg"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading media">
                    <div class="media-body"> <a href="#" class="close-side-widget">
                        X
                    </a> </div>
                </div>
                <div class="xs-empty-content">
                    <h3 class="widget-title">Shopping cart</h3>
                    <h4 class="xs-title">No products in the cart.</h4>
                    <p class="empty-cart-icon"> <i class="icon icon-shopping-cart"></i> </p>
                    <p class="xs-btn-wraper"> <a class="btn btn-primary" href="shop.html">Return To Shop</a> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar cart item -->
    <!-- END offset cart strart -->
    <!-- offset cart strart -->
    <!-- sidebar cart item -->
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay black-bg"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget"> <i class="icon icon-cross"></i> </a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-logo-wraper">

                        <a href="index.html"> <img src="{{ asset('xubisoft/assets/images/xubi/xubi_logo2.png') }}" alt="sidebar logo"> </a>
                    </div>
                    <p>Far far away, behind the word moun tains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of </p>
                    <ul class="sideabr-list-widget">
                        <li>
                            <div class="media">
                                <div class="d-flex"> <img src="assets/images/location.png" alt=""> </div>
                                <div class="media-body">
                                    <p>759 Pinewood Avenue</p> <span>Marquette, Michigan</span> </div>
                            </div>
                            <!-- address 1 -->
                        </li>
                        <li>
                            <div class="media">
                                <div class="d-flex"> <img src="assets/images/mail.png" alt=""> </div>
                                <div class="media-body"> <a href="mailto:info@domain.com">info@domain.com</a> <span>Online Support</span> </div>
                            </div>
                            <!-- address 1 -->
                        </li>
                        <li>
                            <div class="media">
                                <div class="d-flex"> <img src="assets/images/phone.png" alt=""> </div>
                                <div class="media-body"> <a href="tel:906-624-2565">906-624-2565</a> <span>Mon-Fri 8am-5pm</span> </div>
                            </div>
                            <!-- address 1 -->
                        </li>
                    </ul>
                    <!-- .sideabr-list-widget -->
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
                    </ul>
                    <!-- .social-list -->
                    <div class="text-center"> <a href="https://themeforest.net/user/xpeedstudio/portfolio" class="btn btn-primary">Purchase Now</a> </div>
                </div>
            </div>
        </div>
    </div>
      @endsection
