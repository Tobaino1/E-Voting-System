<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Member routes
Route::get('/member', 'MemberController@member')->name('member');
Route::post('/store', 'MemberController@store');

Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::post('/mbrprofile', 'ProfileController@mbrprofile');


// Profile routes
Route::get('/profile', 'ProfileController@course')->name('profile');
Route::post('/save', 'ProfileController@save');


//Admin routes
Route::get('profiles_request', 'AdminController@requestProfiles')->name('profiles_request');
Route::get('members_request', 'AdminController@requestMembers')->name('members_request');


Route::get('registerMember', 'AdminController@regMember')->name('registerMember');


//Api
Route::get('candidates', 'ApiController@getAllCandidates');
Route::get('candidates/{id}', 'ApiController@getCandidate');
Route::post('candidates', 'ApiController@createCandidate');
Route::put('candidates/{id}', 'ApiController@updateCandidate');
Route::delete('candidates/{id}','ApiController@deleteCandidate');