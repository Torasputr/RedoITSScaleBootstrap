<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>@yield('title')</title>
        <link rel="shortcut icon" type='icon' href="{{ asset('images/navbar/Logo ITS 2021.webp') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        {{-- Styles CSS --}}
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        {{-- Swiper CSS --}}
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z9QNF58KZK"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-Z9QNF58KZK');
        </script>
        {{-- General JS Script --}}
        <script defer src="{{ asset('js/script.js') }}"></script>
    </head>
    <body class='w-full overflow-x-hidden'>
        {{-- Navbar Start --}}
        <header class="navbar navbar-expand-lg p-3 border-bottom fixed-top">
            <div class="container-fluid">
                {{-- Navbar Logo Start --}}
                <div>
                    <a href="/">
                        <div class='d-flex align-items-center brand gap-3'>
                            <img class='logo' src="{{ asset('images/navbar/Logo ITS 2021.webp') }}" alt="">
                            <div class='text-center desktop'>
                                <h5 class="company-name" href="#">PT Internasional Teknik Solusindo</h5>
                                <h6 class="motto" href="#">Weighing Integration & Solution</h5>
                            </div>
                        </div>
                    </a>
                </div>
                {{-- Navbar Logo End --}}
                {{-- Hamburger Button Start --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                {{-- Hamburger Button End --}}
                {{-- Sidebar Start --}}
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    {{-- Title Start --}}
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PT Internasional Teknik Solusindo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    {{-- Title End --}}
                    {{-- Content Start --}}
                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1 gap-3 pe-3 d-flex justify-content-center align-items-center">
                            {{-- Links Start --}}
                            <li class="nav-item">
                                <a class="nav-link" href="/">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/tentang-kami">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/artikel">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/produk">Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/karir">Karir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kontak">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/gsc">Service Center</a>
                            </li>
                            {{-- Links End --}}
                        </ul>
                        {{-- Search Bar Start --}}
                        <div class=''>
                            <input name='search' id='search' class="form-control px-3 text-md me-2 rounded-pill fst-italic" type="search" placeholder="Telusuri Produk Disini...">
                            <div id='content'>

                            </div>
                        </div>
                        {{-- Search Bar End --}}
                    </div>
                </div>
            </div>
        </header>

        <div class='content'>
            @yield('content')
        </div>
        {{-- Whatsapp Icon Start --}}
        <div class='container'>
            <div class="whatsapp-icon position-fixed bottom-0 end-0 mb-4 me-4 rounded-circle p-2">
                <a href="https://api.whatsapp.com/send/?phone=6281119103783&text=Halo%2C+saya+membutuhkan+timbangan+digital">
                    <i class="fa-brands fa-whatsapp fs-1 wa-icon"></i>
                </a>
            </div>
        </div>
        {{-- Whatsapp Icon End --}}
        {{-- Footer Mobile Start --}}
        <footer class='p-3 mobile'>
            <div class="container-fluid">
                <div class="row">
                    {{-- Location 1 Start --}}
                    <div class="col">
                        <div class='location'>
                            <div class='d-flex align-items-center gap-2 title border-bottom'>
                                <i class="fa-solid fa-location-dot text-xl pb-2 mapicon"></i>
                                <h6>Green Lake City</h6>
                            </div>
                            <h6 class='fw-light text-sm pt-2 text-justify'>Rukan Crown Blok B.1, Jl. Green Lake City Boulevard No.01, RT.005/RW.008, Petir, Kec. Cipondoh, Kota Tangerang, Banten 15147</h6>
                        </div>
                    </div>
                    {{-- Location 1 End --}}
                    {{-- Location 2 Start --}}
                    <div class="col">
                        <div class='location'>
                            <div class='d-flex align-items-center gap-2 title border-bottom'>
                                <i class="fa-solid fa-location-dot text-xl pb-2 mapicon"></i>
                                <h6>Cikarang</h6>
                            </div>
                            <h6 class='fw-light text-sm pt-2 text-justify'>Jl. Raya Industri Jl. Jababeka Raya No.67, Pasirgombong, Kecamatan Cikarang Ut, Kabupaten Bekasi, Jawa Barat 17530</h6>
                        </div>
                    </div>
                    {{-- Location 2 End --}}
                </div>
                {{-- Newsletter Start --}}
                <div class='pt-2 newsletter'>
                    <div class='d-flex justify-content-center'>
                        <div>
                            <h6 class='pb-2 title text-center fw-bold'>BERLANGGANAN KE NEWSLETTER KAMI</h6>
                            {{-- Search Start --}}
                            <div class='pb-3 d-flex align-items-center gap-2 search'>
                                <input class='fst-italic box text-sm' type="email" placeholder='email@example.com'>
                                <button class='fw-bold button text-sm'>REGISTER</button>
                            </div>
                            {{-- Search End --}}
                        </div>
                    </div>
                </div>
                {{-- Newsletter End --}}
                <div class='d-flex align-items-center justify-content-center gap-3'>
                    <a href="https://www.facebook.com/internasionalteknik.solusindo">
                        <i class="fa-brands fa-facebook-f text-xl border rounded-circle newsletter-icon-facebook"></i>
                      </a>
                      <a href="https://www.tiktok.com/@itsscale">
                        <i class="fa-brands fa-tiktok text-xl border rounded-circle newsletter-icon"></i>
                      </a>
                      <a href="https://www.instagram.com/its.scale/">
                        <i class="fa-brands fa-instagram text-xl border rounded-circle newsletter-icon"></i>
                      </a>
                      <a href="https://www.youtube.com/@its_scale">
                        <i class="fa-brands fa-youtube text-xl border rounded-circle newsletter-icon-youtube"></i>
                      </a>
                      <a href="https://www.linkedin.com/in/pt-internasional-teknik-solusindo-181a93151/">
                        <i class="fa-brands fa-linkedin-in text-xl border rounded-circle newsletter-icon"></i>
                      </a>
                      <a href="https://twitter.com/its_scale">
                        <i class="fa-brands fa-x-twitter text-xl border rounded-circle newsletter-icon-x"></i>
                      </a>
                </div>
            </div>
        </footer>
        {{-- Footer Mobile End --}}
        {{-- Footer Desktop Start --}}
        <footer class='p-5 desktop'>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        {{-- Location 1 Start --}}
                        <div class='location'>
                            <div class='d-flex align-items-center gap-3 title border-bottom'>
                                <i class="fa-solid fa-location-dot text-3xl pb-2 mapicon"></i>
                                <h2>Green Lake City</h2>
                            </div>
                            <h6 class='fw-light text-xl pt-2 text-justify'>Rukan Crown Blok B.1, Jl. Green Lake City Boulevard No.01, RT.005/RW.008, Petir, Kec. Cipondoh, Kota Tangerang, Banten 15147</h6>
                        </div>
                        {{-- Location 1 End --}}
                        {{-- Location 2 Start --}}
                        <div class='location pt-3'>
                            <div class='d-flex align-items-center gap-3 title border-bottom'>
                                <i class="fa-solid fa-location-dot text-3xl pb-2 mapicon"></i>
                                <h2>Cikarang</h2>
                            </div>
                            <h6 class='fw-light text-xl pt-2 text-justify'>Jl. Raya Industri Jl. Jababeka Raya No.67, Pasirgombong, Kecamatan Cikarang Ut, Kabupaten Bekasi, Jawa Barat 17530</h6>
                        </div>
                        {{-- Location 2 End --}}
                    </div>
                    <div class="col-md-6">
                        {{-- Newsletter Start --}}
                        <div class='pt-2 newsletter'>
                            <div class='d-flex justify-content-center'>
                                <div>
                                    <h4 class='title text-center fw-bold'>BERLANGGANAN KE NEWSLETTER KAMI</h4>
                                    {{-- Search Start --}}
                                    <form action="/newuser" method='POST'>
                                        @csrf
                                        <div class='d-flex align-items-center justify-content-center gap-2 search py-5'>
                                            <input class='fst-italic box text-sm' name='email' type="email" placeholder='email@example.com'>
                                            @error('email') <span class='text-danger'>{{ $message }}</span> @enderror
                                            <button class='fw-bold button text-sm'>REGISTER</button>
                                        </div>
                                    </form>
                                    {{-- Search End --}}
                                    <div class='d-flex align-items-center justify-content-between'>
                                        <a href="https://www.facebook.com/internasionalteknik.solusindo">
                                            <i class="fa-brands fa-facebook-f text-2xl border rounded-circle newsletter-icon-facebook"></i>
                                          </a>
                                          <a href="https://www.tiktok.com/@itsscale">
                                            <i class="fa-brands fa-tiktok text-2xl border rounded-circle newsletter-icon"></i>
                                          </a>
                                          <a href="https://www.instagram.com/its.scale/">
                                            <i class="fa-brands fa-instagram text-2xl border rounded-circle newsletter-icon"></i>
                                          </a>
                                          <a href="https://www.youtube.com/@its_scale">
                                            <i class="fa-brands fa-youtube text-2xl border rounded-circle newsletter-icon-youtube"></i>
                                          </a>
                                          <a href="https://www.linkedin.com/in/pt-internasional-teknik-solusindo-181a93151/">
                                            <i class="fa-brands fa-linkedin-in text-2xl border rounded-circle newsletter-icon"></i>
                                          </a>
                                          <a href="https://twitter.com/its_scale">
                                            <i class="fa-brands fa-x-twitter text-2xl border rounded-circle newsletter-icon-x"></i>
                                          </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Newsletter End --}}
                    </div>
                    {{-- Location 2 End --}}
                </div>
            </div>
        </footer>
        {{-- Footer Desktop End --}}
        {{-- Bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        {{-- FontAwesome JS --}}
        <script src="https://kit.fontawesome.com/ef25a92f55.js" crossorigin="anonymous"></script>
        {{-- Swiper JS --}}
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        {{-- Homepage Slider JS --}}
        <script>
            var swiper = new Swiper('#homepage-slider', {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                }
            });
        </script>
        {{-- Brand Slider JS --}}
        <script>
            var swiper = new Swiper('.brands-section', {
            slidesPerView: 4,
            spaceBetween: 10,
            centeredSlides: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            }
        });
        </script>
        <script>
            var swiper = new Swiper('.brands-section-mobile', {
                slidesPerView: 2,
                spaceBetween: 10,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                }
            });

        </script>
        {{-- General Script JS --}}
        <script src='{{ asset('js/script.js') }}'></script>
        {{-- Modal Scripts --}}
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            // Trigger modal on page load
            $(document).ready(function(){
                $('#modalTriggerButton').click();
            });
        </script>
        {{-- Carousel Script --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var carousel = new bootstrap.Carousel(document.getElementById('sertifCarousel'), {
                    interval: false
                });
            });
        </script>
        <script>
            var swiper = new Swiper('.swiper-container-article-mobile', {
                loop: true,
                autoplay: {
                    delay: 5000,
                },
            });
        </script>
        <script>
            var swiper = new Swiper('.item-swiper', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                // Add navigation buttons
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                // Optional: Add breakpoints for responsive design
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 0
                    },
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    }
                }
            });
        </script>
        <script>
            $('#search').on('keyup', function() {
                var $value = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: "{{ URL::to('search') }}",
                    data: {search: $value},
                    success: function(data) {
                        console.log(data);
                        $('#content').html(data);
                    }
                });
            });
        </script>
    </body>
</html>
