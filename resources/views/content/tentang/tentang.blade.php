@extends('master.layout')
@section('title', 'ITS Scale - Tentang Kami')
@section('content')
    <section>
        {{-- Banner Start --}}
        <img class='tentang-banner' src="{{ asset('images/tentang/banner.png') }}" alt="">
        {{-- Banner End --}}
    </section>
    <section class='tentang-body'>
        <div class='px-5'>
            {{-- Milestone Start --}}
            <div class='milestone grid-cols-2 py-5 align-items-center'>
                <div>
                    <img class='milestone-image' src="{{ asset('images/tentang/tentangKami.png') }}" alt="">
                </div>
                <div>
                    <h1 class='text-4xl subtitle fw-bold'>PT Internasional Teknik Solusindo</h1>
                    <h1 class='text-justify text-md fw-normal pt-3'>PT Internasional Teknik Solusindo atau dikenal dengan ITS Scale adalah perusahaan yang berspesialisasi di dalam pengadaan alat timbangan untuk komersial dan industri termasuk software & sistem integrasi untuk industri otomatis.</h1>
                    <div class='d-flex align-items-center justify-content-around py-3 gap-4'>
                        <button class='px-3 rounded-pill text-lg fw-semibold py-1 milestone-button' id='2014-button'>2014</button>
                        <button class='px-3 rounded-pill text-lg fw-semibold py-1 milestone-button' id='2018-button'>2018</button>
                        <button class='px-3 rounded-pill text-lg fw-semibold py-1 milestone-button' id='2020-button'>2020</button>
                        <button class='px-3 rounded-pill text-lg fw-semibold py-1 milestone-button' id='2023-button'>2023</button>
                        <button class='px-3 rounded-pill text-lg fw-semibold py-1 milestone-button' id='2024-button'>2024</button>
                    </div>
                    <div>
                        <h1 class='text-md text-justify fw-normal pt-1 milestone-text' id='2014-text'>ITS Scale dibentuk. Dimulai dari door-to-door sales, hingga mulai memberanikan diri untuk mencoba menawarkan produknya melalui business-to-business kepada beberapa perusahaan.</h1>
                        <h1 class='text-md text-justify fw-normal pt-1 d-none milestone-text' id='2018-text'>Melakukan optimalisasi manajemen dengan memastikanya kredibilitas dan legalitas sebagai perusahaan yang bergerak dalam bidang distributor alat ukur berat. Dibentuklah PT Internasional Teknik Solusindo sebagai perusahaan retail yang bonafid.</h1>
                        <h1 class='text-md text-justify fw-normal pt-1 d-none milestone-text' id='2020-text'>PT Internasional Teknik Solusindo melebarkan sayapnya berkembang dari retail, merambah ke beberapa commissioning project dan proyek tender skala nasional untuk pengadaan alat ukur berat skala menengah hingga besar seperti jembatan timbang, dan sensor timbang pada rel kereta api.</h1>
                        <h1 class='text-md text-justify fw-normal pt-1 d-none milestone-text' id='2023-text'>Dalam usaha menyuplai berbagai kebutuhan alat ukur berat di Indonesia, mulai dari produk retail hingga proyek pengadaan alat timbang, PT Internasional Teknik Solusindo sudah terdaftar di beberapa database tender perusahaan besar nasional, E-katalog, TKDN, dan berhasil memperoleh ISO:9001 2015 di tahun 2023.</h1>
                        <h1 class='text-md text-justify fw-normal pt-1 d-none milestone-text' id='2024-text'>Branch office pertama ITS Scale sekaligus service center timbangan merk GYUMO pertama di Indonesia dibuka di Kawasan industry Cikarang.</h1>
                    </div>
                </div>
            </div>
            {{-- Milestone End --}}
    </section>
    <section class='mx-5 py-5'>
        {{-- Visi Misi Start --}}
        <div class='grid-cols-2 align-items-center'>
            <div class='grid-cols-2 justify-content-around'>
                <button class='py-2 rounded-pill text-3xl fw-bold visi-button'>Visi</button>
                <button class='py-2 rounded-pill text-3xl fw-bold misi-button'>Misi</button>
            </div>
            <div>
                <div class='visi-text'>
                    <h1 class='visi-title text-4xl fw-bold'>Visi</h1>
                    <h1 class='pt-2 text-md fw-normal'>Menjadi perusahaan timbangan digital yang berbasis teknologi & sistem integrasi</h1>
                </div>
                <div class='misi-text d-none'>
                    <h1 class='misi-title text-4xl fw-bold'>Misi</h1>
                    <h1 class='pt-2 text-md fw-normal'>1. Menyediakan produk timbangan digital yang berkualitas</h1>
                    <h1 class='text-md fw-normal'>2. Memberikan solusi penimbangan dalam segala aspek industri</h1>
                </div>
            </div>
        </div>
        {{-- Visi Misi End --}}
    </section>
    <section class='tentang-body'>
        <div class='grid-cols-2 mx-5 py-5 gap-5 align-items-center'>
            <div>
                <h1 class='fw-bold'>Kebijakan Mutu</h1>
                <h1 class='py-2 text-justify text-md fw-normal'>Kami, PT. Internasional Teknik Solusindo yang bergerak dalam bidang Distribusi dan Service Timbangan Digital. Kami, manajemen dan seluruh karyawan PT Internasional Teknik Solusindo telah menyatakan komitmennya untuk menerapkan sistem manajemen mutu yang sesuai dengan persyaratan ISO 9001:2015, dengan cara :</h1>
                <div class='d-flex align-items-center gap-4'>
                    <h1 class='italic text-4xl fw-bold'>1.</h1>
                    <h1 class='text-sm fw-bold'>Menyediakan kebutuhan timbangan digital dengan teknologi dan sistem yang terintegrasi</h1>
                </div>
                <div class='d-flex align-items-center gap-4'>
                    <h1 class='italic text-4xl fw-bold'>2.</h1>
                    <h1 class='text-sm fw-bold'>Mendistribusikan timbangan digital dengan mengutamakan aspek kualitas dan kualitas</h1>
                </div>
                <div class='d-flex align-items-center gap-4'>
                    <h1 class='italic text-4xl fw-bold'>3.</h1>
                    <h1 class='text-sm fw-bold'>Menjalin kerjasama dengan segala sektor industri & manufaktur sebagai penyuplai kebutuhan.</h1>
                </div>
                <div class='d-flex align-items-center gap-4'>
                    <h1 class='italic text-4xl fw-bold'>4.</h1>
                    <h1 class='text-sm fw-bold'>Memperbaiki sistem manajemen mutu secara terus menerus khususnya pada mutu produk.</h1>
                </div>
            </div>
            <div>
                <img class='kebmut-img' src="{{ asset('images/tentang/KebijakanMutu.png') }}" alt="">
            </div>
        </div>
    </section>
    <section class='mx-5'>
        <h1 class='text-3xl subtitle fw-bold text-center py-5'>SERTIFIKAT</h1>
        <div class='grid-cols-3 pb-5'>
            <button class='rounded sertif-button' onclick="showModal('{{ asset('images/tentang/sertifikat/diniargeo/diniargeo.png') }}')">
                <img class='sertif-thumbnail border rounded' src="{{ asset('images/tentang/sertifikat/diniargeo/diniargeo.png') }}" alt="">
              </button>
              <button class='rounded sertif-button' onclick="showModal('{{ asset('images/tentang/sertifikat/iso/isi.png') }}')">
                <img class='sertif-thumbnail border rounded' src="{{ asset('images/tentang/sertifikat/iso/thumbnail.png') }}" alt="">
              </button>
              <button class='rounded sertif-button' onclick="showModal('{{ asset('images/tentang/sertifikat/imi/imi.png') }}')">
                <img class='sertif-thumbnail border rounded' src="{{ asset('images/tentang/sertifikat/imi/imi.png') }}" alt="">
              </button>
        </div>
    </section>
@endsection
