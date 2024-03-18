<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'beranda']);
Route::get('/produk', [PageController::class, 'kategori']);
Route::get('/produk/antiair', [PageController::class, 'antiair']);
Route::get('/produk/antiair/{alt}', [PageController::class, 'antiairDetail']);
