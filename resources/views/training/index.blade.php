@extends('xubi.app')

@section('css')

<!-- Main CSS -->
<link href="{{ asset('custom/css/training_style.css') }}" rel="stylesheet">

<style media="screen">
    .training_div {
        padding-bottom: 30px;
    }

    .details span {
        color: #fff;
        font-size: 16px;
    }

    .list-group {
        padding-top: 35px;
    }


    .cta {
        position: relative;
        margin: auto;
        padding: 19px 22px;
        transition: all 0.2s ease;
    }

    .cta:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        border-radius: 28px;
        background: rgba(255, 171, 157, 0.5);
        width: 56px;
        height: 56px;
        transition: all 0.3s ease;
    }

    .cta span {
        position: relative;
        font-size: 16px;
        line-height: 18px;
        font-weight: 900;
        letter-spacing: 0.25em;
        text-transform: uppercase;
        vertical-align: middle;
    }

    .cta svg {
        position: relative;
        top: 0;
        margin-left: 10px;
        fill: none;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke: #111;
        stroke-width: 2;
        transform: translateX(-5px);
        transition: all 0.3s ease;
    }

    .cta:hover:before {
        width: 100%;
        background: #ffab9d;
    }

    .cta:hover svg {
        transform: translateX(0);
    }

    .cta:active {
        transform: scale(0.96);
    }

    .list-group-item {
        border: none;
    }

    .training_img {
        width: 55% !important;
        margin: 20px;
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

    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h4 class="mt0 text-uppercase align-text-bottom">Xubisoft Training & Skill Development</h4>
                    <!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
                </div>
            </div>
        </div> --}}





    <div class="container" style="border-style: groove;">
        <div class="row">

            <div class="col-md-8">
                <ol class="list-group">
                    <li class="list-group-item"><i class="fas fa-dot-circle"></i> Customized training package as per self/ organizational need.</li>
                    <li class="list-group-item"><i class="fas fa-dot-circle"></i> Learning for career readiness and corporate grooming</li>
                    <li class="list-group-item"><i class="fas fa-dot-circle"></i> Cost effective process reengineering for your bunch recruitment process.</li>
                </ol>
            </div>

            <div class="col-md-4">
                <img src="https://www.intactsoftware.com/wp-content/uploads/2019/04/End-User-Training_YELLOWNAVY.png" alt="" class="training_img">
            </div>

        </div>

    </div>







    <div class="container">


        <div class="row">
            {{--
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

    @endforelse --}}


    <!-- Service block start -->


    <!-- growth grid section -->
    <section class="growth-card-section xs-section-padding">
        <div class="container">


            <div class="row xs-mb-6">
                @foreach ($trainings as $training)
                <div class="col-md-6 col-lg-4">
                    <a href="{{ url('/training/single') }}/{{ $training->id }}">
                        <div class="info-card text-center" style="margin: 15px 0 !important;">
                            <div class="info-card-header Info_headline">
                                <img src="{{ asset('uploads/training')}}/{{ $training->photo }}" alt="{{ $training->name }}">
                            </div>
                            <div class="info-card-body">
                                <h3 class="card-title">{{ $training->name }}</h3>
                            </div>

                            <a href="{{ url('/training/single') }}/{{ $training->id }}" class="cta">
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
            <!-- <div class="btn-wraper text-center">
                     <a href="#" class="simple-btn icon-right style2">View All Services <i class="icon icon-arrow-right"></i></a>
                 </div> -->
        </div><!-- .container END -->
        <div class="growth-card-bg">
            <img src="{{ asset('xubisoft/assets/images/growth-bg.png') }}" alt="">
        </div>
    </section> <!-- end growth grid section -->

    <!-- Service block end -->






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