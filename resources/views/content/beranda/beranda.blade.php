@extends('master.layout')
@section('title', 'ITS Scale - Beranda')
@section('content')
    {{-- Popup Start --}}
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-content">
            <span class="close-button rounded-circle px-2 fw-semibold" onclick="closePopup()">X</span>
            <img class='img-fluid' style='width: 200%' src="{{ asset('images/Beranda/popup.webp') }}" alt="Popup Image" width="1000" height="300">
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
        <div class='container-fluid'>
            <h3 class='text-center subtitle fw-bold pt-5 pb-3'>KATEGORI PRODUK</h1>
            <div class='container'>
                <div class='row pt-4'>
                    @foreach ($categories as $category)
                        <div class='col-md-4 category-card-container'>
                            <a href="/produk/{{ $category->alt }}">
                                <div class='card rounded p-3'>
                                    <img class='card-category-image rounded' src="{{ asset($category->image) }}" alt="">
                                    <div class='card-text'>
                                        <h3 class='pt-2 fs-3  fw-semibold text-truncate'>{{ $category->name }}</h3>
                                        <h6 class='pt-1 fs-6 fw-normal text-truncate'>{{ $category->description }}</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class='d-flex justify-content-end '>
                        <a href='/produk' class='selengkapnya pt-md-4 pt-2 fw-bold fs-6 '>SELENGKAPNYA >></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Kategori End --}}
        <div class='container-fluid'>
            {{-- Artikel Desktop Start --}}
            <div class='desktop'>
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
                <div class='d-flex justify-content-end '>
                    <a href='/produk' class='selengkapnya pt-md-4 pt-2 fw-bold fs-6 '>SELENGKAPNYA >></a>
                </div>
            </div>
            {{-- Artikel Dekstop End --}}
            {{-- Artikel Mobile Start --}}
            <div class='mobile'>
                <h1 class='text-center pb-5 pt-5 pt-2 text-3xl fw-bold subtitle'>ARTIKEL</h1>
                <div class='d-flex flex-column'>
                    <div>
                        <a href="/artikel/{{ $latestArticle->id }}">
                            <div class='d-flex align-items-center gap-3 w-full artikel-mobile p-2'>
                                <div>
                                    <img src="{{ asset($latestArticle->thumbnail) }}" alt="">
                                </div>
                                <div class="truncate-container">
                                    <h6 class='truncate'>{{ $latestArticle->title }}</h6>
                                    <h6 class='text-end fw-light'>{{ $latestArticle->date }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @foreach($articles as $article)
                    <div class='pt-2'>
                        <a href="/artikel/{{ $article->id }}">
                            <div class='d-flex align-items-center gap-3 w-full artikel-mobile p-2'>
                                <div>
                                    <img src="{{ asset($article->thumbnail) }}" alt="">
                                </div>
                                <div class="truncate-container">
                                    <h6 class='text-truncate'>{{ $article->title }}</h6>
                                    <h6 class='text-end fw-light'>{{ $article->date }}</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <div class='d-flex justify-content-end '>
                        <a href='/produk' class='selengkapnya pt-md-4 pt-2 fw-bold fs-6 '>SELENGKAPNYA >></a>
                    </div>
                </div>
            </div>
            {{-- Artikel Mobile End --}}
        </div>
    </section>
    <section>
        <div class='container-fluid'>
            {{-- Brands Desktop Start --}}
            <div class='desktop'>
                <h1 class='subtitle text-center fw-bold text-3xl mt-3'>BRAND KAMI</h1>
                <div class='brands-section swiper-container'>
                    <div class="swiper-wrapper">
                        @foreach($brands as $brand)
                        <div class="swiper-slide">
                            <img class='brands-beranda' src="{{ asset($brand->image) }}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Brands Desktop End --}}
            {{-- Brands Mobile Start --}}
            <div class='mobile'>
                <h1 class='subtitle text-center fw-bold text-3xl mt-5'>BRAND KAMI</h1>
                <div class='brands-section-mobile swiper-container'>
                    <div class="swiper-wrapper">
                        @foreach($brands as $brand)
                        <div class="swiper-slide">
                            <img class='brand-mobile' src="{{ asset($brand->image) }}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Brands Mobile End --}}
        </div>
        {{-- Client Start --}}
        <div class='mb-5'>
            <h1 class='text-center subtitle text-3xl fw-bold mb-4'>CLIENT KAMI</h1>
            <img class='img-fluid client' src="{{ asset('images/Beranda/Klien.webp') }}" alt="">
        </div>
        {{-- Client End --}}
        {{-- Youtube Desktop Start --}}
        <div class='youtube-beranda p-5'>
            <div class='row align-items-center'>
                <div class='col-md-6'>
                    <h1 class='text-center subtitle fw-bold'>Tonton Video Terbaru Kami Disini</h1>
                </div>
                <div class='col-md-6 pt-5 pt-md-0 d-flex justify-content-center embed-responsive embed-responsive-16by9'>
                    <iframe class='rounded embed-responsive-item' src="https://www.youtube.com/embed/9yNyKBgZL_8?si=HWm59wqMxyfjA1Yt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        {{-- Youtube Desktop End --}}
    </section>
@endsection
