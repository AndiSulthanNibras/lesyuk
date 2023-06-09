<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GurubaruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\API\ReviewController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/guru-baru', [GurubaruController::class, 'index'])->name('guru-baru');
Route::get('/create-guru', [GurubaruController::class, 'create'])->name('create-guru');
Route::post('/simpan-guru', [GurubaruController::class, 'store'])->name('simpan-guru');
Route::get('/murids', [MuridController::class, 'index'])->name('murids');
Route::get('/tambah-murid', [MuridController::class, 'create'])->name('tambah-murid');
Route::post('/simpan-murid', [MuridController::class, 'store'])->name('simpan-murid');



Route::get('/', [DashboardController::class, 'index']);
Route::get('/home', function () {
    return view('home');
});
Route::get('/guru', function () {
    return view('list-guru');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/reviews', [ReviewController::class, 'home'])->name('reviews');