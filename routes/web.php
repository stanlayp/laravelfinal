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

Route::resource('/user', 'UserController')->middleware('admin');

Route::resource('/asrama', 'AsramaController')->middleware('admin');

Route::resource('/kamar', 'KamarController')->middleware('admin');

Route::resource('/mahasiswa', 'MahasiswaController')->middleware('admin');

Route::resource('/absensi', 'AbsensiController')->middleware('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






