<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


// Beranda Page
Route::get('/', [PageController::class, 'beranda']);
// Produk Page
Route::get('/produk', [PageController::class, 'kategori']);
Route::get('/produk/{alt}', [PageController::class, 'subcategory']);
Route::get('/produk/{c_alt}/{s_alt}/{b_alt}/{i_alt}', [PageController::class, 'item']);
// Artikel Page
Route::get('/artikel', [PageController::class, 'artikel']);
Route::get('/artikel/{id}', [PageController::class, 'artikelDetail']);
// Karir Page
Route::get('/karir', [PageController::class, 'karir']);
Route::get('/karir/popup', function() {
    return view('content.karir.popup');
});
Route::get('/karir/popup/form', [PageController::class, 'karirform']);
Route::post('/karir/popup/form', [PageController::class, 'karirformsubmit']);
// About Page
Route::get('/tentang-kami', [PageController::class, 'tentang']);
// Kontak Page
Route::get('/kontak', [PageController::class, 'kontak']);
