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

Route::group([
    'namespace'  => 'Api',
], function () {
    Route::get('/countries', [
        'as'   => '.countries',
        'uses' => 'LocationController@getCountries',
    ]);
    Route::get('/{countryId}/states', [
        'as'   => '.states',
        'uses' => 'LocationController@getStates',
    ]);
    Route::get('/{stateId}/cities', [
        'as'   => '.cities',
        'uses' => 'LocationController@getCities',
    ]);
});
