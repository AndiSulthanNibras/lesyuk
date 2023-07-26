<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GurubaruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\API\ReviewController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Controllers\ProfileController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register/all');
});

Route::get('/login', function () {
    return view('login/all');
});

Route::get('authenticated', [AuthenticationController::class, 'authenticated']);
// Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('login', [AuthenticationController::class, 'login'])->name('login'  );
Route::post('register', [AuthenticationController::class, 'register'])->name('register');

Route::post('register', [AuthenticationController::class, 'register'])->name('register');
Route::get('authenticated', [AuthenticationController::class, 'authenticated']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile/{id}', 'ProfileController@create')->name('profile.create');
    Route::put('/profile/{id}', 'ProfileController@update')->name('profile.update');
    Route::post('/profile/{id}', 'ProfileController@store')->name('profile.store');
    Route::delete('/profile/{id}', 'ProfileController@delete')->name('profile.delete');
});
