<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlimmingController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\KontakController;

// ini tambahan untuk login
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
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
Route::get('login',[AuthController::class,'login']);

Route::resource('slimming', SlimmingController::class);
Route::resource('theme',ThemeController::class);
//link daftar user
Route::get('daftar', [DaftarController::class,'index']);
Route::get('daftar-slimming', [DaftarController::class,'slimming']);
Route::post('store',[DaftarController::class,'store']);
Route::get('daftar-spahamil', [DaftarController::class,'spahamil']);
Route::post('simpanspahamil',[DaftarController::class,'spahamil_simpan']);
Route::get('daftar-pascalahiran', [DaftarController::class,'pascalahiran']);
Route::post('simpanpascamelahirkan',[DaftarController::class,'pascalahiran_simpan']);

//link Kontak 
Route::get('kontak', [KontakController::class, 'index'])->name('kontak.index');





// slimming 
Route::get('admin/slimming',[AdminController::class,'slimming']);
Route::get('admin/slimming/edit/{id}',[AdminController::class,'edit_slimming']);
Route::post('admin/slimming/update/{id}',[AdminController::class,'update_slimming']);
Route::get('admin/slimming/hapus/{id}',[AdminController::class,'hapus_slimming']);

//spa hamil
Route::get('admin/spahamil',[AdminController::class,'spahamil']);

//theme
Route::get('admin/theme',[AdminController::class,'theme']);

// ini adalah cek untuk login
//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});

// untuk superadmin dan pegawai
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk Admin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', [SuperadminController::class, 'index']);
    // link admin 
Route::get('admin',[AdminController::class,'index']);
Route::get('admin/pascalahiran',[AdminController::class,'pascalahiran']);
Route::get('admin/pascalahiran/edit/{id}',[AdminController::class,'edit_pascalahiran']);
Route::post('admin/pascalahiran/update/{id}',[AdminController::class,'update_pascalahiran']);
Route::get('admin/pascalahiran/hapus/{id}',[AdminController::class,'hapus_pascalahiran']);
});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/pegawai', [PegawaiController::class, 'index']);

});