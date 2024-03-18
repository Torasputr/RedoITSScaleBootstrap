@extends('master.layout')
@section('title', 'ITS Scale - ' . $title)
@section('content')
    <section class='mx-5'>
        <h1 class='text-center py-5 text-3xl fw-bold subtitle'>{{ $title }}</h1>
        <div class='grid-cols-3 pb-5'>
            @foreach ($items as $item)
                <a href="/produk/{{ $alt }}/{{ $sub_alt }}/{{ $item->alt }}">
                    <div class='category-card p-3 rounded'>
                        <img class='category-image rounded' src="{{ asset($item->image) }}" alt="">
                        <h1 class='text-2xl pt-2 category-name fw-'>{{ $item->name }}</h1>
                        <h1 class='category-name text-sm'>{{ $item->description }}</h1>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
