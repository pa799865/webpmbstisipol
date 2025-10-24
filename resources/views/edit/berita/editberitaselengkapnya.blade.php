<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Edit Berita Selengkapnya - STISIPOL Raja Haji</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/assets/css/main.css" rel="stylesheet">

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
                <!-- <img src="/assets/img/logo.webp" alt=""> -->
                <h1 class="sitename">STISIPOL Raja Haji</h1>
            </a>

            <nav id="navmenu" class="navmenu" style="padding-left: 20vw">
                <ul>
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <li><a href="{{ route('dashboard') }}">Fasilitas</a></li>
                    <li><a href="{{ route('dashboard') }}">Biaya Kuliah</a></li>
                    <li><a href="{{ route('dashboard') }}" class="active">Berita</a></li>

                    <!-- Megamenu 2 -->
                    <li class="megamenu-2"><a href="#"><span>Lainnya</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>

                        <!-- Mobile Megamenu -->
                        <ul class="mobile-megamenu">

                            <li class="dropdown"><a href="#"><span>Program Studi</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="megaMenu/konsentrasi.html">Konsentrasi</a></li>
                                    <li><a href="megaMenu/profil-lulusan.html">Profil Lulusan</a></li>
                                    <li><a href="megaMenu/pilihan-kelas.html">Pilihan Kelas</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#"><span>Pendaftaran</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="megaMenu/alur-pendaftaran.html">Alur Pendaftaran</a></li>
                                    <li><a href="megaMenu/jalur-reguler.html">Jalur Reguler</a></li>
                                    <li><a href="megaMenu/jalur-prestasi.html">Jalur Prestasi</a></li>
                                    <li><a href="megaMenu/jalur-kip.html">Jalur Kartu Indonesia Pintar</a></li>
                                    <li><a href="megaMenu/jalur-rpl.html">Jalur Rekognisi Pembelajaran Lampau</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#"><span>Beasiswa</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="megaMenu/beasiswa-prestasi.html">Beasiswa Prestasi</a></li>
                                    <li><a href="megaMenu/beasiswa-kip.html">Beasiswa KIP</a></li>
                                </ul>
                            </li>



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
                                                <a href="megaMenu/konsentrasi.html" class="product-link">
                                                    <i class="bi bi-bullseye"></i>
                                                    <div>
                                                        <span>Konsentrasi</span>
                                                        <small>qwerty</small>
                                                    </div>
                                                </a>
                                                <a href="megaMenu/profil-lulusan.html" class="product-link">
                                                    <i class="bi bi-person-badge"></i>
                                                    <div>
                                                        <span>Profil Lulusan</span>
                                                        <small>qwerty</small>
                                                    </div>
                                                </a>
                                                <a href="megaMenu/pilihan-kelas.html" class="product-link">
                                                    <i class="bi bi-card-list"></i>
                                                    <div>
                                                        <span>Pilihan Kelas</span>
                                                        <small>qwerty</small>
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
                                                <a href="megaMenu/alur-pendaftaran.html" class="product-link">
                                                    <i class="bi bi-diagram-3"></i>
                                                    <div>
                                                        <span>Alur Pendaftaran</span>
                                                        <small>qwerty</small>
                                                    </div>
                                                </a>
                                                <a href="megaMenu/jalur-reguler.html" class="product-link">
                                                    <i class="bi bi-person-walking"></i>
                                                    <div>
                                                        <span>Jalur Reguler</span>
                                                        <small>qwerty</small>
                                                    </div>
                                                </a>
                                                <a href="megaMenu/jalur-prestasi.html" class="product-link">
                                                    <i class="bi bi-trophy"></i>
                                                    <div>
                                                        <span>Jalur Prestasi</span>
                                                        <small>qwerty</small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-section">
                                            <div class="product-list">
                                                <a href="megaMenu/jalur-kip.html" class="product-link">
                                                    <i class="bi bi-credit-card-2-front"></i>
                                                    <div>
                                                        <span>Jalur Kartu Indonesia Pintar</span>
                                                        <small>qwerty</small>
                                                    </div>
                                                </a>
                                                <a href="megaMenu/jalur-rpl.html" class="product-link">
                                                    <i class="bi bi-journal-check"></i>
                                                    <div>
                                                        <span>Jalur Rekognisi Pembelajaran Lampau</span>
                                                        <small>qwerty</small>
                                                    </div>
                                                </a>
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
                                                <a href="megaMenu/beasiswa-prestasi.html" class="product-link">
                                                    <i class="bi bi-award"></i>
                                                    <div>
                                                        <span>Beasiswa Prestasi</span>
                                                        <small>qwerty</small>
                                                    </div>
                                                </a>
                                                <a href="megaMenu/beasiswa-kip.html" class="product-link">
                                                    <i class="bi bi-card-checklist"></i>
                                                    <div>
                                                        <span>Beasiswa KIP</span>
                                                        <small>qwerty</small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- End Desktop Megamenu -->

                    </li><!-- End Megamenu 2 -->

                    <li><a href="download.html">Download</a></li>

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
         <!-- Services Section -->
            <section id="news" class="services section">
                <div class="container text-center py-5">
                    <h1 class="section-heading" data-aos="fade-up">Berita & Informasi Terkini</h1>
                    <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Ikuti perkembangan terbaru dari
                        STISIPOL
                        Raja Haji Tanjungpinang.</p>
                </div>

               <!-- Berita Utama -->
<section class="featured-news container mb-5">
  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="intro-content">
        <div class="section-badge mb-3">
          <i class="bi bi-star-fill"></i>
          <span>Berita Utama</span>
        </div>
        <h2 class="section-heading mb-3">{{ $beritaUtama->judul }}</h2>
        <p class="section-description mb-4">{{ $beritaUtama->isi }}</p>
      </div>
    </div>
    <div class="col-lg-6">
      <img src="/assets/img/berita/{{ $beritaUtama->img }}" 
           alt="{{ $beritaUtama->judul }}" 
           class="img-fluid rounded-3 shadow">
    </div>
  </div>
</section>

<!-- Berita Lainnya -->
<section class="py-5">
  <div class="container">
    <h2 class="section-heading text-center mb-5">Berita Lainnya</h2>
    <div class="row gy-4">
      @foreach ($beritaLain as $news)
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 border rounded-3 shadow-sm news-card">
            <img src="/assets/img/berita/{{ $news->img }}" class="card-img-top" alt="{{ $news->judul }}">
            <div class="card-body">
              <h5 class="card-title fw-bold">{{ $news->judul }}</h5>
              <p class="card-text text-muted small mb-2">{{ $news->created_at }}</p>
              <p class="card-text">{{ Str::limit($news->isi, 100) }}</p>
              <!-- Klik link ini untuk menjadikan berita utama -->
              <a href="{{ route('berita.show', ['slug' => $news->slug]) }}" class="btn btn-news">
                Baca Selengkapnya
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- Berita Lainnya -->
                <a href="{{ route('editBerita') }}" class="btn-primary">Edit Konten</a>
                <section class="py-5">
  <div class="container">
    <h2 class="section-heading text-center mb-5">Berita Lainnya(Dari Luar)</h2>
    <div class="row gy-4">
      @foreach ($beritaUrl as $newsurl)
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 border rounded-3 shadow-sm news-card">
            <img src="/assets/img/berita/{{ $newsurl->img }}" class="card-img-top" alt="{{ $newsurl->judul }}">
            <div class="card-body">
              <h5 class="card-title fw-bold">{{ $newsurl->judul }}</h5>
              <p class="card-text text-muted small mb-2">{{ $newsurl->created_at }}</p>
              <p class="card-text">{{ Str::limit($newsurl->isi, 100) }}</p>
              <!-- Klik link ini untuk menjadikan berita utama -->
              <a href="{{ $newsurl->url }}" class="btn btn-news">
                Baca Selengkapnya
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <a href="{{ route('editBeritaurl') }}" class="btn-primary">Edit Konten</a>
</section>
            </section>
            <!-- End News Section -->

            <footer id="footer" class="footer position-relative footer-background">

                <div class="container footer-top">
                    <div class="row gy-4">
                        <div class="col-lg-5 col-md-12 footer-about">
                            <a href="#" class="logo d-flex align-items-center">
                                <span class="sitename">PMB STISIPOL Raja Haji</span>
                            </a>
                            <p>Selamat datang di Portal Resmi Penerimaan Mahasiswa Baru. Melalui laman ini, kami
                                mengundang
                                generasi muda berkomitmen untuk bergabung dalam lingkungan akademik yang unggul,
                                inovatif,
                                dan berorientasi pada pengembangan ilmu serta pengabdian kepada masyarakat. Mari
                                bertumbuh,
                                berinovasi, dan berkontribusi bersama kami untuk masa depan bangsa.</p>
                            <div class="social-links d-flex mt-4">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Terms of service</a></li>
                                <li><a href="#">Privacy policy</a></li>
                            </ul>
                        </div>


                        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                            <h4>Contact Us</h4>
                            <p>Jl. Raja Haji Fisabilillah No. 48, </p>
                            <p>Tanjungpinang, Kepulauan Riau</p>
                            <p class="mt-4"><strong>Billy Jenawi:</strong> <span>081378582264</span></p>
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
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <!-- Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>