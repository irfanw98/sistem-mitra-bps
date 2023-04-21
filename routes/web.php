<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return redirect('login');
});

// Registrasi 
Route::get('/registrasi-admin', [\App\Http\Controllers\AdminRegistrasiController::class, 'registrasi']);
Route::post('/registrasi-admin', [\App\Http\Controllers\AdminRegistrasiController::class, 'StoreRegistrasi']);
Route::get('/registrasi-mitra', [\App\Http\Controllers\MitraRegistrasiController::class, 'registrasi']);
Route::post('/registrasi-mitra', [\App\Http\Controllers\MitraRegistrasiController::class, 'StoreRegistrasi']);


//Login
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate']);

//Logout
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout']);


//Admin
Route::group(['middleware' => ['auth', 'hakakses:admin']], function() {
    Route::get('/beranda-admin', [\App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/data-pendaftar', [\App\Http\Controllers\AdminController::class, 'datapendaftar']);
    Route::get('/data-pendaftar/{id}', [\App\Http\Controllers\AdminController::class, 'detailpendaftar']);
    Route::put('/data-pendaftar/{id}', [\App\Http\Controllers\AdminController::class, 'terimapendaftar']);

    Route::get('/data-penilaian-cluster', [App\Http\Controllers\ClusterController::class, 'index']);
    Route::get('/data-penilaian-cluster/edit/{id}', [App\Http\Controllers\ClusterController::class, 'penilaiancluster']);
    Route::put('/data-penilaian-cluster/{id}', [App\Http\Controllers\ClusterController::class, 'nilaicluster']);

    Route::get('/penilaian-rekruitmen', [\App\Http\Controllers\AdminController::class, 'datapenilaian']);
    Route::get('/tambah-penilaian', [\App\Http\Controllers\AdminController::class, 'penilaiancreate']);
    Route::post('/penilaian-rekruitmen', [\App\Http\Controllers\AdminController::class, 'penilaian']);
    Route::get('/penilaian-rekruitmen/edit/{id}', [\App\Http\Controllers\AdminController::class, 'editpenilaian']);
    Route::put('/penilaian-rekruitmen/{id}', [\App\Http\Controllers\AdminController::class, 'updatepenilaian']);
    Route::delete('/penilaian-rekruitmen/{id}', [\App\Http\Controllers\AdminController::class, 'hapuspenilaian']);
});

//Mitra
Route::group(['middleware' => ['auth', 'hakakses:mitra']], function() {
    Route::get('/beranda-mitra', [\App\Http\Controllers\MitraController::class, 'index']);
    Route::get('/riwayat-daftar', [\App\Http\Controllers\SurveiController::class, 'index']);
    Route::get('/riwayat-daftar/{id}', [\App\Http\Controllers\SurveiController::class, 'show']);
    Route::get('/daftar-survei', [\App\Http\Controllers\SurveiController::class, 'create']);
    Route::post('/daftar-survei', [\App\Http\Controllers\SurveiController::class, 'store']);
});