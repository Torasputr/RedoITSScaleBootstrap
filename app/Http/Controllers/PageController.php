<?php

namespace App\Http\Controllers;

use App\Models\Atex;
use App\Models\Brand;
use App\Models\Labmed;
use App\Models\Retail;
use App\Models\Antiair;
use App\Models\Article;
use App\Models\Artikel;
use App\Models\Accspare;
use App\Models\Category;
use App\Models\Logindus;
use App\Models\Subretail;
use App\Models\Sublogindus;
use Illuminate\Http\Request;
use App\Models\HomepageSlider;

class PageController extends Controller
{
    public function beranda() {
        $sliders = HomepageSlider::latest()->take(3)->get();
        $categories = Category::latest()->take(3)->get();
        $latestArticle = Article::orderBy('date', 'desc')->first();
        $articles = Article::orderBy('date', 'desc')->whereNotIn('id', [$latestArticle->id])->get();
        return view("content.beranda.beranda", compact('sliders', 'categories', 'articles', 'latestArticle', 'articles'));
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
    public function atex() {
        $items = Atex::all();
        $alt = 'atex';
        $title = 'Atex';
        return view('content.produk.items', compact('items', 'alt', 'title'));
    }
    public function logindus() {
        $subcategories = Sublogindus::all();
        $alt = 'logistikindustri';
        $title = 'Logistik & Industri';
        return view('content.produk.subkategori', compact('subcategories', 'alt', 'title'));
    }
    public function antiairDetail($alt) {
        $item = Antiair::where('alt', $alt)->firstOrFail();
        $alt = 'antiair';
        $title = 'Anti-Air';
        return view('content.produk.itemDetail', compact('item', 'alt', 'title'));
    }
    public function atexDetail($alt) {
        $item = Atex::where('alt', $alt)->firstOrFail();
        $alt = 'atex';
        $title = 'Atex';
        return view('content.produk.itemDetail', compact('item', 'alt', 'title'));
    }
    public function logindusItem($s_alt) {
        $subcategory = Sublogindus::where('alt', $s_alt)->firstOrFail();
        $items = Logindus::where('sublogindus_id', $subcategory->id)->get();
        $alt = 'logistikindustri';
        $sub_alt = $s_alt;
        $title = 'Bench Scale';
        return view('content.produk.subkategoriItems', compact('items', 'alt', 'title', 'sub_alt'));
    }
    public function logindusItemDetails($s_alt, $i_alt) {
        $subcategory = Sublogindus::where('alt', $s_alt)->firstOrFail();
        $item = Logindus::where('alt', $i_alt)->firstOrFail();
        $alt = 'logistikindustri';
        $title = 'Bench Scale';
        return view('content.produk.itemDetail', compact('item', 'alt', 'title'));
    }
    public function labmed() {
        $title = 'Laboratorium & Medical';
        $alt = 'laboratoriummedical';
        $brands = Brand::whereIn('id', Labmed::distinct()->pluck('brand_id'))->get();
        return view('content.produk.brand', compact('title', 'alt', 'brands'));
    }
    public function labmedItems($b_alt) {
        $title = $b_alt;
        $alt = 'laboratoriummedical';
        $sub_alt = $b_alt;
        $brand = Brand::where('alt', $b_alt)->firstOrFail();
        $items = Labmed::where('brand_id', $brand->id)->get();
        return view('content.produk.subkategoriItems', compact('title', 'alt', 'sub_alt', 'brand', 'items'));
    }
    public function labmedItemDetails($s_alt, $i_alt) {
        $item = Labmed::where('alt', $i_alt)->firstOrFail();
        $alt = 'laboratoriummedical';
        $title = 'Bench Scale';
        return view('content.produk.itemDetail', compact('item', 'alt', 'title'));
    }
    public function retail() {
        $subcategories = Subretail::all();
        $alt = 'retail';
        $title = 'Retail';
        return view('content.produk.subkategori', compact('subcategories', 'alt', 'title'));
    }
    public function retailItem($s_alt) {
        $subcategory = Subretail::where('alt', $s_alt)->firstOrFail();
        $items = Retail::where('subretail_id', $subcategory->id)->get();
        $alt = 'retail';
        $sub_alt = $s_alt;
        $title = 'Bench Scale';
        return view('content.produk.subkategoriItems', compact('items', 'alt', 'title', 'sub_alt'));
    }
    public function retailItemDetails($s_alt, $i_alt) {
        $subcategory = Subretail::where('alt', $s_alt)->firstOrFail();
        $item = Retail::where('alt', $i_alt)->firstOrFail();
        $alt = 'retail';
        $title = 'Retail';
        return view('content.produk.itemDetail', compact('item', 'alt', 'title'));
    }
    public function accspare() {
        $title = 'Accessories & Sparepart';
        $alt = 'accessoriessparepart';
        $brands = Brand::whereIn('id', Accspare::distinct()->pluck('brand_id'))->get();
        return view('content.produk.brand', compact('title', 'alt', 'brands'));
    }
    public function accspareItems($b_alt) {
        $title = $b_alt;
        $alt = 'laboratoriummedical';
        $sub_alt = $b_alt;
        $brand = Brand::where('alt', $b_alt)->firstOrFail();
        $items = Accspare::where('brand_id', $brand->id)->get();
        return view('content.produk.subkategoriItems', compact('title', 'alt', 'sub_alt', 'brand', 'items'));
    }
    public function accspareItemDetails($s_alt, $i_alt) {
        $item = Accspare::where('alt', $i_alt)->firstOrFail();
        $alt = 'laboratoriummedical';
        $title = 'Bench Scale';
        return view('content.produk.itemDetail', compact('item', 'alt', 'title'));
    }
    public function artikel() {
        $articles = Article::all();
        return view('content.artikel.artikel', compact('articles'));
    }
}

