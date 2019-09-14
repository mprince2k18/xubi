
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
		<link href="{{ asset('dashboard/assets/plugins/select2/select2.min.css.css') }}" rel="stylesheet" />

		<!-- Time picker Plugin -->
		<link href="{{ asset('dashboard/assets/plugins/time-picker/jquery.timepicker.css.css') }}" rel="stylesheet" />

		<!-- Date Picker Plugin -->
		<link href="{{ asset('dashboard/assets/plugins/date-picker/spectrum.css.css') }}" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="{{ asset('dashboard/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css.css') }}" rel="stylesheet" />

		<!-- file Uploads -->
    <link href="{{ asset('dashboard/assets/plugins/fileuploads/css/dropify.min.css.css') }}" rel="stylesheet" type="text/css" />

		<!---Font icons-->
		<link href="{{ asset('dashboard/assets/css/icons.css') }}" rel="stylesheet" />

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
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-thumbs-o-up"></i>
											</div>
											<div>
												<strong>Someone likes our posts.</strong>
												<div class="small text-muted">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-commenting-o"></i>
											</div>
											<div>
												<strong> 3 New Comments</strong>
												<div class="small text-muted">5  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-cogs"></i>
											</div>
											<div>
												<strong> Server Rebooted.</strong>
												<div class="small text-muted">45 mintues ago</div>
											</div>
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
											<li>
												<a href="email.html" class="drop-icon-item">
													<i class="fe fe-mail text-dark"></i>
													<span class="block"> E-mail</span>
												</a>
											</li>
											<li>
												<a href="calendar2.html" class="drop-icon-item">
													<i class="fe fe-calendar text-dark"></i>
													<span class="block">calendar</span>
												</a>
											</li>
											<li>
												<a href="maps.html" class="drop-icon-item">
													<i class="fe fe-map-pin text-dark"></i>
													<span class="block">map</span>
												</a>
											</li>
											<li>
												<a href="cart.html" class="drop-icon-item">
													<i class="fe fe-shopping-cart text-dark"></i>
													<span class="block">Cart</span>
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
										</ul>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all</a>
									</div>
								</div>
								<div class="dropdown text-center selector">
									<a href="#" class="nav-link leading-none" data-toggle="dropdown">
										<span class="avatar avatar-sm brround cover-image" data-image-src="assets/images/faces/female/25.jpg"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center font-weight-sembold user" data-toggle="dropdown">Joyce Stewart</a>
											<span class="text-center user-semi-title text-dark">web designer</span>
											<div class="dropdown-divider"></div>
										</div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-settings"></i> Settings
										</a>
										<a class="dropdown-item" href="#">
											<span class="float-right"><span class="badge badge-primary">6</span></span>
											<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
										</a>
										<a class="dropdown-item" href="login.html">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
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
							<li class="nav-item with-sub">
								<a class="nav-link active" href="#">
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

									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>

							<li class="nav-item with-sub">
								<a class="nav-link" href="{{ route('contact_index') }}"><i class="fa fa-tachometer"></i> <span>Contacts</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="{{ route('contact_index') }}">All Contacts</a>
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
							<li class="nav-item with-sub mega-dropdown">
								<a class="nav-link" href="#"><i class="mdi mdi-buffer" title="si-note"></i><span>UI Elements</span></a>
								<div class="sub-item">
									<div class="row">
										<div class="col-lg-12">
											<label class="section-label">Basic Elements</label>
											<div class="row">
												<div class="col">
													<ul>
														<li>
															<a href="alerts.html">Alerts</a>
														</li>
														<li>
															<a href="buttons.html">Buttons</a>
														</li>
														<li>
															<a href="colors.html">Colors</a>
														</li>
														<li>
															<a href="avatars.html">Avatar-Square</a>
														</li>
														<li>
															<a href="avatar-round.html">Avatar-Rounded</a>
														</li>
														<li>
															<a href="avatar-radius.html">Avatar-Radius</a>
														</li>
														<li>
															<a href="dropdown.html">Drop downs</a>
														</li>
													</ul>
												</div>
												<div class="col-lg">
													<ul>
														<li>
															<a href="list.html">List</a>
														</li>
														<li>
															<a href="tags.html">Tags</a>
														</li>
														<li>
															<a href="pagination.html">Pagination</a>
														</li>
														<li>
															<a href="navigation.html">Navigation</a>
														</li>
														<li>
															<a href="typography.html">Typography</a>
														</li>
														<li>
															<a href="breadcrumbs.html">Breadcrumbs</a>
														</li>
														<li>
															<a href="badge.html">Badges</a>
														</li>
													</ul>
												</div><!-- col -->
												<div class="col-lg mg-t-30 mg-lg-t-0">
													<ul>
														<li>
															<a href="jumbotron.html">Jumbotron</a>
														</li>
														<li>
															<a href="panels.html">Panels</a>
														</li>
														<li>
															<a href="thumbnails.html">Thumbnails</a>
														</li>
														<li>
															<a href="mediaobject.html">Media Object</a>
														</li>
														<li>
															<a href="accordion.html">Accordions</a>
														</li>
														<li>
															<a href="tabs.html">Tabs</a>
														</li>
														<li>
															<a href="chart.html">Charts</a>
														</li>
													</ul>
												</div><!-- col -->
												<div class="col-lg mg-t-30 mg-lg-t-0">
													<ul>
														<li>
															<a href="modal.html">Modal</a>
														</li>
														<li>
															<a href="tooltipandpopover.html">Tooltip and popover</a>
														</li>
														<li>
															<a href="progress.html">Progress</a>
														</li>

														<li>
															<a href="carousel.html">Carousels</a>
														</li>

														<li>
															<a href="headers.html">Headers  </a>
														</li>
														<li>
															<a href="footers.html">Footers  </a>
														</li>
														<li>
															<a href="loaders.html">Loaders</a>
														</li>
													</ul>
												</div><!-- col -->

											</div><!-- row -->
										</div><!-- col -->
									</div><!-- row -->
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub">
								<a class="nav-link" href="#"><i class="mdi mdi-file"></i><span>Pages</span></a>
								<div class="sub-item">
									<ul>
										<li class="sub-with-sub">
											<a href="#">Profile </a>
											<ul>
												<li>
													<a href="profile.html">Profile</a>
												</li>
												<li>
													<a href="editprofile.html">Edit Profile</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="#">Email </a>
											<ul>
												<li>
													<a href="email.html">Email</a>
												</li>
												<li>
													<a href="emailservices.html">Email Inbox</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="#">E-commerce </a>
											<ul>
												<li>
													<a href="shop.html">Products</a>
												</li>
												<li>
													<a href="shop-description.html">Product Details</a>
												</li>
												<li>
													<a href="cart.html">Shopping Cart</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="#">User Pages</a>
											<ul>
												<li>
													<a href="login.html">Login</a>
												</li>
												<li>
													<a href="register.html">Register</a>
												</li>
												<li>
													<a href="forgot-password.html">Forgot password</a>
												</li>
												<li>
													<a href="lockscreen.html">Lock screen</a>
												</li>
												<li>
													<a href="empty.html">Empty Page</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="construction.html">Under Construction</a>
										</li>
										<li>
											<a href="gallery.html">Gallery</a>
										</li>
										<li>
											<a href="about.html">About Company </a>
										</li>
										<li>
											<a href="company-history.html">Company History </a>
										</li>
										<li>
											<a href="services.html">Services </a>
										</li>
										<li>
											<a href="faq.html">FAQS </a>
										</li>
										<li>
											<a href="terms.html">Terms</a>
										</li>
										<li>
											<a href="invoice.html">Invoice</a>
										</li>
										<li>
											<a href="pricing.html">Pricing Tables</a>
										</li>
										<li>
											<a href="blog.html">Blog</a>
										</li>
										<li class="sub-with-sub">
											<a href="#">Error Pages</a>
											<ul>
												<li>
													<a href="400.html">400 Error</a>
												</li>
												<li>
													<a href="401.html">401 Error</a>
												</li>
												<li>
													<a href="403.html">403 Error</a>
												</li>
												<li>
													<a href="404.html">404 Error</a>
												</li>
												<li>
													<a href="500.html">500 Error</a>
												</li>
												<li>
													<a href="503.html">503 Error</a>
												</li>
											</ul>
										</li>

									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub">
								<a class="nav-link" data-toggle="dropdown" href="#"><i class="mdi mdi-arrange-send-backward"></i> <span>Form Elements</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="form-elements.html">Form Elements</a>
										</li>
										<li>
											<a href="form-wizard.html">wizard Elements</a>
										</li>
										<li>
											<a href="wysiwyag.html">Text Editor</a>
										</li>
									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>
							<li class="nav-item with-sub ">
								<a class="nav-link " data-toggle="dropdown" href="#"><i class="fa fa-cogs"></i> <span>Components</span></a>
								<div class="sub-item">
									<ul>
										<li>
											<a href="maps.html">Maps</a>
										</li>
										<li>
											<a href="crypto-currencies.html">Crypto-currencies</a>
										</li>
										<li>
											<a href="users-list.html">User List</a>
										</li>
										<li class="sub-with-sub">
											<a href="#">Calendar </a>
											<ul>
												<li>
													<a href="calendar.html">Default calendar</a>
												</li>
												<li>
													<a href="calendar2.html">Full calendar</a>
												</li>
											</ul>
										</li>
										<li class="sub-with-sub">
											<a href="#">Tables</a>
											<ul>
												<li>
													<a href="tables.html">Default table</a>
												</li>
												<li>
													<a href="datatable.html">Data Table</a>
												</li>

											</ul>
										</li>
										<li>
											<a href="search.html">Search page</a>
										</li>
									</ul>
								</div>
								<!-- dropdown-menu -->
							</li>

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
											<div class="square-icon br-tl-9 bg-primary text-center align-self-center shadow-primary"><i class= "fa fa-cubes fs-30  text-white"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body card-padding">
												<h1 class="mb-2">546</h1>
												<h5 class="font-weight-normal mb-3">Projects</h5>
											</div>
									    </div>
								    </div>
							   </div>
							</div>
							 <div class="col-sm-12 col-lg-3 col-md-6">
								<div class="card card-img-holder text-default bg-color">
									<div class="row">
										<div class="col-4">
											<div class="square-icon bg-secondary text-center align-self-center shadow-secondary"><i class= "fa fa-area-chart fs-30  text-white"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body card-padding">
												<h1 class="mb-2">$7,908</h1>
												<h5 class="font-weight-normal mb-3">Profits</h5>
											</div>
									    </div>
								    </div>
							   </div>
							</div>

							<div class="col-sm-12 col-lg-3 col-md-6">
								<div class="card card-img-holder text-default bg-color">
									<div class="row">
										<div class="col-4">
											<div class="square-icon bg-info text-center align-self-center shadow-info"><i class= "fa fa-eye fs-30  text-white"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body card-padding">
												<h1 class="mb-2">9,523</h1>
												<h5 class="font-weight-normal mb-3">Page views</h5>
											</div>
									    </div>
								    </div>
							   </div>
							</div>
							<div class="col-sm-12 col-lg-3 col-md-6">
								<div class="card card-img-holder text-default bg-color">
									<div class="row">
										<div class="col-4">
											<div class="square-icon bg-success text-center align-self-center shadow-success"><i class= "fa fa-thumbs-up fs-30 text-white"></i></div>
										</div>
										<div class="col-8">
											<div class="card-body card-padding">
												<h1 class="mb-2">6,723</h1>
												<h5 class="font-weight-normal mb-3">Reviews</h5>
											</div>
									    </div>
								    </div>
							   </div>
							</div>
						</div>




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


										<!-- Custom Js-->
										<script src="{{ asset('dashboard/assets/js/custom.js') }}"></script>


										<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>

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
