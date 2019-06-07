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
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/users/job','JobController@index');
Route::get('/users/job/list','JobController@list');
Route::get('/users/job/details','JobController@jobdetails');
Route::get('/users/job/companylist','JobController@companylist');
Route::get('/users/job/cv','JobController@showcv');

Route::get('/users/register','Auth\RegisterController@show');
Route::post('/users/register','Auth\RegisterController@register');
Route::get('/users/logout','Auth\LoginController@logout');
Route::get('/users/login','Auth\LoginController@show');
Route::post('/users/login','Auth\LoginController@login');
Route::get('/users/user','Admin\UserController@index');
//Route::get('/','');