@extends('master.layout')
@section('title', 'ITS Scale - Artikel')
@section('content')
    <div class='mb-5'>
        <div class="artikel-banner d-flex align-items-center justify-content-center">
            <h1 class='subtitle fw-bold text-3xl'>Artikel</h1>
        </div>
        <div class='row py-5 gap-md-4 gap-0 justify-content-center'>
            @foreach ($articles as $article)
            {{-- Desktop Start --}}
            <div class='col-3 py-2 desktop'>
                <a href="/artikel/{{ $article->id }}">
                  <div class='article-card container p-3 rounded'>
                        <img class='img-fluid' src="{{ asset($article->thumbnail) }}" alt="">
                        <h1 class='text-2xl pt-3 text-truncate'>{{ $article->title }}</h1>
                        <h1 class='text-sm text-truncate fw-light'>{{ $article->author->name }}</h1>
                        <div class='pt-1'>
                            <h1 class='text-sm text-end text-truncate fw-light'>{{ $article->date }}</h1>
                        </div>
                    </div>
                </a>
            </div>
            {{-- Desktop End --}}
            {{-- Mobile Start --}}
            <div class='col-10 py-2 mobile'>
                <a href="/artikel/{{ $article->id }}">
                  <div class='article-card container p-3 rounded'>
                        <img class='img-fluid' src="{{ asset($article->thumbnail) }}" alt="">
                        <h1 class='text-2xl pt-3 text-truncate'>{{ $article->title }}</h1>
                        <h1 class='text-sm text-truncate fw-light'>{{ $article->author->name }}</h1>
                        <div class='pt-1'>
                            <h1 class='text-sm text-end text-truncate fw-light'>{{ $article->date }}</h1>
                        </div>
                    </div>
                </a>
            </div>
            {{-- Mobile End --}}
            @endforeach
        </div>
        <div class="pagination-links d-flex justify-content-center">
            <h1 class=''>{{ $articles->links() }}</h1>
        </div>
    </div>
    @endsection
