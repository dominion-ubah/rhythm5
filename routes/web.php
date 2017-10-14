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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/devotional', 'PagesController@devotional')->name('devotional');

Route::group(['prefix' => 'admin'], function (){
    Route::get('login', 'AdminController@loginPage')->name('adminLogin');
    Route::get('home', 'AdminController@home')->name('adminHome');
});