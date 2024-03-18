@extends('master.layout')
@section('title', 'ITS Scale - Beranda')
@section('content')
    {{-- Slider Start --}}
    <section class=''>
        <div class="swiper-container" id='homepage-slider'>
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                    <div class="swiper-slide">
                        <a href="">
                            <img class='slider-image' src="{{ asset($slider->image) }}" alt="{{ $slider->alt }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Slider End --}}
    <section class='mx-5'>
        {{-- Kategori Start --}}
        <div>
            <h1 class='text-center pt-5 text-3xl fw-bold subtitle'>KATEGORI PRODUK</h1>
            <div>
                <div class='grid-cols-3 pt-5'>
                    @foreach ($categories as $category)
                        <a href="/produk/{{ $category->alt }}">
                            <div class='category-card p-3 rounded'>
                                <img class='category-image rounded' src="{{ asset($category->image) }}" alt="">
                                <h1 class='text-2xl pt-2 category-name fw-'>{{ $category->name }}</h1>
                                <h1 class='category-name text-sm'>{{ $category->description }}</h1>
                            </div>
                        </a>
                    @endforeach
                </div>
                <a href="/produk">
                    <h1 class='selengkapnya pt-3 text-xl text-end'>SELENGKAPNYA >></h1>
                </a>
            </div>
        </div>
        {{-- Kategori End --}}
    </section>
@endsection
