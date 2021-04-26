<?php

use App\Http\Controllers\Api\ButtonController;
use App\Http\Controllers\Api\ChipController;
use App\Http\Controllers\Api\GroupController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\TextController;
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
Route::get('button/all', [ButtonController::class,'all']);
Route::get('button/group/{group}', [ButtonController::class,'group']);
Route::resource('button', ButtonController::class)->only('index','show');

Route::get('chip/all', [ChipController::class,'all']);
Route::resource('chip', ChipController::class)->only('index','show');

Route::get('image/all', [ImageController::class,'all']);
Route::resource('image', ImageController::class)->only('index','show');

Route::get('text/all', [TextController::class,'all']);
Route::resource('text', TextController::class)->only('index','show');

Route::get('group/all', [GroupController::class,'all']);
Route::resource('group', GroupController::class)->only('index','show');



