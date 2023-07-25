<?php


use App\Http\Controllers\bayarController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/bayar', function () {
    return view('bayar');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/detailguru', function () {
    return view('detailguru');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/listteacher', function () {
    return view('listteacher');
});

Route::get('/home', function () {
    return view('home');
});






Route::get('/bayar',[bayarController::class, 'bayar']);


