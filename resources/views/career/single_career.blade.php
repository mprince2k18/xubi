@extends('xubi.app')

@section('css')

<style media="screen">

/************************************************
           Job Single page
*************************************************/
.job-single-1x {
  padding: 108px 0 20px 0;
  color: #000;
}
.job-single-1x p{
  text-align: left;
}

  .job-single-1x .job-features {
    background: #f9f9f9;
    padding: 40px;
    border: 1px solid #eee;
  }

  .job-features p{

    padding: 20px 0;

  }


    .job-single-1x .job-features i {
      color: #02b3e4;
      padding-right: 20px;
      margin: 40px 0; }

    .job-single-1x .job-features hr {
      margin: 0;
      background-color: #eee; }

  .job-single-1x h3 {
    font-size: 25px;
    font-weight: 300;
    color: #454545;
    margin-bottom: 30px; }

  .job-single-1x .job-details {
    padding-top: 50px; }

    .job-single-1x .job-details p {
      margin-bottom: 15px;
    }

    .job-single-1x .job-details p:last-child {
      margin-bottom: 0; }

  .job-single-1x .job-requirements {
    padding-top: 50px; }

    .job-single-1x .job-requirements ul {
      margin: 25px 0 0 20px;
      padding: 0; }

      .job-single-1x .job-requirements ul li {
        line-height: 35px; }

  .job-single-1x .job-skils {
    padding-top: 50px; }

    .job-single-1x .job-skils ul {
      margin: 25px 0;
      padding: 0; }

      .job-single-1x .job-skils ul li {
        display: inline-block;
        list-style: none;
        margin-right: 45px; }

  .job-single-1x .apply-job {
    padding-top: 50px; }

    .job-single-1x .apply-job a.medical-btn-larg {
      background: #02b3e4; }

      .job-single-1x .apply-job a.medical-btn-larg:hover {
        background: #21293e; }

.blog-1x-no-bg .title-left h2,
.related-post h3 {
  font-size: 32px;
  font-weight: 300;
  text-transform: capitalize;
  color: #454545;
  margin-bottom: 70px;
}

.job-p div{
    width: 100% !important;
    margin: 0 !important;
}
.job-p p{
    font-size: 18px;
    font-family: 'Raleway', sans-serif;

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
					<h2 class="inner-banner-title">{{ $single_career->post_name }}</h2>
					<ul class="breadcumbs list-inline">
						<li><a href="{{ route('homepage') }}">Home</a></li>
						<li> {{ $single_career->post_name }} </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--breadcumb end here--><!-- End welcome section -->



<div class="job-single-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="job-features">
						<div class="row">
							<div class="col-md-4">
								<p><i class="lni-briefcase"></i> {{ $single_career->post_name }} </p>
							</div>
							<div class="col-md-4">
								<p><i class="lni-sprout"></i></i>{{ $single_career->job_experience }} </p>
							</div>
							<div class="col-md-4">
								<p><i class="lni-flower"></i>
                  <!-- Deadline July 8,2018 -->
                  {{ $single_career->deadline }}
                </p>
							</div>

							<div class="col-md-12 no-padding">
								<hr>
							</div>

							<div class="col-md-4">
								<p><i class="lni-customer"></i>{{ $single_career->salary_range }} </p>
							</div>
							<div class="col-md-4">
								<p><i class="lni-certificate"></i>{{ $single_career->educational_background }} </p>
							</div>
							<div class="col-md-4">
								<p><i class="lni-alarm-clock"></i>{{ $single_career->schedule }} </p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="job-details">
						<h3>Job Description</h3>
            <div class="container">
              <div class="job-p">
                {!! html_entity_decode($single_career->job_description) !!}
              </div>
            </div>

					</div>
				</div>

				<div class="col-md-12">
					<div class="job-requirements">
						<h3>Key Requirements</h3>
            <div class="container">
              <div class="job-p">
                <p> {!! html_entity_decode($single_career->key_requirements) !!} </p>
              </div>
            </div>

						<!-- <ul>
							<li>Ability to Work Under Pressure</li>
							<li>Time Management & Self-motivation</li>
							<li>Conflict Resolution & Leadership</li>
							<li>Initiative and problem-solving abilities</li>
						</ul> -->
					</div>
				</div>

				<div class="col-md-12">
					<div class="job-skils">
						<h3>Required skills</h3>
						<p>{{ $single_career->required_skills }}</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="apply-job">
						<a href="#" class="btn btn-primary">Apply For Job</a>
					</div>
				</div>

			</div>
		</div>
	</div>






@endsection


@section('js')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <!-- Custom script for all pages -->
        <script type="text/javascript" src="{{ asset('custom/js/training_script.js') }}"></script>

  @endsection
