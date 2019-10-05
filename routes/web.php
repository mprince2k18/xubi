<?php


// FRONTEND -------------------------------------------------------------------------------------------------------------

// homepage
Route::get('/index','FrontendController@index')->name('homepage');

// SERVICE PAGES --------------------------------------------------------------
Route::get('/services','ServicesController@services')->name('services');

// Single Service Page
Route::get('/services/{service_id}','ServicesController@index')->name('services_single_index');


// CONTACT PAGE ---------------------------------------------------------------

// contact
Route::get('/contact','ContactController@index')->name('contact');
// contact_insert
Route::post('/contact/insert','ContactController@contact_insert')->name('contact_insert');


// PRODUCTS

Route::get('/products','ProductController@products')->name('products');

// PRODUCTS Service Page
Route::get('/products/{products_id}','ProductPageController@index')->name('products_single_index');


// ABOUT

Route::get('/about','AboutController@index')->name('about');









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










// search
Route::get('search','SearchController@search')->name('search');













// ---------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
