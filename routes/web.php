<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'beranda']);
Route::get('/produk', [PageController::class, 'kategori']);
Route::get('/produk/antiair', [PageController::class, 'antiair']);
Route::get('/produk/atex', [PageController::class, 'atex']);
Route::get('/produk/antiair/{alt}', [PageController::class, 'antiairDetail']);
Route::get('/produk/atex/{alt}', [PageController::class, 'atexDetail']);
Route::get('/produk/logistikindustri', [PageController::class, 'logindus']);
Route::get('/produk/logistikindustri/{s_alt}', [PageController::class, 'logindusItem']);
Route::get('/produk/logistikindustri/{s_alt}/{i_alt}', [PageController::class, 'logindusItemDetails']);
Route::get('/produk/laboratoriummedical/', [PageController::class, 'labmed']);
Route::get('/produk/laboratoriummedical/{b_alt}', [PageController::class, 'labmedItems']);
Route::get('/produk/laboratoriummedical/{b_alt}/{i_alt}', [PageController::class, 'labmedItemDetails']);
Route::get('/produk/retail', [PageController::class, 'retail']);
Route::get('/produk/retail/{s_alt}', [PageController::class, 'retailItem']);
Route::get('/produk/retail/{s_alt}/{i_alt}', [PageController::class, 'retailItemDetails']);
Route::get('/produk/accessoriessparepart', [PageController::class, 'accspare']);
Route::get('/produk/accessoriessparepart/{b_alt}', [PageController::class, 'accspareItems']);
Route::get('/produk/accessoriessparepart/{b_alt}/{i_alt}', [PageController::class, 'accspareItemDetails']);
Route::get('/artikel', [PageController::class, 'artikel']);
Route::get('/artikel/{id}', [PageController::class, 'artikelDetail']);
Route::get('/karir', [PageController::class, 'karir']);
Route::get('/tentang-kami', [PageController::class, 'tentang']);
Route::get('/kontak', [PageController::class, 'kontak']);
