<?php

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

Route::resource('/user', 'UserController')->middleware('auth');

Route::resource('/asrama', 'AsramaController')->middleware('admin');

Route::resource('/kamar', 'KamarController')->middleware('auth');

Route::resource('/mahasiswa', 'MahasiswaController')->middleware('auth');

Route::resource('/absensi', 'AbsensiController')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






