<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// home page
Route::get('','HomeController@Home');
//login page
Route::get('backend', function() {
   return view("admin.login");
});
Route::post('postLogin','LoginController@postLogin');

//frontend-kien
Route::post('check-tour', 'MainController@checkTour');

// page detail
Route::get('tour-detail/{id}/{name}.html','MainController@getTourDetail')->where('id', '[0-9]+');

// page tour for category
Route::get('category/{id}/{name}.html','MainController@getCategories')->where('id', '[0-9]+');

//add tour
Route::post('add-tour', 'MainController@addTour');
//Contacts
Route::get('lien-he','MainController@getContacts');

//show destination
Route::post('show-destination','HomeController@showDestination');

//show tour by destination
Route::get('destination/{id}','MainController@getTourbyDestination')->where('id', '[0-9]+');

// filter gobal
Route::get('filter', 'MainController@filterGobal');
// tours
Route::get('tours','MainController@showTour');

// checkout
Route::get('checkout/{id}','MainController@getCheckout');

// report
Route::post('report','MainController@postReport');

Route::prefix('admin')->middleware('MyMiddle')->group(function(){

	// logout
	Route::get('logout', 'LoginController@Logout');

	
	// cate
	Route::prefix('cate')->group(function(){
		Route::get('list','CategoryController@getList');
		Route::get('edit/{id}','CategoryController@getEdit');
		Route::post('edit/{id}','CategoryController@postEdit');
		Route::get('add','CategoryController@getAdd');
		Route::post('add','CategoryController@postAdd');
		Route::get('delete/{id}','CategoryController@getDelete');
	});

	//destination
	Route::prefix('destination')->group(function(){
		Route::get('list','DestinationController@getList');
		Route::get('edit/{id}','DestinationController@getEdit');
		Route::post('edit/{id}','DestinationController@postEdit');
		Route::get('add','DestinationController@getAdd');
		Route::post('add','DestinationController@postAdd');
		Route::get('delete/{id}','DestinationController@getDelete');
	});

	//province
	Route::prefix('province')->group(function(){
		Route::get('list','ProvinceController@getList');
		Route::get('edit/{id}','ProvinceController@getEdit');
		Route::post('edit/{id}','ProvinceController@postEdit');
		Route::get('add','ProvinceController@getAdd');
		Route::post('add','ProvinceController@postAdd');
		Route::get('delete/{id}','ProvinceController@getDelete');
	});

	//sale
	Route::prefix('sale')->group(function(){
		Route::get('list','SaleController@getList');
		Route::get('edit/{id}','SaleController@getEdit');
		Route::post('edit/{id}','SaleController@postEdit');
		Route::get('add','SaleController@getAdd');
		Route::post('add','SaleController@postAdd');
		Route::get('delete/{id}','SaleController@getDelete');
	});

	// Tour
	Route::prefix('tour')->group(function(){
		Route::name('admin.tour.list')->get('list','TourController@getList');
		Route::get('detail/{id}','TourController@getDetail');
		Route::get('edit/{id}','TourController@getEdit');
		Route::post('edit/{id}','TourController@postEdit');
		Route::get('add','TourController@getAdd');
		Route::post('add','TourController@postAdd');
		Route::get('delete/{id}','TourController@getDelete');
		Route::get('delimg/{id}','TourController@getDeleteImage');
		Route::get('category/{id}','TourController@getTourCategory');
		Route::get('province/{id}','TourController@getTourProvince');
		Route::get('destination/{id}','TourController@getTourDestination');
	});

	//user
	Route::prefix('user')->group(function(){
		//list user
		Route::get('list','UserController@getList');
		// add user
		Route::get('add','UserController@getAdd');
		Route::post('add','UserController@postAdd' );
		//checkpassword
		Route::post('checkpassword','UserController@checkPasswordOld');
		//update user
		Route::get('edit/{id}','UserController@getEdit');
		Route::post('edit/{id}','UserController@postEdit');
		//delete user
		Route::post('delete','UserController@getDelete');
	});
	//contact
	Route::prefix('contact')->group(function(){
		//list contact
		Route::get('list','ContactController@getList');
		// add contact
		Route::get('add','ContactController@getAdd');
		Route::post('add','ContactController@postAdd' );
		//update contact
		Route::get('edit/{id}','ContactController@getEdit');
		Route::post('edit/{id}','ContactController@postEdit');
		//delete contact
		Route::post('delete','ContactController@getDelete');
	});
	//price-range	
	Route::prefix('price-range')->group(function(){
		//list contact
		Route::get('list','PriceRangeController@getList');
		// add contact
		Route::get('add','PriceRangeController@getAdd');
		Route::post('add','PriceRangeController@postAdd' );
		//update contact
		Route::get('edit/{id}','PriceRangeController@getEdit');
		Route::post('edit/{id}','PriceRangeController@postEdit');
		//delete contact
		Route::post('delete','PriceRangeController@getDelete');
	});
	// pay
	Route::prefix('pay')->group(function(){
		//list contact
		Route::get('list','PayController@getList');
		// add contact
		Route::get('add','PayController@getAdd');
		Route::post('add','PayController@postAdd' );
		//update contact
		Route::get('edit/{id}','PayController@getEdit');
		Route::post('edit/{id}','PayController@postEdit');
		//delete contact
		Route::post('delete','PayController@getDelete');
	});
	//traffic
	Route::prefix('traffic')->group(function(){
		//list contact
		Route::get('list','TrafficController@getList');
		// add contact
		Route::get('add','TrafficController@getAdd');
		Route::post('add','TrafficController@postAdd' );
		//update contact
		Route::get('edit/{id}','TrafficController@getEdit');
		Route::post('edit/{id}','TrafficController@postEdit');
		//delete contact
		Route::post('delete','TrafficController@getDelete');
	});
	//order
	Route::prefix('order')->group(function(){
		//list order
		Route::get('list','OrderController@getList');
		Route::post('update-order','OrderController@updateOrderStatus' );
		//update contact
		Route::get('edit/{id}','OrderController@getEditTourer');
		Route::post('edit/{id}','TrafficController@postEdit');
		//delete contact
		Route::post('delete','TrafficController@getDelete');
	});
	//order
	Route::prefix('tourer')->group(function(){
	    //update tourer
	    Route::get('add/{id}', 'TourersController@getAdd');
	    Route::post('add', 'TourersController@postAdd');
		Route::get('edit/{id}','TourersController@getEdit');
		
		Route::post('edit/{id}','TourersController@postEdit');
		//delete contact
		Route::post('delete','TourersController@getDelete');
	});


});
