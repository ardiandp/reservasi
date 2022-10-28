<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlimmingController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\DaftarController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/',[DaftarController::class,'index']);

Route::resource('slimming', SlimmingController::class);
Route::resource('theme',ThemeController::class);
//link daftar user
Route::get('daftar', [DaftarController::class,'index']);
Route::get('daftar-slimming', [DaftarController::class,'slimming']);
Route::post('store',[DaftarController::class,'store']);
Route::get('daftar-spahamil', [DaftarController::class,'spahamil']);
Route::get('daftar-pascalahiran', [DaftarController::class,'pascalahiran']);
