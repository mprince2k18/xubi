
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SEIP Trainee Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="{{ asset('xubisoft/assets/images/xubi/cropped-download-32x32.jpg') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('custom/seip_reg/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('custom/seip_reg/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('custom/seip_reg/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('custom/seip_reg/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('custom/seip_reg/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('custom/seip_reg/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('custom/seip_reg/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('custom/seip_reg/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('custom/seip_reg/css/main.css') }}">
<!--===============================================================================================-->
</head>

<style media="screen">
  .container-contact100{
    /* background: url('{{ asset('custom/seip_reg/images/1.png') }}');
    background-repeat: no-repeat;
    background-size: cover; */
		/* background: #636e72; */
		/* background: linear-gradient(45deg, #00dbde, #b2bec3); */
		background: linear-gradient(45deg, #29323c, #485563); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  }
.select2-container .select2-results__option[aria-selected="true"]{
  background: -webkit-linear-gradient(right, #636e72, #353b48);
}

.select2-container .select2-results__option--highlighted[aria-selected]{
  background: -webkit-linear-gradient(right, #636e72, #353b48);
}





</style>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">

			{{-- session --}}


			@if (session('success'))
		 <div class="alert alert-success">
		     {{ session('success') }}
		 </div>
		 @endif

		 @if (session('update'))
		<div class="alert alert-success">
		    {{ session('update') }}
		</div>
		@endif


		@if ($errors->any())

		<div class="alert alert-danger">
				<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
				</ul>
		</div>

		@endif


		{{-- session end --}}



			<form action="{{ route('seip_registration_create') }}" method="post" class="contact100-form">
        @csrf
				<span class="contact100-form-title">
					<img src="{{ asset('custom/seip_reg/images/logo.png') }}" alt="xubisoft" class="img-fluid" width="25%">
          <h3>Trainee Registration</h3>
				</span>

        <!-- name -->
				<div class="wrap-input100" data-validate="Name is required">
					<label class="label-input100" for="name">Full Name</label>
					<input class="input100" id="name" type="text" name="name" value="{{ old('name') }}">
					<span class="focus-input100"></span>
				</div>

        <!-- email -->
				<div class="wrap-input100">
					<label class="label-input100" for="email">Email</label>
					<input class="input100" id="email" type="email" name="email" value="{{ old('email') }}">
					<span class="focus-input100"></span>
				</div>

        <!-- phone -->
				<div class="wrap-input100">
					<label class="label-input100" for="phone">Phone No</label>
					<input class="input100" type="text" id="phone" name="phone" value="{{ old('phone') }}">
					<span class="focus-input100"></span>
				</div>

        <!-- nid -->
				<div class="wrap-input100">
					<label class="label-input100" for="nid">NID Number ( As Per NID Card)</label>
					<input class="input100" id="nid" type="text" name="nid" value="{{ old('nid') }}">
					<span class="focus-input100"></span>
				</div>

					<!-- gender -->
								<div class="wrap-input100 input100-select">
									<label class="label-input100" for="gender">Gender</label>
									<div>
										<select class="selection-2" id="gender" name="gender">
											<option value=""></option>


											@foreach ($gender_statuses as $gender_status)
											<option value="{{ $gender_status->id }}">{{ $gender_status->gender }}</option>
											@endforeach

										</select>
									</div>
									<span class="focus-input100"></span>
								</div>


								<!-- information_source -->
											<div class="wrap-input100 input100-select">
												<label class="label-input100" for="information_source">Information Source</label>
												<div>
													<select class="selection-2" id="information_source" name="information_source">
														<option value=""></option>

														@foreach ($information_sources as $information_source)
															<option value="{{ $information_source->id }}">{{ $information_source->information_source }}</option>
														@endforeach

													</select>
												</div>
												<span class="focus-input100"></span>
											</div>

        <!-- rocket_number -->
				<!-- <div class="wrap-input100">
					<span class="label-input100">Trainee Personal Rocket Number</span>
					<small class="form-text text-muted">trainee NID verified Rocket Number</small>

					<input class="input100" type="number" name="rocket_number" placeholder="Trainee Personal Rocket Number">
					<span class="focus-input100"></span>
				</div> -->


				<!-- university -->
				<div class="wrap-input100">
					<label class="label-input100" for="university">Last Academic Institution</label>
					<input class="input100" type="text" id="university" name="university" value="{{ old('university') }}">
					<span class="focus-input100"></span>
				</div>



<!-- educational_qualification -->
				<div class="wrap-input100 input100-select">
					<label class="label-input100" for="educational_qualification">Academic Qualification</label>
					<div>
						<select class="selection-2" id="educational_qualification" name="educational_qualification">
							<option value=""></option>


							@foreach ($education_qualifications as $education_qualification)
							<option value="{{ $education_qualification->id }}">{{ $education_qualification->education_qualification }}</option>

							@endforeach



						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

        <!-- working_status -->
        				<div class="wrap-input100 input100-select">
        					<label class="label-input100" for="working_status">Current Working Status</label>
        					<div>
        						<select class="selection-2" id="working_status" name="working_status">
        							<option value=""></option>
											@foreach ($working_statuses as $working_status)
                      	<option value="{{ $working_status->id }}">{{ $working_status->working_status }}</option>
											@endforeach

        						</select>
        					</div>
        					<span class="focus-input100"></span>
        				</div>


								<!-- Father's Name -->
								<div class="wrap-input100" data-validate="Name is required">
									<label class="label-input100" for="father_name">Father's Name</label>
									<input class="input100" type="text" id="father_name" name="father_name" value="{{ old('father_name') }}">
									<span class="focus-input100"></span>
								</div>


								<!-- Father's Occupations -->
				        				<div class="wrap-input100 input100-select">
				        					<label class="label-input100" for="father_occupation">Father's Occupations</label>
				        					<div>
				        						<select class="selection-2" name="father_occupation" id="father_occupation">
				        							<option value=""></option>
															@foreach ($father_working_statuses as $father_working_status)
				                      	<option value="{{ $father_working_status->id }}">{{ $father_working_status->father_working_status }}</option>
															@endforeach



				        						</select>
				        					</div>
				        					<span class="focus-input100"></span>
				        				</div>




												<!-- Father's Name -->
												<div class="wrap-input100" data-validate="Name is required">
													<label class="label-input100" for="mother_name">Mother's Name</label>
													<input class="input100" type="text" id="mother_name" name="mother_name" value="{{ old('father_name') }}">
													<span class="focus-input100"></span>
												</div>


												<!-- Father's Occupations -->
																<div class="wrap-input100 input100-select">
																	<label class="label-input100" for="mother_occupation">Mother's Occupations</label>
																	<div>
																		<select class="selection-2" name="mother_occupation" id="mother_occupation">
																			<option value=""></option>
																			@foreach ($mother_working_statuses as $mother_working_status)
																				<option value="{{ $mother_working_status->id }}">{{ $mother_working_status->mother_working_status }}</option>
																			@endforeach

																		</select>
																	</div>
																	<span class="focus-input100"></span>
																</div>


																        <!-- Alternative phone -->
																				<div class="wrap-input100">
																					<label class="label-input100" for="alt_phone">Alternative Number ( Own, Father, Mother)</label>
																					<input class="input100" id="alt_phone" type="text" name="alt_phone" value="{{ old('alt_phone') }}">
																					<span class="focus-input100"></span>
																				</div>

																        <!-- How many siblings? -->
																				<div class="wrap-input100">
																					<label class="label-input100" for="siblings">How many siblings?</label>
																					<input class="input100" id="siblings" type="text" name="siblings" value="{{ old('siblings') }}">
																					<span class="focus-input100"></span>
																				</div>


                <!-- have_seip -->
                        <div class="wrap-input100 input100-select">
                          <label class="label-input100" for="have_seip">Have done any SEIP training before?</label>
                          <div>
                            <select class="selection-2" id="have_seip" name="have_seip">
                              <option value=""></option>


															@foreach($seip_statuses as $seip_status)
																<option value="{{ $seip_status->id }}">{{ $seip_status->seip_status }}</option>
															@endforeach

                            </select>
                          </div>
                          <span class="focus-input100"></span>
                        </div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>

			<div class="text-center m-3">
				<a href="https://apps.xubisoft.com/seip/registration" class="text-danger">Having problem? try this</a>
			</div>




		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{ asset('custom/seip_reg/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('custom/seip_reg/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('custom/seip_reg/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('custom/seip_reg/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('custom/seip_reg/vendor/select2/select2.min.js') }}"></script>

	<script src="{{ asset('xubisoft/assets/js/sweetalert2.all.js') }}"></script>

	<script>
	  @include('sweetalert::alert')
	</script>


	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('custom/seip_reg/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('custom/seip_reg/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('custom/seip_reg/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('custom/seip_reg/js/main.js') }}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




</body>
</html>
