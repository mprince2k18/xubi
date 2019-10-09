@extends('xubi.app')

@section('css')
<!-- Main CSS -->
<link href="{{ asset('custom/css/training_style.css') }}" rel="stylesheet">

<style media="screen">
@import url('https://fonts.googleapis.com/css?family=Share+Tech&display=swap');


  .our-courses-shape{
    border-radius: 0 500px 500px 0;
    background: linear-gradient(140deg,rgba(0,72,114,0.9) 0%,#291160 100%);
    color: #fff;
    overflow: hidden;
    padding: 100px 0;
    margin-bottom: 50px;
  }

  /* .our-courses-shape-2{
    border-radius: 500px 0px 0 500px;
    background: #fff200;

    overflow: hidden;
    padding: 100px 0;
  } */

  .share-tech{
    font-family: 'Share Tech', sans-serif;
    font-size: 45px;
  }

  .share-tech-p{
    font-size: 16px;
  }

.box{
  padding: 20px 0;
}



</style>

<!-- {{ asset('custom/') }} -->
@endsection

@section('title')
Contact Center
@endsection


@section('content')


<!-- welcome section -->
<!--breadcumb start here-->
<div class="xs-inner-banner inner-banner2" style="background-image:url('assets/images/banner/2.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-7 mx-auto">
				<div class="inner-banner">
					<h2 class="inner-banner-title">Manage Contact Center and Support</h2>
					<ul class="breadcumbs list-inline">
						<li><a href="{{ route('homepage') }}">Home</a></li>
						<li> @yield('title') </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--breadcumb end here--><!-- End welcome section -->


      <!-- School Category Courses -->
      	<section id="our-courses" class="our-courses our-courses-shape-2 pt90 pt650-992">

      		<div class="container">
      			<div class="row">

              @forelse ($trainings as $training)
      				    <div class="col-md-4 text-center">
                    <div class="box">
                      <div class="img_hvr_box" style="background-image: url({{ asset('uploads/training') }}/{{ $training->photo }}">
                        <div class="overlay">
                          <div class="details">
                            <h5>{{ $training->name }}</h5>
                          </div>
                        </div>
                      </div>
                      <a href="#" class="btn btn-primary btn-gradient2">LEARN MORE</a>
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







          <!-- School Category Courses -->
          	<section id="our-courses" class="our-courses our-courses-shape pt90 pt650-992">

          		<div class="container">
          			<div class="row">


                  <div class="col-md-6">
                    <div>
                      <p class="text-left share-tech">We Create Fully Connected Systems So You Can Focus On Your Business</p>
                    </div>

                    <div>
                      <p class="text-left share-tech-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>

                    <div class="pt-2">
                      <a href="#" class="btn btn-primary btn-gradient3">GET STARTED</a>
                    </div>

                  </div>



          			</div>
          		</div>
          	</section>




@endsection

@section('js')

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

      <!-- Custom script for all pages -->
      <script type="text/javascript" src="{{ asset('custom/js/training_script.js') }}"></script>

@endsection
