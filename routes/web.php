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
//home route

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});
//jobs route

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

Route::group(array('prefix'=>'admin','namespace'=>'Main','middleware'=>'auth'),function (){
   Route::get('users/testing','MainController@index');
});
Route::group(array('prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'),function (){
   Route::get('roles','RoleController@index');
   Route::get('roles/create','RoleController@create');
   Route::get('roles/create','RoleController@store');
});