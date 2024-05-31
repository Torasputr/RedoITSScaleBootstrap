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
        <div class='row px-5 justify-content-center pt-5'>
            <div class='col-4 align-items-center'>
                <div class='d-flex justify-content-center py-3'>
                    <i class="fa-regular fa-calendar-check gsc1-item-icon"></i>
                </div>
                <h4 class='text-center fw-bold'>KLAIM GARANSI</h4>
                <h4 class='text-center fw-normal'>Setelah memastikan SN Anda memiliki masa garansi yang masih aktif, silahkan dilanjutkan dengan pengisian form untuk klaim garansi.</h4>
            </div>
            <div class='col-4 align-items-center'>
                <div class='d-flex justify-content-center py-3'>
                    <i class="fa-solid fa-gear gsc1-item-icon"></i>
                </div>
                <h4 class='text-center fw-bold'>SERVIS</h4>
                <h4 class='text-center fw-normal'>Terdapat 2 jasa servis yang kami berikan, pertama servis <span class='fst-italic'>on-site</span> dan kedua servis <span class='italic'>off-site</span>. Silahkan lengkapi form untuk </h4>
            </div>
        </div>
        <div class='pt-3 pb-5 px-5'>
            <h3 class='subtitle fw-bold pb-3'>Pengisian Form</h3>
            <div class='klaim-box rounded-small p-5'>
                <form action="/gsc/service" method='POST'>
                    @csrf
                        <div class='row gap-5 justify-content-center align-items-center'>
                            <div class='col-5'>
                                <select name="type" id="type" style="width: 100%">
                                    <option value="on-site">On-site</option>
                                    <option value="off-site">Off-site</option>
                                </select>
                                <input class='mt-3' type="text" name='sn' placeholder="Serial Number" style="width: 100%">
                                <input class='mt-3' type="text" name='name' placeholder="Nama Barang" style="width: 100%">
                                <input class='mt-3' type="text" name='sales' placeholder="Nama Sales" style='width: 100%'>
                            </div>
                            <div class='col-5'>
                                <input type="text" name='company' placeholder="Nama Perusahaan" style="width: 100%">
                                <input class='mt-3' type="text" name="address" placeholder="Alamat Perusahaan" style="width: 100%">
                                <input class='mt-3' type="text" name="phone" placeholder="Nomor Telepon Perusahaan" style="width: 100%">
                                <input class='mt-3' type="date" name='tanggal' placeholder="Tanggal Janji Temu" style="width: 100%">
                            </div>
                            <textarea style='width: 85%' name="keterangan" id="keterangan" cols="30" rows="7" placeholder="Keterangan"></textarea>
                        </div>
                        <div class='d-flex justify-content-center'>
                            <button class='cg-btn mt-5 px-3 fw-bold'>KIRIM</button>
                        </div>
                        <div class='d-flex justify-content-end'>
                            <h6>*Form ini akan diinvestigasi oleh tim kami terlebih dahulu</h6>
                        </div>
                </form>
            </div>
        </div>
    </section>
@endsection
