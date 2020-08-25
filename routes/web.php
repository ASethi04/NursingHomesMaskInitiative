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
Route::get('/about', function () {
    return view('about');
});
Route::get('/participate', function () {
    return view('participate');
});
Route::get('/resources', function () {
    return view('resources');
});
Route::get('/donate', function () {
    return view('donate');
});
Route::get('/contact', 'SendEmailController@index');

Route::post('/contact/send', 'SendEmailController@send');