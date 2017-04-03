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


Route::prefix('admin')->group(function(){
	// logout
	// 
	Route::get('logout', 'LoginController@Logout');
	
	Route::prefix('cate')->group(function(){
		Route::get('list','CategoryController@getList');
		Route::get('edit/{id}','CategoryController@getEdit');
		Route::post('edit/{id}','CategoryController@postEdit');
		Route::get('add','CategoryController@getAdd');
		Route::post('add','CategoryController@postAdd');
		Route::get('delete/{id}','CategoryController@getDelete');
	});

	Route::prefix('destination')->group(function(){
		Route::get('list','DestinationController@getList');
		Route::get('edit/{id}','DestinationController@getEdit');
		Route::post('edit/{id}','DestinationController@postEdit');
		Route::get('add','DestinationController@getAdd');
		Route::post('add','DestinationController@postAdd');
		Route::get('delete/{id}','DestinationController@getDelete');
	});

	//user
	Route::prefix('user')->group(function(){
		//list user
		Route::get('list','UserController@getList');
		// add user
		Route::get('add','UserController@getAdd');
		Route::post('add','UserController@postAdd' );
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

});
