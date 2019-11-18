@extends('xubi.app')

@section('css')

    <!-- Main CSS -->
    <link href="{{ asset('custom/css/training_style.css') }}" rel="stylesheet">

    <style media="screen">
      .training_div{
        padding-bottom: 30px;
      }
      .details span{
        color: #fff;
        font-size: 16px;
      }

      .list-group{
        padding-top: 55px;
      }

    </style>

@endsection



  @section('content')


  <!-- welcome section -->
  <!--breadcumb start here-->
  <div class="xs-inner-banner inner-banner2" style="background-image:url('https://res.cloudinary.com/dvd2tat8q/image/upload/v1574057868/img/images_xyhups.jpg')">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-7 mx-auto">
  				<div class="inner-banner">
  					<h2 class="inner-banner-title">Training & Skill Development</h2>
  					<ul class="breadcumbs list-inline">
  						<li><a href="{{ route('homepage') }}">Home</a></li>
  						<li>Training & Skill Development</li>
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
  						<h3 class="mt0">Xubisoft Training & Skill Development</h3>
  						<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
  					</div>
  				</div>
  			</div>





<div class="container">
  <div class="row">

    <div class="col-md-8">
      <ol class="list-group">
        <li class="list-group-item">Customized training package as per self/ organizational need.</li>
        <li class="list-group-item">Learning for career readiness and corporate grooming</li>
        <li class="list-group-item">Cost effective process reengineering for your bunch recruitment process.</li>
      </ol>
    </div>

    <div class="col-md-4">
      <img src="https://www.intactsoftware.com/wp-content/uploads/2019/04/End-User-Training_YELLOWNAVY.png" alt="">
    </div>

  </div>

</div>









  			<div class="row">

          @forelse ($trainings as $training)
  				    <div class="col-sm-6 col-lg-4 text-center training_div">
      					<div class="img_hvr_box" style="background-image: url({{ asset('uploads/training') }}/{{ $training->photo }}">
      						<div class="overlay">
      							<div class="details">
      								<span>{{ $training->name }}</span>
      							</div>
      						</div>
      					</div>
                <a href="{{ url('/training/single') }}/{{ $training->id }}" class="btn btn-primary btn-gradient2">LEARN MORE</a>
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
