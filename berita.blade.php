<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Berita - Admin PMB SITISIPOL Raja Haji</title>
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

                                <form action="{{ route('updateBerita') }}" method="post" class="php-email-form"
      data-aos="fade-up" data-aos-delay="600" enctype="multipart/form-data">
    @csrf
    <div class="row gy-4">
        @foreach ($berita as $beritas)
            <div class="berita-item border p-3 mb-3 rounded">
                <input type="hidden" name="berita[{{ $loop->index }}][id]" value="{{ $beritas->id }}">

                <div class="col-12 mb-2">
                    <p>Edit Judul Berita</p>
                    <input type="text"
                           value="{{ $beritas->judul }}"
                           name="berita[{{ $loop->index }}][judul]"
                           class="form-control"
                           placeholder="Judul berita"
                           required>
                </div>

                <div class="col-12 mb-2">
                    <p>Edit Description Berita</p>
                    <input type="text"
                           value="{{ $beritas->isi }}"
                           name="berita[{{ $loop->index }}][isi]"
                           class="form-control"
                           placeholder="Isi berita"
                           required>
                </div>

                <div class="col-12 mb-2">
                    <p>Edit Gambar Berita</p>
                    <input type="file"
                           name="berita[{{ $loop->index }}][img]"
                           class="form-control">
                </div>

                <button type="button" class="hapusBerita btn btn-danger mt-2">Hapus</button>
            </div>
        @endforeach

        <!-- Tempat untuk tambahan berita baru -->
        <div class="tambahan"></div>

        <div class="col-12">
            <button type="button" class="tambahBerita btn-add">
                Tambah Berita <i class="bi bi-plus-circle"></i>
            </button>
        </div>

        <div class="col-12 text-center mt-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit" class="btn btn-submit w-100">Simpan</button>
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
    document.addEventListener("click", function(e) {
        if (e.target.classList.contains("hapusBerita")) {
            e.preventDefault();

            // cari berita-item yang mau dihapus
            let beritaItem = e.target.closest(".berita-item");
            let beritaIdInput = beritaItem.querySelector("input[name*='[id]']");

            // kalau field ini dari database → tambahin hidden input deleteBerita[]
            if (beritaIdInput) {
                let deletedId = beritaIdInput.value;
                let form = beritaItem.closest("form");

                let hiddenInput = document.createElement("input");
                hiddenInput.type = "hidden";
                hiddenInput.name = "deleteBerita[]";
                hiddenInput.value = deletedId;
                form.appendChild(hiddenInput);
            }

            // hapus field dari DOM
            beritaItem.remove();
        }
    });
</script>


    <script>
    const tambahBerita = document.querySelector(".tambahBerita");

    tambahBerita.addEventListener("click", (e) => {
        e.preventDefault();

        let tambahanContainer = document.querySelector(".tambahan");
        let index = document.querySelectorAll(".berita-item").length; // hitung jumlah item

        let tambahanHTML = `
            <div class="berita-item border p-3 mb-3 rounded">
                <div class="col-12 mb-2">
                    <p>Edit Judul Berita</p>
                    <input type="text" 
                           name="berita[${index}][judul]" 
                           class="form-control"
                           placeholder="Judul berita" required>
                </div>

                <div class="col-12 mb-2">
                    <p>Edit Description Berita</p>
                    <input type="text" 
                           name="berita[${index}][isi]" 
                           class="form-control"
                           placeholder="Isi berita" required>
                </div>

                <div class="col-12 mb-2">
                    <p>Edit Gambar Berita</p>
                    <input type="file" 
                           name="berita[${index}][img]" 
                           class="form-control"
                           required>
                            <button type="button" class="hapusBerita btn btn-danger mt-2">Hapus</button>
                </div>
            </div>
        `;

        tambahanContainer.insertAdjacentHTML("beforeend", tambahanHTML);
    });
</script>


</body>

</html>
