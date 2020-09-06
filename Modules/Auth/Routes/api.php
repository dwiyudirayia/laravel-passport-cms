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
Route::group([
    'prefix' => 'auth',
    'as' => 'api.auth.'
], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:api')->name('user');
    Route::post('/logout', 'Api\AuthController@logout')->middleware('auth:api')->name('logout');
    Route::post('/login', 'Api\AuthController@login')->name('login');
    Route::post('/register', 'Api\AuthController@register')->name('register');
});
