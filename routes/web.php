<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Middleware\cek;
use App\Http\Middleware\ValidasiAdmin;
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





// Route masyarakat
Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('Masyarakat.Index');
    });
    Route::get('login', [MasyarakatController::class, 'login']);
    Route::post('login', [MasyarakatController::class, 'ceklogin']);
    Route::get('logout', [MasyarakatController::class, 'logout']);
    Route::get('registrasi', [MasyarakatController::class, 'registrasi']);
    Route::post('simpan', [MasyarakatController::class, 'simpan']);
    Route::get('pengaduan', [MasyarakatController::class, 'pengaduan']);
    Route::post('pengaduan', [MasyarakatController::class, 'Lapor']);

});

//route admin
Route::get('admin', [AdminController::class, 'admin'])->middleware([ValidasiAdmin::class, cek::class]);
Route::get('login1', [AdminController::class, 'login']);
Route::post('login1', [AdminController::class, 'ceklogin']);
Route::post('simpan1', [AdminController::class, 'simpan']);
Route::get('registrasi1', [AdminController::class, 'registrasi1']);
Route::post('simpan1', [AdminController::class, 'simpan1']);
Route::get('validasi', [AdminController::class, 'validasi'])->middleware(ValidasiAdmin::class);
Route::get('status/{id}', [AdminController::class, 'cekValidasi']);
Route::get('admin/logout', [AdminController::class, 'logout']);