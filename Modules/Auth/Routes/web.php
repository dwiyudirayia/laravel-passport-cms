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
Route::group([
    'prefix' => 'auth',
    'as' => 'api.auth.'
], function () {
    Route::get('/oauth/redirect', 'Api\OAuthController@redirect')->name('oauth.redirect');
    Route::get('/oauth/callback', 'Api\OAuthController@callback')->name('oauth.callback');
    Route::get('/oauth/refresh', 'Api\OAuthController@refresh')->name('oauth.refresh');
});
