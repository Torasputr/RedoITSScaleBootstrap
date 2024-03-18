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
                    <h1 class='selengkapnya pt-3 text-xl fw-bold text-end'>SELENGKAPNYA >></h1>
                </a>
            </div>
        </div>
        {{-- Kategori End --}}
        {{-- Artikel Start --}}
        <div>
            <h1 class='text-center pt-3 pb-5 text-3xl fw-bold subtitle'>ARTIKEL</h1>
            <div class='grid-cols-2 artikel pb-5 align-items-center'>
                <a href="/artikel/{{ $latestArticle->id }}">
                    <div class='artikel-container rounded p-3'>
                        <img class='artikel-image-beeg rounded' src="{{ asset($latestArticle->thumbnail) }}" alt="">
                        <h1 class='text-xl text-justify pt-3 text-truncate'>{{ $latestArticle->title }}</h1>
                        <h1 class='text-md fw-light text-justify pt-3 text-truncate text-end'>{{ $latestArticle->date }}</h1>
                    </div>
                </a>
                <div class='grid-cols-2 artikel'>
                    @foreach($articles as $article)
                        <a href="">
                            <div class='artikel-container p-3 rounded'>
                                <img class='artikel-image-smol rounded' src="{{ asset($article->thumbnail) }}" alt="">
                                <h1 class='text-lg text-justify pt-3 text-truncate'>{{ $article->title }}</h1>
                                <h1 class='text-sm fw-light text-justify text-truncate text-end'>{{ $article->date }}</h1>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Artikel End --}}
    </section>
@endsection
