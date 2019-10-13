
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
    background: url('{{ asset('custom/seip_reg/images/1.png') }}');
    background-repeat: no-repeat;
    background-size: cover;
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



			<form action="{{ route('seip_registration_create') }}" method="post" class="contact100-form">
        @csrf
				<span class="contact100-form-title">
					<img src="{{ asset('custom/seip_reg/images/logo.png') }}" alt="xubisoft" class="img-fluid" width="25%">
          <h3>Trainee Registration</h3>
				</span>

        <!-- name -->
				<div class="wrap-input100" data-validate="Name is required">
					<span class="label-input100">Full Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Full Name">
					<span class="focus-input100"></span>
				</div>

        <!-- email -->
				<div class="wrap-input100">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>

        <!-- phone -->
				<div class="wrap-input100">
					<span class="label-input100">Phone Number</span>
					<input class="input100" type="number" name="phone" placeholder="Phone Number">
					<span class="focus-input100"></span>
				</div>

        <!-- university -->
				<div class="wrap-input100">
					<span class="label-input100">University Name</span>
					<input class="input100" type="text" name="university" placeholder="University Name">
					<span class="focus-input100"></span>
				</div>

        <!-- nid -->
				<div class="wrap-input100">
					<span class="label-input100">Trainee NID</span>
					<input class="input100" type="number" name="nid" placeholder="Trainee NID">
					<span class="focus-input100"></span>
				</div>

        <!-- rocket_number -->
				<div class="wrap-input100">
					<span class="label-input100">Trainee Rocket Number</span>
					<input class="input100" type="number" name="rocket_number" placeholder="Trainee Rocket Number">
					<span class="focus-input100"></span>
				</div>

<!-- educational_qualification -->
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Educational Qualification</span>
					<div>
						<select class="selection-2" name="educational_qualification">
							<option value="">Choose Qualification</option>
							<option value="1">Graduation</option>
              <option value="2">Diploma</option>
							<option value="3">Masters</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

        <!-- working_status -->
        				<div class="wrap-input100 input100-select">
        					<span class="label-input100">Current Working Status</span>
        					<div>
        						<select class="selection-2" name="working_status">
        							<option value="">Choose Working Status</option>
                      <option value="1">Job Holder</option>
                      <option value="2">Student</option>
                      <option value="3">None</option>
        						</select>
        					</div>
        					<span class="focus-input100"></span>
        				</div>


                <!-- have_seip -->
                        <div class="wrap-input100 input100-select">
                          <span class="label-input100">Did you have done any SEIP training before?</span>
                          <div>
                            <select class="selection-2" name="have_seip">
                              <option value="">Choose SEIP training before</option>
                              <option value="1">Yes</option>
                              <option value="2">No</option>
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

</body>
</html>
