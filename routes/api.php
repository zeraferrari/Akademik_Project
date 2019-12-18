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

/*================================ROUTE GET API SERVER================================= */
// route::GET('/GetData', 'Akademik_Controller@Get_Data_API');
route::GET('/GetData', 'Students_Controller@get_data');
/*=====================================================================================*/

/*================================ROUTE SEND API SERVER================================ */
Route::GET('/Akademik', 'Akademik_Controller@index')->middleware('auth:api');
Route::GET('/Dosen', 'Dosen_Controller@index')->middleware('auth:api');
/*===================================================================================== */

Route::post('/login-api','LoginApiController@login');
