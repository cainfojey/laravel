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

Route::get('/login', function() { 
    return view('login');

});

Route::get('/brands', function() { 
  return view('welcome');
});

Route::get('/maps', function() { 
  return view('welcome');
});

Route::get('/admin/login', function() { 
    return view('backend/login');

});

Route::get('/admin/dashboard', function() { 
    return view('backend/dashboard');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
