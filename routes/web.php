<?php


// FRONTEND -------------------------------------------------------------------------------------------------------------

// homepage
Route::get('/index','FrontendController@index')->name('homepage');

// SERVICE PAGES --------------------------------------------------------------
Route::get('/services','ServicesController@services')->name('services');

// custom_software
Route::get('/custom-software','ServicesController@custom_software')->name('custom_software');
// web_design_development
Route::get('/web-design-development','ServicesController@web_design_development')->name('web_design_development');
// apps_development
Route::get('/apps-development','ServicesController@apps_development')->name('apps_development');
// graphics_solution
Route::get('/graphics-solution','ServicesController@graphics_solution')->name('graphics_solution');
// career_development
Route::get('/career-development','ServicesController@career_development')->name('career_development');
// domain_hosting
Route::get('/domain-hosting','ServicesController@domain_hosting')->name('domain_hosting');
// clipping_path_services
Route::get('/clipping-path-services','ServicesController@clipping_path_services')->name('clipping_path_services');

// CONTACT PAGE ---------------------------------------------------------------

// contact
Route::get('/contact','ContactController@index')->name('contact');
Route::post('/contact/insert','ContactController@contact_insert')->name('contact_insert');






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


















// ---------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
