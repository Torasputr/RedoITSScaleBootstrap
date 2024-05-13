@extends('master.layout')
@section('title', 'ITS Scale - ' . $category->name . ' - ' . $subcategory->name)
@section('content')
    <section class='p-5'>
        <h1 class='subtitle text-center fw-bold'>{{ $subcategory->name }}</h1>
        <div class='pt-5 row gap-5 justify-content-center'>
            @foreach ($items as $item)
            <div class='col-mdz-3'>
                <a href="/produk/{{ $category->alt }}/{{ $subcategory->alt }}/{{ $item->brand->alt }}/{{ $item->alt }}" class='card'>
                    <div class='p-3'>
                        <img class='card-image p-2 rounded' src="{{ asset($item->image) }}" alt="">
                        <div class='card-text pt-3'>
                            <h1 class='text-2xl text-truncate'>{{ $item->name }}</h1>
                            <div class='d-flex justify-content-between align-items-center'>
                                <h1 class='text-md text-truncate fw-light'>{{ $subcategory->name }} | {{ $category->name }}</h1>
                                <img class='item-card-brand' src="{{ asset($item->brand->image) }}" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        </section>
@endsection
