<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\RecordsController;
use App\Http\Controllers\Api\AuthController;

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

Route::get('denied', 'App\Http\Controllers\Api\AuthController@accessDenied')->name('denied');
Route::middleware('auth:api')->get('auth', 'App\Http\Controllers\Api\AuthController@index');

Route::middleware(['auth:api'])->group(function () {
    Route::get('records', 'App\Http\Controllers\Api\RecordsController@index');
    Route::get('order', 'App\Http\Controllers\Api\RecordsController@order');
    Route::get('record', 'App\Http\Controllers\Api\RecordsController@record');

});

