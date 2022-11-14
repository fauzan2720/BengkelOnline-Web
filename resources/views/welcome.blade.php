<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Welcome Bengkol - Bengkel Online</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/bengkol.png" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/landing-style.css" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Header -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="assets/img/logo_bengkol.png" alt="Bengkol">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="#home" class="page-scroll active" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#bengkol" class="page-scroll" aria-label="Toggle navigation">Bengkol</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#features" class="page-scroll" aria-label="Toggle navigation">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#faq" class="page-scroll" aria-label="Toggle navigation">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#download" class="page-scroll" aria-label="Toggle navigation">Download</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="button add-list-button">
                                <a href="{{ url('/login') }}" class="btn">Sign In</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- Hero Area -->
    <section id="home" class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInLeft" data-wow-delay=".4s">BENGKOL
                            <br>Bengkel Online
                        </h1>
                        <p class="wow fadeInLeft" data-wow-delay=".6s">
                            Bengkol adalah sebuah aplikasi yang menyediakan fitur yang dapat memanggil mekanik ketika pengendara mengalami mogok
                            ditengah perjalanan. Maka dengan adanya aplikasi Bengkol pengendara tidak perlu untuk mendorong kendaraan roda
                            dua sampai menemukan bengkel terdekat.</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="assets/img/phone2.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Deskripsi Bengkol -->
    <section id="bengkol" class="bengkol section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <div class="logo wow fadeInUp mb-5 mt-5" data-wow-delay=".4s">
                            <a href="{{ url('/') }}">
                                <img src="assets/img/logo_bengkol.png" alt="#" width="300px">
                            </a>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Kendaraan roda dua merupakan kendaraan yang sangat populer,
                            di samping penggunaannya yang efisien, kendaraan roda dua memiliki harga yang lebih terjangkau dibandingkan
                            dengan kendaraan yang lainnya. Seiring pemakaiannya, kendaraan roda dua akan mengalami penurunan performa
                            atau dapat mengalami kerusakan yang mengharuskan kendaraan roda dua untuk melakukan perawatan atau perbaikan.
                            Kendaraan roda dua yang membutuhkan perbaikan diharuskan untuk dibawa ke bengkel untuk diperbaiki. Tak jarang
                            juga pada saat pemakaian di perjalanan kendaraan roda dua mengalami kerusakan yang mengharuskan pengendara
                            berhenti dan mendorong kendaraan roda dua untuk menuju ke bengkel terdekat. Hal itu tentunya akan menguras
                            tenaga serta waktu pengendara jika harus mendorong kendaraannya untuk menemukan bengkel terdekat. Tujuan
                            dari penelitian ini adalah diciptakannya aplikasi mobile berbasis android untuk memudahkan pengendara
                            untuk memanggil mekanik bengkel untuk menghampiri pengendara untuk memanggil mekanik bengkel terdekat
                            yang akan menghampiri tempat dari kendaraan roda dua dari pengendara untuk diperbaiki.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Bengkol -->

    <!-- Features -->
    <section id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Features</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Service Kendaraan Anda Dengan Cepat dan Mudah.
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Aplikasi Bengkol menyediakan beberapa fitur yang tentunya memudahkan penggunanya.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <i class="fa fa-cogs"></i>
                        <h3>Panggil Mekanik</h3>
                        <p>Ketika pengendara mogok ditengah jalan, pengendara dapat memanggil mekanik dengan memanfaatkan fitur yang tersedia pada aplikasi ini.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <i class="fas fa-box-open"></i>
                        <h3>Marketplace</h3>
                        <p>User dapat membeli sparepart kendaraan secara online.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                        <i class="fas fa-map-pin"></i>
                        <h3>Pengingat Lokasi</h3>
                        <p>User dapat mengetahui kapan akan melakukan servis, berdasarkan terakhir servis yang dilakukannya. Ini bisa menjadi pengingat ketika akan servis rutin.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <i class="fas fa-motorcycle"></i>
                        <h3>Data Kendaraan</h3>
                        <p>User dapat menambahkan kendaraan lebih dari 1 sehingga dapat memilih kendaraan yang akan di servis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- FAQ -->
    <section id="faq" class="faq section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">FAQ</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Frequently Asked Questions about Bengkol App </h2>
                        <!-- <p class="wow fadeInUp" data-wow-delay=".6s">Berikut adalah beberapa pertanyaan mengenai aplikasi Bengkol.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="faq-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="accordion accordion-flush" id="accordionFlushfaqSatu">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq01" aria-expanded="false" aria-controls="faq01">
                                    <h6>Bagaimana cara memanggil mekanik untuk memperbaiki kendaraan?</h6>
                                </button>
                            </h2>
                            <div id="faq01" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushfaqSatu">
                                <div class="accordion-body">
                                    <p>User dapat menekan tombol panggil mekanik pada navigasi bawah, atau pada halaman home. Selanjutnya user memilih
                                        kendaraan yang mengalami permasalahan dan detail lokasi dari kendaraan user. Kemudian user dapat memilih Servis
                                        Ringan, atau Servis Komplit. Selain memilih jenis servis user dapat menuliskan kendala atau masalah dalam kendaraan
                                        yang sedang mogok. User juga dapat mengganti oli, jika ingin sekaligus mengganti oli. Jika mekanik berhasil
                                        ditemukan, user akan mendapatkan detail informasi dari mekanik, seperti statusnya dalam perjalanan, diproses,
                                        diselesaikan, dan nomor telepon dari mekanik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="accordion accordion-flush" id="accordionFlushfaqDua">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq02" aria-expanded="false" aria-controls="faq02">
                                    <h6>Bagaimana metode pembayarannya?</h6>
                                </button>
                            </h2>
                            <div id="faq02" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushfaqDua">
                                <div class="accordion-body">
                                    <p>Untuk pembayaran bisa melakukan pembayaran secara Tunai atau dapat melakukan pembayaran langsung ke mekanik yang bertugas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-6">
                    <div class="faq-item wow fadeInUp" data-wow-delay=".2s">
                        <div class="accordion accordion-flush" id="accordionFlushfaqTiga">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq03" aria-expanded="false" aria-controls="faq03">
                                        <h6>Bagaimana cara agar dapat menjadwalkan servis rutin?</h6>
                                    </button>
                                </h2>
                                <div id="faq03" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushfaqTiga">
                                    <div class="accordion-body">
                                        <p>Cukup mudah teman-teman, pada saat melakukan servis, otomatis sudah terjadwal servis
                                            rutin loh. Servis rutin ini terjadi berdasarkan km pada motor anda yang diinputkan dari
                                            aplikasi mekanik. Makanya buruan panggil mekanik!.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                <div class="faq-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="accordion accordion-flush" id="accordionFlushfaqEmpat">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq04" aria-expanded="false" aria-controls="faq04">
                                    <h6>Bagaimana cara mendapatkan aplikasi Bengkol?</h6>
                                </button>
                            </h2>
                            <div id="faq04" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushfaqEmpat">
                                <div class="accordion-body">
                                    <p>Aplikasi ini tersedia di google play store, silahkan cari dengan kata kunci "Bengkol" pada mesin pencarian google
                                        play store atau bisa langsung klik link download yang sudah tersedia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ -->

    <!-- Goal Action -->
    <section id="download" class="goal-action section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="goal-image wow fadeInLeft" data-wow-delay=".2s">
                        <img src="assets/img/app_2.png" alt="#">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="cta-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Download Aplikasi BENGKOL <br>Bengkel Online</h2>
                        <p class="wow fadeInUp" data-wow-delay=".2s">Nikmati Kemudahan Service Kendaraan Motor Anda</p>
                        <div class="button wow fadeInLeft" data-wow-delay=".4s">
                            <a href="javascript:void(0)" class="btn"><i class="lni lni-play-store"></i> Google
                                Play</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Goal Action -->

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="single-footer f-about">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="assets/img/logo_bengkol2.png" alt="#">
                            </a>
                        </div>
                        <p>SERVICE KENDARAAN ANDA DENGAN MUDAH DAN CEPAT</p>
                        <ul class="social">
                            <li><a href="" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="" target="_blank"><i class="fas fa-map-marker-alt"></i></a></li>
                            <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <p>Contact Us - +62 823-3845-3446</p>
                        <p class="copyright-text">Developed by <a href="#" rel="nofollow" target="_blank">DoubleTop Team</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ End Footer -->

    <!-- Scroll-Top -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
        // counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();
    </script>
</body>

</html>