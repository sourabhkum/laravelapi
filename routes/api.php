<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
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
Route::get('allUsers','ApiController@index');
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('forgot', 'Auth\ForgotPasswordController@getResetToken');
Route::post('reset', 'Auth\ResetPasswordController@reset');
Route::get('search','ApiController@getSearchResults');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('profile', 'ApiController@profile');
    Route::Put('updateProfile','ApiController@updateProfile');
    Route::Delete('deleteUser','ApiController@deleteUser');
});