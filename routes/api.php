<?php

use App\Http\Controllers\KvizController;
use App\Http\Controllers\TakmicarController;
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

Route::resource('kviz', KvizController::class)->only('index', 'show', 'destroy');
Route::resource('takmicar', TakmicarController::class)->only('index', 'show', 'update');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
