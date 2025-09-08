<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login - Admin PMB SITISIPOL Raja Haji</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
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

            <nav id="navmenu" class="navmenu">
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background" style="margin-top: 63px;">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="description-title">Edit Konten</span>
                <h2>Edit Konten</h2>
                <p>Silahkan edit konten anda</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="container">
                        <div class="contact-form card" data-aos="fade-up" data-aos-delay="300">
                            <div class="card-body p-4 p-lg-5">

                                <form action="{{ route('updateHomeFeatures') }}" method="post" class="php-email-form"
                                    data-aos="fade-up" data-aos-delay="600" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">
                                        @foreach ($programstudyitems as $programstudyitem)
                                            <div class="stat-item">
                                                <input type="hidden" name="programstudyitem[{{ $loop->index }}][id]"
                                                    value="{{ $programstudyitem->id }}">
                                                <div class="col-12 ">
                                                    <p>Edit Features Tab Wrapper</p>
                                                    <input type="text" value="{{ $programstudyitem->title }}"
                                                        class="form-control"
                                                        name="programstudyitem[{{ $loop->index }}][title]"
                                                        placeholder="Ilmu Administrasi Publik" required="">
                                                </div>
                                                <div class="col-12 ">
                                                    <textarea type="text" class="form-control" name="programstudyitem[{{ $loop->index }}][description]"
                                                        placeholder="Lorem ipsum, dolor sit amet consectetur" required="">{{ $programstudyitem->description }}</textarea>
                                                </div>
                                            </div>
                                        @endforeach
                                        @foreach ($programstudycontents as $programstudycontent)
                                            <input type="hidden" name="programstudycontent[{{ $loop->index }}][id]"
                                                value="{{ $programstudycontent->id }}">
                                            <div class="col-12 ">
                                                <p>Edit Features Tab Content</p>
                                                <input type="text" value="{{ $programstudycontent->title }}"
                                                    class="form-control"
                                                    name="programstudycontent[{{ $loop->index }}][title]"
                                                    placeholder="Ilmu Administrasi Publik" required="">
                                            </div>

                                            <div class="col-12 ">
                                                <textarea type="text" class="form-control" name="programstudycontent[{{ $loop->index }}][description]"
                                                    placeholder="Program Studi Administrasi Publik menawarkan tiga pilihan konsentrasi yang dapat dipilih sesuai minat mahasiswa:"
                                                    required="">{{ $programstudycontent->description }}</textarea>
                                            </div>
                                            <p>List</p>
                                            <div class="stat-item">
                                                <div class="col-12 ">
                                                    <input type="text" value="{{ $programstudycontent->list1 }}"
                                                        class="form-control"
                                                        name="programstudycontent[{{ $loop->index }}][list1]"
                                                        placeholder="masukkan konten">
                                                    <button type="button" class="hapusField btn btn-danger"
                                                        data-id="{{ $programstudycontent->id }}" data-field="list1">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="stat-item">
                                                <div class="col-12 ">
                                                    <input type="text" value="{{ $programstudycontent->list2 }}"
                                                        class="form-control"
                                                        name="programstudycontent[{{ $loop->index }}][list2]"
                                                        placeholder="masukkan konten">
                                                    <button type="button" class="hapusField btn btn-danger"
                                                        data-id="{{ $programstudycontent->id }}" data-field="list2">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="stat-item">
                                                <div class="col-12 ">
                                                    <input type="text" value="{{ $programstudycontent->list3 }}"
                                                        class="form-control"
                                                        name="programstudycontent[{{ $loop->index }}][list3]"
                                                        placeholder="masukkan konten">
                                                    <button type="button" class="hapusField btn btn-danger"
                                                        data-id="{{ $programstudycontent->id }}" data-field="list2">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="stat-item">
                                                <div class="col-12 ">

                                                    <input type="text" value="{{ $programstudycontent->list4 }}"
                                                        class="form-control"
                                                        name="programstudycontent[{{ $loop->index }}][list4]"
                                                        placeholder="masukkan konten">
                                                    <button type="button" class="hapusField btn btn-danger"
                                                        data-id="{{ $programstudycontent->id }}" data-field="list2">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <p>Gambar Lama:</p>
                                                @if ($programstudycontent->img)
                                                    <img src="{{ asset('assets/img/features/' . $programstudycontent->img) }}"
                                                        alt="preview" width="200">
                                                @endif
                                            </div>

                                            <div class="col-12 mt-2">
                                                <input type="file" class="form-control"
                                                    name="programstudycontent[{{ $loop->index }}][img]">
                                            </div>
                                        @endforeach

                                        <div class="col-12 text-center">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Your message has been sent. Thank you!</div>

                                            <button type="submit" class="btn btn-submit w-100 mt-4">Simpan</button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Contact Section -->

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

    <script>
        document.querySelectorAll('.hapusField').forEach(btn => {
            btn.addEventListener('click', function() {
                let field = this.dataset.field;
                let id = this.dataset.id;

                // cari form utama
                let form = this.closest('form');
                // tambah hidden input "delete_field"
                let input = document.createElement('input');
                input.type = 'hidden';
                input.name = `deleteField[${id}][]`;
                input.value = field;
                form.appendChild(input);

                // kosongkan input text biar tidak terkirim nilainya
                this.previousElementSibling.value = "";
            });
        });
    </script>

</body>

</html>
