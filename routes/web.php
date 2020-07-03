<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/request-services', 'RequestServicesController@index')->name('request-services');
Route::get('/get-involved', 'GetInvolvedController@index')->name('get-involved');
Route::get('/clinic-list', 'ClinicController@index')->name('clinic-list');
Route::get('/donate', 'DonateController@index')->name('donate');