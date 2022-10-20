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

Route::post('/register','API\AuthController@register');
//API route for login user
Route::post('/login','API\AuthController@login');

Route::group(['namespace' => 'API','middleware' => 'auth:sanctum'], function(){

    Route::get('user/profile/{id}','UserProfileController@profile');
}
);

Route::post('password/email', 'API\AuthController@forgot');

Route::post('password/reset', 'API\AuthController@reset')->name('passwords.reset');

 Route::post('/logout','API\AuthController@logout');
