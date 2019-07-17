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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route Frontend
Route::group(['prefix' => '/'], function(){
    Route::get('/', 'FrontendController@index');
    Route::get('about', 'FrontendController@about');
    // Route::get('indexcomu', 'FrontendController@indexcomu');
    
    Route::get('posts', 'FrontendController@blog');
    Route::get('posts/{artikel}', 'FrontendController@singleblog');
    Route::get('posts-tag/{tag}', 'FrontendController@blogtag');
    Route::get('posts-kategori/{kategori}', 'FrontendController@blogkategori');
});


//Backend
Route::group(['prefix' => 'admin', 'middleware' => 'auth'],
function(){
    Route::get('/', function(){
        return view('backend.index');
    });
    Route::resource('/kategori', 'KategoriKontroller');
    Route::resource('/tag', 'TagKontroller');
    Route::resource('/artikel', 'ArtikelKontroller');
});