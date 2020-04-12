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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'loginController@index')->name('login.index');
Route::get('/logout', 'logoutController@index')->name('logout.index');
Route::post('/login', 'loginController@verify');
Route::resource('user', 'UserController');
Route::group(['middleware'=>['sess']],function(){
	Route::get('admin/vehicle/update/{id}', 'vehicleUpdateController@admin')->name('update.index');
    Route::post('admin/vehicle/carlist', 'vehicleUpdateController@avlist');
	Route::get('admin/vehicle/carlist', 'vehicleUpdateController@acarlist')->name('update.carlist');
    Route::post('member/vehicle/carlist', 'vehicleUpdateController@mvlist');
	Route::get('member/vehicle/carlist', 'vehicleUpdateController@mcarlist')->name('update.mcarlist');
	Route::get('/blog/myBlog', 'personalBlogController@index')->name('blog.myBlog');
	Route::post('/vehicle/rent', 'rentController@rent');
	Route::post('/vehicle/final', 'rentController@finalize');
	Route::get('admin/home', 'homeController@adminIndex')->name('home.admin');
	Route::get('member/profile', 'homeController@memberIndex')->name('profile.member');
    Route::get('/member/home', 'memberHomeController@index')->name('home.member');
	Route::resource('vehicle', 'VehicleController');
	Route::resource('category', 'CategoryController');
	Route::resource('order', 'OrderController');
	Route::resource('blog', 'BlogController');
});
