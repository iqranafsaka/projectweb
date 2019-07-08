<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('contoh', 'ContohController@index');
// Route::get('contoh2', 'ContohController@index2');
Route::resource('contoh', 'ContohController');
Route::resource('tugas1', 'Tugas1Controller');
Route::resource('tag', 'TagController');
Route::resource('kategori', 'KategoriController');
