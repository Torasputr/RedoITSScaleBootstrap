@extends('master.layout')
@section('title', 'ITS Scale - ' . $article->title)
@section('content')
    <section class='p-5'>
        <div class='border-bottom pb-3'>
            <h1 class='text-justify text-2xl subtitle fw-semibold'>{{ $article->title }}</h1>
            <h1 class='fw-light text-md pt-3'>{{ $article->author->name }}</h1>
            <h1 class='fw-light text-md'>{{ $article->date }}</h1>
        </div>
        <div class='pt-3 grid-cols-2 gap-5 align-items-center'>
            <div>
                <h1 class='text-sm text-justify fw-normal paragraph'>{{ $article->paragraph1 }}</h1>
                <div class='border p-3 pb-1 mt-3'>
                    <div class='image-container d-flex justify-content-center'>
                        <img class='article-image' src="{{ asset($article->image1) }}" alt="">
                    </div>
                    <h1 class='text-sm fw-light pt-2'>Sumber: {{ $article->image1_source }}</h1>
                </div>
            </div>
            <div>
                <div class='border p-3 pb-1'>
                    <div class='image-container d-flex justify-content-center'>
                        <img class='article-image' src="{{ asset($article->image2) }}" alt="">
                    </div>
                    <h1 class='text-sm fw-light pt-2'>Sumber: {{ $article->image2_source }}</h1>
                </div>
                <h1 class='text-sm text-justify fw-normal mt-3 paragraph'>{{ $article->paragraph2 }}</h1>
            </div>
        </div>
    </section>
@endsection
