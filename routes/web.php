<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('layouts.main');
});

Route::resource('/dashboard', DashboardController::class);

Route::resource('/checkout', CheckoutController::class);

Route::controller(ProdukController::class)->group(function() {
    Route::resource('/produk', ProdukController::class);
    Route::post('/tambahproduk', [ProdukController::class, 'store'])->name('store');
    Route::get('/hapusproduk/{id}', [ProdukController::class, 'destroy'])->name('destroy');
});
Route::controller(KategoriController::class)->group(function() {
    Route::resource('/kategori', KategoriController::class);
    Route::post('/tambahkategori', [KategoriController::class, 'store'])->name('store');
    Route::get('/hapuskategori/{id}', [KategoriController::class, 'destroy'])->name('destroy');
});