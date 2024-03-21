<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  </head>
  <body>
      <div class='popup-karir'>
        {{-- Banner Start --}}
        <div>
            <img class='banner' src="{{ asset('images/karir/popupbanner.png') }}" alt="">
        </div>
        {{-- Banner End --}}
        {{-- Content Start --}}
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
            <h1 class='fw-bold pt-3 text-4xl'>Deskripsi Pekerjaan</h1>
            <h1 class='fw-light text-lg pt-3 text-justify'>Sebagai seorang Digital Marketing Specialist, Anda akan bertanggung jawab untuk mengembangkan, melaksanakan, dan mengelola strategi pemasaran digital perusahaan kami. Anda akan bekerja untuk meningkatkan visibilitas merek kami secara online, mengoptimalkan kampanye digital, dan menganalisis data untuk mencapai tujuan pemasaran yang ditetapkan.</h1>
            <h1 class='fw-bold pt-3 text-4xl'>Tanggung Jawab</h1>
            <ul class='pt-2'>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Mengembangkan strategi pemasaran digital yang efektif untuk meningkatkan lalu lintas situs web, meningkatkan konversi, dan memperkuat kehadiran merek.
                </li>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Merancang dan melaksanakan kampanye pemasaran digital melalui berbagai saluran online, termasuk media sosial, SEO, PPC, email, dan konten.
                </li>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Menganalisis data kampanye digital dan kinerja situs web untuk mengidentifikasi peluang dan mengoptimalkan strategi pemasaran.
                </li>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Mengelola dan memelihara kehadiran merek perusahaan di platform media sosial, serta berinteraksi dengan audiens secara aktif.
                </li>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Mengelola anggaran pemasaran digital dengan efisien, memastikan penggunaan yang optimal untuk mencapai ROI yang diinginkan.
                </li>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Menyelenggarakan riset pasar dan analisis pesaing untuk memahami tren industri dan mengidentifikasi peluang baru.
                </li>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Berkolaborasi dengan tim kreatif untuk menghasilkan konten yang menarik dan relevan untuk kampanye pemasaran.
                </li>
            </ul>
            <h1 class='fw-bold pt-3 text-4xl'>Kualifikasi</h1>
            <ul>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Pengalaman kerja yang terbukti sebagai spesialis pemasaran digital atau peran terkait.
                </li>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Memiliki pemahaman yang kuat tentang strategi pemasaran digital, termasuk SEO, SEM, media sosial, dan analitik web.
                </li>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Kemampuan analitis yang baik untuk menginterpretasikan data dan membuat keputusan berdasarkan wawasan yang diperoleh.
                </li>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Keahlian dalam menggunakan alat pemasaran digital seperti Google Analytics, Google AdWords, dan platform media sosial.
                </li>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Kreatif, proaktif, dan mampu bekerja secara mandiri maupun dalam tim.
                </li>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Kemampuan komunikasi yang baik, baik secara lisan maupun tertulis.
                </li>
                <li class='fw-light text-lg pt-3 text-justify'>
                    Gelar sarjana dalam pemasaran, komunikasi, atau bidang terkait merupakan nilai tambah.
                </li>
            </ul>

        </div>
        <div class='d-flex align-items-center justify-content-between footer-karir-popup p-5'>
            <div class=''>
                <a href="">
                    <i class="fa-brands fa-facebook-f text-2xl border rounded-circle popup-icon-facebook"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-tiktok text-2xl border rounded-circle popup-icon"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-instagram text-2xl border rounded-circle popup-icon"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-youtube text-2xl border rounded-circle popup-icon-youtube"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-linkedin-in text-2xl border rounded-circle popup-icon"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-x-twitter text-2xl border rounded-circle popup-icon-x"></i>
                </a>
            </div>
            <div class='d-flex align-items-center'>
                <div>
                    <div class='d-flex justify-content-center py-2 gap-5'>
                        <a class='popup-tutup text-xl fw-bold p-2 rounded-pill px-4' href="">Tutup</a>
                        <a class='popup-daftar text-xl fw-bold p-2 rounded-pill px-4' href="">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Content End --}}
    </div>
    <script src="https://kit.fontawesome.com/ef25a92f55.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- FontAwesome Kit --}}
  </body>
</html>
