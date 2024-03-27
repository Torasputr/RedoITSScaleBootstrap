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
        <div class="row mx-5 gap-5 pb-5 justify-content-center">
            @foreach($careers as $career)
                <div class="col-md-4"> <!-- Use col-md-4 for medium-sized screens and above -->
                    <div class="career-card p-3">
                        <img class="career-card-image border rounded" src="{{ asset('images/karir/card.jpg') }}" alt="">
                        <h1 class="text-3xl">{{ $career->position->name }}</h1>
                        <div class="d-flex align-items-center gap-3 pt-2"> <!-- Reduced gap for smaller screens -->
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-briefcase pb-2"></i>
                                <h1 class="text-md fw-normal">{{ $career->contract->type }}</h1>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-location-arrow pb-2"></i>
                                <h1 class="text-md fw-normal">{{ $career->location->location }}</h1>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center justify-content-md-end"> <!-- Centered on small screens, right-aligned on medium and above -->
                            <a href="/karir/popup" class="mt-4 rounded p-1 px-3 justify-content-end fw-semibold">Apply Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Career Card End --}}
    </section>
@endsection
