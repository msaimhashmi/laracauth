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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::namespace('Auth')->group(function () {
    Route::get('/login','LoginController@show_login_form')->name('login');
    Route::post('/login','LoginController@process_login')->name('login.post');
    Route::get('/register','LoginController@show_signup_form')->name('register');
    Route::post('/register','LoginController@process_signup');
    Route::post('/logout','LoginController@logout')->name('logout');
    Route::get('/home','LoginController@index')->name('home');

    Route::get('forget-password',  'ForgotPasswordController@showForgetPasswordForm')->name('forget.password.get');
    Route::post('forget-password',  'ForgotPasswordController@submitForgetPasswordForm')->name('forget.password.post'); 
    Route::get('reset-password/{token}',  'ForgotPasswordController@showResetPasswordForm')->name('reset.password.get');
    Route::post('reset-password',  'ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');
  });
// Route::group(['namescpace' => 'Auth'], function(){
//     Route::get('/login','LoginController@show_login_form')->name('login');
//     Route::post('/login','LoginController@process_login')->name('login');
//     Route::get('/register','LoginController@show_signup_form')->name('register');
//     Route::post('/register','LoginController@process_signup');
//     Route::post('/logout','LoginController@logout')->name('logout');
// });