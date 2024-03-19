@extends('master.layout')
@section('title', 'ITS Scale - Artikel')
@section('content')
    <div class="artikel-banner d-flex align-items-center justify-content-center">
        <h1 class='subtitle fw-bold text-3xl'>Artikel</h1>
    </div>
    <div class='grid-cols-3 py-5 mx-5'>
        @foreach($articles as $article)
        <a href="/artikel/{{ $article->id }}">
            <div class='category-card p-3 rounded'>
                <img class='category-image rounded' src="{{ asset($article->thumbnail) }}" alt="">
                <h1 class='text-lg pt-2 category-name text-truncate'>{{ $article->title }}</h1>
                <h1 class='category-name text-sm text-end fw-light'>{{ $article->date }}</h1>
            </div>
        </a>
        @endforeach
    </div>
@endsection
