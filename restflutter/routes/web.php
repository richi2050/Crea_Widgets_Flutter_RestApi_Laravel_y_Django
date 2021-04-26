<?php

use App\Http\Controllers\ButtonController;
use App\Http\Controllers\ChipController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\TextController;
use App\Models\Image;
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

Route::group(['middleware'=> 'auth'], 
function () {

Route::resource('chip', ChipController::class);
Route::resource('button', ButtonController::class);
Route::resource('text', TextController::class);
Route::resource('image', ImageController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
