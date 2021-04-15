<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home',function(){
	return view('home');
});
Route::get('/contact-us',function(){
	return view('Contact-us');
});
Route::get('/book',function(){
	return view('bookings');
});

Route::group(['middleware'=>['auth']], function(){
	Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
Route::group(['middleware'=>['auth','role:user']], function(){
	Route::post('/submit','App\Http\Controllers\DashboardController@create')->name('submit');
	Route::get('/dashboard/booking', 'App\Http\Controllers\DashboardController@booking')->name('dashboard.booking');
	Route::get('/dashboard/contactus','App\Http\Controllers\DashboardController@contactus')->name('dashboard.contactus');
	Route::get('/dashboard/aboutus','App\Http\Controllers\DashboardController@aboutus')->name('dashboard.aboutus');
	Route::get('/show','App\Http\Controllers\DashboardController@show')->name('show');
	Route::post('/search','App\Http\Controllers\AdminController@search')->name('search');
});
Route::group(['middleware'=>['auth','role:admin']], function(){
	Route::get('/administrator.tours', 'App\Http\Controllers\AdminController@index')->name('administrator.tours');
	Route::post('/administrator.add','App\Http\Controllers\TourController@create')->name('administrator.add');
	Route::get('/administrator','App\Http\Controllers\PostController@index')->name('administrator');
	Route::post('/addpost','App\Http\Controllers\PostController@create')->name('addpost');
	Route::get('/administrator.payments','App\Http\Controllers\PaymentController@index')->name('administrator.payments');
});
Route::group(['middleware'=>['auth']], function(){
	Route::get('/dashboard.profile', 'App\Http\Controllers\DashboardController@profile')->name('dashboard.profile');
});

require __DIR__.'/auth.php';

