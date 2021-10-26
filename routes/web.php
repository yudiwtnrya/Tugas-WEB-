<?php

use App\Http\Controllers\BalitaController;
use App\Http\Controllers\OrangTuaController;
use App\Http\Controllers\PenyuluhanController;
use App\Http\Controllers\PosyanduController;
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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::get('/orangtua',[OrangTuaController::class,'index'])->name('orangtua');

Route::get('/tambah_orangtua',[OrangTuaController::class,'create'])->name('tambah_orangtua');

Route::post('/tambah_orangtua',[OrangTuaController::class,'store'])->name('tambah_orangtua');

// balita-
Route::get('/balita', [BalitaController::class,'index'])->name('balita');

Route::get('/tambah_balita', [BalitaController::class,'create'])->name('tambah_balita');

Route::post('/tambah_balita', [BalitaController::class,'store'])->name('tambah_balita');
// balita-

Route::get('/penyuluhan',[PenyuluhanController::class,'index'])->name('penyuluhan');

// Route::get('/penyuluhan',[PenyuluhanController::class,'create'])->name('penyuluhan');

// Route::get('/penyuluhan',[PenyuluhanController::class,'store'])->name('penyuluhan');


Route::get('/posyandu',[PosyanduController::class,'index'])->name('posyandu');

Route::get('/tambah_posyandu',[PosyanduController::class,'create'])->name('tambah_posyandu');

Route::get('/tambah_posyandu',[PosyanduController::class,'store'])->name('tambah_posyandu');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__ . '/auth.php';
