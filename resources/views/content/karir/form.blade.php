<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  </head>
  <body class='w-full overflow-x-hidden'>
    <div class='banner-form'>
        <div class='p-5'>
            <h1 class='position-name fw-bold'>Digital Marketing</h1>
            <div class='d-flex align-items-center gap-5 pt-3'>
                <div class='d-flex align-items-center gap-2'>
                    <i class="fa-solid fa-briefcase pb-2"></i>
                    <h1 class='text-md fw-normal'>Magang</h1>
                </div>
                <div class='d-flex align-items-center gap-2'>
                    <i class="fa-solid fa-location-arrow pb-2"></i>
                    <h1 class='text-md fw-normal'>Green Lake City</h1>
                </div>
            </div>
        </div>
    </div>
    <div class='p-5'>
        <h2 class='fw-bold'>Data Diri</h2>
        <div class='p-5'>
            <form action="/karir/popup/form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-2">
                        <h6 class="fw-normal">CV</h6>
                    </div>
                    <div class="col-3">
                        <input type="file" name="cv" accept=".pdf,.doc,.docx">
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-2">
                        <h6 class="fw-normal">Nama</h6>
                    </div>
                    <div class="col-9">
                        <input class="form-input" type="text" name="nama">
                    </div>
                </div>
                <div class='row pt-3'>
                    <div class='col-2'>
                        <h6 class='fw-normal'>Alamat</h6>
                    </div>
                    <div class='col-9'>
                        <input class='form-input' type="text" name="alamat">
                    </div>
                </div>
                <div class='row pt-3'>
                    <div class='col-2'>
                        <h6 class='fw-normal'>Email</h6>
                    </div>
                    <div class='col-9'>
                        <input class='form-input' type="email" name="email">
                    </div>
                </div>
                <div class='row pt-3'>
                    <div class='col-2'>
                        <h6 class='fw-normal'>Nomor Telepon</h6>
                    </div>
                    <div class='col-9'>
                        <input class='form-input' type="text" name="nomor_telepon">
                    </div>
                </div>
                <div class='row pt-3'>
                    <div class='col-2'>
                        <h6 class='fw-normal'>Perusahaan Sekarang</h6>
                    </div>
                    <div class='col-9'>
                        <input class='form-input' type="text" name="perusahaan_sekarang">
                    </div>
                <div class="d-flex justify-content-center">
                    <button class="mt-5 px-5 submit-form-btn fw-bold py-2 rounded-pill" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/ef25a92f55.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- FontAwesome Kit --}}
  </body>
</html>
