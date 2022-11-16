<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HalamanController;


Route::get('/', [AuthController::class, 'index'])->name('welcome');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('loginPost');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HalamanController::class, 'dashboard'])->name('dashboard');
    Route::get('/data_user', [HalamanController::class, 'datauser'])->name('datauser');
    Route::post('/data_user', [HalamanController::class, 'createdatauser'])->name('createdatauser');
    Route::get('/data_karyawan', [HalamanController::class, 'karyawandata'])->name('datakaryawan');
    Route::get('/data_produk', [HalamanController::class, 'dataproduk'])->name('dataproduk');
    Route::get('/delivery', [HalamanController::class, 'delivery'])->name('delivery');
    Route::get('/orders', [HalamanController::class, 'orders'])->name('orders');
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
    Route::post('/invoice/{id}', [HalamanController::class, 'invoice']);
    Route::post('/hapusp/{id}', [HalamanController::class, 'hapusp']);
    Route::post('/tambahproduk/{id}', [HalamanController::class, 'tambahproduk']);
    Route::post('/terima/{id}', [HalamanController::class, 'terima']);
    Route::post('/dselesai/{id}', [HalamanController::class, 'selesai']);
    Route::post('/bayardulu/{id}', [HalamanController::class, 'bayardulu']);
    Route::post('/tolak/{id}', [HalamanController::class, 'tolak']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/terimaorder/{id}', [HalamanController::class, 'terimaorder']);
    Route::post('/tolakorder/{id}', [HalamanController::class, 'tolakorder']);
    Route::post('/kirimorder/{id}', [HalamanController::class, 'kirimorder']);
});

    

    





