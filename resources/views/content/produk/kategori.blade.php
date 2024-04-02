@extends('master.layout')
@section('title', 'ITS Scale - Kategori Produk')
@section('content')
    <section class='mx-5'>
        <div>
            <h1 class='text-center pt-5 pb-3 text-3xl fw-bold subtitle'>KATEGORI PRODUK</h1>
            <div class='row pb-5'>
                @foreach($categories as $category)
                    <div class='col-md-4 col-6 py-2'>
                        <div class='card p-md-3 p-2 rounded'>
                            <a href="/produk/{{ $category->alt }}">
                                <img class='card-category-image rounded' src="{{ asset($category->image) }}" alt="">
                                <div class='card-text'>
                                    <h1 class='text-xl pt-2 category-name text-truncate'>{{ $category->name }}</h1>
                                    <h1 class='text-sm text-truncate'>{{ $category->description }}</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
