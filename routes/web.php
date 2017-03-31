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
	Route::prefix('user')->group(function(){
		Route::get('list','UserController@getList');
		Route::get('add','UserController@getAdd');
	});

});
