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
					<h2 class="inner-banner-title">Services</h2>
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


<!-- agency cases section -->
<section class="xs-section-padding">
    <div class="container">
        <div class="row no-gutters agency-filter-wraper">
            <div class="col-lg-4">
                <div class="agency-section-title">
                    <h3 class="main-title">Xubisoft <em>Projects</em></h3>

                </div><!-- .agency-section-title END -->
            </div>
            <div class="col-lg-8">
                <div class="filter-button-wraper">
                    <ul id="filters" class="option-set clearfix main-filter" data-option-key="filter">
                        <li><a href="#" data-option-value="*" class="selected">ALL PROJECTS</a></li>
												@foreach ($company_all_categories as $company_all_category)
													<li><a href="#" data-option-value=".item{{ $company_all_category->id }}">{{ $company_all_category->service_category_name }}</a></li>
												@endforeach
                    </ul>
                </div><!-- .filter-button-wraper END -->
            </div>
        </div>
				<!-- .row end -->
        <div class="cases-grid">
					@foreach ($company_all_services as $company_all_service)
					<div class="grid-item item{{$company_all_service->relationBetweenCategory->id }}">
							<div class="single-cases-card">
									<div class="card-image">
											<img src="{{ asset('uploads/service')}}/{{ $company_all_service ->service_photo }}" alt="">
									</div><!-- .card-image END -->
									<div class="cases-content">
											<h3 class="xs-title">
													<a href="{{ url('') }}/{{ $company_all_service->slug_name }}">{{ $company_all_service->service_name }}</a>
											</h3>
											<span class="tag">{{ $company_all_service->relationBetweenCategory->service_category_name }}</span>
									</div><!-- .cases-content END -->
							</div><!-- .single-cases-card END -->
					</div><!-- .grid-item END -->
					@endforeach


        </div>
				<!-- .cases-grid END -->
    </div><!-- .container END -->
</section><!-- agency cases section end -->















@endsection
