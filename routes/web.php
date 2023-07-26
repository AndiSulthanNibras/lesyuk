<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

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