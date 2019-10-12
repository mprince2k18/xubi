@extends('xubi.app')

@section('css')

<style media="screen">
/************************************************
           Job Board page
*************************************************/
.job-board-1x {
  padding: 100px 0 78px 0; }
  .job-board-1x .single-job {
    padding: 40px;
    margin-bottom: 30px;
    box-shadow: 0 3px 35px 0 rgba(46, 61, 73, 0.06); }
    .job-board-1x .single-job h2 {
      font-size: 16px;
      font-weight: 500;
      color: #454545;
      margin-bottom: 25px;
      text-transform: uppercase; }
      .job-board-1x .single-job h2 span {
        float: right;
        font-size: 12px;
        color: #02b3e4;
        background: #f9f9f9;
        padding: 7px 15px;
        border-radius: 2px; }
    .job-board-1x .single-job p {
      margin-bottom: 10px;
      text-align:left;
     }
      .job-board-1x .single-job p i {
        color: #02b3e4;
        margin-right: 15px; }
    .job-board-1x .single-job a {
      display: inline-block;
      background: #fff;
      font-size: 14px;
      font-weight: 500;
      color: #02b3e4;
      padding: 3px 15px;
      border-radius: 2px;
      border: 1px solid #eee;
      text-transform: capitalize;
      margin-top: 10px;
      -webkit-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease; }
      .job-board-1x .single-job a:hover {
        background: #02b3e4;
        color: #fff; }

  .page-link{
    border-radius: 50%;
  }
</style>
@endsection

@section('title')
 Career
@endsection


@section('content')
<!--breadcumb start here-->
<div class="xs-inner-banner inner-banner2" style="background-image:url('assets/images/banner/2.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-7 mx-auto">
				<div class="inner-banner">
					<h2 class="inner-banner-title">@yield('title')</h2>
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

<p> For Job, Please send your updated CV at  <strong>career@xubisoft.com</strong></p>

<div class="job-board-1x">



		<div class="container">

			<div class="row">

        @forelse($careers as $career)
          <div class="col-md-6">
  					<div class="single-job">
  						<h2>{{ $career->post_name }} <span>{{ $career->schedule }}</span></h2>
  						<p><i class="lni-dollar"></i> {{ $career->salary_range }}</p>
  						<p><i class="lni-pin-alt"></i> {{ $career->educational_background }}</p>
  						<a href="{{ url('/career') }}/{{ $career->id }}">View More</a>
  					</div>
  				</div>
          @empty
          <div class="col-md-12">
  					<div class="single-job">
  						<h2 class="text-center">NO Jobs Available</h2>
  					</div>
  				</div>
        @endforelse


			</div>

      {{$careers->links() }}

		</div>
	</div>







@endsection


@section('js')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <!-- Custom script for all pages -->
        <script type="text/javascript" src="{{ asset('custom/js/training_script.js') }}"></script>

  @endsection
