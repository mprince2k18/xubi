
<!doctype html>
<html lang="en" dir="ltr">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="{{ asset('xubisoft/assets/images/xubi/cropped-download-32x32.jpg') }}" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('xubisoft/assets/images/xubi/cropped-download-32x32.jpg') }}" />

		<!-- Title -->
		<title> @yield('title') </title>
		<link rel="stylesheet" href="{{ asset('dashboard/assets/fonts/fonts/font-awesome.min.css') }}') }}">

		<!-- Font Family-->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">




		<!-- Dashboard Css -->

		<link href="{{ asset('dashboard/assets/css/dashboard.css') }}" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="{{ asset('dashboard/assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet" />

		<!-- Morris.js Charts Plugin -->
		<link href="{{ asset('dashboard/assets/plugins/morris/morris.css') }}" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="{{ asset('dashboard/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />
		<!-- select2 Plugin -->
		<link href="{{ asset('dashboard/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

		<!-- Time picker Plugin -->
		<link href="{{ asset('dashboard/assets/plugins/time-picker/jquery.timepicker.css.css') }}" rel="stylesheet" />

		<!-- Date Picker Plugin -->
		<link href="{{ asset('dashboard/assets/plugins/date-picker/spectrum.css.css') }}" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="{{ asset('dashboard/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

		<!-- file Uploads -->
    <link href="{{ asset('dashboard/assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
		<!-- summernote -->



		<!---Font icons-->
		<link href="{{ asset('dashboard/assets/css/icons.css') }}" rel="stylesheet" />


		@yield('css')

<style media="screen">

.popover-content{
	display: none !important;
}

</style>



	</head>
	<body >
		<div id="global-loader" ></div>
		<div class="page" >
			<div class="page-main">
			<div class="header">
					<div class="container">
						<div class="d-flex">
							<a class="header-brand" href="{{ route('homepage') }}">
								<img src="{{ asset('xubisoft/assets/images/xubi/xubi_logo2.png') }}" class="header-brand-img" alt="adminor logo">
							</a>
							<div class="d-flex order-lg-2 ml-auto header-right-icons">
								<div class="p-2">
									<form class="input-icon ">
										<div class="input-icon-addon">
											<i class="fe fe-search"></i>
										</div>
										<input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
									</form>
								</div>
								<div class="dropdown d-none d-md-flex" >
									<a  class="nav-link icon full-screen-link nav-link-bg">
										<i class="fa fa-expand"  id="fullscreen-button"></i>
									</a>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fa fa-bell-o"></i>
										<span class="nav-unread bg-warning"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

										@foreach ( App\Contact::latest()->paginate(3) as $notificaton)

											<a href="#" class="dropdown-item d-flex pb-3">
												<div class="notifyimg">
													<i class="fa fa-envelope-open"></i>
												</div>
												<div>
													<strong>{{ $notificaton->name }} sent new message</strong>
													<div class="small text-muted">{{ $notificaton->created_at->diffForHumans() }}</div>
												</div>
											</a>

										@endforeach


										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notification</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex">
									<a class="nav-link icon text-center" data-toggle="dropdown">
										<i class="icon icon-speech"></i>
										<span class=" nav-unread badge badge-info badge-pill"> {{ App\Contact::where('status',2)->count() }} </span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="dropdown-divider"></div>
										<a href="{{ route('contact_index') }}" class="dropdown-item text-center"> {{ App\Contact::where('status',2)->count() }} New Messages</a>
										<div class="dropdown-divider"></div>



<!-- <a href="#" class="dropdown-item d-flex pb-3">
	<span class="avatar brround mr-3 align-self-center cover-image" data-image-src="assets/images/faces/male/41.jpg"></span>
	<div>
		<strong>Madeleine</strong> Hey! there I' am available....
		<div class="small text-muted">3 hours ago</div>
	</div>
</a> -->

										<!-- <a href="{{ route('contact_index') }}" class="dropdown-item text-center">See all Messages</a> -->
									</div>
								</div>
								<div class="dropdown d-none d-md-flex ">
									<a class="nav-link icon " data-toggle="dropdown">
										<i class="fe fe-grid floating"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<ul class="drop-icon-wrap p-1">

								@if (Auth::user()->role_id == 1)

									<li>
										<a href="{{ route('status_index') }}" class="drop-icon-item">
											<i class="fe fe-mail text-dark"></i>
											<span class="block"> Status </span>
										</a>
									</li>
									<li>
										<a href="{{ route('trainee_index') }}" class="drop-icon-item">
											<i class="fe fe-calendar text-dark"></i>
											<span class="block"> SEIP </span>
										</a>
									</li>
									<li>
										<a href="{{ route('all_users.index') }}" class="drop-icon-item">
											<i class="fe fe-map-pin text-dark"></i>
											<span class="block">Users</span>
										</a>
									</li>
									<li>
										<a href="cart.html" class="drop-icon-item">
											<i class="fe fe-shopping-cart text-dark"></i>
											<span class="block">Request</span>
										</a>
									</li>
									<li>
										<a href="chat.html" class="drop-icon-item">
											<i class="fe fe-message-square text-dark"></i>
											<span class="block">chat</span>
										</a>
									</li>
									<li>
										<a href="profile.html" class="drop-icon-item">
											<i class="fe fe-phone-outgoing text-dark"></i>
											<span class="block">contact</span>
										</a>
									</li>

								@elseif (Auth::user()->role_id == 2)

									<li>
										<a href="{{ route('status_index') }}" class="drop-icon-item">
											<i class="fe fe-mail text-dark"></i>
											<span class="block"> Status </span>
										</a>
									</li>
									<li>
										<a href="{{ route('trainee_index') }}" class="drop-icon-item">
											<i class="fe fe-calendar text-dark"></i>
											<span class="block"> SEIP </span>
										</a>
									</li>

								@elseif (Auth::user()->role_id == 3)

									<li>
										<a href="{{ route('trainee_index') }}" class="drop-icon-item">
											<i class="fe fe-calendar text-dark"></i>
											<span class="block"> SEIP </span>
										</a>
									</li>

								@else

								@endif




										</ul>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all</a>
									</div>
								</div>
								<div class="dropdown text-center selector">
									<a href="#" class="nav-link leading-none" data-toggle="dropdown">
										<span class="avatar avatar-sm brround cover-image" data-image-src="{{asset('dashboard/assets/images/faces/female/25.jpg')}}"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center font-weight-sembold user" data-toggle="dropdown">{{ Auth::user()->name }}</a>
											<span class="text-center user-semi-title text-dark">{{ Auth::user()->role_id }}</span>
											<div class="dropdown-divider"></div>
										</div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
										</a>
										<!-- <a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-settings"></i> Settings
										</a> -->
										<!-- <a class="dropdown-item" href="#">
											<span class="float-right"><span class="badge badge-primary">6</span></span>
											<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
										</a> -->
										<!-- <a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
										</a> -->
										<div class="dropdown-divider"></div>
										<!-- <a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
										</a> -->


												<!-- LOGOUT -->
												<a class="dropdown-item" href="{{ route('logout') }}"
													 onclick="event.preventDefault();
																				 document.getElementById('logout-form').submit();">
														<i class="dropdown-icon mdi  mdi-logout-variant"></i>
														{{ __('Sign out') }}
												</a>

												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														@csrf
												</form>
												<!-- LOGOUT END -->


									</div>
								</div>
							</div>
							<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
								<span class="header-toggler-icon"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="admin-navbar" id="headerMenuCollapse">
					<div class="container">
						<ul class="nav">


							@if (Auth::user()->role_id == 1)


								{{-- superadmin --}}


								<li class="nav-item with-sub">
									<a class="nav-link active" href="{{ route('dashboard') }}">
										<i class="fa fa-desktop"></i>
										<span> Dashboard</span>
									</a>
								</li>




								<li class="nav-item with-sub">
									<a class="nav-link" href="#"><i class="fa fa-area-chart"></i> <span>Frontend</span></a>
									<div class="sub-item">
										<ul>
											<li>
												<a href="{{ route('header_slider') }}">Header</a>
											</li>

											<li>
												<a href="{{ route('info') }}">Info</a>
											</li>

											<li>
												<a href="{{ route('ceo') }}">Ceo</a>
											</li>

											<li>
												<a href="{{ route('footer') }}">Footer</a>
											</li>

											<li>
												<a href="{{ route('portfolio') }}">Portfolio</a>
											</li>

											<li>
												<a href="{{ route('team') }}">Team</a>
											</li>

										</ul>
									</div>
									<!-- dropdown-menu -->
								</li>




								<li class="nav-item with-sub">
									<a class="nav-link" href="{{ route('contact_index') }}"><i class="fa fa-tachometer"></i> <span>Messages</span></a>
									<div class="sub-item">
										<ul>
											<li>
												<a href="{{ route('contact_index') }}">All Message</a>
											</li>
											<li>
												<a href="{{ route('all_read_messages') }}">Read</a>
											</li>
											<li>
												<a href="{{ route('all_unread_messages') }}">Unread</a>
											</li>




										</ul>
									</div>
									<!-- dropdown-menu -->
								</li>





															<li class="nav-item with-sub">
																<a class="nav-link" href="{{ route('service_index') }}"><i class="fa fa-tachometer"></i> <span>Services</span></a>
																<div class="sub-item">
																	<ul>
																		<li>
																			<a href="{{ route('service_index') }}">All Services</a>
																		</li>
																		<li>
																			<a href="{{ route('add_service_page') }}">Add Service Page</a>
																		</li>

																	</ul>
																</div>
																<!-- dropdown-menu -->
															</li>




								<li class="nav-item with-sub">
									<a class="nav-link" href="{{ route('products_index') }}"><i class="mdi mdi-file"></i><span>Products</span></a>
									<div class="sub-item">
										<ul>

											<li>
												<a href="{{ route('products_index') }}">Add New Product </a>
											</li>

											<li>
												<a href="{{ route('add_product_page') }}">Add New Product Page </a>
											</li>

										</ul>
									</div>
									<!-- dropdown-menu -->
								</li>

								<li class="nav-item with-sub">
									<a class="nav-link" href="{{ route('client_index') }}"><i class="fa fa-tachometer"></i> <span>Clients</span></a>
									<div class="sub-item">
										<ul>
											<li>
												<a href="{{ route('client_index') }}">Add Client</a>
											</li>
										</ul>
									</div>
									<!-- dropdown-menu -->
								</li>


								<li class="nav-item with-sub">
									<a class="nav-link" href="{{ route('training_index') }}"><i class="fa fa-tachometer"></i> <span>Training</span></a>
									<div class="sub-item">
										<ul>
											<li>
												<a href="{{ route('training_index') }}">Add Training</a>
											</li>
											<li>
												<a href="{{ route('training_page') }}">Add Training Page</a>
											</li>
										</ul>
									</div>
									<!-- dropdown-menu -->
								</li>


								<li class="nav-item with-sub">
									<a class="nav-link" href="{{ route('career_dashboard_index') }}"><i class="fa fa-tachometer"></i> <span>Career</span></a>
									<!-- <div class="sub-item">
										<ul>
											<li>
												<a href="{{ route('training_index') }}">Add Training</a>
											</li>
											<li>
												<a href="{{ route('training_page') }}">Add Training Page</a>
											</li>
										</ul>
									</div> -->
									<!-- dropdown-menu -->
								</li>


							@elseif (Auth::user()->role_id == 2)

														<li class="nav-item with-sub">
															<a class="nav-link active" href="{{ route('dashboard') }}">
																<i class="fa fa-desktop"></i>
																<span> Dashboard</span>
															</a>
														</li>


																<li class="nav-item with-sub">
																	<a class="nav-link" href="#"><i class="fa fa-area-chart"></i> <span>Frontend</span></a>
																	<div class="sub-item">
																		<ul>
																			<li>
																				<a href="{{ route('header_slider') }}">Header</a>
																			</li>

																			<li>
																				<a href="{{ route('info') }}">Info</a>
																			</li>

																			<li>
																				<a href="{{ route('ceo') }}">Ceo</a>
																			</li>

																			<li>
																				<a href="{{ route('footer') }}">Footer</a>
																			</li>

																			<li>
																				<a href="{{ route('portfolio') }}">Portfolio</a>
																			</li>

																			<li>
																				<a href="{{ route('team') }}">Team</a>
																			</li>

																		</ul>
																	</div>
																	<!-- dropdown-menu -->
																</li>




																<li class="nav-item with-sub">
																	<a class="nav-link" href="{{ route('contact_index') }}"><i class="fa fa-tachometer"></i> <span>Messages</span></a>
																	<div class="sub-item">
																		<ul>
																			<li>
																				<a href="{{ route('contact_index') }}">All Message</a>
																			</li>
																			<li>
																				<a href="{{ route('all_read_messages') }}">Read</a>
																			</li>
																			<li>
																				<a href="{{ route('all_unread_messages') }}">Unread</a>
																			</li>




																		</ul>
																	</div>
																	<!-- dropdown-menu -->
																</li>





																							<li class="nav-item with-sub">
																								<a class="nav-link" href="{{ route('service_index') }}"><i class="fa fa-tachometer"></i> <span>Services</span></a>
																								<div class="sub-item">
																									<ul>
																										<li>
																											<a href="{{ route('service_index') }}">All Services</a>
																										</li>
																										<li>
																											<a href="{{ route('add_service_page') }}">Add Service Page</a>
																										</li>

																									</ul>
																								</div>
																								<!-- dropdown-menu -->
																							</li>




																<li class="nav-item with-sub">
																	<a class="nav-link" href="{{ route('products_index') }}"><i class="mdi mdi-file"></i><span>Products</span></a>
																	<div class="sub-item">
																		<ul>

																			<li>
																				<a href="{{ route('products_index') }}">Add New Product </a>
																			</li>

																			<li>
																				<a href="{{ route('add_product_page') }}">Add New Product Page </a>
																			</li>

																		</ul>
																	</div>
																	<!-- dropdown-menu -->
																</li>

																<li class="nav-item with-sub">
																	<a class="nav-link" href="{{ route('client_index') }}"><i class="fa fa-tachometer"></i> <span>Clients</span></a>
																	<div class="sub-item">
																		<ul>
																			<li>
																				<a href="{{ route('client_index') }}">Add Client</a>
																			</li>
																		</ul>
																	</div>
																	<!-- dropdown-menu -->
																</li>


																<li class="nav-item with-sub">
																	<a class="nav-link" href="{{ route('training_index') }}"><i class="fa fa-tachometer"></i> <span>Training</span></a>
																	<div class="sub-item">
																		<ul>
																			<li>
																				<a href="{{ route('training_index') }}">Add Training</a>
																			</li>
																			<li>
																				<a href="{{ route('training_page') }}">Add Training Page</a>
																			</li>
																		</ul>
																	</div>
																	<!-- dropdown-menu -->
																</li>


																<li class="nav-item with-sub">
																	<a class="nav-link" href="{{ route('career_dashboard_index') }}"><i class="fa fa-tachometer"></i> <span>Career</span></a>
																	<!-- <div class="sub-item">
																		<ul>
																			<li>
																				<a href="{{ route('training_index') }}">Add Training</a>
																			</li>
																			<li>
																				<a href="{{ route('training_page') }}">Add Training Page</a>
																			</li>
																		</ul>
																	</div> -->
																	<!-- dropdown-menu -->
																</li>



								@else

									{{-- Agent --}}

									<li class="nav-item with-sub">
										<a class="nav-link" href="{{ route('contact_index') }}"><i class="fa fa-tachometer"></i> <span>Messages</span></a>
										<div class="sub-item">
											<ul>
												<li>
													<a href="{{ route('contact_index') }}">All Message</a>
												</li>
												<li>
													<a href="{{ route('all_read_messages') }}">Read</a>
												</li>
												<li>
													<a href="{{ route('all_unread_messages') }}">Unread</a>
												</li>




											</ul>
										</div>
										<!-- dropdown-menu -->
									</li>
								<li class="nav-item with-sub">
										<a class="nav-link" href="{{ route('career_dashboard_index') }}"><i class="fa fa-tachometer"></i> <span>Career</span></a>
										<!-- <div class="sub-item">
											<ul>
												<li>
													<a href="{{ route('training_index') }}">Add Training</a>
												</li>
												<li>
													<a href="{{ route('training_page') }}">Add Training Page</a>
												</li>
											</ul>
										</div> -->
										<!-- dropdown-menu -->
									</li>




							@endif




						</ul>
					</div>
				</div>
				<div>
					<div class="container">
						<div class="page-header">
							<h4 class="page-title">@yield('title')</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
							</ol>
						</div>

						<div class="row row-cards">
                            <div class="col-sm-12 col-lg-3 col-md-6">
								<div class="card card-img-holder text-default bg-color">
									<div class="row">
										<div class="col-4">
											<div class="square-icon br-tl-9 bg-primary text-center align-self-center shadow-primary"><i class= "fa fa-envelope fs-30 text-white"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body card-padding">
												<h1 class="mb-2">{{ App\Contact::where('status', 2)->count() }}</h1>
												<h5 class="font-weight-normal mb-3">Message</h5>
											</div>
									    </div>
								    </div>
							   </div>
							</div>
							 <div class="col-sm-12 col-lg-3 col-md-6">
								<div class="card card-img-holder text-default bg-color">
									<div class="row">
										<div class="col-4">
											<div class="square-icon bg-secondary text-center align-self-center shadow-secondary"><i class= "fa fa-user fs-30 text-white"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body card-padding">
												<h1 class="mb-2">{{ App\Team::count() }}</h1>
												<h5 class="font-weight-normal mb-3">Members</h5>
											</div>
									    </div>
								    </div>
							   </div>
							</div>

							<div class="col-sm-12 col-lg-3 col-md-6">
								<div class="card card-img-holder text-default bg-color">
									<div class="row">
										<div class="col-4">
											<div class="square-icon bg-info text-center align-self-center shadow-info"><i class= "glyphicon glyphicon-cog fs-30 text-white"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body card-padding">
												<h1 class="mb-2">{{ App\CompanyService::count() }}</h1>
												<h5 class="font-weight-normal mb-3">Services</h5>
											</div>
									    </div>
								    </div>
							   </div>
							</div>
							<div class="col-sm-12 col-lg-3 col-md-6">
								<div class="card card-img-holder text-default bg-color">
									<div class="row">
										<div class="col-4">
											<div class="square-icon bg-success text-center align-self-center shadow-success"><i class= "glyphicon glyphicon-gift fs-30 text-white"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body card-padding">
												<h1 class="mb-2">{{ App\Product::count() }}</h1>
												<h5 class="font-weight-normal mb-3">Products</h5>
											</div>
									    </div>
								    </div>
							   </div>
							</div>
						</div>





						<!-- SESSION -->

						    @if (session('success'))
						   <div class="alert alert-success">
						       {{ session('success') }}
						   </div>
						   @endif

						    @if (session('restore'))
						   <div class="alert alert-success">
						       {{ session('restore') }}
						   </div>
						   @endif

						    @if (session('delete'))
						   <div class="alert alert-success">
						       {{ session('delete') }}
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



						@yield('content')





									<!--footer-->
									<footer class="footer">
										<div class="container">
											<div class="row align-items-center flex-row-reverse">
												<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
													Copyright © 2019 <a href="{{ route('homepage') }}">Xubisoft</a>. All rights reserved.
												</div>
											</div>
										</div>
									</footer>
									<!-- End Footer-->
								</div>

								<!-- Back to top -->
								<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

								<!-- Dashboard Core -->
								<script src="{{ asset('dashboard/assets/js/vendors/jquery-3.2.1.min.js') }}"></script>
								<script src="{{ asset('dashboard/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
								<script src="{{ asset('dashboard/assets/js/vendors/jquery.sparkline.min.js') }}"></script>
								<script src="{{ asset('dashboard/assets/js/vendors/selectize.min.js') }}"></script>
								<script src="{{ asset('dashboard/assets/js/vendors/jquery.tablesorter.min.js') }}"></script>
								<script src="{{ asset('dashboard/assets/js/vendors/circle-progress.min.js') }}"></script>
								<script src="{{ asset('dashboard/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

								<!-- Charts Plugin -->
								<script src="{{ asset('dashboard/assets/plugins/chart/Chart.bundle.js') }}"></script>
								<script src="{{ asset('dashboard/assets/plugins/chart/utils.js') }}"></script>


								<!-- Input Mask Plugin -->
								<script src="{{ asset('dashboard/assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

								<script src="{{ asset('dashboard/assets/js/index5.js') }}"></script>

								<!-- Custom scroll bar Js-->
								<script src="{{ asset('dashboard/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
								<!-- Custom Js-->



										<script src="{{ asset('dashboard/assets/js/vendors/jquery.sparkline.min.js') }}"></script>
										<script src="{{ asset('dashboard/assets/js/vendors/selectize.min.js') }}"></script>
										<!--Select2 js -->
										<script src="{{ asset('dashboard/assets/plugins/select2/select2.full.min.js') }}"></script>

										<!-- Timepicker js -->
										<script src="{{ asset('dashboard/assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
										<script src="{{ asset('dashboard/assets/plugins/time-picker/toggles.min.js') }}"></script>

										<!-- Datepicker js -->
										<script src="{{ asset('dashboard/assets/plugins/date-picker/spectrum.js') }}"></script>
										<script src="{{ asset('dashboard/assets/plugins/date-picker/jquery-ui.js') }}"></script>

										<!-- Inline js -->
										<script src="{{ asset('dashboard/assets/js/select2.js') }}"></script>
										<!-- file uploads js -->
								    <script src="{{ asset('dashboard/assets/plugins/fileuploads/js/dropify.min.js') }}"></script>
										<!-- tinymce -->
										<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>


										<!-- Initialize ClassicEditor -->
										@yield('js')


										<!-- sweetalert2 -->
										<script src="{{ asset('dashboard/assets/js/sweetalert2.all.js') }}"></script>

										<!-- Custom Js-->
										<script src="{{ asset('dashboard/assets/js/custom.js') }}"></script>




										<script>
										  @include('sweetalert::alert')
										</script>

										<script type="text/javascript">
								            $('.dropify').dropify({
								                messages: {
								                    'default': 'Drag and drop a file here or click',
								                    'replace': 'Drag and drop or click to replace',
								                    'remove': 'Remove',
								                    'error': 'Ooops, something wrong appended.'
								                },
								                error: {
								                    'fileSize': 'The file size is too big (2M max).'
								                }
								            });
								     </script>





							</body>

						</html>
