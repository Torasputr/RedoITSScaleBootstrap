<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITS Scale - {{ $position->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z9QNF58KZK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-Z9QNF58KZK');
    </script>
  </head>
  <body class='overflow-x-hidden'>
    <section class='overflow-x-hidden'>
        {{-- Banner Start --}}
        <div class=''>
            <img class='img-fluid' src="{{ asset('images/karir/popup/bannerSales.webp') }}" alt="">
        </div>
        <section class='mx-5'>
            <div class='pt-5 pb-4'>
                <h1 class='fw-bold secondary'>{{ $position->name }}</h1>
            </div>
            <div class='pb-4'>
                <h2 class='fw-bold'>Job Summary</h2>
                <h5  class='fw-normal text-justify'>{{ $position->jobdesc }}</h5 >
            </div>
            <div class='pb-3'>
                <h2 class='fw-bold'>Tanggung Jawab</h2>
                <ul>
                    @foreach ($position->responsibilites as $responsibility)
                        <li class='text-xl'>{{ $responsibility->resp }}</li>
                    @endforeach
                </ul>
            </div>
            @if($position->specialrequirements->count() != 0)
                <div class='pb-4'>
                    <h2 class='fw-bold'>Kualifikasi {{ $position->name }}</h2>
                    <ul>
                        @foreach ($position->specialrequirements as $specialrequirement)
                            <li class='text-xl'>{{ $specialrequirement->specialrequirements }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class=''>
                <h2 class='fw-bold'>Kualifikasi</h2>
                <ul>
                    @foreach ($position->requirements as $requirement)
                        <li class='text-xl'>{{ $requirement->req }}</li>
                    @endforeach
                </ul>
            </div>
        </section>
        {{-- Footer Start --}}
        <section class='karir-footer'>
            <div class='container'>
                <div class='p-md-5 p-3 d-flex justify-content-between'>
                    <div class='d-flex align-items-center'>
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
                    <div class='d-flex justify-content-around gap-3'>
                        <a href="/karir">
                            <button class='tutup rounded-pill px-3 py-1 fw-bold'>Tutup</button>
                        </a>
                        <a href="">
                            <button class='daftar rounded-pill px-3 py-1 fw-bold'>Daftar</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- Footer End --}}
    </section>
    {{-- FontAwesome JS --}}
    <script src="https://kit.fontawesome.com/ef25a92f55.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
