<?php

namespace App\Http\Controllers;

use App\Models\Antiair;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\HomepageSlider;

class PageController extends Controller
{
    public function beranda() {
        $sliders = HomepageSlider::latest()->take(3)->get();
        $categories = Category::latest()->take(3)->get();
        return view("content.beranda.beranda", compact('sliders', 'categories'));
    }
    public function kategori() {
        $categories = Category::all();
        return view('content.produk.kategori', compact('categories'));
    }
    public function antiair() {
        $items = Antiair::all();
        $alt = 'antiair';
        $title = 'Anti-Air';
        return view('content.produk.items', compact('items', 'alt', 'title'));
    }
    public function antiairDetail($alt) {
        $item = Antiair::where('alt', $alt)->firstOrFail();
        $alt = 'antiair';
        $title = 'Anti-Air';
        return view('content.produk.itemDetail', compact('item', 'alt', 'title'));
    }
}
