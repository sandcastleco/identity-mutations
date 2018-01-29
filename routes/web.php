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


Route::get('/', 'ArtworksController@index');
Route::get('/artwork/create', 'ArtworksController@create')->middleware('auth');
Route::post('/artworks', 'ArtworksController@store')->middleware('auth');
Route::get('/artwork/{id}', 'ArtworksController@show');
Route::put('/artwork/{id}', 'ArtworksController@update')->middleware('auth');
Route::delete('/artwork/{id}', 'ArtworksController@destroy')->middleware('auth');
Route::get('/artwork/{id}/edit', 'ArtworksController@edit')->middleware('auth');

Route::post('/artwork/{id}/inquiry', 'InquiriesController@send');
Route::get('/thank-you', 'InquiriesController@confirm');

Route::get('/about', function () {
  return view('page', ['title' => 'About']);
});

Route::get('/contact', function () {
  return view('page', ['title' => 'Contact']);
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Disabled
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
