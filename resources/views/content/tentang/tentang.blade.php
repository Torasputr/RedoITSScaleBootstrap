@extends('master.layout')
@section('title', 'ITS Scale - Tentang Kami')
@section('content')
    <section>
        {{-- Banner Start --}}
        <div class='tentang-banner p-5 d-flex align-items-center'>
            <h1 class='fw-bold text'>Tentang Kami</h1>
        </div>
        {{-- Banner End --}}
    </section>
    <section class='tentang-body'>
        <div class='px-5'>
            {{-- Milestone Start --}}
            <div class='milestone row py-5 align-items-center gap-4 d-flex justify-content-center'>
                <div class='col-md-5'>
                    <img class='milestone-image' src="{{ asset('images/tentang/KebijakanMutu.webp') }}" alt="">
                </div>
                <div class='col-md-6'>
                    <h1 class='fs-1 subtitle fw-bold pt-3 pt-md-0'>PT Internasional Teknik Solusindo</h1>
                    <h1 class='text-justify text-md fw-normal pt-3'>PT Internasional Teknik Solusindo atau dikenal dengan ITS Scale adalah perusahaan yang berspesialisasi di dalam pengadaan alat timbangan untuk komersial dan industri termasuk software & sistem integrasi untuk industri otomatis.</h1>
                    <div class='d-flex align-items-center justify-content-around py-3 gap-1'>
                        <button class='px-2 rounded-pill fs-6 fs-md-1 fw-semibold py-1 milestone-button' id='2014-button'>2014</button>
                        <button class='px-2 rounded-pill fs-6 fs-md-1 fw-semibold py-1 milestone-button' id='2018-button'>2018</button>
                        <button class='px-2 rounded-pill fs-6 fs-md-1 fw-semibold py-1 milestone-button' id='2020-button'>2020</button>
                        <button class='px-2 rounded-pill fs-6 fs-md-1 fw-semibold py-1 milestone-button' id='2023-button'>2023</button>
                        <button class='px-2 rounded-pill fs-6 fs-md-1 fw-semibold py-1 milestone-button' id='2024-button'>2024</button>
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
        <div class='row align-items-center'>
            <div class='col-md-6 d-flex justify-content-center'>
                <div class='row'>
                    <div class='col'>
                        <button class='py-2 px-4 px-md-5 rounded-pill text-3xl fw-bold visi-button'>Visi</button>
                    </div>
                    <div class='col'>
                        <button class='py-2 px-4 px-md-5 rounded-pill text-3xl fw-bold misi-button'>Misi</button>
                    </div>
                </div>
            </div>
            <div class='col-md-6 pt-4 pt-md-0'>
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
    <section class='tentang-body p-5'>
        <div class='row align-items-center justify-content-center'>
            <div class='col-md-6'>
                <h1 class='fw-bold text-3xl subtitle'>Kebijakan Mutu</h1>
                <h1 class='py-2 text-justify text-md fw-normal'>Kami, PT. Internasional Teknik Solusindo yang bergerak dalam bidang Distribusi dan Service Timbangan Digital. Kami, manajemen dan seluruh karyawan PT Internasional Teknik Solusindo telah menyatakan komitmennya untuk menerapkan sistem manajemen mutu yang sesuai dengan persyaratan ISO 9001:2015, dengan cara :</h1>
                <div class='d-flex align-items-center gap-4 gap-md-3'>
                    <h1 class='italic text-4xl fw-bold'>1.</h1>
                    <h1 class='text-sm fw-bold text-justify'>Menyediakan kebutuhan timbangan digital dengan teknologi dan sistem yang terintegrasi</h1>
                </div>
                <div class='d-flex align-items-center gap-4 gap-md-3'>
                    <h1 class='italic text-4xl fw-bold'>2.</h1>
                    <h1 class='text-sm fw-bold text-justify'>Mendistribusikan timbangan digital dengan mengutamakan aspek kualitas dan kualitas</h1>
                </div>
                <div class='d-flex align-items-center gap-4 gap-md-3'>
                    <h1 class='italic text-4xl fw-bold'>3.</h1>
                    <h1 class='text-sm fw-bold text-justify'>Menjalin kerjasama dengan segala sektor industri & manufaktur sebagai penyuplai kebutuhan.</h1>
                </div>
                <div class='d-flex align-items-center gap-4 gap-md-3'>
                    <h1 class='italic text-4xl fw-bold'>4.</h1>
                    <h1 class='text-sm fw-bold text-justify'>Memperbaiki sistem manajemen mutu secara terus menerus khususnya pada mutu produk.</h1>
                </div>
            </div>
            <div class='col-md-5 pt-3 pt-md-0'>
                <img class='kebmut-img' src="{{ asset('images/tentang/tentangKami.webp') }}" alt="">
            </div>
        </div>
    </section>
    <section class='mx-5'>
        <div class='desktop'>
            <h1 class='text-3xl subtitle fw-bold text-center pt-5 pb-4'>Sertifikat</h1>
            <div class='grid-cols-3 pb-5'>
                <button class='rounded sertif-button' onclick="showModal('{{ asset('images/tentang/sertifikat/diniargeo/diniargeo.webp') }}')">
                    <img class='sertif-thumbnail border rounded' src="{{ asset('images/tentang/sertifikat/diniargeo/diniargeo.webp') }}" alt="">
                  </button>
                  <button class='rounded sertif-button' onclick="showModal('{{ asset('images/tentang/sertifikat/iso/isi.webp') }}')">
                    <img class='sertif-thumbnail border rounded' src="{{ asset('images/tentang/sertifikat/iso/thumbnail.webp') }}" alt="">
                  </button>
                  <button class='rounded sertif-button' onclick="showModal('{{ asset('images/tentang/sertifikat/imi/imi.webp') }}')">
                    <img class='sertif-thumbnail border rounded' src="{{ asset('images/tentang/sertifikat/imi/imi.webp') }}" alt="">
                  </button>
            </div>
        </div>
        <div class='mobile pb-5'>
            <h1 class='text-center subtitle fw-bold pt-5 pb-5'>SERTIFIKAT</h1>
            <div id="sertifCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <button class='rounded sertif-button' onclick="showModal('{{ asset('images/tentang/sertifikat/diniargeo/diniargeo.webp') }}')">
                            <img class='sertif-thumbnail border rounded' src="{{ asset('images/tentang/sertifikat/diniargeo/diniargeo.webp') }}" alt="">
                        </button>
                    </div>
                    <div class="carousel-item">
                        <button class='rounded sertif-button' onclick="showModal('{{ asset('images/tentang/sertifikat/iso/isi.webp') }}')">
                            <img class='sertif-thumbnail border rounded' src="{{ asset('images/tentang/sertifikat/iso/thumbnail.webp') }}" alt="">
                        </button>
                    </div>
                    <div class="carousel-item">
                        <button class='rounded sertif-button' onclick="showModal('{{ asset('images/tentang/sertifikat/imi/imi.webp') }}')">
                            <img class='sertif-thumbnail border rounded' src="{{ asset('images/tentang/sertifikat/imi/imi.webp') }}" alt="">
                        </button>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#sertifCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sertifCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
@endsection

