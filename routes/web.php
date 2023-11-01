<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\BeritaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(PageController::class)->group(function() {
    Route::get('/', 'home')->name('home');
});
//BERITA
Route::controller(BeritaController::class)->group(function() {
        Route::get('baca/{id}/{title}/{tanggal}', 'baca')->name('baca');
});
