@extends('xubi.app')


@section('title')
Products
@endsection


@section('content')
<!-- welcome section -->
<!--breadcumb start here-->
<div class="xs-inner-banner inner-banner2" style="background-image:url('assets/images/banner/2.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-7 mx-auto">
				<div class="inner-banner">
					<h2 class="inner-banner-title">Products</h2>
					<ul class="breadcumbs list-inline">
						<li><a href="{{ route('homepage') }}">Home</a></li>
						<li>Products</li>
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
                    <h3 class="main-title">Xubisoft <em>Products</em></h3>

                </div><!-- .agency-section-title END -->
            </div>
            <!-- <div class="col-lg-8">
                <div class="filter-button-wraper">
                    <ul id="filters" class="option-set clearfix main-filter" data-option-key="filter">
                        <li><a href="#" data-option-value="*" class="selected">ALL PRODUCTS</a></li>

                    </ul>
                </div>
            </div> -->
        </div>
				<!-- .row end -->
        <div class="cases-grid">

					@foreach ($company_products as $company_product)
					<div class="grid-item">
							<div class="single-cases-card">
									<div class="card-image">
											<img src="{{ asset('uploads/product')}}/{{ $company_product ->product_photo }}" alt="{{ $company_product ->product_photo }}">
									</div><!-- .card-image END -->

									<div class="cases-content">
											<h3 class="xs-title">
													<a href="{{ url('') }}/{{ $company_product->slug_name }}">{{ $company_product->product_name }}</a>
											</h3>
											
									</div><!-- .cases-content END -->

							</div><!-- .single-cases-card END -->
					</div><!-- .grid-item END -->
					@endforeach

        </div>
				<!-- .cases-grid END -->
    </div><!-- .container END -->
</section><!-- agency cases section end -->















@endsection
