@extends('master.layout')
@section('title', 'ITS Scale - ' . $title)
@section('content')
    <section class='mx-5'>
        <h1 class='text-center py-5 text-3xl fw-bold subtitle'>{{ $title }}</h1>
        <div class="row justify-content-center pb-5">
            @foreach($subcategories as $subcategory)
            <div class="col-md-3 pb-3">
                <a href="/produk/{{ $alt }}/{{ $subcategory->alt }}">
                    <div class="category-card p-3 rounded">
                        <img class="category-image rounded" src="{{ asset($subcategory->image) }}" alt="">
                        <h1 class="text-2xl pt-2 category-name">{{ $subcategory->name }}</h1>
                        <h1 class="category-name text-sm">{{ $subcategory->description }}</h1>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
@endsection
