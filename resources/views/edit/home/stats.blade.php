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

                                <form action="{{ route('updateHomeStats') }}" method="post" class="php-email-form"
                                    data-aos="fade-up" data-aos-delay="600">
                                    @csrf
                                    <div class="row gy-4">

                    <div class="col-12">
                      <p>Edit Stats Main Heading</p>
                      <input type="hidden" name="statelemens[0][id]" value="{{ $statelemens[0]->id }}">
                      <input type="text" value="{{ $statelemens[0]->content }}" name="statelemens[0][content]" class="form-control" placeholder="Mari Bergabung" required="">
                    </div>

                    <div class="col-12 ">
                      <p>Edit Stats Main Description</p>
                       <input type="hidden" name="statelemens[1][id]" value="{{ $statelemens[1]->id }}">
                      <input type="text" value="{{ $statelemens[1]->content }}" class="form-control" name="statelemens[1][content]" placeholder="Mari bergabung dengan mahasiswa yang bangga berkuliah di br STISIPOL
                            Raja Haji Tanjungpinang." required="">
                    </div>
                    @foreach ( $stats as $stat)
                    <div class="stat-item">
                      <input type="hidden" name="stats[{{ $loop->index }}][id]" value="{{ $stat->id }}">
                    <div class="col-12 ">
                      <p>Edit Stats Stat Number</p>
                      <input type="text" value="{{ $stat->number }}" class="form-control" name="stats[{{ $loop->index }}][number]" placeholder="0000+" required="">
                    </div>
                    <div class="col-12 ">
                      <input type="text" value="{{ $stat->label }}" class="form-control" name="stats[{{ $loop->index }}][label]" placeholder="label" required="">
                      <button class="hapusStats btn btn-danger ">Hapus</button>
                    </div>
                    </div>
                    @endforeach

                    <div class="tambahan"></div>
                    <div class="col-12 ">  
                      <button class="tambahStats btn-add" >Tambah Stat <i class="bi bi-plus-circle"></i></button>
                    </div>

                    
                    <div class="col-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>

                                            <button type="submit" class="btn btn-submit w-100">Masuk</button>
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
                       const tambahStats = document.querySelector(".tambahStats");
                          tambahStats.addEventListener("click", (e) => {
                            e.preventDefault();
                            let tambahanContainer = document.querySelector(".tambahan");
                             let index = document.querySelectorAll(".stat-item").length;
                            let tambahanHTML = "";
                              tambahanHTML += `
                              <div class="stat-item">
                                    <div class="col-12">
                      <p>Edit Stats Stat Number</p>
                      <input type="text" class="form-control" name="stats[${index}][number]" placeholder="0000+" required="">
                    </div>
                    <div class="col-12 ">
                      <input type="text" class="form-control" name="stats[${index}][label]" placeholder="label" required="">
                      <button class="hapusStats btn btn-danger ">Hapus</button>
                    </div> 
                    </div> `;
                               tambahanContainer.innerHTML += tambahanHTML;
                          });
                          const hapusStatsButtons = document.querySelectorAll(".hapusStats");
                          hapusStatsButtons.forEach(button => {
                            button.addEventListener("click", (e) => {
                              e.preventDefault();
                              let secondDiv = button.parentElement; // div tempat tombol hapus
    let firstDiv = secondDiv.previousElementSibling; 
                              if (firstDiv) firstDiv.remove();
    secondDiv.remove();
                            });
                          });
                          document.addEventListener("click", function(e) {
  if (e.target.classList.contains("hapusStats")) {
    e.preventDefault();
    e.target.closest(".stat-item").remove();
  }
});
                    </script>

</body>

</html>
