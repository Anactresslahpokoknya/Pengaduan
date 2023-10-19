<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatController;
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


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('Administrator.index');
    })->middleware(ValidasiAdmin::class);
    Route::get('login', [AdminController::class, 'login']);
    Route::post('login', [AdminController::class, 'ceklogin']);
    Route::get('logout', [AdminController::class, 'logout']);
});

// Route masyarakat
Route::prefix('masyarakat')->group(function () {
    Route::get('/', function () {
        return view('Masyarakat.Index');
    });
    Route::get('login', [MasyarakatController::class, 'login']);
    Route::post('login', [MasyarakatController::class, 'ceklogin']);
    Route::get('logout', [MasyarakatController::class, 'logout']);
    Route::get('registrasi',[MasyarakatController::class,'registrasi']);
Route::post('simpan',[MasyarakatController::class,'simpan']);
});