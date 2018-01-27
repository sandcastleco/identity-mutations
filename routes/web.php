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
Route::get('/artwork/create', 'ArtworksController@create')->middleware('auth');;
Route::post('/artworks', 'ArtworksController@store')->middleware('auth');;

Route::get('/about', function () {
  return view('page', ['title' => 'About']);
});

Route::get('/contact', function () {
  return view('page', ['title' => 'Contact']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
