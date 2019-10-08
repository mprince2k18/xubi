@extends('xubi.app')

@section('css')


    <!-- Main CSS -->
    <link href="{{ asset('custom/css/training_style.css') }}" rel="stylesheet">

    <!-- {{ asset('custom/') }} -->
@endsection



  @section('content')


  <!-- welcome section -->
  <!--breadcumb start here-->
  <div class="xs-inner-banner inner-banner2" style="background-image:url('assets/images/banner/2.jpg')">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-7 mx-auto">
  				<div class="inner-banner">
  					<h2 class="inner-banner-title">Training & Courses</h2>
  					<ul class="breadcumbs list-inline">
  						<li><a href="{{ route('homepage') }}">Home</a></li>
  						<li>Training & Courses</li>
  					</ul>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  <!--breadcumb end here-->
  <!-- End welcome section -->


  <!-- School Category Courses -->
  	<section id="our-courses" class="our-courses pt90 pt650-992">

  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 offset-lg-3">
  					<div class="main-title text-center">
  						<h3 class="mt0">Xubisoft Training & Courses</h3>
  						<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
  					</div>
  				</div>
  			</div>
  			<div class="row">

          @forelse ($trainings as $training)
  				    <div class="col-sm-6 col-lg-3">
      					<div class="img_hvr_box" style="background-image: url({{ asset('uploads/training') }}/{{ $training->photo }}">
      						<div class="overlay">
      							<div class="details">
      								<h5>{{ $training->name }}</h5>
      							</div>
      						</div>
      					</div>
              </div>
          @empty

              <div class="col-sm-12 col-lg-12">
                <div class="img_hvr_box" style="background-image: url({{ asset('custom/images/courses/1.jpg') }}">
                  <div class="overlay">
                    <div class="details">
                      <h5>No Training Available</h5>
                    </div>
                  </div>
                </div>
              </div>

          @endforelse


  			</div>
  		</div>
  	</section>



    <!-- agency client slider area section -->
    <div class="agency_client_slider gray-bg">
        <div class="container">
            <div class="client-slider owl-carousel">
    					@foreach ($clients as $client)
    						<div class="item">
                  <a href="{{ $client->id }}">
                    <img src="{{ asset('uploads/clients') }}/{{ $client->client_photo }}" alt="{{ $client->client_name }}">
                  </a>
                </div>
    					@endforeach
            </div><!-- .client-slider end -->
        </div><!-- .container END -->
    </div>
    <!-- agency client slider area section end -->


  @endsection


  @section('js')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <!-- Custom script for all pages -->
        <script type="text/javascript" src="{{ asset('custom/js/training_script.js') }}"></script>

  @endsection
