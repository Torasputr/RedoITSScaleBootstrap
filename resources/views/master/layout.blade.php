<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Styles CSS --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  </head>
  <body class='w-full'>
    <header class='border'>
      <div class='d-flex align-items-center p-3 justify-content-between'>
        <div class='d-flex align-items-center gap-4'>
          <img class='its-logo' src="{{ asset('images/navbar/Logo ITS 2021.png') }}" alt="">
          <div class='text-center'>
            <h1 class='text-lg logo-title fw-bold'>PT Internasional Teknik Solusindo</h1>
            <h1 class='text-sm logo-subtitle'>Weighing Solution & Integration</h1>
          </div>
        </div>
        <div class='d-flex align-items-center gap-3 '>
          <a class='navbar-link' href="/">Beranda</a>
          <a class='navbar-link' href="/tentang-kami">Tentang</a>
          <a class='navbar-link' href="/produk">Produk</a>
          <a class='navbar-link' href="/artikel">Artikel</a>
          <a class='navbar-link' href="/karir">Karir</a>
          <a class='navbar-link' href="/kontak">Kontak</a>
        </div>
        <div class="search-container">
          <input type="text" placeholder="" class='rounded-pill border'>
          <i class="fas fa-search search-icon p-1 text-xl rounded-circle"></i>
        </div>
      </div>
    </header>
    @yield('content')
    {{-- Footer --}}
    <footer class='p-4'>
      <div class='grid-cols-2 align-items-center'>
        <div class='alamat'>
          <div>
              <div class='d-flex align-items-center gap-2 border-bottom'>
                  <i class="fa-solid fa-location-dot text-3xl footer-map"></i>
                  <h1 class='text-2xl footer-cabang'>Green Lake City</h1>
              </div>
              <h1 class='footer-alamat text-lg pt-3 text-justify fw-light'>Rukan Crown Blok B.1, Jl. Green Lake City Boulevard No.01, RT.005/RW.008, Petir, Kec. Cipondoh, Kota Tangerang, Banten 15147</h1>
          </div>
          <div class='pt-4'>
              <div class='d-flex align-items-center gap-2 border-bottom'>
                  <i class="fa-solid fa-location-dot text-3xl footer-map"></i>
                  <h1 class='text-2xl footer-cabang'>Cikarang</h1>
              </div>
              <h1 class='footer-alamat text-lg pt-3 text-justify fw-light'>Jl. Raya Industri Jl. Jababeka Raya No.67, Pasirgombong, Kecamatan Cikarang Ut, Kabupaten Bekasi, Jawa Barat 17530</h1>
          </div>
        </div>
        <div class='newsletter'>
          <h1 class='text-center newsletter-text fw-bold'>BERLANGGANAN KE NEWSLETTER KAMI</h1>
          <div class='d-flex justify-content-center gap-2 py-3'>
            <input type="text">
            <button class='fw-bold'>REGISTER</button>
          </div>
          <div class='d-flex justify-content-around align-items-center pt-2'>
            <a href="">
              <i class="fa-brands fa-facebook-f text-3xl border rounded-circle newsletter-icon-facebook"></i>
            </a>
            <a href="">
              <i class="fa-brands fa-tiktok text-3xl border rounded-circle newsletter-icon"></i>
            </a>
            <a href="">
              <i class="fa-brands fa-instagram text-3xl border rounded-circle newsletter-icon"></i>
            </a>
            <a href="">
              <i class="fa-brands fa-youtube text-3xl border rounded-circle newsletter-icon-youtube"></i>
            </a>
            <a href="">
              <i class="fa-brands fa-linkedin-in text-3xl border rounded-circle newsletter-icon"></i>
            </a>
            <a href="">
              <i class="fa-brands fa-x-twitter text-3xl border rounded-circle newsletter-icon"></i>
            </a>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- FontAwesome JS --}}
    <script src="https://kit.fontawesome.com/ef25a92f55.js" crossorigin="anonymous"></script>
    {{-- Swiper JS --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    {{-- Homepage Slider JS --}}
    <script>
        var swiper = new Swiper('#homepage-slider', {
            loop: true,
        });
    </script>
  </body>
</html>
