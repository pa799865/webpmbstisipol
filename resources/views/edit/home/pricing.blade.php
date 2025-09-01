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

                                <form action="{{ route('updateHomePricing') }}" method="post" class="php-email-form"
                                    data-aos="fade-up" data-aos-delay="600">
                                    @csrf
                                    <div class="row gy-4">
                                        <div class="col-12">
                                            <p>Edit Pricing Card Title</p>
                                            <input type="hidden" name="pricings[0][id]" value="{{ $pricings[0]->id }}">
                                            <input type="text" value="{{ $pricings[0]->content }}"
                                                class="form-control" name="pricings[0][content]"
                                                placeholder="Semester Ganjil" required="">
                                        </div>
                                        <div class="col-12 ">
                                            <input type="hidden" name="pricings[1][id]" value="{{ $pricings[1]->id }}">
                                            <input type="text" value="{{ $pricings[1]->content }}"
                                                class="form-control" name="pricings[1][content]"
                                                placeholder="Semester Ganjil" required="">
                                        </div>
                                        <div class="col-12 ">
                                            <p>Edit Pricing Card Description</p>
                                            <input type="hidden" name="pricings[2][id]" value="{{ $pricings[2]->id }}">
                                            <input type="text" value="{{ $pricings[2]->content }}"
                                                class="form-control" name="pricings[2][content]"
                                                placeholder="Semester Ganjil" required="">
                                        </div>

                                        @foreach ($pricingcards as $pricingcard)
                                            <div class="stat-items1">
                                                <input type="hidden" name="pricingcard[{{ $loop->index }}][id]"
                                                    value="{{ $pricingcard->id }}">
                                                <div class="col-12 ">
                                                    <p>Edit Pricing Card</p>
                                                    <input type="text" value="{{ $pricingcard->badge }}"
                                                        class="form-control"
                                                        name="pricingcard[{{ $loop->index }}][badge]"
                                                        placeholder="Semester Ganjil" required="">
                                                </div>
                                                <div class="col-12 ">
                                                    <input type="text" value="{{ $pricingcard->title }}"
                                                        class="form-control"
                                                        name="pricingcard[{{ $loop->index }}][title]"
                                                        placeholder="Kelas Reguler" required="">
                                                </div>
                                                <div class="col-12 ">
                                                    <textarea type="text" class="form-control" name="pricingcard[{{ $loop->index }}][description]"
                                                        placeholder="3.453" required="">{{ $pricingcard->description }}</textarea>
                                                </div>
                                                <div class="col-12 ">
                                                    <input type="text" value="{{ $pricingcard->price }}"
                                                        class="form-control"
                                                        name="pricingcard[{{ $loop->index }}][price]"
                                                        placeholder="/Semester" required="">
                                                </div>
                                                <div class="col-12 ">
                                                    <input type="text" value="{{ $pricingcard->period }}"
                                                        class="form-control"
                                                        name="pricingcard[{{ $loop->index }}][period]"
                                                        placeholder="/Semester" required="">
                                                </div>
                                                <div class="col-12 d-flex justify-content-between align-items-center ">
                                                    <label for="">
                                                        <input type="hidden"
                                                            name="pricingcard[{{ $loop->index }}][tipe]"
                                                            value="">
                                                        <input type="checkbox" value="special"
                                                            name="pricingcard[{{ $loop->index }}][tipe]"
                                                            placeholder="/Semester"
                                                            @if ($pricingcard->tipe === 'special') checked @endif> centang
                                                        jika anda ingin cardnya berwarna berbeda
                                                    </label>

                                                </div>
                                                <button type="button"
                                                    class="hapusStats3 btn btn-danger ">Hapus</button>
                                            </div>
                                        @endforeach
                                        <div class="tambahan3"></div>
                                        <div class="col-12 ">
                                            <button class="tambahStats3 btn-add mt-3">Tambah Card<i
                                                    class="bi bi-plus-circle"></i></button>
                                        </div>

                                        <div class="col-12 ">
                                            <div class="d-flex justify-content-between mb-2">
                                                <p>Edit Pricing Card Common List</p>
                                            </div>

                                            @foreach ($listbiasas as $listbiasa)
                                                <div class="stat-items2">
                                                    <input type="hidden" name="listbiasa[{{ $loop->index }}][id]"
                                                        value="{{ $listbiasa->id }}">
                                                    <input type="text" value="{{ $listbiasa->content }}"
                                                        class="form-control mt-3"
                                                        name="listbiasa[{{ $loop->index }}][content]"
                                                        placeholder="List Common">
                                                    <button class="hapusStats1 btn btn-danger ">Hapus</button>
                                                </div>
                                            @endforeach
                                            <div class="tambahan1"></div>
                                            <div class="col-12 ">
                                                <button class="tambahStats1 btn-add mt-3">Tambah List Common<i
                                                        class="bi bi-plus-circle"></i></button>
                                            </div>

                                        </div>

                                        <div class="col-12 ">
                                            <div class="d-flex justify-content-between mb-2">
                                                <p>Edit Pricing Card Special List</p>
                                            </div>

                                            @foreach ($listspecials as $listspecial)
                                                <div class="stat-items3">
                                                    <input type="hidden" name="listspecial[{{ $loop->index }}][id]"
                                                        value="{{ $listspecial->id }}">
                                                    <input type="text" value="{{ $listspecial->content }}"
                                                        class="form-control mt-3"
                                                        name="listspecial[{{ $loop->index }}][content]"
                                                        placeholder="List Spesial">
                                                    <button class="hapusStats2 btn btn-danger ">Hapus</button>
                                                </div>
                                            @endforeach
                                            <div class="tambahan2"></div>
                                            <div class="col-12 ">
                                                <button class="tambahStats2 btn-add mt-3">Tambah List Spesial<i
                                                        class="bi bi-plus-circle"></i></button>
                                            </div>
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
        const tambahStats1 = document.querySelector(".tambahStats1");
        tambahStats1.addEventListener("click", (e) => {
            e.preventDefault();
            let tambahanContainer1 = document.querySelector(".tambahan1");
            let index = document.querySelectorAll(".stat-items2").length;
            let tambahanHTML1 = "";
            tambahanHTML1 += ` <div class="stat-items2">
                                <input type="hidden" name="listbiasa[${index}][id]" value="{{ $listbiasa->id }}">
                                    <input type="text" class="form-control mt-3" name="listbiasa[${index}][content]" placeholder="List Common" >
                      <button class="hapusStats1 btn btn-danger ">Hapus</button>
                       </div> 
                       `;
            tambahanContainer1.innerHTML += tambahanHTML1;
        });
    </script>
    <script>
        const tambahStats2 = document.querySelector(".tambahStats2");
        tambahStats2.addEventListener("click", (e) => {
            e.preventDefault();
            let tambahanContainer2 = document.querySelector(".tambahan2");
            let index = document.querySelectorAll(".stat-items3").length;
            let tambahanHTML2 = "";

            tambahanHTML2 += `
                              <div class="stat-items3">
                                <input type="hidden" name="listspecial[${index}][id]" value="{{ $listspecial->id }}">
                                   <input type="text" class="form-control mt-3" name="listspecial[${index}][content]" placeholder="List Spesial" >
                      <button class="hapusStats2 btn btn-danger ">Hapus</button>
                       </div> `;
            tambahanContainer2.innerHTML += tambahanHTML2;
        });
    </script>
    <script>
        const tambahStats3 = document.querySelector(".tambahStats3");
        tambahStats3.addEventListener("click", (e) => {
            e.preventDefault();
            let tambahanContainer3 = document.querySelector(".tambahan3");
            let index = document.querySelectorAll(".stat-items1").length;
            let tambahanHTML3 = "";
            tambahanHTML3 += `
                              <div class="stat-items1"> 
                              <div class="col-12 ">
                      <p>Edit Pricing Card</p>
                      <input type="text"class="form-control" name="pricingcard[${index}][badge]" placeholder="Semester Ganjil" required="">
                    </div>
                    <div class="col-12 ">
                      <input type="text" class="form-control" name="pricingcard[${index}][title]" placeholder="Kelas Reguler" required="">
                    </div>
                    <div class="col-12 ">
                      <textarea type="text"  class="form-control" name="pricingcard[${index}][description]" placeholder="3.453" required=""></textarea>
                    </div>
                    <div class="col-12 ">
                      <input type="text" class="form-control" name="pricingcard[${index}][price]" placeholder="/Semester" required="">
                    </div>
                    <div class="col-12 ">
                      <input type="text" class="form-control" name="pricingcard[${index}][period]" placeholder="/Semester" required="">
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center ">
                        <label for="">
                           <input type="hidden" name="pricingcard[[${index}][tipe]" value="">
                      <input type="checkbox" value="special" name="pricingcard[${index}][tipe]" placeholder="/Semester" @if ($pricingcard->tipe === 'special') checked @endif> centang jika anda ingin cardnya berwarna berbeda
                      </label>               
                    </div>
                    <button type="button" class="hapusStats3 btn btn-danger ">Hapus</button> 
                    </div>
                       `;
            tambahanContainer3.innerHTML += tambahanHTML3;
        });

        // const hapusStatsButtons3 = document.querySelectorAll(".hapusStats3");
        // hapusStatsButtons3.forEach(button => {
        //   button.addEventListener("click", (e) => {
        //     e.preventDefault();
        //     e.target.closest(".stat-item").remove();
        //   });
        // });
        //                           document.addEventListener("click", function(e) {
        //   if (e.target.classList.contains("hapusStats3")) {
        //     e.preventDefault();
        //     e.target.closest(".stat-items").remove();
        //   }
        // });
    </script>
    <script>
        document.addEventListener("click", function(e) {
            if (e.target.classList.contains("hapusStats3")) {
                e.preventDefault();

                // cari stat-item yang mau dihapus
                let statItem = e.target.closest(".stat-items1");
                let statIdInput = statItem.querySelector("input[name*='[id]']");

                // kalau field ini dari database → tambahin hidden input deleteStats[]
                if (statIdInput) {
                    let deletedId = statIdInput.value;
                    let form = statItem.closest("form");

                    let hiddenInput = document.createElement("input");
                    hiddenInput.type = "hidden";
                    hiddenInput.name = "deleteStats[]";
                    hiddenInput.value = deletedId;
                    form.appendChild(hiddenInput);
                }

                // hapus field dari DOM
                statItem.remove();
            }
        });
        document.addEventListener("click", function(e) {
            if (e.target.classList.contains("hapusStats1")) {
                e.preventDefault();

                // cari stat-item yang mau dihapus
                let statItem = e.target.closest(".stat-items2");
                let statIdInput = statItem.querySelector("input[name*='[id]']");

                // kalau field ini dari database → tambahin hidden input deleteStats[]
                if (statIdInput) {
                    let deletedId = statIdInput.value;
                    let form = statItem.closest("form");

                    let hiddenInput = document.createElement("input");
                    hiddenInput.type = "hidden";
                    hiddenInput.name = "deleteStats[]";
                    hiddenInput.value = deletedId;
                    form.appendChild(hiddenInput);
                }

                // hapus field dari DOM
                statItem.remove();
            }
        });
        document.addEventListener("click", function(e) {
            if (e.target.classList.contains("hapusStats2")) {
                e.preventDefault();

                // cari stat-item yang mau dihapus
                let statItem = e.target.closest(".stat-items3");
                let statIdInput = statItem.querySelector("input[name*='[id]']");

                // kalau field ini dari database → tambahin hidden input deleteStats[]
                if (statIdInput) {
                    let deletedId = statIdInput.value;
                    let form = statItem.closest("form");

                    let hiddenInput = document.createElement("input");
                    hiddenInput.type = "hidden";
                    hiddenInput.name = "deleteStats[]";
                    hiddenInput.value = deletedId;
                    form.appendChild(hiddenInput);
                }

                // hapus field dari DOM
                statItem.remove();
            }
        });
    </script>


</body>

</html>
