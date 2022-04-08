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

Route::resource('/admin', 'AdminController');

Route::resource('/asrama', 'AsramaController');

Route::resource('/kamar', 'KamarController');

Route::resource('/mahasiswa', 'MahasiswaController');

Route::resource('/absensi', 'AbsensiController');




