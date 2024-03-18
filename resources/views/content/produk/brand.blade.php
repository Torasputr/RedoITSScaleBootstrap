@extends('master.layout')
@section('title', 'ITS Scale - ' . $title)
@section('content')
    <section class='mx-5'>
        <h1 class='text-center py-5 text-3xl fw-bold subtitle'>{{ $title }}</h1>
        <div class='grid-cols-3 pb-5'>
            @foreach($brands as $brand)
                <div class='brands'>
                    <a href="/produk/{{ $alt }}/{{ $brand->alt }}">
                        <img src="{{ asset($brand->image) }}" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
