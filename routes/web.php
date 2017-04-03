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

});
