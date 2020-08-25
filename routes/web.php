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

Route::get('/', 'WelcomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/participate/submit', 'JoinController@submit');
Route::get('/participate', 'ParticipateController@index');
Route::get('/participate/{nursing_home}', 'JoinController@index')->name("DONATE");
Route::get('/resources', 'ResourcesController@index');
Route::get('/donate', 'DonateController@index');
Route::get('/contact', 'SendEmailController@index');

Route::post('/contact/send', 'SendEmailController@send');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

