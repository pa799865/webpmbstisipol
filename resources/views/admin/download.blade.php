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
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
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
                <!-- <img src="../assets/img/logo.webp" alt=""> -->
                <h1 class="sitename">STISIPOL Raja Haji</h1>
            </a>

           <nav id="navmenu" class="navmenu" style="padding-left: 20vw">
                <ul>
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <li><a href="{{ route('dashboard') }}">Fasilitas</a></li>
                    <li><a href="{{ route('dashboard') }}">Biaya Kuliah</a></li>
                    <li><a href="{{ route('dashboard') }}">Berita</a></li>

                    <!-- Megamenu 2 -->
                    <li class="megamenu-2"><a href="#"><span>Lainnya</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>

                        <!-- Mobile Megamenu -->
                        <ul class="mobile-megamenu">

                            <li class="dropdown"><a href="#"><span>Program Studi</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ route('admin.konsentrasi') }}">Konsentrasi</a></li>
                                    <li><a href="{{ route('admin.profil-lulusan') }}">Profil Lulusan</a></li>
                                    <li><a href="{{ route('admin.pilihan-kelas') }}">Pilihan Kelas</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="#"><span>Pendaftaran</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ route('admin.alur-pendaftaran') }}">Alur Pendaftaran</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ route('admin.beasiswa') }}"><span>Beasiswa</span></a>
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
                                                <a href="{{ route('admin.konsentrasi') }}" class="product-link">
                                                    <i class="bi bi-bullseye"></i>
                                                    <div>
                                                        <span>Konsentrasi</span>
                                                    </div>
                                                </a>
                                                <a href="{{ route('admin.profil-lulusan') }}" class="product-link">
                                                    <i class="bi bi-person-badge"></i>
                                                    <div>
                                                        <span>Profil Lulusan</span>
                                                        
                                                    </div>
                                                </a>
                                                <a href="{{ route('admin.pilihan-kelas') }}" class="product-link">
                                                    <i class="bi bi-card-list"></i>
                                                    <div>
                                                        <span>Pilihan Kelas</span>
                                                        
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
                                                <a href="{{ route('admin.alur-pendaftaran') }}" class="product-link">
                                                    <i class="bi bi-diagram-3"></i>
                                                    <div>
                                                        <span>Alur Pendaftaran</span>
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
                                                <a href="{{ route('admin.beasiswa') }}" class="product-link">
                                                    <i class="bi bi-award"></i>
                                                    <div>
                                                        <span>Beasiswa</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- End Desktop Megamenu -->

                    </li><!-- End Megamenu 2 -->

                    <li><a href="#" class="active">Download</a></li>

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
        <section id="services" class="services section">
            @if(session('success'))
          <div id="notifikasi" class="bs-toast toast fade bg-{{ session('success') }} position-absolute m-3 end-0" role="alert" data-bs-autohide="true">
            <div class="toast-header">
              <i class="bx bx-bell me-2"></i>
              <strong class="me-auto">Notifikasi</strong>
              <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
              {{ session('message') }}
            </div>
          </div>
          @endif
          
          <script>
              document.addEventListener('DOMContentLoaded', function () {
                  const toastEl = document.getElementById('notifikasi');
                  if (toastEl) {
                      const toast = new bootstrap.Toast(toastEl);
                      toast.show();
                    }
                });
                </script>

            <section id="download" class="py-5">
                <div class="container">
                    <!-- Download Dokumen -->
                    <div class="text-center mb-5" data-aos="fade-up">
                        <h2 class="fw-bold">Download Dokumen</h2>
                        <p class="text-muted">Kumpulan file resmi yang dapat diunduh oleh mahasiswa dan civitas
                            akademika</p>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            @foreach ($downloads as $download)                               
                            <div class="card mb-3 shadow-sm border-0 rounded-3" data-aos="fade-up" data-aos-delay="100">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <span class="badge bg-number rounded-circle d-flex align-center justify-content-center "
                                    style="width: 32px; height: 32px;">{{ $download->id }}</span>
                                    <div>
                                        <p class=" text-muted small mb-0 fw-bold">{{ $download->judul }}</p>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <!-- Tombol lihat -->
                                        <a href="{{ $download->lihat }}"
                                            class="btn btn-outline-secondary" target="_blank">
                                            <i class="bi bi-eye me-1"></i> Lihat
                                        </a>
                                        <!-- Tombol download -->
                                        <a href="../assets/sertifikat/{{ $download->file }}" class="btn btn-primary" download>
                                            <i class="bi bi-download me-1"></i> Download
                                        </a>
                                    </div>
                                </div>
                                <a href="{{ route('showupdateDownload', $download->id) }}" class="btn-tambah p-2"><p>Update Konten</p></a>
                                <form action="{{ route('hapusDownload', $download->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Hapus</button>
</form>
                            </div>
                            @endforeach
                            <!-- Card 1 -->
                        </div>
                    </div>
                    <a href="{{ route('editDownloadTambah') }}" class="btn-tambah">Tambah Konten</a>
                </div>

                <hr class="my-5">

            </section>
        </section>


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
                            <li><a href="{{ route('dashboard') }}">Home</a></li>
                            <li><a href="{{ route('dashboard') }}">Fasilitas</a></li>
                            <li><a href="{{ route('dashboard') }}">Biaya Kuliah</a></li>
                            <li><a href="#">Download</a></li>
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