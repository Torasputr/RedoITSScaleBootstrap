@extends('master.layout')
@section('title', 'ITS Scale - Gyumo Service Center')
@section('content')
    <section class='position-relative'>
        <div class='gsc-banner p-5'>
            <div class='gsc-textbox p-5 rounded'>
                <h1 class='fw-bold'>GYUMO SERVICE CENTER</h1>
                <h4 class='pt-3 text-justify'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis nesciunt soluta magni ea minus doloribus natus, distinctio ipsam </h4>
            </div>
        </div>
        <div class='gsc-item-flexbox d-flex justify-content-around p-5 position-relative align-items-end'>
            <div class='gsc-item rounded p-5 d-flex align-items-center justify-content-center'>
                <h1>GARANSI</h1>
            </div>
            <div class='gsc-item rounded p-5 d-flex align-items-center justify-content-center'>
                <h1>SOFTWARE</h1>
            </div>
            <div class='gsc-appointment rounded p-5' style='z-index: 1;'>
                <h1>APPOINTMENT</h1>
                <form action="/gsc/appointment/submit" mehtod='POST'>
                    @csrf
                    <h5 class='py-3'>Serial Number: </h5>
                    <input type="text" style='width: 100%' name='serialNumber'>
                    <h5 class='py-3'>Email: </h5>
                    <input type="email" style='width: 100%' name='email'>
                    <h5 class='py-3 '>No. Telepon: </h5>
                    <input type="email" style='width: 100%' name='phone'>
                    <h5 class='py-3'>Produk</h5>
                    <select name="item" style='width: 100%;'>
                        {{-- @foreach ($items as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach --}}
                        @foreach ($items as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    <h5 class='py-3'>Tanggal Beli:</h5>
                    <input type="date" style='width: 100%' name='purchaseDate'>
                    <div class='pt-5 d-flex justify-content-center'>
                        <button class='gsc-appointment-btn fs-4 px-3 py-1 fw-semibold'>KIRIM</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
