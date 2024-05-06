<?php

namespace App\Http\Controllers;

use App\Models\Atex;
use App\Models\Item;
use App\Models\Brand;
use App\Models\Career;
use App\Models\Labmed;
use App\Models\Retail;
use App\Models\Antiair;
use App\Models\Article;
use App\Models\Artikel;
use App\Models\Newuser;
use App\Models\Accspare;
use App\Models\Category;
use App\Models\Logindus;
use App\Models\Newkarir;
use App\Models\Position;
use App\Models\Subretail;
use App\Models\Subcategory;
use App\Models\Sublogindus;
use Illuminate\Http\Request;
use App\Models\HomepageSlider;
use App\Models\JobApplication;

class PageController extends Controller
{
    // Beranda Page
    public function beranda() {
        $sliders = HomepageSlider::orderBy('id', 'desc')->take(3)->get();
        $categories = Category::latest()->take(3)->get();
        $latestArticle = Article::orderBy('date', 'desc')->first();
        $articles = Article::orderBy('date', 'desc')->whereNotIn('id', [$latestArticle->id])->take(4)->get();
        $brands = Brand::all();
        return view("content.beranda.beranda", compact('sliders', 'categories', 'articles', 'latestArticle', 'articles', 'brands'));
    }

    // Produk Page
    public function kategori() {
        $categories = Category::all();
        return view('content.produk.kategori', compact('categories'));
    }
    public function subcategory($alt) {
        $category = Category::where('alt', $alt)->firstOrFail();
        $subcategories = $category->subcategory()->with(['item' => function ($query) use ($category) {
            $query->where('category_id', '=', $category->id);
        }])->distinct()->get();
        return view('content.produk.subcategory', compact('category', 'subcategories'));
    }

    public function subcategorySelengkapnya($c_alt, $s_alt) {
        $category = Category::where('alt', $c_alt)->firstOrFail();
        $subcategory = Subcategory::where('alt', $s_alt)->firstOrFail();
        $items = $subcategory->item;
        return view('content.produk.selengkapnya', compact('category', 'subcategory', 'items'));
    }

    public function item($c_alt, $s_alt, $b_alt, $i_alt) {
        $category = Category::where('alt', $c_alt)->firstOrFail();
        $subcategory = Subcategory::where('alt', $s_alt)->firstOrFail();
        $item = $subcategory->item()->where('alt', $i_alt)->firstOrFail();
        return view('content.produk.item', compact('category', 'subcategory', 'item'));
    }

    // Artikel Page
    public function artikel() {
        $articles = Article::orderBy('date', 'desc')->simplePaginate(9);
        return view('content.artikel.artikel', compact('articles'));
    }
    public function artikelDetail($id) {
        $article = Article::findOrFail($id);
        return view('content.artikel.artikelDetail', compact('article'));
    }

    // Karir Page
    public function karir() {
        $positions = Position::orderby('name', 'asc')->get();
        return view('content.karir.karir', compact('positions'));
    }
    public function karirPopup($alt) {
        $position = Position::where('alt', $alt)->firstOrFail();
        return view('content.karir.popup', compact('position'));
    }
    public function register($alt) {
        $position = Position::where('alt', $alt)->firstOrFail();
        return view('content.karir.form', compact('position'));
    }
    public function submit($alt, Request $request) {
        $position = Position::where('alt', $alt)->firstOrFail();
        $request->validate([
            'name' => 'required',
            'cv' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'currentcompany' => 'nullable',
            'linkedin' => 'nullable',
            'portfolio' => 'nullable',
        ]);

        Newkarir::create([
            'position_id' => $position->id,
            'cv' => $request->cv,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'currentcompany' => $request->currentcompany,
            'linkedin' => $request->linkedin,
            'portfolio' => $request->portfolio,
        ]);
        return redirect('/karir')->with('status', 'Sukses');
    }

    // Tentang Page
    public function tentang() {
        return view('content.tentang.tentang');
    }
    // Kontak Page
    public function kontak() {
        return view('content.kontak.kontak');
    }
    public function newuser(Request $request) {
        $request->validate([
            'email' => 'required',
        ]);
        Newuser::create([
            'email' => $request->email,
        ]);
        return redirect('/')->with('status', 'Thankyou Very Much');
    }

    // GSC Page
    public function gscIndex() {
        $items = Item::where('brand_id', 1)->get();
        return view('content.gsc.index', compact('items'));
    }
}
