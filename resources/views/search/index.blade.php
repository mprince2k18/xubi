@extends('xubi.app')


@section('title')
Your Search Result
@endsection


@section('content')
<!-- welcome section -->
<!--breadcumb start here-->
<div class="xs-inner-banner inner-banner2" style="background-image:url('{{ asset('xubisoft/assets/images/banner/2.jpg') }}')">
	<div class="container">
		<div class="row">
			<div class="col-md-7 mx-auto">
				<div class="inner-banner">
					<h2 class="inner-banner-title">Your Search Result</h2>
					<ul class="breadcumbs list-inline">
						<li><a href="{{ route('homepage') }}">Home</a></li>
						<li>Your Search Result </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--breadcumb end here-->
<!-- End welcome section -->














        <section class="xs-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="blog-lsit-group">
                            <div class="xs-blog-list">


                              @if(count($company_services) > 0)
                                  @foreach($company_services as $company_service)

                                <div class="post-list format-standard">
                                    <div class="post-media">
                                        <img src="{{ asset('uploads/service')}}/{{ $company_service->service_photo }}" alt="{{ $company_service->service_name }}" draggable="false">
                                        <div class="entry-meta">
                                            <div class="post-meta-date">
                                                <span class="day">{{ $company_service->created_at->format('d') }}</span>
                                                <span class="month">{{ $company_service->created_at->format('M') }}</span>
                                                <span class="year">{{ $company_service->created_at->format('Y') }}</span>
                                            </div>
                                        </div>
                                    </div><!-- .post-media END -->
                                    <div class="post-body">

                                        <!-- <div class="post-meta-top">
                                            <div class="entry-meta">
                                                <span class="post-cat">
                                                    <a href="#"><i class="icon icon-folder"></i> Business</a>
                                                </span>
                                                <span class="post-meta-comment">
                                                    <a href="#"><i class="icon icon-chat-1"></i> 20 Comments</a>
                                                </span>
                                                <span class="post-meta-fav">
                                                    <a href="#"><i class="icon icon-heart"></i> 205 Favorites</a>
                                                </span>
                                            </div>
                                        </div> -->

                                        <div class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="{{ url('') }}/{{ $company_service->slug_name }}">{{ $company_service->service_name }}</a>
                                            </h2><!-- .entry-title END -->
                                            <div class="entry-content">
                                                <p>
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div><!-- .entry-content END -->
                                            <div class="post-footer">
                                                <a href="{{ url('') }}/{{ $company_service->slug_name }}" class="simple-btn"><i class="icon icon-right-arrow2"></i></a>
                                            </div><!-- .post-footer END -->
                                        </div><!-- .entry-header END -->
                                    </div><!-- .post-body END -->
                                </div><!-- .post-list .format-standard END -->


                                @endforeach
                            @else
                            @endif



                              @if(count($company_products) > 0)
                                  @foreach($company_products as $company_product)

                                <div class="post-list format-standard">
                                    <div class="post-media">
                                        <img src="{{ asset('uploads/product')}}/{{ $company_product->product_photo }}" alt="{{ $company_product->product_photo }}" draggable="false">
                                        <div class="entry-meta">
                                            <div class="post-meta-date">
                                                <span class="day">{{ $company_product->created_at->format('d') }}</span>
                                                <span class="month">{{ $company_product->created_at->format('M') }}</span>
                                                <span class="year">{{ $company_product->created_at->format('Y') }}</span>
                                            </div>
                                        </div>
                                    </div><!-- .post-media END -->
                                    <div class="post-body">

                                        <!-- <div class="post-meta-top">
                                            <div class="entry-meta">
                                                <span class="post-cat">
                                                    <a href="#"><i class="icon icon-folder"></i> Business</a>
                                                </span>
                                                <span class="post-meta-comment">
                                                    <a href="#"><i class="icon icon-chat-1"></i> 20 Comments</a>
                                                </span>
                                                <span class="post-meta-fav">
                                                    <a href="#"><i class="icon icon-heart"></i> 205 Favorites</a>
                                                </span>
                                            </div>
                                        </div> -->

                                        <div class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="{{ url('') }}/{{ $company_product->slug_name }}">{{ $company_product->product_name }}</a>
                                            </h2><!-- .entry-title END -->
                                            <div class="entry-content">
                                                <p>
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div><!-- .entry-content END -->
                                            <div class="post-footer">
                                                <a href="{{ url('') }}/{{ $company_product->slug_name }}" class="simple-btn"><i class="icon icon-right-arrow2"></i></a>
                                            </div><!-- .post-footer END -->
                                        </div><!-- .entry-header END -->
                                    </div><!-- .post-body END -->
                                </div><!-- .post-list .format-standard END -->


                                @endforeach
                            @else
                          
                            @endif


                            </div>
                        </div>

                    </div>

                </div><!-- .row END -->
            </div><!-- .container END -->
        </section>



        @endsection
