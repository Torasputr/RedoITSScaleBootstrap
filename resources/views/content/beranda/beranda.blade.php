@extends('master.layout')
@section('title', 'ITS Scale - Beranda')
@section('content')
    {{-- Popup Start --}}
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-content">
            <span class="close-button rounded-circle px-2 fw-semibold" onclick="closePopup()">X</span>
            <img class='img-fluid' style='' src="{{ asset('images/Beranda/PopupRamadhan.png') }}" alt="Popup Image" width="1000" height="300">
        </div>
    </div>
    {{-- Popup End --}}
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
            <h3 class='text-center subtitle fw-bold pt-5 pb-3'>KATEGORI PRODUK</h1>
            <div class='container'>
                <div class='row pt-4'>
                    @foreach ($categories as $category)
                        <div class='col-md-4 category-card-container'>
                            <div class='category-card rounded p-3'>
                                <img class='category-image' src="{{ asset($category->image) }}" alt="">
                                <div class='category-name'>
                                    <h3 class='pt-2 fs-3  fw-semibold text-truncate'>{{ $category->name }}</h3>
                                    <h6 class='pt-1 fs-6 fw-normal text-truncate'>{{ $category->description }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class='d-flex justify-content-end '>
                        <a href='/produk' class='selengkapnya pt-md-4 pt-2 fw-bold fs-6 '>SELENGKAPNYA >></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Kategori End --}}
        {{-- Artikel Start --}}
        <div>
            <h1 class='text-center pb-5 pt-5 pt-2 text-3xl fw-bold subtitle'>ARTIKEL</h1>
            <div class='grid-cols-2 artikel align-items-center'>
                <a href="/artikel/{{ $latestArticle->id }}">
                    <div class='artikel-container rounded p-3'>
                        <img class='artikel-image-beeg rounded' src="{{ asset($latestArticle->thumbnail) }}" alt="">
                        <h1 class='text-xl text-justify pt-3 text-truncate'>{{ $latestArticle->title }}</h1>
                        <h1 class='text-md fw-light text-justify pt-3 text-truncate text-end'>{{ $latestArticle->date }}</h1>
                    </div>
                </a>
                <div class='grid-cols-2 artikel'>
                    @foreach($articles as $article)
                        <a href="artikel/{{ $article->id }}">
                            <div class='artikel-container p-3 rounded'>
                                <img class='artikel-image-smol rounded' src="{{ asset($article->thumbnail) }}" alt="">
                                <h1 class='text-lg text-justify pt-3 text-truncate'>{{ $article->title }}</h1>
                                <h1 class='text-sm fw-light text-justify text-truncate text-end'>{{ $article->date }}</h1>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <a href="/artikel">
                <h1 class='selengkapnya pt-3 text-xl fw-bold text-end'>SELENGKAPNYA >></h1>
            </a>
        </div>
        {{-- Artikel End --}}
    </section>
    <section>
        {{-- Brands Start --}}
        <div>
            <h1 class='subtitle text-center fw-bold text-3xl mt-3'>BRAND KAMI</h1>
            <div class='brands-section swiper-container'>
                <div class="swiper-wrapper">
                    @foreach($brands as $brand)
                    <div class="swiper-slide">
                        <img src="{{ asset($brand->image) }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Brands End --}}
        {{-- Client Start --}}
        <div>
            <h1 class='text-center subtitle text-3xl fw-bold'>CLIENT KAMI</h1>
            <img class='pt-3 client' src="{{ asset('images/Beranda/Klien.png') }}" alt="">
        </div>
        {{-- Client End --}}
        {{-- Youtube Start --}}
        <div class='d-flex youtube-beranda align-items-center justify-content-center p-5 gap-5'>
            <div>
                <h1 class='subtitle fw-bold'>Temukan Kami di YouTube</h1>
            </div>
            <div>
                <iframe class='rounded' width="700" height="394" src="https://www.youtube.com/embed/a8wcWSvza1E?si=6apIrOFfY1a7_K46" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        {{-- Youtube End --}}
    </section>
    @endsection
