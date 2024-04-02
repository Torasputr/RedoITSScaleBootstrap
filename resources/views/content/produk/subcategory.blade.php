@extends('master.layout')
@section('title', 'ITS Scale - ' . $category->name)
@section('content')
    <section class='mx-5'>
        <div class='container-fluid'>
            <h1 class='subtitle fw-bold text-3xl text-center py-5'>{{ $category->name }}</h1>
            {{-- @php
                $totalItems = 0;
                foreach ($subcategories as $subcategory) {
                    $totalItems += $subcategory->item->count();
                }
            @endphp --}}
            {{-- @if($totalItems <= 9) --}}
                <div class='container-fluid'>
                    <div class='row gap-4 justify-content-center pb-5'>
                        @foreach ($subcategories as $subcategory)
                            @foreach ($subcategory->item as $item)
                                <div class='col-md-3'>
                                    <a href="/produk/{{ $category->alt }}/{{ $subcategory->alt }}/{{ $item->brand->alt }}/{{ $item->alt }}">
                                        <div class='card'>
                                            <div class='p-3'>
                                                <img class='card-image p-2 rounded' src="{{ asset($item->image) }}" alt="">
                                                <div class='card-text pt-3'>
                                                    <h1 class='text-2xl text-truncate'>{{ $item->brand->name }} {{ $item->name }}</h1>
                                                    <div class='d-flex align-items-center justify-content-between'>
                                                        <h1 class='text-md text-truncate fw-light'>{{ $category->name }} | {{ $subcategory->name }}</h1>
                                                        <img class='item-card-brand' src="{{ asset($item->brand->image) }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            {{-- @else --}}
                @foreach($subcategories as $subcategory)
                    <div class='container-fluid'>
                        <h1 class='text-2xl subtitle border-bottom pb-3'>{{ $subcategory->name }}</h1>
                        <div class="swiper-container item-swiper py-3">
                            <div class="swiper-wrapper">
                                @foreach($subcategory->item as $item)
                                    <div class="swiper-slide">
                                        <div class='container-fluid'>
                                            <a href="/produk/{{ $category->alt }}/{{ $subcategory->alt }}/{{ $item->brand->alt }}/{{ $item->alt }}">
                                                <div class='card'>
                                                    <div class='p-3'>
                                                        <img class='card-image p-2 rounded' src="{{ asset($item->image) }}" alt="">
                                                        <div class='card-text pt-3'>
                                                            <h1 class='text-2xl text-truncate'>{{ $item->name }}</h1>
                                                            <h1 class='text-md text-truncate fw-light'>{{ $category->name }} | {{ $subcategory->name }}</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <a class='selengkapnya d-flex justify-content-end fw-bold pb-3' href="/produk/{{ $category->alt }}/{{ $subcategory->alt }}">SELENGKAPNYA >></a>
                @endforeach
            {{-- @endif --}}
        </div>
    </section>
@endsection
