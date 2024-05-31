@extends('master.layout')
@section('title', 'ITS Scale - Gyumo Service Center')
@section('content')
    <section class='px-5'>
        <div class='gsc-banner d-flex align-items-center p-5'>
            <div class=''>
                <h1 class='gsc-text fw-bold'>GYUMO</h1>
                <h1 class='gsc-text'>Service Center</h1>
            </div>
        </div>
        <h3 class='fw-bold pt-5 text-center subtitle'>INFORMASI LAYANAN</h3>
        <div class='row d-flex justify-content-center py-5 gap-5'>
            <div class='col-4 gschover klaimgaransibtn p-3 rounded-small'>
                <div class='d-flex justify-content-center'>
                    <i class="fa-regular fa-calendar-check gsc1-item-icon"></i>
                </div>
                <h4 class='text-center fw-bold pt-3'>KLAIM GARANSI</h4>
                <h4 class='text-justify fw-normal'>Setelah memastikan SN Anda memiliki masa garansi yang masih aktif, silahkan dilanjutkan dengan pengisian form untuk klaim garansi.</h4>
            </div>
            <div class='col-4 gschover klaimgaransibtn p-3 rounded-small'>
                <div class='d-flex justify-content-center'>
                    <i class="fa-solid fa-gear gsc1-item-icon"></i>
                </div>
                <h4 class='text-center fw-bold pt-3'>KLAIM GARANSI</h4>
                <h4 class='text-justify fw-normal'>Terdapat 2 jasa servis yang kami berikan, pertama servis <span class='fst-italic'>on-site</span> dan kedua servis <span class='italic'>off-site</span>. Silahkan lengkapi form untuk meminta </h4>
            </div>
        </div>
    </section>
@endsection
