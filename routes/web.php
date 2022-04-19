<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::group([
    'namespace'  => 'Web',
    'as'         => 'profile',
    'prefix'     => 'profile',
  //  'middleware' => 'auth',
], function () {
    Route::get('/create', [
        'as'   => '.create',
        'uses' => 'ProfileController@create',
    ]);
    Route::post('/store', [
        'as'   => '.store',
        'uses' => 'ProfileController@store',
    ]);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
