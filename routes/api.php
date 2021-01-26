<?php

use App\Http\Controllers\FlightController;
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

Route::group(['prefix' => '/flights'], function () {
    Route::get('/', [FlightController::class, 'index']);
    Route::get('/origin', [FlightController::class, 'getOrigin']);
    Route::get('/destiny/{origin}', [FlightController::class, 'getDestiny']);
    Route::get('/time/{origin}/{destiny}', [FlightController::class, 'getTime']);
});
