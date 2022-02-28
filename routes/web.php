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

Route::get('/signin', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');
Route::get('/book-appointment', 'SiteController@bookAppointment')->name('book-appointment');
Route::post('/add-appointment', 'SiteController@addAppointment')->name('add-appointment');
Route::get('/all-appointment', 'DashboardController@allAppointment')->name('all-appointment');
Route::get('/my-appointment', 'DashboardController@myAppointment')->name('my-appointment');
Route::get('/update-ppointment/{id}', 'DashboardController@updateAppointment')->name('update-appointment');
