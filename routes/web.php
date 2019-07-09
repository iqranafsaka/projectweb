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

//Contoh penampilan
Route::get('/', function(){
    return view('frontend.index');
});

//Contoh Penampilan About us
Route::get('/about', function(){
    return view('frontend.about');
});

Route::get('/indexcomu', function(){
    return view('frontend.indexcomu');
});

Route::get('/discussion', function(){
    return view('frontend.discussion');
});

Route::get('/posts', function(){
    return view('frontend.posts');
});

Route::get('backend', function(){
    return view('backend.index');
});

//Ajax Kategori
Route::get('kategori', function(){
    return view('backend.kategori.index');
});

//Ajax Tag
Route::get('tag', function(){
    return view('backend.tag.index');
});