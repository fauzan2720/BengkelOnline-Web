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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages/login');
});

Route::get('/register', function () {
    return view('pages/register');
});

Route::get('/dashboard', function () {
    return view('pages/dashboard', [
        "title" => "Dashboard",
        "nama_halaman" => "Dashboard"
    ]);
});

Route::get('/data_user', function () {
    return view('pages/data_user', [
        "title" => "Data User",
        "nama_halaman" => "Data User"
    ]);
});

Route::get('/data_karyawan', function () {
    return view('pages/data_karyawan', [
        "title" => "Data Karyawan",
        "nama_halaman" => "Data Karyawan"
    ]);
});

Route::get('/data_produk', function () {
    return view('pages/data_produk', [
        "title" => "Data Produk",
        "nama_halaman" => "Data Produk"
    ]);
});

Route::get('/delivery', function () {
    return view('pages/delivery', [
        "title" => "Delivery Service Online",
        "nama_halaman" => "Delivery Service Online"
    ]);
});

Route::get('/transaksi', function () {
    return view('pages/transaksi', [
        "title" => "Transaksi Service",
        "nama_halaman" => "Transaksi Service"
    ]);
});

Route::get('/data_service', function () {
    return view('pages/data_service', [
        "title" => "Data Service",
        "nama_halaman" => "Data Service"
    ]);
});

Route::get('/profil', function () {
    return view('pages/profil', [
        "title" => "Profil",
        "nama_halaman" => "Profil"
    ]);
});
