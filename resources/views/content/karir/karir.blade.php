@extends('master.layout')
@section('title', 'ITS Scale - Karir')
@section('content')
    <section>
        {{-- Banner Image Start --}}
        <img class='karir-banner' src="{{ asset('images/karir/banner.webp') }}" alt="">
        {{-- Banner Image End --}}
        {{-- Search Box Start --}}
        <div class='mx-5 py-5 position-relative'>
            <input class='search-karir rounded-pill py-1 px-5 italic' type="text" placeholder='Cari pekerjaan impianmu'>
            <i class="fas fa-search p-1 text-sm position-absolute" style="left: 10px; top: 50%; transform: translateY(-50%);"></i>
            <button class='rounded-pill position-absolute search-button-karir text-sm' style='right: 0.25rem; top: 50%; transform: translateY(-50%);'>Search</button>
        </div>
        {{-- Search Box End --}}
        {{-- Career Card Start --}}
        <div class="row mx-5 gap-3 pb-5 justify-content-center align-items-stretch">
            @foreach($positions as $position)
                <div class="col-md-3">
                    <div class="career-card p-3 border rounded">
                        <h1 class='text-truncate text-3xl'>{{ $position->name }}</h1>
                        <div class='pt-4 d-flex justify-content-center'>
                            <!-- Add a data attribute to store the job ID -->
                            <a class='py-1 px-4 rounded-pill fw-bold job-details-btn' href="/karir/{{ $position->alt }}">DAFTAR SEKARANG!</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- Career Card End --}}
    </section>
@endsection
