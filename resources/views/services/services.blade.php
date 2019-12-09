@extends('xubi.app')


@section('title')
Services
@endsection


@section('content')
<!-- welcome section -->
<!--breadcumb start here-->
<div class="xs-inner-banner inner-banner2" style="background-image:url('assets/images/banner/2.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-7 mx-auto">
				<div class="inner-banner">
					<h2 class="inner-banner-title">Services</h2>
					<ul class="breadcumbs list-inline">
						<li><a href="{{ route('homepage') }}">Home</a></li>
						<li>Services</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--breadcumb end here-->
<!-- End welcome section -->


<!-- agency cases section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row no-gutters agency-filter-wraper">
            <div class="col-lg-4 offset-md-4">
                <div class="agency-section-title">
                    <h3 class="main-title">Xubisoft <em>Services</em></h3>

                </div><!-- .agency-section-title END -->
            </div>
            <!-- <div class="col-lg-8">
                <div class="filter-button-wraper">
                    <ul id="filters" class="option-set clearfix main-filter" data-option-key="filter">
                        <li><a href="#" data-option-value="*" class="selected">ALL PROJECTS</a></li>
												@foreach ($company_all_categories as $company_all_category)
													<li><a href="#" data-option-value=".item{{ $company_all_category->id }}">{{ $company_all_category->service_category_name }}</a></li>
												@endforeach
                    </ul>
                </div>
								filter-button-wraper END
            </div> -->
        </div>


				{{-- <div class="row no-gutters agency-filter-wraper">
            <div class="col-lg-12">
                <div class="filter-button-wraper">
                    <ul id="filters" class="option-set clearfix main-filter" data-option-key="filter">
                        <li><a href="#" data-option-value="*" class="selected">ALL PROJECTS</a></li>
												@foreach ($company_all_categories as $company_all_category)
													<li><a href="#" data-option-value=".item{{ $company_all_category->id }}">{{ Str::limit($company_all_category->service_category_name ,6 ) }}</a></li>
												@endforeach
                    </ul>
                </div>
            </div>
        </div> --}}


				<!-- .row end -->
        {{-- <div class="cases-grid">
					@foreach ($company_all_services as $company_all_service)
					<div class="grid-item item{{$company_all_service->relationBetweenCategory->id }}">
							<div class="single-cases-card">
									<div class="card-image">
											<img src="{{ asset('uploads/service')}}/{{ $company_all_service ->service_photo }}" alt="">
									</div>
									<div class="cases-content">
											<h3 class="xs-title">
													<a href="{{ url('/services') }}/{{ $company_all_service->service_category_id }}">{{ $company_all_service->service_name }}</a>
											</h3>
											<span class="tag">{{ $company_all_service->relationBetweenCategory->service_category_name }}</span>
									</div>
							</div>
					</div>
					@endforeach
        </div> --}}





				<section class="growth-card-section xs-section-padding">
						<div class="container">


								<div class="row xs-mb-6">
									@foreach ($company_all_services as $company_all_service)

										<div class="col-md-4 col-lg-4 item{{$company_all_service->relationBetweenCategory->id }}">
												<a href="{{ url('/services') }}/{{ $company_all_service->service_category_id }}">
														<div class="info-card text-center" style="margin: 15px 0 !important;">
																<div class="info-card-header Info_headline">
																		<img src="{{ asset('uploads/service')}}/{{ $company_all_service ->service_photo }}" alt="{{ $company_all_service->relationBetweenCategory->service_category_name }}">
																</div>
																<div class="info-card-body">
																		<p class="card-title training_title">{{ $company_all_service->relationBetweenCategory->service_category_name }}</p>
																</div>

																<a href="{{ url('/services') }}/{{ $company_all_service->service_category_id }}" class="cta">
																		<span>more</span>
																		<svg width="13px" height="10px" viewBox="0 0 13 10">
																				<path d="M1,5 L11,5"></path>
																				<polyline points="8 1 12 5 8 9"></polyline>
																		</svg>
																</a>

														</div><!-- .info-card END -->
												</a>
										</div>

										@endforeach
								</div>
								<!-- .row END -->

						</div>
						<!-- .container END -->
						<div class="growth-card-bg">
								<img src="{{ asset('xubisoft/assets/images/growth-bg.png') }}" alt="">
						</div>
				</section>




				<!-- .cases-grid END -->
    </div><!-- .container END -->
</section><!-- agency cases section end -->















@endsection
