<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


// Beranda Page
Route::get('/', [PageController::class, 'beranda']);
// Produk Page
Route::get('/produk', [PageController::class, 'kategori']);
Route::get('/produk/{alt}', [PageController::class, 'subcategory']);
Route::get('/produk/{c_alt}/{s_alt}', [PageController::class, 'subcategorySelengkapnya']);
Route::get('/produk/{c_alt}/{s_alt}/{b_alt}/{i_alt}', [PageController::class, 'item']);
// Artikel Page
Route::get('/artikel', [PageController::class, 'artikel']);
Route::get('/artikel/{id}', [PageController::class, 'artikelDetail']);
// Karir Page
Route::get('/karir', [PageController::class, 'karir']);
Route::get('/karir/{alt}', [PageController::class, 'karirPopup']);
Route::get('karir/{alt}/register', [PageController::class, 'register']);
Route::post('karir/{alt}/register/submit', [PageController::class, 'submit']);
// About Page
Route::get('/tentang-kami', [PageController::class, 'tentang']);
// Kontak Page
Route::get('/kontak', [PageController::class, 'kontak']);
// GSC Page
Route::get('/gsc', [PageController::class, 'gscIndex']);
Route::post('/gsc/service', [PageController::class, 'gscSubmit']);
// Footer
Route::post('/newuser', [PageController::class, 'newuser']);
