@extends('master.layout')
@section('title', 'ITS Scale - Kontak')
@section('content')
    <section class='mx-5'>
        <div class='grid-cols-2 py-5 align-items-center'>
            <div>
                <iframe id="glc-map" class='glc-maps' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5274253554458!2d106.69913377366339!3d-6.193920893793714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbdea069aed3%3A0xffd9d326462995c2!2sPT%20Internasional%20Teknik%20Solusindo!5e0!3m2!1sid!2sid!4v1710836485995!5m2!1sid!2sid" width="100%" height="750" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <iframe id="cikarang-map" class='cikarang-maps d-none' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7574571592095!2d107.14480437366454!3d-6.2955715936935075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699bfdd40d2a8f%3A0xb8638e15f4f56f48!2sPT.%20INTERNASIONAL%20TEKNIK%20SOLUSINDO!5e0!3m2!1sid!2sid!4v1710839684270!5m2!1sid!2sid" width="100%" height="750" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div>
                <h1 class='subtitle text-2xl fw-bold'>Temukan Kami</h1>
                <div class='pt-3'>
                    <button id="glc-button" class='location-button glc-button'>
                        <h1 class='text-lg subtitle pb-2 border-bottom'>Green Lake City</h1>
                    </button>
                    <h1 class='subtitle text-sm fw-light text-justify'>Rukan Crown Blok B.1, Jl. Green Lake City Boulevard No.01, RT.005/RW.008, Petir, Kec. Cipondoh, Kota Tangerang, Banten 15147</h1>
                </div>
                <div class='pt-2'>
                    <button id="cikarang-button" class='location-button cikarang-button'>
                        <h1 class='text-lg subtitle pb-2 border-bottom'>Cikarang</h1>
                    </button>
                    <h1 class='subtitle text-sm fw-light text-justify'>Jl. Raya Industri Jl. Jababeka Raya No.67, Pasirgombong, Kecamatan Cikarang Ut, Kabupaten Bekasi, Jawa Barat 17530</h1>
                </div>
                <div>
                    <h1 class='subtitle text-2xl fw-bold py-3'>Jam Operasional</h1>
                    <div class='d-flex align-items-center gap-5'>
                        <div>
                            <h1 class='text-md fw-normal subtitle italic'>Mon</h1>
                            <h1 class='text-md fw-normal subtitle italic'>Tue</h1>
                            <h1 class='text-md fw-normal subtitle italic'>Wed</h1>
                            <h1 class='text-md fw-normal subtitle italic'>Thu</h1>
                            <h1 class='text-md fw-normal subtitle italic'>Fri</h1>
                            <h1 class='text-md fw-normal subtitle italic'>Sat</h1>
                        </div>
                        <div>
                            <h1 class='text-md fw-normal subtitle'>:</h1>
                            <h1 class='text-md fw-normal subtitle'>:</h1>
                            <h1 class='text-md fw-normal subtitle'>:</h1>
                            <h1 class='text-md fw-normal subtitle'>:</h1>
                            <h1 class='text-md fw-normal subtitle'>:</h1>
                            <h1 class='text-md fw-normal subtitle'>:</h1>
                        </div>
                        <div>
                            <h1 class='text-md fw-normal subtitle italic'>8am - 5pm</h1>
                            <h1 class='text-md fw-normal subtitle italic'>8am - 5pm</h1>
                            <h1 class='text-md fw-normal subtitle italic'>8am - 5pm</h1>
                            <h1 class='text-md fw-normal subtitle italic'>8am - 5pm</h1>
                            <h1 class='text-md fw-normal subtitle italic'>8am - 5pm</h1>
                            <h1 class='text-md fw-normal subtitle italic'>9am - 12pm</h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class='subtitle text-2xl fw-bold py-3'>Layanan Kami</h1>
                    <div class='d-flex align-items-center gap-5'>
                        <div>
                            <h1 class='text-md italic subtitle fw-normal'>Mail</h1>
                        </div>
                        <div>
                            <h1 class='text-md subtitle fw-normal'>:</h1>
                        </div>
                        <div>
                            <h1 class='text-md italic subtitle fw-normal'>marketing@itsscale.com</h1>
                        </div>
                    </div>
                    <h1 class='text-lg subtitle pt-2 border-bottom pb-2'>Green Lake City</h1>
                    <div class='pt-2 d-flex align-items-center gap-4'>
                        <div>
                            <h1 class='text-md italic subtitle fw-normal'>Mobile</h1>
                            <h1 class='text-md italic subtitle fw-normal'>Phone</h1>
                        </div>
                        <div>
                            <h1 class='text-md subtitle fw-normal'>:</h1>
                            <h1 class='text-md subtitle fw-normal'>:</h1>
                        </div>
                        <div>
                            <h1 class='text-md subtitle fw-normal italic'>0811-1910-3783</h1>
                            <h1 class='text-md subtitle fw-normal italic'>021-54344618</h1>
                        </div>
                    </div>
                    <h1 class='text-lg subtitle pt-2 border-bottom pb-2'>Cikarang</h1>
                    <div class='pt-2 d-flex align-items-center gap-4'>
                        <div>
                            <h1 class='text-md italic subtitle fw-normal'>Mobile</h1>
                            <h1 class='text-md italic subtitle fw-normal'>Phone</h1>
                        </div>
                        <div>
                            <h1 class='text-md subtitle fw-normal'>:</h1>
                            <h1 class='text-md subtitle fw-normal'>:</h1>
                        </div>
                        <div>
                            <h1 class='text-md subtitle fw-normal italic'>0811-1272-0252</h1>
                            <h1 class='text-md subtitle fw-normal italic'>021-89325255</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
