@extends('master.layout')
@section('title', 'ITS Scale - ' . $item->brand->name . ' ' . $item->name)
@section('content')
    <section class='mx-5'>
        <div class='row gap-5 py-md-5 justify-content-center align-items-center'>
            <div class='col-md-5'>
                <img class='item-image' src="{{ asset($item->image) }}" alt="">
            </div>
            <div class='col-md-5'>
                <div class='d-flex align-items-center justify-content-between border-bottom gap-2'>
                    <h1 class='subtitle'>{{ $item->name }}</h1>
                    <img class='item-brand-detail pb-2' src="{{ asset($item->brand->image) }}" alt="">
                </div>
                <ul class='pt-4 px-5'>
                    @foreach($item->features as $feature)
                        <li class='text-xl text-justify'>{{ $feature->feature }}</li>
                    @endforeach
                </ul>
                <div class='d-flex pt-md-3 pb-3'>
                    <a class='brochure p-2 px-3 rounded-pill' href="{{ $item->brochure }}">
                        Lihat Brosur
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
