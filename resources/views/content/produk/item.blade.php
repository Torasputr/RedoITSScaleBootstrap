@extends('master.layout')
@section('title', 'ITS Scale - ' . $item->brand->name . ' ' . $item->name)
@section('content')
    <section class='mx-5'>
        <div class='row py-5 justify-content-center align-items-center'>
            <div class='col-5'>
                <img class='item-image' src="{{ asset($item->image) }}" alt="">
            </div>
            <div class='col-5'>
                <div class='d-flex align-items-center border-bottom gap-2'>
                    <h1 class='subtitle'>{{ $item->name }}</h1>
                    <img class='item-brand' src="{{ asset($item->brand->image) }}" alt="">
                </div>
                <ul class='pt-4 px-5'>
                    @foreach($item->features as $feature)
                        <li class='text-xl text-justify'>{{ $feature->feature }}</li>
                    @endforeach
                </ul>
                <div class='d-flex pt-3'>
                    <a class='brochure p-2 px-3 rounded-pill' href="{{ $item->brochure }}">
                        Lihat Brosur
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
