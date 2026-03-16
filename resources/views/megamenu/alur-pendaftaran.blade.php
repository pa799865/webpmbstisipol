<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PMB-STISIPOL Raja Haji</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Landify
  * Template URL: https://bootstrapmade.com/landify-bootstrap-landing-page-template/
  * Updated: Aug 04 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.webp" alt=""> -->
                <h1 class="sitename">STISIPOL Raja Haji</h1>
            </a>

            <nav id="navmenu" class="navmenu" style="padding-left: 20vw">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('index') }}">Fasilitas</a></li>
                    <li><a href="{{ route('index') }}">Biaya Kuliah</a></li>
                    <li><a href="{{ route('index') }}">Berita</a></li>

                    <!-- Megamenu 2 -->
                    <li class="megamenu-2"><a href="#"><span>Lainnya</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>

                        <!-- Mobile Megamenu -->
                        <ul class="mobile-megamenu">

                            <li class="dropdown"><a href="#"><span>Program Studi</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ route('konsentrasi') }}">Konsentrasi</a></li>
                                    <li><a href="{{ route('profil-lulusan') }}">Profil Lulusan</a></li>
                                    <li><a href="{{ route('pilihan-kelas') }}">Pilihan Kelas</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#"><span>Pendaftaran</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Alur Pendaftaran</a></li>
                                   
                                </ul>
                            </li>

                            <li><a href="{{ route('beasiswa') }}"><span>Beasiswa</span></a></li>



                        </ul><!-- End Mobile Megamenu -->

                        <!-- Desktop Megamenu -->
                        <div class="desktop-megamenu">

                            <div class="tab-navigation">
                                <ul class="nav nav-tabs flex-column" id="2190-megamenu-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="2190-tab-1-tab" data-bs-toggle="tab"
                                            data-bs-target="#2190-tab-1" type="button" role="tab"
                                            aria-controls="2190-tab-1" aria-selected="true">
                                            <i class="bi bi-journals"></i>
                                            <span>Program Studi</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="2190-tab-2-tab" data-bs-toggle="tab"
                                            data-bs-target="#2190-tab-2" type="button" role="tab"
                                            aria-controls="2190-tab-2" aria-selected="false">
                                            <i class="bi bi-pencil-square"></i>
                                            <span>Pendaftaran</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="2190-tab-3-tab" data-bs-toggle="tab"
                                            data-bs-target="#2190-tab-3" type="button" role="tab"
                                            aria-controls="2190-tab-3" aria-selected="false">
                                            <i class="bi bi-mortarboard" aria-hidden="true"></i>
                                            <span>Beasiswa</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">

                                <!-- Enterprise Software Tab -->
                                <div class="tab-pane fade show active" id="2190-tab-1" role="tabpanel"
                                    aria-labelledby="2190-tab-1-tab">
                                    <div class="content-grid">
                                        <div class="product-section">
                                            <div class="product-list">
                                                <a href="{{ route('konsentrasi') }}" class="product-link">
                                                    <i class="bi bi-bullseye"></i>
                                                    <div>
                                                        <span>Konsentrasi</span>
                                                        <small></small>
                                                    </div>
                                                </a>
                                                <a href="{{ route('profil-lulusan') }}" class="product-link">
                                                    <i class="bi bi-person-badge"></i>
                                                    <div>
                                                        <span>Profil Lulusan</span>
                                                        <small></small>
                                                    </div>
                                                </a>
                                                <a href="{{ route('pilihan-kelas') }}" class="product-link">
                                                    <i class="bi bi-card-list"></i>
                                                    <div>
                                                        <span>Pilihan Kelas</span>
                                                        <small></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Development Tools Tab -->
                                <div class="tab-pane fade" id="2190-tab-2" role="tabpanel"
                                    aria-labelledby="2190-tab-2-tab">
                                    <div class="content-grid">
                                        <div class="product-section">
                                            <div class="product-list">
                                                <a href="#" class="product-link">
                                                    <i class="bi bi-diagram-3"></i>
                                                    <div>
                                                        <span>Alur Pendaftaran</span>
                                                        <small></small>
                                                    </div>
                                                </a>
                                                
                                            </div>
                                        </div>

                                        <div class="product-section">
                                            <div class="product-list">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Creative Suite Tab -->
                                <div class="tab-pane fade" id="2190-tab-3" role="tabpanel"
                                    aria-labelledby="2190-tab-3-tab">
                                    <div class="content-grid">
                                        <div class="product-section">
                                            <div class="product-list">
                                                <a href="{{ route('beasiswa') }}" class="product-link">
                                                    <i class="bi bi-award"></i>
                                                    <div>
                                                        <span>Beasiswa</span>
                                                        <small></small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- End Desktop Megamenu -->

                    </li><!-- End Megamenu 2 -->

                    <li><a href="{{ route('downloads') }}">Download</a></li>

                    <li>
                        <a id="daftar" href="https://siakad2.stisipolrajahaji.ac.id/index.php?page=Pendaftaran" target="_blank"
                            onmouseover="this.style.boxShadow='1px 1px 30px #023047';this.style.color='#fff';this.style.border='none';this.querySelector('span').style.visibility='visible';this.querySelector('span').style.transform='scale(100) translateX(2px)';"
                            onmouseout="this.style.boxShadow='none';this.style.color='#4e4e4e';this.style.border='2px solid #d5e5e5';this.querySelector('span').style.visibility='hidden';this.querySelector('span').style.transform='scale(1)';">
                            Daftar
                            <span></span>
                        </a>
                    </li>


                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">

        <!-- Schedule Section -->
        <section id="schedule" class="schedule section">
            <!-- Section Title -->
            <div class="container section-title mt-5" data-aos="fade-up">
                <h2>Alur Pendaftaran Online</h2>
                <p>Ini adalah halaman Alur Pendaftaran beserta Jalurnya</p>
            </div><!-- End Section Title -->

            <!-- Alur Pendaftaran Image Section -->
            <section id="alur-image" class="alur-image section text-center mt-5 mb-5">
                <div class="container" data-aos="fade-up">
                    <div class="alur-frame border rounded-4 shadow-lg p-3">
                        <img src="../assets/img/lainnya/pendaftaran/{{ $alurpendaftarans[0]->tahap ?? 'Alur Pendaftaran Online.png' }}"
                            alt="Alur Pendaftaran Online STISIPOL Raja Haji" class="img-fluid rounded-3"
                            style="max-width: 50%; height: auto;">
                    </div>
                </div>
            </section>
            <!-- /Alur Pendaftaran Image Section -->


            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="tab-content" id="schedule-tabContent">

                    <div class="tab-pane fade show active" id="schedule-tab-pane-1" role="tabpanel"
                        aria-labelledby="schedule-tab-1" tabindex="0">
                        <div class="schedule-content">
                            <div class="session-timeline">

                                <div class="session-block">
                                    <div class="session-time">
                                        <span class="start">Tahap 1</span>
                                    </div>
                                    <div class="session-card">
                                        <div class="session-info">
                                            <h3 class="session-title">Isi Form Online Di <a class="white"
                                                    href="https://portal.stisipolrajahaji.ac.id"
                                                    target="_blank">portal.stisipolrajahaji.ac.id</a>
                                                Dan Klik "Pendaftaran Mahasiswa Baru"
                                            </h3>
                                        </div>

                                    </div>
                                </div><!-- End Session Block -->

                                <div class="session-block">
                                    <div class="session-time">
                                        <span class="start">Tahap 2</span>
                                    </div>
                                    <div class="session-card break-card">
                                        <div class="session-info">

                                            <h3 class="session-title">Bayar Formulir <a class="blue_light">Via
                                                    Bank/ATM/M-Banking/E-Wallet</a></h3>
                                        </div>

                                    </div>
                                </div><!-- End Session Block -->

                                <div class="session-block">
                                    <div class="session-time">
                                        <span class="start">Tahap 3</span>
                                    </div>
                                    <div class="session-card">
                                        <div class="session-info">
                                            <h3 class="session-title">Konfirmasi Pembayaran - Upload Bukti Bayar di Web
                                                <a class="white" href="http://bit.ly/konfirmasi_pembayaran_formulir"
                                                    target="_blank">http://bit.ly/konfirmasi_pembayaran_formulir</a>
                                            </h3>
                                        </div>

                                    </div>
                                </div><!-- End Session Block -->

                                <div class="session-block">
                                    <div class="session-time">
                                        <span class="start">Tahap 4</span>
                                    </div>
                                    <div class="session-card break-card">
                                        <div class="session-info">
                                            <h3 class="session-title">Login Kembali Buka: <a class="blue_light"
                                                    href="http://bit.ly/Login_EKampusStisipol"
                                                    target="_blank">http://bit.ly/Login_EKampusStisipol</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div><!-- End Session Block -->

                                <div class="session-block">
                                    <div class="session-time">
                                        <span class="start">Tahap 5</span>
                                    </div>
                                    <div class="session-card">
                                        <div class="session-info">
                                            <h3 class="session-title">Setelah Pembayaran Diterima, Login untuk <a
                                                    class="white">
                                                    <ul>
                                                        <li>Isi Biodata Lengkap</li>
                                                        <li>Lengkapi Formulir Pendaftaran</li>
                                                        <li>Upload Foto</li>
                                                    </ul>
                                                </a>
                                            </h3>
                                        </div>
                                    </div>

                                </div>

                                <div class="session-block">
                                    <div class="session-time">
                                        <span class="start">Tahap 6</span>
                                    </div>
                                    <div class="session-card break-card">
                                        <div class="session-info">
                                            <h3 class="session-title">Data Login: <a class="blue_light">
                                                    <ul>
                                                        <li>Username: <span class="text-accent">Nomor Pendaftaran</span>
                                                        </li>
                                                        <li>Password: <span class="text-accent">Password yang Dibuat
                                                                Saat Mendaftar</span></li>
                                                        <li>Pilihan Login: <span class="text-accent">Mahasiswa
                                                                Baru</span></li>
                                                    </ul>
                                                </a>
                                            </h3>
                                        </div>

                                    </div>
                                </div><!-- End Session Block -->

                                <div class="session-block">
                                    <div class="session-time">
                                        <span class="start">Tahap 7</span>
                                    </div>
                                    <div class="session-card">
                                        <div class="session-info">
                                            <h3 class="session-title">Setelah Lengkapi Formulir <a class="white">
                                                    <ul>
                                                        <li>Masuk ke Menu Jadwal Ujian PMB</li>
                                                        <li>Pilih Jadwal Tes Sesuai Pilihan</li>
                                                        <li>Print Out Kartu Ujian Sebagai Bukti Pendaftaran</li>
                                                    </ul>
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div><!-- End Session Block -->

                                <div class="session-block">
                                    <div class="session-time">
                                        <span class="start">Tahap 8</span>
                                    </div>
                                    <div class="session-card break-card">
                                        <div class="session-info">
                                            <h3 class="session-title">Hadir di Kampus STISIPOL Raja Haji Sesuai Jadwal
                                                Ujian, Dengan Membawa: <a class="blue_light">
                                                    <ul>
                                                        <li>Kartu Ujian</li>
                                                        <li>Bukti Pembayaran Asli</li>
                                                    </ul>
                                                </a>
                                            </h3>
                                        </div>

                                    </div>
                                </div><!-- End Session Block -->

                                <div class="session-block">
                                    <div class="session-time">
                                        <span class="start">Tahap 9</span>
                                    </div>
                                    <div class="session-card">
                                        <div class="session-info">
                                            <h3 class="session-title">Ujian Dapat Dilakukan dari Tempat Masing-Masing
                                                Secara Online</h3>
                                        </div>
                                    </div>
                                </div><!-- End Session Block -->

                                <div class="session-block">
                                    <div class="session-time">
                                        <span class="start">Tahap 10</span>
                                    </div>
                                    <div class="session-card break-card">
                                        <div class="session-info">
                                            <h3 class="session-title">Jika Ada Kendala dan Pertanyaan Bisa Melalui Group
                                                Telegram di <a href="t.me/stisipol" class="blue_light"
                                                    target="_blank">t.me/stisipol </a>atau <a class="blue_light">Hubungi
                                                    Contact Person di Brosur</a>
                                            </h3>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Session Block -->




                        </div><!-- End Session Timeline -->
                    </div><!-- End Schedule Content -->
                </div>


            </div><!-- End Tab Content -->

            </div>

            <div class="schedule-actions">
                <button class="btn btn-primary">
                    <i class="bi bi-download"></i>
                    Download Full Agenda
                </button>
                <button class="btn btn-outline">
                    <i class="bi bi-calendar-event"></i>
                    Export to Calendar
                </button>
            </div>
        </section><!-- /Schedule Section -->

         <footer id="footer" class="footer position-relative footer-background">

            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">PMB STISIPOL Raja Haji</span>
                        </a>
                        <p>Selamat datang di Portal Resmi Penerimaan Mahasiswa Baru. Melalui laman ini, kami mengundang
                            generasi muda berkomitmen untuk bergabung dalam lingkungan akademik yang unggul, inovatif,
                            dan berorientasi pada pengembangan ilmu serta pengabdian kepada masyarakat. Mari bertumbuh,
                            berinovasi, dan berkontribusi bersama kami untuk masa depan bangsa.</p>
                        <div class="social-links d-flex mt-4">
                            <a href="https://www.facebook.com/stisipolrajahaji.tanjungpinang.9" target="_blank"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/Stisipolrajahaji.official" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.youtube.com/@stisipolrajahajiofficial2342" target="_blank"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('index') }}">Fasilitas</a></li>
                            <li><a href="{{ route('index') }}">Biaya Kuliah</a></li>
                            <li><a href="{{ route('downloads') }}">Download</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>Jl. Raja Haji Fisabilillah No. 48, </p>
                        <p>Tanjungpinang, Kepulauan Riau</p>
                        <p class="mt-4"><strong>Billy:</strong> <span>0813 7858 2264</span></p>
                        <p><strong>Tyo:</strong> <span>0823 9193 5591</span></p>
                        <p><strong>Email:</strong> <span>pmb@stisipolrajahaji.ac.id</span></p>
                    </div>

                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>© <span>2025 </span><span>PMB STISIPOL RAJA HAJI</span></p>
            </div>

        </footer>



    </main>



    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>