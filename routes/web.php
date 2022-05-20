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

Route::get('/', [\App\Http\Controllers\Web\HomeController::class, 'home']);
Route::get('/ads', [\App\Http\Controllers\Web\HomeController::class, 'test']);
Route::get('/single/{id}', [\App\Http\Controllers\Web\HomeController::class, 'ad']);
