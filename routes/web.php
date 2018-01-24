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
    return view('landing');
});
Route::group(['middleware' => 'guest'], function () {
  Route::get('/register', 'AuthController@register');
  Route::get('/login', 'AuthController@login')->name('login');
  Route::post('/register', 'Auth\RegisterController@create');
  Route::post('/login', 'Auth\LoginController@authenticate');
  Route::get('/admin/login', 'AdminLoginController@show')->name('admin.login');
  Route::post('/admin/login', 'AdminLoginController@authenticate');
});
Route::group(['middleware' => 'auth'], function () {
  Route::get('/home', 'HomeController@show');
  Route::get('/logout', 'Auth\LoginController@logout');
  Route::get('/account', 'AccountController@view');
});


  Route::get('/admin', 'AdminController@dashboard');
  Route::get('/admin/logout', 'AdminController@logout');
