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

@import url('https://fonts.googleapis.com/css?family=Heebo:400,700|Open+Sans:400,700');

.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: -webkit-linear-gradient(45deg, #2f3640 0%, #2f3542 100%);
  background: linear-gradient(45deg, #2f3640 0%, #2f3542 100%);
  border-radius: 15px;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 3em;
  text-align: left;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 60px);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-40px,0,0);
  transform: translate3d(-40px,0,0);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  padding: 15% 0 10px 0;
  text-align: left;
}

.hovereffect .overlay:before {
  position: absolute;
  top: 20px;
  right: 20px;
  bottom: 20px;
  left: 20px;
  border: 1px solid #fff;
  content: '';
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-20px,0,0);
  transform: translate3d(-20px,0,0);
  border-radius: 15px;
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
}

.hovereffect:hover img {
  opacity: 0.1;
  filter: alpha(opacity=60);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect:hover .overlay:before,
.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.contact-center-box{
  padding-bottom: 20px;
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

              {{-- @forelse ($trainings as $training)
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

              @endforelse --}}




              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact-center-box">
                  <div class="hovereffect">
                      <img class="img-responsive" src="https://image.flaticon.com/icons/svg/2255/2255067.svg" alt="">
                          <div class="overlay">
                              <h2 class="text-uppercase text-center">MCA Live Transfer</h2>
                              <p class="text-justify">Live transfer are always exclusive. We transfer you the merchants who are interested in obtaining funding for their business. SkyTech Solutions provides the most cost effective live transfer lead generation program.</p>
                          </div>
                  </div>
              </div>




              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact-center-box">
                  <div class="hovereffect">
                      <img class="img-responsive" src="https://image.flaticon.com/icons/svg/2255/2255073.svg" alt="">
                          <div class="overlay">
                              <h2 class="text-uppercase text-center">MCA real time leads</h2>
                              <p class="text-justify">Our Real time leads is the most popular and top leads we offer. This is a double verified quality leads with recording where merchant stated that they need funding asap and ready to fill out an application.</p>
                          </div>
                  </div>
              </div>




              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact-center-box">
                  <div class="hovereffect">
                      <img class="img-responsive" src="https://image.flaticon.com/icons/svg/2258/2258891.svg" alt="">
                          <div class="overlay">
                              <h2 class="text-uppercase text-center">SOLAR APPOINTMENT SETTING</h2>
                              <p class="text-justify">The solar power industry is rapidly growing, and with it comes the demand for quality solar appointment leads. SkyTech Solutions offers the best solar appointment setting services available on all the solar cities.</p>
                          </div>
                  </div>
              </div>



              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact-center-box">
                  <div class="hovereffect">
                      <img class="img-responsive" src="https://image.flaticon.com/icons/svg/1908/1908549.svg" alt="">
                          <div class="overlay">
                              <h2 class="text-uppercase text-center">OUTBOUND SALES SERVICES</h2>
                              <p class="text-justify">Since 2013, we have created a scalable and affordable international outbound call center solution that has helped our clients increase their return on investment (ROI).</p>
                          </div>
                  </div>
              </div>


              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact-center-box">
                  <div class="hovereffect">
                      <img class="img-responsive" src="https://image.flaticon.com/icons/svg/1908/1908542.svg" alt="">
                          <div class="overlay">
                              <h2 class="text-uppercase text-center">INBOUND CUSTOMER SUPPORT</h2>
                              <p class="text-justify">We have highly skilled and experienced team to provide you 24/7 Inbound Customer Support. We have state of art infrastructure to provide best support to your customers.</p>
                          </div>
                  </div>
              </div>


              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact-center-box">
                  <div class="hovereffect">
                      <img class="img-responsive" src="https://image.flaticon.com/icons/svg/1871/1871092.svg" alt="">
                          <div class="overlay">
                              <h2 class="text-uppercase text-center">DATA ENTRY SERVICES</h2>
                              <p class="text-justify">Xubisoft Ltd outsourced data entry services helps you keep up with the flow of your business by allowing us to handle the tedious functions.</p>
                          </div>
                  </div>
              </div>











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
