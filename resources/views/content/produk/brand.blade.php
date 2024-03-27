@extends('master.layout')
@section('title', 'ITS Scale - ' . $title)
@section('content')
    <section class='mx-5'>
        <h1 class='text-center py-5 text-3xl fw-bold subtitle'>{{ $title }}</h1>
        <div class='row justify-content-center pb-5 gap-3'>
            @foreach($brands as $brand)
                <div class='col-md-3 col-5 brands'>
                    <a href="/produk/{{ $alt }}/{{ $brand->alt }}">
                        <img src="{{ asset($brand->image) }}" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
