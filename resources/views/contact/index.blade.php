@extends('xubi.app')

@section('css')


    <!-- Main CSS -->
    <link href="{{ asset('custom/css/training_style.css') }}" rel="stylesheet">

    <!-- {{ asset('custom/') }} -->
@endsection

@section('title')
Contact us
@endsection


@section('content')
<!-- welcome section -->
<!--breadcumb start here-->
<div class="xs-inner-banner inner-banner2" style="background-image:url('assets/images/banner/2.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-7 mx-auto">
				<div class="inner-banner">
					<h2 class="inner-banner-title">Contact Us</h2>
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

<!-- agency contact section -->
<div class="agency-contactus gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

@foreach($addressess as $address)

<div class="contact-info-wraper">
		<ul class="contact-info-list">
				<li>
						<i class="icon icon-map-marker2"></i>
						<div class="list-content">
								<a href="https://goo.gl/maps/QJyb48gb1RVkqV3Q8" target="_blank">{{ $address->address }}</a>
						</div>
				</li>
				<li>
						<i class="icon icon-phone3"></i>
						<div class="list-content">
								<a href="{{ $address->phone }}">{{ $address->phone }}</a>
								<a href="{{ $address->mobile }}">{{ $address->mobile }}</a>
						</div>
				</li>
				<li>
						<i class="icon icon-envelope2"></i>
						<div class="list-content">
								<a href="{{ $address->email1 }}">{{ $address->email1 }}</a>
								<a href="{{ $address->email2 }}">{{ $address->email2 }}</a>
						</div>
				</li>
		</ul><!-- .contact-info-list END -->
		<ul class="social-list version-2">
				<li><a href="{{ $address->facebook }}" class="facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="{{ $address->twitter }}" class="twitter"><i class="fa fa-twitter"></i></a></li>
				<li><a href="{{ $address->linkedin }}" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="{{ $address->youtube }}" class="youtube"><i class="fa fa-youtube"></i></a></li>
		</ul>
</div><!-- .contact-info-wraper END -->

@endforeach


            </div>
            <div class="col-md-8">


							    <!-- SESSION -->

							        @if (session('success'))
							       <div class="alert alert-success">
							           {{ session('success') }}
							       </div>
							       @endif

							       @if ($errors->any())
							       <div class="alert alert-danger">
							           <ul>
							               @foreach ($errors->all() as $error)
							               <li>{{ $error }}</li>
							               @endforeach
							           </ul>
							       </div><br />
							       @endif

							    <!-- SESSION END-->
                <div class="from-wraper">
									<!-- contact form -->
                    <form action="{{ route('contact_insert') }}" class="contact-form" method="post">
											@csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name *" name="name" id="xs_contact_name" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Email *" name="email" id="xs_contact_email" class="form-control">
                            </div>
                        </div>

                        <input type="text" placeholder="Subject *" name="subject" id="xs_contact_subject" class="form-control">

                        <textarea name="message" id="x_contact_massage" placeholder="Your Message... *" class="form-control" cols="30" rows="10"></textarea>


                        {{-- <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span> --}}
                          {!! NoCaptcha::renderJs() !!}
                          {!! NoCaptcha::display() !!}

                        <button type="submit" class="btn btn-primary ml-auto">Send Message</button>
                    </form>
										<!-- contact form ends-->
                </div>
            </div>
        </div><!-- .row END -->
    </div><!-- .container END -->
</div><!-- agency contact section end -->


<!-- map -->
<div class="agency-contactus">
	<div class="container">


				<div class="xs-map">
				  <!-- <div id="xs-map"></div> -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.8530525899987!2d90.40053811498342!3d23.85935128453583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c432847eacf7%3A0xd02f082dce6d913!2sXubisoft%20Ltd.!5e0!3m2!1sen!2sbd!4v1568285563570!5m2!1sen!2sbd" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
					<!-- End map -->


	</div>
</div>




@endsection
