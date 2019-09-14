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
            <div class="col-lg-6">
                <div class="agency-section-title">
                    <h3 class="main-title">Xubisoft <em>Projects</em></h3>

                </div><!-- .agency-section-title END -->
            </div>
            <div class="col-lg-6">
                <div class="filter-button-wraper">
                    <ul id="filters" class="option-set clearfix main-filter" data-option-key="filter">
                        <li><a href="#" data-option-value="*" class="selected">ALL PROJECTS</a></li>
                        <li><a href="#" data-option-value=".item1">TYPE OF WORKS</a></li>
                        <li><a href="#" data-option-value=".item2">TYPE OF CLIENTS</a></li>
                    </ul>
                </div><!-- .filter-button-wraper END -->
            </div>
        </div><!-- .row end -->
        <div class="cases-grid">
					<!-- grid-item 1 -->
            <div class="grid-item item1">
                <div class="single-cases-card">
                    <div class="card-image">
                        <img src="{{ asset('xubisoft/assets/images/cases-card/case-card-1.jpg')}}" alt="">
                    </div><!-- .card-image END -->
                    <div class="cases-content">
                        <h3 class="xs-title">
                            <a href="case-details.html">Software Festivals Stall</a>
                        </h3>
                        <span class="tag">Packaging  / Photography</span>
                    </div><!-- .cases-content END -->
                </div><!-- .single-cases-card END -->
            </div><!-- .grid-item END -->
						<!-- grid-item 2 -->

            <div class="grid-item item2">
                <div class="single-cases-card">
                    <div class="card-image">
                        <img src="{{ asset('xubisoft/assets/images/cases-card/case-card-2.jpg')}}" alt="">
                    </div><!-- .card-image END -->
                    <div class="cases-content">
                        <h3 class="xs-title">
                            <a href="case-details.html">Platform 10: Live Feed</a>
                        </h3>
                        <span class="tag">Packaging  / Photography</span>
                    </div><!-- .cases-content END -->
                </div><!-- .single-cases-card END -->
            </div><!-- .grid-item END -->


						<!-- grid-item 1 -->
	            <div class="grid-item item1">
	                <div class="single-cases-card">
	                    <div class="card-image">
	                        <img src="{{ asset('xubisoft/assets/images/cases-card/case-card-1.jpg')}}" alt="">
	                    </div><!-- .card-image END -->
	                    <div class="cases-content">
	                        <h3 class="xs-title">
	                            <a href="case-details.html">Software Festivals Stall</a>
	                        </h3>
	                        <span class="tag">Packaging  / Photography</span>
	                    </div><!-- .cases-content END -->
	                </div><!-- .single-cases-card END -->
	            </div><!-- .grid-item END -->
							<!-- grid-item 2 -->

	            <div class="grid-item item2">
	                <div class="single-cases-card">
	                    <div class="card-image">
	                        <img src="{{ asset('xubisoft/assets/images/cases-card/case-card-2.jpg')}}" alt="">
	                    </div><!-- .card-image END -->
	                    <div class="cases-content">
	                        <h3 class="xs-title">
	                            <a href="case-details.html">Platform 10: Live Feed</a>
	                        </h3>
	                        <span class="tag">Packaging  / Photography</span>
	                    </div><!-- .cases-content END -->
	                </div><!-- .single-cases-card END -->
	            </div><!-- .grid-item END -->



							<!-- grid-item 3 -->

							<div class="grid-item item1">
									<div class="single-cases-card">
											<div class="card-image">
													<img src="{{ asset('xubisoft/assets/images/cases-card/case-card-3.jpg')}}" alt="">
											</div><!-- .card-image END -->
											<div class="cases-content">
													<h3 class="xs-title">
															<a href="case-details.html">Fashion Week (AW18)</a>
													</h3>
													<span class="tag">Packaging  / Photography</span>
											</div><!-- .cases-content END -->
									</div><!-- .single-cases-card END -->
							</div><!-- .grid-item END -->



						<!-- grid-item 3 -->

            <div class="grid-item item1">
                <div class="single-cases-card">
                    <div class="card-image">
                        <img src="{{ asset('xubisoft/assets/images/cases-card/case-card-3.jpg')}}" alt="">
                    </div><!-- .card-image END -->
                    <div class="cases-content">
                        <h3 class="xs-title">
                            <a href="case-details.html">Fashion Week (AW18)</a>
                        </h3>
                        <span class="tag">Packaging  / Photography</span>
                    </div><!-- .cases-content END -->
                </div><!-- .single-cases-card END -->
            </div><!-- .grid-item END -->

						<!-- grid-item 4 -->

            <div class="grid-item item2">
                <div class="single-cases-card">
                    <div class="card-image">
                        <img src="{{ asset('xubisoft/assets/images/cases-card/case-card-4.jpg')}}" alt="">
                    </div><!-- .card-image END -->
                    <div class="cases-content">
                        <h3 class="xs-title">
                            <a href="case-details.html">Penn Station Concourse</a>
                        </h3>
                        <span class="tag">Packaging  / Photography</span>
                    </div><!-- .cases-content END -->
                </div><!-- .single-cases-card END -->
            </div><!-- .grid-item END -->
            <div class="grid-item item2">
                <div class="single-cases-card">
                    <div class="card-image">
                        <img src="{{ asset('xubisoft/assets/images/cases-card/case-card-5.jpg')}}" alt="">
                    </div><!-- .card-image END -->
                    <div class="cases-content">
                        <h3 class="xs-title">
                            <a href="case-details.html">Dubai Poster House</a>
                        </h3>
                        <span class="tag">Packaging  / Photography</span>
                    </div><!-- .cases-content END -->
                </div><!-- .single-cases-card END -->
            </div><!-- .grid-item END -->
            <div class="grid-item item1">
                <div class="single-cases-card">
                    <div class="card-image">
                        <img src="{{ asset('xubisoft/assets/images/cases-card/case-card-6.jpg')}}" alt="">
                    </div><!-- .card-image END -->
                    <div class="cases-content">
                        <h3 class="xs-title">
                            <a href="case-details.html">The Atlantic Theater</a>
                        </h3>
                        <span class="tag">Packaging  / Photography</span>
                    </div><!-- .cases-content END -->
                </div><!-- .single-cases-card END -->
            </div><!-- .grid-item END -->
        </div><!-- .cases-grid END -->
    </div><!-- .container END -->
</section><!-- agency cases section end -->















@endsection
