@extends('master.layout')
@section('title', 'ITS Scale - Kategori Produk')
@section('content')
    <section class='mx-5'>
        <div>
            <h1 class='text-center py-5 text-3xl fw-bold subtitle'>KATEGORI PRODUK</h1>
            <div class='grid-cols-3 pb-5'>
                @foreach($categories as $category)
                    <a href="/produk/{{ $category->alt }}">
                        <div class='category-card p-3 rounded'>
                            <img class='category-image rounded' src="{{ asset($category->image) }}" alt="">
                            <h1 class='text-2xl pt-2 category-name fw-'>{{ $category->name }}</h1>
                            <h1 class='category-name text-sm'>{{ $category->description }}</h1>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
