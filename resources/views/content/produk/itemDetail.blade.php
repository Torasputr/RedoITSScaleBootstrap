@extends('master.layout')
@section('title', 'ITS Scale - ' . $item->name)
@section('content')
    <section class='mx-5'>
        <div class='grid-cols-2 item-detail align-items-center py-5'>
            <div>
                <img src="{{ asset($item->image) }}" alt="">
            </div>
            <div>
                <div class='pb-3 border-bottom'>
                    <h1 class='text-3xl fw-bold subtitle'>{{ $item->name }}</h1>
                    <h1 class='text-lg fw-normal'>{{ $item->description }}</h1>
                </div>
                <div class='py-3'>
                    <h1 class='fw-bold text-lg'>Features</h1>
                    <ul>
                        <li>Feature 1</li>
                        <li>Feature 2</li>
                        <li>Feature 3</li>
                        <li>Feature 4</li>
                    </ul>
                </div>
                <div>
                    <a class='brochure px-2 py-1 rounded fw-semibold text-xl' href=""> See Brochure</a>
                </div>
            </div>
        </div>
    </section>
@endsection
