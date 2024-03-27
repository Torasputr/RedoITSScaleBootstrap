@extends('master.layout')
@section('title', 'ITS Scale - ' . $article->title)
@section('content')
    <section class='p-5'>
        <div class='border-bottom pb-3'>
            <h1 class='text-justify text-xl subtitle fw-semibold'>{{ $article->title }}</h1>
            <h1 class='fw-light text-md pt-3'>{{ $article->author->name }}</h1>
            <h1 class='fw-light text-md'>{{ $article->date }}</h1>
        </div>
        {{-- Desktop Start --}}
        <div class='desktop'>
            <div class='pt-3 grid-cols-2 align-items-center'>
                <div>
                    <h1 class='text-justify fw-light text-md'>{{ $article->paragraph1 }}</h1>
                    <div class='d-flex justify-content-center mt-3'>
                        <div class='overflow-hidden border p-2'> <!-- Add overflow-hidden class -->
                            <img class="article-image" src="{{ asset($article->image1) }}" alt="{{ $article->image1_alt }}">
                            <h1 class='text-sm fw-light pt-2'>Sumber: {{ $article->image1_source }}</h1>
                        </div>
                    </div>
                </div>
                <div>
                    <div class='d-flex justify-content-center mb-3'>
                        <div class='border p-2'> <!-- Add overflow-hidden class -->
                            <img class="article-image" src="{{ asset($article->image2) }}" alt="{{ $article->image2_alt }}">
                            <h1 class='text-sm fw-light pt-2'>Sumber: {{ $article->image2_source }}</h1>
                        </div>
                    </div>
                    <h1 class='text-justify fw-light text-md'>{{ $article->paragraph2 }}</h1>
                </div>
            </div>
        </div>
        {{-- Desktop End --}}
        {{-- Mobile Start --}}
        <div class='mobile'>
            <div class='py-4'>
                <div class='d-flex justify-content-center pb-3'>
                    <div class='overflow-hidden border p-2'> <!-- Add overflow-hidden class -->
                        <img class="article-image" src="{{ asset($article->image1) }}" alt="{{ $article->image1_alt }}">
                        <h1 class='text-sm fw-light pt-2'>Sumber: {{ $article->image1_source }}</h1>
                    </div>
                </div>
                <h1 class='text-md text-justify fw-light'>{{ $article->paragraph1 }}</h1>
                <div class='d-flex justify-content-center my-3'>
                    <div class='border p-2'> <!-- Add overflow-hidden class -->
                        <img class="article-image" src="{{ asset($article->image2) }}" alt="{{ $article->image2_alt }}">
                        <h1 class='text-sm fw-light pt-2'>Sumber: {{ $article->image2_source }}</h1>
                    </div>
                </div>
                <h1 class='text-md text-justify fw-light'>{{ $article->paragraph2 }}</h1>
            </div>
        </div>
        {{-- Mobile End --}}
    </section>
@endsection
