<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->

  <link href="{{ asset('custom/seip_reg/seip_dashboard/css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('custom/seip_reg/seip_dashboard/demo/demo.css') }}" rel="stylesheet" />

  @yield('css')


</head>


<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="{{ route('trainee_index') }}" class="simple-text logo-normal">
          SEIP
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ Route::currentRouteNamed('trainee_index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('trainee_index') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('interested_trainee_index') ? 'active' : ''  }}">
            <a class="nav-link" href="{{ route('interested_trainee_index') }}">
              <i class="material-icons">person</i>
              <p>Interested Trainee</p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('selected_trainee_index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('selected_trainee_index') }}">
              <i class="material-icons">content_paste</i>
              <p>Selected Trainee</p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('waiting_trainee_index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('waiting_trainee_index') }}">
              <i class="material-icons">library_books</i>
              <p>Waiting Trainee</p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('rejected_trainee_index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('rejected_trainee_index') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Rejected Trainee</p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('viva_trainee_index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('viva_trainee_index') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Viva Trainee</p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('did_not_picked_trainee_index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('did_not_picked_trainee_index') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Did Not Picked Trainee</p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('call_recieved_trainee_index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('call_recieved_trainee_index') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Call Recieved Trainee</p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('not_interested_trainee_index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('not_interested_trainee_index') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Not Interested Trainee</p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteNamed('pre_selected_trainee_index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pre_selected_trainee_index') }}">
              <i class="material-icons">bubble_chart</i>
              <p>Pre Selected Trainee</p>
            </a>
          </li>


          <li class="nav-item {{ Route::currentRouteNamed('quarter_index') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('quarter_index') }}">
              <i class="material-icons">eco</i>
              <p>BACCO Quarter</p>
            </a>
          </li>



        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">SEIP Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">{{ App\Seip::whereDate('created_at',Carbon\Carbon::today())->count() }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                  @forelse (App\Seip::whereDate('created_at',Carbon\Carbon::today())->paginate(5) as $value)
                    <a class="dropdown-item" href="#">{{ $value->name }} just now registered <br> {{ $value->created_at->diffForhumans() }} </a>

                  @empty

                    <div class="alert alert-primary" role="alert">
                      No Data
                    </div>

                  @endforelse


                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>

                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">



                    <div class="row counter_nav">
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                          <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                              <i class="material-icons">nature_people</i>
                            </div>
                            <p class="card-category">Total</p>
                            <h3 class="card-title"> {{ App\Seip::all()->count() }}

                            </h3>
                          </div>
                          <div class="card-footer">
                            <div class="stats">
                              <i class="material-icons text-danger">date_range</i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                          <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                              <i class="material-icons">add_circle</i>
                            </div>
                            <p class="card-category">Male</p>
                            <h3 class="card-title">{{ App\Seip::where('gender',1)->count() }}</h3>
                          </div>
                          <div class="card-footer">
                            <div class="stats">
                              <i class="material-icons">date_range</i> Last 24 Hours
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                          <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                              <i class="material-icons">remove_circle</i>
                            </div>
                            <p class="card-category">Female</p>
                            <h3 class="card-title">{{ App\Seip::where('gender',2)->count() }}</h3>
                          </div>
                          <div class="card-footer">
                            <div class="stats">
                              <i class="material-icons">local_offer</i> Tracked from Github
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>





          <div class="row counter_nav">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">emoji_people</i>
                  </div>
                  <p class="card-category">Interested</p>
                  <h3 class="card-title"> {{ App\Seip::where('remarks',1)->count() }}

                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">date_range</i>
                    <a href="#pablo">Today's Interested - - {{ App\Seip::whereDate('created_at',Carbon\Carbon::today())->count() }}</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">query_builder</i>
                  </div>
                  <p class="card-category">Waiting</p>
                  <h3 class="card-title">{{ App\Seip::where('remarks',3)->count() }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>
                      Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">done_outline</i>
                  </div>
                  <p class="card-category">Selected</p>
                  <h3 class="card-title">{{ App\Seip::where('remarks',2)->count() }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Github
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person_add_disabled</i>
                  </div>
                  <p class="card-category">Rejected</p>
                  <h3 class="card-title">{{ App\Seip::where('remarks',5)->count() }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="row counter_nav">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">face</i>
                  </div>
                  <p class="card-category">Viva</p>
                  <h3 class="card-title"> {{ App\Seip::where('remarks',4)->count() }}

                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">date_range</i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">settings_phone</i>
                  </div>
                  <p class="card-category">Did Not Pick Up The Call</p>
                  <h3 class="card-title">{{ App\Seip::where('remarks',6)->count() }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">perm_phone_msg</i>
                  </div>
                  <p class="card-category">Call Recieved</p>
                  <h3 class="card-title">{{ App\Seip::where('remarks',7)->count() }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Github
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">sentiment_dissatisfied</i>
                  </div>
                  <p class="card-category">Not Interested</p>
                  <h3 class="card-title">{{ App\Seip::where('remarks',8)->count() }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
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


          <footer class="footer">
       <div class="container-fluid">
         <nav class="float-left">
           <ul>
             <li>
               <a href="{{ route('homepage') }}">
                 Xubisoft
               </a>
             </li>
             <li>
               <a href="{{ route('trainee_index') }}">
                 SEIP
               </a>
             </li>
             <li>
               <a href="{{ route('dashboard') }}">
                 Dashboard
               </a>
             </li>


           </ul>
         </nav>
         <div class="copyright float-right">
           &copy;
           <script>
             document.write(new Date().getFullYear())
           </script>,
           <a href="{{ route('homepage') }}"  class="text-dark" target="_blank">Xubisoft</a>
         </div>
       </div>
     </footer>
   </div>
 </div>
 <div class="fixed-plugin">
   <div class="dropdown show-dropdown">
     <a href="#" data-toggle="dropdown">
       <i class="fa fa-cog fa-2x"> </i>
     </a>
     <ul class="dropdown-menu">
       <li class="header-title"> Sidebar Filters</li>
       <li class="adjustments-line">
         <a href="javascript:void(0)" class="switch-trigger active-color">
           <div class="badge-colors ml-auto mr-auto">
             <span class="badge filter badge-purple" data-color="purple"></span>
             <span class="badge filter badge-azure" data-color="azure"></span>
             <span class="badge filter badge-green" data-color="green"></span>
             <span class="badge filter badge-warning" data-color="orange"></span>
             <span class="badge filter badge-danger" data-color="danger"></span>
             <span class="badge filter badge-rose active" data-color="rose"></span>
           </div>
           <div class="clearfix"></div>
         </a>
       </li>
     </ul>
   </div>
 </div>
 <!--   Core JS Files   -->

 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/core/jquery.min.js') }}"></script>
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/core/popper.min.js') }}"></script>
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/core/bootstrap-material-design.min.js') }}"></script>
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
 <!-- Plugin for the momentJs  -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/moment.min.js') }}"></script>
 <!--  Plugin for Sweet Alert -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/sweetalert2.js') }}"></script>
 <!-- Forms Validations Plugin -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/jquery.validate.min.js') }}"></script>
 <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
 <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/bootstrap-selectpicker.js') }}"></script>
 <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
 <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/jquery.dataTables.min.js') }}"></script>
 <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/bootstrap-tagsinput.js') }}"></script>
 <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/jasny-bootstrap.min.js') }}"></script>
 <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/fullcalendar.min.js') }}"></script>
 <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/jquery-jvectormap.js') }}"></script>
 <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/nouislider.min.js') }}"></script>
 <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
 <!-- Library for adding dinamically elements -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/arrive.min.js') }}"></script>
 <!--  Google Maps Plugin    -->
 <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!-- Chartist JS -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/chartist.min.js') }}"></script>
 <!--  Notifications Plugin    -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/plugins/bootstrap-notify.js') }}"></script>
 <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/js/material-dashboard.js?v=2.1.1') }}" type="text/javascript"></script>
 <!-- Material Dashboard DEMO methods, don't include it in your project! -->
 <script src="{{ asset('custom/seip_reg/seip_dashboard/demo/demo.js') }}"></script>

 @yield('js')


 <script>
   $(document).ready(function() {
     $().ready(function() {
       $sidebar = $('.sidebar');

       $sidebar_img_container = $sidebar.find('.sidebar-background');

       $full_page = $('.full-page');

       $sidebar_responsive = $('body > .navbar-collapse');

       window_width = $(window).width();

       fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

       if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
         if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
           $('.fixed-plugin .dropdown').addClass('open');
         }

       }

       $('.fixed-plugin a').click(function(event) {
         // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
         if ($(this).hasClass('switch-trigger')) {
           if (event.stopPropagation) {
             event.stopPropagation();
           } else if (window.event) {
             window.event.cancelBubble = true;
           }
         }
       });

       $('.fixed-plugin .active-color span').click(function() {
         $full_page_background = $('.full-page-background');

         $(this).siblings().removeClass('active');
         $(this).addClass('active');

         var new_color = $(this).data('color');

         if ($sidebar.length != 0) {
           $sidebar.attr('data-color', new_color);
         }

         if ($full_page.length != 0) {
           $full_page.attr('filter-color', new_color);
         }

         if ($sidebar_responsive.length != 0) {
           $sidebar_responsive.attr('data-color', new_color);
         }
       });

       $('.fixed-plugin .background-color .badge').click(function() {
         $(this).siblings().removeClass('active');
         $(this).addClass('active');

         var new_color = $(this).data('background-color');

         if ($sidebar.length != 0) {
           $sidebar.attr('data-background-color', new_color);
         }
       });

       $('.fixed-plugin .img-holder').click(function() {
         $full_page_background = $('.full-page-background');

         $(this).parent('li').siblings().removeClass('active');
         $(this).parent('li').addClass('active');


         var new_image = $(this).find("img").attr('src');

         if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
           $sidebar_img_container.fadeOut('fast', function() {
             $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
             $sidebar_img_container.fadeIn('fast');
           });
         }

         if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
           var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

           $full_page_background.fadeOut('fast', function() {
             $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
             $full_page_background.fadeIn('fast');
           });
         }

         if ($('.switch-sidebar-image input:checked').length == 0) {
           var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
           var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

           $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
           $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
         }

         if ($sidebar_responsive.length != 0) {
           $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
         }
       });

       $('.switch-sidebar-image input').change(function() {
         $full_page_background = $('.full-page-background');

         $input = $(this);

         if ($input.is(':checked')) {
           if ($sidebar_img_container.length != 0) {
             $sidebar_img_container.fadeIn('fast');
             $sidebar.attr('data-image', '#');
           }

           if ($full_page_background.length != 0) {
             $full_page_background.fadeIn('fast');
             $full_page.attr('data-image', '#');
           }

           background_image = true;
         } else {
           if ($sidebar_img_container.length != 0) {
             $sidebar.removeAttr('data-image');
             $sidebar_img_container.fadeOut('fast');
           }

           if ($full_page_background.length != 0) {
             $full_page.removeAttr('data-image', '#');
             $full_page_background.fadeOut('fast');
           }

           background_image = false;
         }
       });

       $('.switch-sidebar-mini input').change(function() {
         $body = $('body');

         $input = $(this);

         if (md.misc.sidebar_mini_active == true) {
           $('body').removeClass('sidebar-mini');
           md.misc.sidebar_mini_active = false;

           $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

         } else {

           $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

           setTimeout(function() {
             $('body').addClass('sidebar-mini');

             md.misc.sidebar_mini_active = true;
           }, 300);
         }

         // we simulate the window Resize so the charts will get updated in realtime.
         var simulateWindowResize = setInterval(function() {
           window.dispatchEvent(new Event('resize'));
         }, 180);

         // we stop the simulation of Window Resize after the animations are completed
         setTimeout(function() {
           clearInterval(simulateWindowResize);
         }, 1000);

       });
     });
   });
 </script>


 <script>
   $(document).ready(function() {
     // Javascript method's body can be found in assets/js/demos.js
     md.initDashboardPageCharts();

   });
 </script>


 <script>
   @include('sweetalert::alert')
 </script>


</body>

</html>
