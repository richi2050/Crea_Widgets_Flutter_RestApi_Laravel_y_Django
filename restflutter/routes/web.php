<?php

use App\Http\Controllers\ButtonController;
use App\Http\Controllers\ChipController;
use App\Http\Controllers\TextController;
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

Route::resource('chip', ChipController::class);
Route::resource('button', ButtonController::class);
Route::resource('text', TextController::class);
