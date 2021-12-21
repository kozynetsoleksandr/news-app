<?php

use App\Http\Controllers\NoveltyController;
use App\Http\Controllers\RubricController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/rubrics', [RubricController::class, 'index']);
Route::apiResource('/novelty', \App\Http\Controllers\Api\NoveltyController::class);

Route::apiResource('/rubrics', \App\Http\Controllers\Api\RubricController::class);
