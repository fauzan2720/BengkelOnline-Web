<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\DataUserController;

Route::get('/', [AuthController::class, 'index'])->name('welcome');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('loginPost');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerStore'])->name('registerPost');

Route::post('/logout', [AuthController::class, 'logout'])->name('logoutPost');

Route::get('/dashboard', [HalamanController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/data_user', [HalamanController::class, 'datauser'])->name('datauser');
Route::get('/data_karyawan', [HalamanController::class, 'karyawandata'])->name('datakaryawan');
Route::get('/data_produk', [HalamanController::class, 'dataproduk'])->name('dataproduk');
Route::get('/delivery', [HalamanController::class, 'delivery'])->name('delivery');
Route::get('/transaksi', [HalamanController::class, 'transaksi'])->name('transaksi');
Route::post('/transaksi', [HalamanController::class, 'tambah']);

Route::get('/data_service', [HalamanController::class, 'dataservice'])->name('dataservice');
Route::post('/checktout/{id}', [HalamanController::class, 'checktout'])->name('checktout');

Route::get('/profil', [HalamanController::class, 'profil'])->name('profil');
Route::post('/editprofil/{id}', [HalamanController::class, 'editprofil'])->name('editprofil');

Route::post('/edit/{id}', [HalamanController::class, 'edit']);
Route::post('/hapus/{id}', [HalamanController::class, 'hapus']);

Route::post('/editk/{id}', [HalamanController::class, 'editk']);
Route::post('/hapusk/{id}', [HalamanController::class, 'hapusk']);

Route::post('/editp/{id}', [HalamanController::class, 'editp']);
Route::post('/hapusp/{id}', [HalamanController::class, 'hapusp']);
