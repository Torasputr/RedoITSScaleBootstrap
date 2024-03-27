@extends('master.layout')
@section('title', 'ITS Scale - Kategori Produk')
@section('content')
    <section class='mx-5'>
        <div>
            <h1 class='text-center pt-5 pb-3 text-3xl fw-bold subtitle'>KATEGORI PRODUK</h1>
            <div class='row'>
                @foreach($categories as $category)
                    <div class='col-md-4 col-6 py-2'>
                        <div class='category-card p-md-3 p-2 rounded'>
                            <a href="/produk/{{ $category->alt }}">
                                <img class='category-image rounded' src="{{ asset($category->image) }}" alt="">
                                <h1 class='text-xl pt-2 category-name text-truncate'>{{ $category->name }}</h1>
                                <h1 class='subtitle-category text-dark text-sm text-truncate'>{{ $category->description }}</h1>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
