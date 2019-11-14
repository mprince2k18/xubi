<?php


// FRONTEND -------------------------------------------------------------------------------------------------------------

// homepage
Route::get('/','FrontendController@index')->name('homepage');

// SERVICE PAGES --------------------------------------------------------------
Route::get('/services','ServicesController@services')->name('services');

// Single Service Page
Route::get('/services/{service_id}','ServicesController@index')->name('services_single_index');


// CONTACT US PAGE ---------------------------------------------------------------

// contact
Route::get('/contactus','ContactController@index')->name('contact');
// contact_insert
Route::post('/contactus/insert','ContactController@contact_insert')->name('contact_insert');

// CONTACT CENTER PAGE

// contact center
Route::get('/contact-center','ContactCenterController@index')->name('contact_center');


// PRODUCTS

Route::get('/products','ProductController@products')->name('products');

// PRODUCTS Service Page
Route::get('/products/{products_id}','ProductPageController@index')->name('products_single_index');


// ABOUT
Route::get('/about','AboutController@index')->name('about');

// Training
Route::get('/training','TrainingController@index')->name('training');
// training_single
Route::get('/training/single','TrainingController@training_single')->name('training_single');


// career
Route::get('/career','CareerController@index')->name('career_index');
// career_single_page
Route::get('/career/{career_id}','CareerController@single_career')->name('single_career');









// BACKEND------------------------------------------------------------------------------------------

// dashboard
Route::get('/admin/dashboard','DashboardController@index')->name('dashboard');

//header_slider----------------------------------------------------------------
Route::get('/admin/header/slider','DashboardController@header_slider')->name('header_slider');
//add slider
Route::post('add/header/slider','BannerController@add_header_slider')->name('add_header_slider');
//Delete slider
Route::get('/admin/header/slider/{banner_id}','BannerController@delete_banner')->name('delete_banner');
//Edit slider
Route::get('/admin/edit/slider/{banner_id}','BannerController@edit_banner')->name('edit_banner');
//Update slider
Route::post('/update/slider','BannerController@updateBanner')->name('update_banner');
//trashed slider
Route::get('/trashed/slider/{banner_id}','BannerController@trashedBanner')->name('trashed_banner');
//restore slider
Route::get('/restore/slider/{banner_id}','BannerController@restore_banner')->name('restore_banner');

//info-------------------------------------------------------------------------
Route::get('/admin/info','InfoController@index')->name('info');
// add_info
Route::post('/admin/add/info','InfoController@add_info')->name('add_info');
// edit_info
Route::get('/admin/edit/info/{info_id}','InfoController@edit_info')->name('edit_info');
// updateInfo
Route::post('/admin/update/info','InfoController@updateInfo')->name('updateInfo');
// delete_info
Route::get('/admin/delete/info/{info_id}','InfoController@delete_Info')->name('delete_info');
// restore_info
Route::get('/admin/restore/info/{info_id}','InfoController@restore_Info')->name('restore_info');


// contact --------------------------------------------------------------------
// contact_index
Route::get('/admin/messages','ContactController@contact_index')->name('contact_index');
// all_read_messages
Route::get('/admin/all_read_messages','ContactController@all_read_messages')->name('all_read_messages');
// all_unread_messages
Route::get('/admin/all_unread_messages','ContactController@all_unread_messages')->name('all_unread_messages');
// open_message
Route::get('/admin/open_message/{message_id}','ContactController@open_message')->name('open_message');
// i_read_message
Route::post('/admin/i_read_message','ContactController@i_read_message')->name('i_read_message');

// FOOTER

// Address
// address_index
Route::get('/admin/footer','AddressController@index')->name('footer');
// add_address
Route::post('/admin/add_address','AddressController@add_address')->name('add_address');
// edit_address
Route::get('/admin/edit_address/{address_id}','AddressController@edit_address')->name('edit_address');
// update_address
Route::post('/admin/update_address','AddressController@update_address')->name('update_address');

// CEO

// ceo index
Route::get('/admin/ceo','CeoController@index')->name('ceo');
// ceo_talks
Route::post('/admin/ceo/talks','CeoController@ceo_talks')->name('ceo_talks');

// Portfolio

// portfolio index
Route::get('/admin/portfolio','PortfolioController@index')->name('portfolio');
// portfolio create
Route::post('/admin/portfolio/create','PortfolioController@create')->name('create');
// portfolio edit
Route::get('/admin/portfolio/edit/{portfolio_id}','PortfolioController@edit')->name('edit');
// portfolio update
Route::post('/admin/portfolio/update','PortfolioController@update')->name('update');
// portfolio delete
Route::get('/admin/portfolio/delete/{portfolio_id}','PortfolioController@delete')->name('delete');
// portfolio restore
Route::get('/admin/portfolio/restore/{portfolio_id}','PortfolioController@restore')->name('restore');


// SERVICES

// service_index
Route::get('/admin/service','DashboardController@service_index')->name('service_index');
// add_service_page
Route::get('/admin/add_service_page','DashboardController@add_service_page')->name('add_service_page');
// create_service_page
Route::post('/admin/service_page/create','ServicesController@create')->name('create_service_page');

// add_service_category
Route::post('/admin/add/service/category','CategoryController@add_service_category')->name('add_service_category');
// edit_service_category
Route::get('/admin/edit/service/category/{category_id}','CategoryController@edit_service_category')->name('edit_service_category');
// update_category
Route::post('/admin/update/category','CategoryController@update_category')->name('update_category');

// add_service
Route::post('/admin/add/service','CompanyServiceController@add_service')->name('add_service');
// edit_service
Route::get('/admin/edit/service/{service_id}','CompanyServiceController@edit_service')->name('edit_service');
// update_service
Route::post('/admin/update/service','CompanyServiceController@update_service')->name('update_service');

// PRODUCTS

Route::get('/admin/products','DashboardController@products_index')->name('products_index');
// add_product
Route::post('/admin/add/product','ProductController@add_product')->name('add_product');
// edit_service
Route::get('/admin/edit/product/{product_id}','ProductController@edit_product')->name('edit_product');
// update_service
Route::post('/admin/update/product','ProductController@update_product')->name('update_product');
// add_product_page
Route::get('/admin/add_product_page','DashboardController@add_product_page')->name('add_product_page');
// create_product_page
Route::post('/admin/add_product_page/create','ProductPageController@create')->name('create');




// TEAM

// team_index
Route::get('/admin/team','DashboardController@team_index')->name('team');
// team_insert
Route::post('/admin/team/insert','TeamController@team_insert')->name('team_insert');
// edit_team
Route::get('/admin/team/edit/{team_id}','TeamController@edit_team')->name('edit_team');
// update_team
Route::post('/admin/team/update','TeamController@update_team')->name('update_team');
// delete_team
Route::get('/admin/team/delete/{team_id}','TeamController@delete_team')->name('delete_team');



// CLIENTS

// client_index
Route::get('/admin/client','DashboardController@client_index')->name('client_index');
// insert
Route::post('/admin/client/insert','ClientController@insert')->name('insert');

// Training

// Training_index
Route::get('/training/single','TrainingPageController@single')->name('single');
// Training_index
Route::get('/admin/training','DashboardController@training_index')->name('training_index');
// training_create
Route::post('/admin/training/create','TrainingController@create')->name('training_create');
// training_page
Route::get('/admin/training/page','TrainingPageController@training_page')->name('training_page');
// training_page
Route::post('/admin/training/page/create','TrainingPageController@create')->name('training_page_create');


// CAREER
// index
Route::get('/admin/career','DashboardController@career_index')->name('career_dashboard_index');
// index
Route::post('/admin/career/create','CareerController@career_create')->name('career_create');


// STATUS
// index
Route::get('/admin/status','DashboardController@status_index')->name('status_index');
// add_education_qualification
Route::post('/admin/status/education_qualification/insert','EducationStatusController@add_education_qualification')->name('add_education_qualification');
// add_education_qualification
Route::post('/admin/status/working_status/insert','StatusController@add_working_status')->name('add_working_status');
// add_father_working_status
Route::post('/admin/status/add_father_working_status/insert','StatusController@add_father_working_status')->name('add_father_working_status');
// add_mother_working_status
Route::post('/admin/status/add_mother_working_status/insert','StatusController@add_mother_working_status')->name('add_mother_working_status');
// add_education_qualification
Route::post('/admin/status/gender_status/insert','StatusController@add_gender_status')->name('add_gender_status');
// add_information_source
Route::post('/admin/status/information_source/insert','StatusController@add_information_source')->name('add_information_source');
// add_seip_status
Route::post('/admin/status/seip_status/insert','StatusController@add_seip_status')->name('add_seip_status');
// add_remarks_status
Route::post('/admin/status/add_remarks_status/insert','StatusController@add_remarks_status')->name('add_remarks_status');



// Trainee


Route::middleware('common')->group(function(){
  // index
  Route::get('/admin/trainee','SeipController@trainee_index')->name('trainee_index');
  // single
  Route::get('/admin/trainee/{single}','SeipController@single_trainee_index')->name('single_trainee_index');
  // update
  Route::post('/admin/trainee/update','SeipController@update')->name('single_trainee_update');

  // interested_trainee
  Route::get('/admin/interested/trainee','SeipController@interested_trainee_index')->name('interested_trainee_index');
  // selected_trainee
  Route::get('/admin/selected/trainee','SeipController@selected_trainee_index')->name('selected_trainee_index');
  // waiting_trainee
  Route::get('/admin/waiting/trainee','SeipController@waiting_trainee_index')->name('waiting_trainee_index');
  // waiting_trainee
  Route::get('/admin/rejected/trainee','SeipController@rejected_trainee_index')->name('rejected_trainee_index');
  // viva_trainee
  Route::get('/admin/viva/trainee','SeipController@viva_trainee_index')->name('viva_trainee_index');
  // did_not_picked_trainee
  Route::get('/admin/did_not_picked/trainee','SeipController@did_not_picked_trainee_index')->name('did_not_picked_trainee_index');
  // call_recieved_trainee
  Route::get('/admin/call_recieved/trainee','SeipController@call_recieved_trainee_index')->name('call_recieved_trainee_index');
  // not_interested_trainee
  Route::get('/admin/not_interested/trainee','SeipController@not_interested_trainee_index')->name('not_interested_trainee_index');
  // pre_selected_trainee
  Route::get('/admin/pre_selected/trainee','SeipController@pre_selected_trainee_index')->name('pre_selected_trainee_index');

  // quarter
  Route::get('/admin/quarter','SeipController@quarter_index')->name('quarter_index');
  // quarter_insert
  Route::post('/admin/quarter_insert','SeipController@quarter_insert')->name('quarter_insert');
  // quarter_status
  Route::get('/admin/quarter/{quarter_id}/{quarter_status}','SeipController@quarter_update')->name('quarter_update');
});

// SuperAdminController
Route::get('/add/new/user.html','SuperAdminController@index')->name('super_admin.index');
// create
Route::post('/add/new/user.html/create','SuperAdminController@create')->name('super_admin.create');


// Users
Route::get('/all/uesrs','SuperAdminController@all_users')->name('all_users.index');
// single_user
Route::get('/single_user/{user_id}-{slug}','SuperAdminController@single_user')->name('single_user');
// single_user_update
Route::post('/single_user/update','SuperAdminController@single_update')->name('single_user.update');
// single_user_update
Route::get('/delete_user/{user_id}','SuperAdminController@delete_user')->name('single_user.delete');







// search
Route::get('search','SearchController@search')->name('search');








// SEIP
Route::get('/seip/registration','SeipController@index')->name('seip_registration');
// seip_registration_create
Route::post('/seip/registration/create','SeipController@create')->name('seip_registration_create');


// pdf_download
// Route::get('pdf_download', 'PdfController@pdfDownload');
Route::get('/admin/trainee/pdf_view/{single}', 'PdfController@pdfView');

// sentry
Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});



// ---------------------------------------------------------

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/non-verified-user', 'NonUserController@index')->name('non_verified_user');
Route::get('/non-verified-unknown-user', 'NonUserController@unknown')->name('non_verified_unknown_user');
