<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\GaleriController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Home
Route::controller(PageController::class)->group(function() {
    Route::get('/', 'home')->name('home');
});
//BERITA
Route::controller(BeritaController::class)->group(function() {
        Route::get('baca/{id}/{title}/{tanggal}', 'baca')->name('baca');
        Route::get('berita', 'index')->name('index');
});
//Galeri
Route::controller(GaleriController::class)->group(function() {
    Route::get('galeri-foto', 'galeri_foto')->name('galeri_foto');
    Route::get('galeri-video', 'galeri_video')->name('galeri_video');
});
