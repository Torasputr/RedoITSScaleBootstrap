<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITS Scale - Daftar {{ $position->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  </head>
  <body>
    <div class='banner-form p-5'>
        <h1 class='text-5xl'>{{ $position->name }}</h1>
    </div>
    <div class='p-5'>
        <form action="/karir/{{ $position->alt }}/register/submit" method='POST'>
            @csrf
            <h2 class='fw-bold'>Data Diri</h2>
            <div class='px-md-5 row pt-3 align-items-center'>
                <div class='col-md-3 col-5'>
                    <h4 class='fw-normal'>CV URL</h4>
                </div>
                <div class='col-md-9 col-7'>
                    <input type="text" name='cv' style='width: 100%' placeholder="Harus isi">
                </div>
            </div>
            <div class='px-md-5 row align-items-center'>
                <div class='col-md-3 col-5'>
                    <h4 class='fw-normal'>Nama Lengkap</h4>
                </div>
                <div class='col-md-9 col-7'>
                    <input type="text" name='name' style='width: 100%' placeholder="Harus isi">
                </div>
            </div>
            <div class='px-md-5 row '>
                <div class='col-md-3 col-5'>
                    <h4 class='fw-normal'>Email</h4>
                </div>
                <div class='col-md-9 col-7'>
                    <input type="text" name='email' style='width: 100%' placeholder="Harus isi">
                </div>
            </div>
            <div class='px-md-5 row align-items-center'>
                <div class='col-md-3 col-5'>
                    <h4 class='fw-normal'>Nomor Telepon</h4>
                </div>
                <div class='col-md-9 col-7'>
                    <input type="text" name='phone' style='width: 100%' placeholder="Harus isi">
                </div>
            </div>
            <div class='px-md-5 row align-items-center'>
                <div class='col-md-3 col-5'>
                    <h4 class='fw-normal'>Alamat</h4>
                </div>
                <div class='col-md-9 col-7'>
                    <input type="text" name='address' style='width: 100%' placeholder="Harus isi">
                </div>
            </div>
            <div class='px-md-5 row align-items-center'>
                <div class='col-md-3 col-5'>
                    <h4 class='fw-normal'>Perusahaan Sekarang</h4>
                </div>
                <div class='col-md-9 col-7'>
                    <input type="text" name='currentcompany' style='width: 100%' placeholder="Opsional">
                </div>
            </div>
            <h2 class='fw-bold pt-3'>Tautan</h2>
            <div class='px-md-5 row pt-3 align-items-center'>
                <div class='col-md-3 col-5'>
                    <h4 class='fw-normal'>LinkedIn URL</h4>
                </div>
                <div class='col-md-9 col-7'>
                    <input type="text" name='linkedin' style='width: 100%' placeholder="Opsional">
                </div>
                <div class='col-md-3 col-5'>
                    <h4 class='fw-normal'>Portfolio URL</h4>
                </div>
                <div class='col-md-9 col-7'>
                    <input type="text" name='portfolio' style='width: 100%' placeholder="Opsional">
                </div>
            </div>
            <div class='d-flex justify-content-center gap-5 pt-5'>
                <a href="/karir">
                    <button class='tutup rounded-pill px-3 py-1 fw-bold'>Tutup</button>
                </a>
                <button type='submit' class='daftar rounded-pill px-3 py-1 fw-bold'>Daftar</button>
            </div>
        </form>
    </div>
    <section class='karirform-footer'>
        <div class='container'>
            <div class='p-md-5 p-3 d-flex justify-content-center'>
                <div class='d-flex align-items-center justify-content-center gap-md-5 gap-3'>
                    <a href="https://www.facebook.com/internasionalteknik.solusindo">
                        <i class="fa-brands fa-facebook-f text-2xl border rounded-circle karir-icon-facebook"></i>
                      </a>
                      <a href="https://www.tiktok.com/@itsscale">
                        <i class="fa-brands fa-tiktok text-2xl border rounded-circle karir-icon"></i>
                      </a>
                      <a href="https://www.instagram.com/its.scale/">
                        <i class="fa-brands fa-instagram text-2xl border rounded-circle karir-icon"></i>
                      </a>
                      <a href="https://www.youtube.com/@its_scale">
                        <i class="fa-brands fa-youtube text-2xl border rounded-circle karir-icon-youtube"></i>
                      </a>
                      <a href="https://www.linkedin.com/in/pt-internasional-teknik-solusindo-181a93151/">
                        <i class="fa-brands fa-linkedin-in text-2xl border rounded-circle karir-icon"></i>
                      </a>
                      <a href="https://twitter.com/its_scale">
                        <i class="fa-brands fa-x-twitter text-2xl border rounded-circle karir-icon-x"></i>
                      </a>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/ef25a92f55.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
