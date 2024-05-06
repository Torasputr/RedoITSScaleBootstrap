@extends('master.layout')
@section('title', 'ITS Scale - Gyumo Service Center')
@section('content')
    <section>
        <div class='gsc-banner d-flex align-items-center p-5'>
            <div class=''>
                <h1 class='gsc-text fw-bold'>GYUMO</h1>
                <h1 class='gsc-text'>Service Center</h1>
            </div>
        </div>
        <h3 class='fw-bold pt-5 text-center subtitle'>INFORMASI LAYANAN</h3>
        <div class='row px-5'>
            <div class='col-4 align-items-center'>
                <h6 class='fw-normal gsc1-item-text px-2 mt-1 py-1'>Cek Garansi</h6>
                <div class='d-flex justify-content-center py-3'>
                    <i class="fa-solid fa-shield-halved gsc1-item-icon"></i>
                </div>
                <div>
                    <h4 class='text-center fw-bold'>CEK GARANSI</h4>
                    <h4 class='text-center fw-normal'>Setiap produk yang dibeli memiliki Serial Number (SN). Silahkan input SN anda untuk mengetahui sisa masa garansi anda.</h4>
                </div>
            </div>
            <div class='col-4 gsc1-item-mid align-items-center'>
                <h6 class='fw-normal gsc1-item-text px-2 mt-1 py-1'>Klaim Garansi</h6>
                <div class='d-flex justify-content-center py-3'>
                    <i class="fa-regular fa-calendar-check gsc1-item-icon"></i>
                </div>
                <h4 class='text-center fw-bold'>KLAIM GARANSI</h4>
                <h4 class='text-center fw-normal'>Setelah memastikan SN Anda memiliki masa garansi yang masih aktif, silahkan dilanjutkan dengan pengisian form untuk klaim garansi.</h4>
            </div>
            <div class='col-4 align-items-center'>
                <h6 class='fw-normal gsc1-item-text px-2 mt-1 py-1'>Servis</h6>
                <div class='d-flex justify-content-center py-3'>
                    <i class="fa-solid fa-gear gsc1-item-icon"></i>
                </div>
                <h4 class='text-center fw-bold'>SERVIS</h4>
                <h4 class='text-center fw-normal'>Terdapat 2 jasa servis yang kami berikan, pertama servis <span class='fst-italic'>on-site</span> dan kedua servis <span class='italic'>off-site</span>. Silahkan lengkapi form dan pilihlah jasa servis sesuai kebutuhan anda.</h4>
            </div>
        </div>
        <div class='p-5 pt-0 pb-0'>
            <h3 class='subtitle fw-bold'>Cek Garansi</h3>
            <div class='p-3'>
                <form action="">
                    @csrf
                    <h5 class='fw-normal'>Input Serial Number:</h5>
                    <div class='d-flex align-items-center gap-3'>
                        <div style='width: 30%'>
                            <input class='px-3' type="text" placeholder="Serial Number" style='width: 100%; border-radius: 10px'>
                        </div>
                        <div>
                            <button class='px-3 fw-bold cg-btn'>Cek</button>
                        </div>
                        <div class='pt-2'>
                            <h5 class='status fw-bold'>Masa Garansi Anda Tersisa 4 Bulan 7 Hari</h5>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class='pt-5 pb-3 px-5'>
            <h3 class='subtitle fw-bold pb-3'>Klaim Garansi</h3>
            <div class='klaim-box rounded-small p-5'>
                <form action="">
                    @csrf
                    <div class='row gap-5 justify-content-center align-items-center'>
                        <div class='col-5'>
                            <input class='klaim-input' type="text" placeholder="Input Serial Number" style='width: 100%'>
                            <input class ='klaim-input mt-4' type="text" placeholder="Tanggal" style='width: 100%'>
                            <input class ='klaim-input mt-4' type="text" placeholder="Kontak" style='width: 100%'>
                        </div>
                        <div class='col-5'>
                            <input class='klaim-input ' type="text" placeholder="Input Serial Number" style='width: 100%'>
                            <input class='klaim-input mt-4' type="text" placeholder="Input Serial Number" style='width: 100%'>
                        </div>
                    </div>
                    <div class='d-flex justify-content-center'>
                        <button class='cg-btn mt-5 px-3 fw-bold'>Klaim</button>
                    </div>
                </form>
            </div>
        </div>
        <div class='pt-3 pb-5 px-5'>
            <h3 class='subtitle fw-bold pb-3'>Servis</h3>
            <div class='klaim-box rounded-small p-5'>
                <form action="">
                    @csrf
                        <div class='px-5 pb-2 d-flex align-items-center gap-5'>
                            <div>
                                <input type="radio" id="option1" name="option" value="option2">
                                <label for="option1">On-site</label><br>
                            </div>
                            <div>
                                <input type="radio" id="option2" name="option" value="option2">
                                <label for="option2">Off-site</label><br>
                            </div>
                        </div>
                        <div class='row gap-5 justify-content-center align-items-center'>
                            <div class='col-5'>
                                <input class='klaim-input' type="text" placeholder="Input Serial Number" style='width: 100%'>
                                <input class ='klaim-input mt-4' type="text" placeholder="Tanggal" style='width: 100%'>
                                <input class ='klaim-input mt-4' type="text" placeholder="Kontak" style='width: 100%'>
                            </div>
                            <div class='col-5'>
                                <input class='klaim-input ' type="text" placeholder="Input Serial Number" style='width: 100%'>
                                <input class='klaim-input mt-4' type="text" placeholder="Input Serial Number" style='width: 100%'>
                            </div>
                        </div>
                        <div class='d-flex justify-content-center'>
                            <button class='cg-btn mt-5 px-3 fw-bold'>Servis</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
