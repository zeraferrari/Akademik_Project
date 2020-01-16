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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/Akademik'], function(){
    Route::GET('/', 'Akademik_Controller@index_web')->name('akademik.index');
    Route::GET('/Create', 'Akademik_Controller@create')->name('akademik.create');
    Route::POST('/', 'Akademik_Controller@store')->name('akademik.store');
    Route::GET('/{id}', 'Akademik_Controller@show')->name('akademik.show');
    Route::GET('/{id}/Change', 'Akademik_Controller@edit')->name('akademik.edit');
    Route::PUT('/{id}', 'Akademik_Controller@update')->name('akademik.update');
    Route::DELETE('/{id}', 'Akademik_Controller@destroy')->name('akademik.delete');
});

Route::group(['prefix' => '/Dosen'], function(){
    Route::GET('/', 'Dosen_Controller@index_web')->name('dosen.index');
    Route::GET('/Create', 'Dosen_Controller@create')->name('dosen.create');
    Route::POST('/', 'Dosen_Controller@store')->name('dosen.store');
    Route::GET('/{id}', 'Dosen_Controller@show')->name('dosen.show');
    Route::GET('/{id}/Change', 'Dosen_Controller@edit')->name('dosen.edit');
    Route::PUT('/{id}', 'Dosen_Controller@update')->name('dosen.update');
    Route::DELETE('/{id}', 'Dosen_Controller@destroy')->name('dosen.delete');
});

Route::GET('/Search', 'Students_Controller@get_data')->name('search.data');
Route::GET('/Search-Score', 'Students_Controller@to_view_search')->name('searching');

// Route::GET('/Search-Score',function(){
//     return view('Search.index');
// });