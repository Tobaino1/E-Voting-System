<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    Route::get('candidates', 'ApiController@getAllCandidates');
    Route::get('candidates/{id}', 'ApiController@getCandidate');
    Route::post('candidates', 'ApiController@createCandidate');
    Route::put('candidates/{id}', 'ApiController@updateCandidate');
    Route::delete('candidates/{id}','ApiController@deleteCandidate');