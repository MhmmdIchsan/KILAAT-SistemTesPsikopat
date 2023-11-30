<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SAIKO | Home </title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="{{ asset('static/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('static/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('static/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('static/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('static/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('static/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('static/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('static/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ ('static/assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ ('asset(https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }}"
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <!-- =======================================================
  * Template Name: Groovin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ ('static/images/pngwing.png') }}">
    @vite(['resources/sass/app/scss', 'resources/js/app.js'])

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex">
                <img src="{{('static/images/p.png')}}" class="h-10  bg-primary me-3" alt="Flowbite Logo" />
                <h1 class="logo"><a href="/">SAIKO</a></h1>
            </div>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#source">Source</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('main') }}">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active"
                        style="background-image: url(static/assets/img/slide/psikopat1.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Introduction</h2>
                                <p class="animate__animated animate__fadeInUp">Selamat datang di Situs Tes Psikopat yang
                                    menawan, tempat kami mengundang Anda untuk memulai perjalanan penemuan jati diri
                                    yang mendalam dan mempelajari kompleksitas rumit psikologi manusia. Platform kami
                                    dirancang untuk memberi Anda gambaran sekilas tentang cara kerja pikiran Anda,
                                    memungkinkan Anda membuka pemahaman yang lebih dalam tentang kepribadian dan emosi
                                    Anda.</p>
                                <div>
                                    <a href="{{ route('main') }}"
                                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(static/assets/img/slide/psikopat2.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Deskripsi Test</h2>
                                <p class="animate__animated animate__fadeInUp">Tes Psikopat kami adalah penilaian yang
                                    dirancang dengan cermat yang menawarkan kesempatan unik untuk mengeksplorasi dan
                                    merefleksikan ciri-ciri kepribadian dan perilaku Anda. Dengan menjawab serangkaian
                                    pertanyaan yang menggugah pikiran, Anda akan memperoleh wawasan berharga tentang
                                    faktor-faktor yang memengaruhi pikiran, perasaan, dan tindakan Anda. Perjalanan
                                    eksplorasi diri ini bukan hanya soal mengikuti ujian; ini tentang mengungkap aspek
                                    tersembunyi dari susunan psikologis Anda</p>
                                <div>
                                    <a href="/main"
                                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(static/assets/img/slide/psikopat3.jpeg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Manfaat</h2>
                                <p class="animate__animated animate__fadeInUp">Memahami profil psikologis Anda memberi
                                    Anda alat untuk memupuk pertumbuhan pribadi, meningkatkan hubungan, dan membuat
                                    keputusan yang tepat. Selain itu, hal ini menumbuhkan empati dan kasih sayang dengan
                                    membantu Anda memahami beragam perspektif orang lain. Dengan mengambil langkah ini,
                                    Anda memulai perjalanan transformatif menuju pemahaman yang lebih mendalam tentang
                                    diri Anda dan dunia di sekitar Anda..</p>
                                <div>
                                    <a href="/main"
                                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="carousel-item" style="background-image: url(static/assets/img/slide/psikopat4.jpeg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Siap mengikuti tes?</h2>
                                <p class="animate__animated animate__fadeInUp"> Saatnya memulai perjalanan penemuan jati
                                    diri Anda. Tes Psikopat kami menunggu tanggapan bijaksana Anda. Saat Anda memulai
                                    eksplorasi jiwa manusia ini, Anda akan memperoleh wawasan yang dapat berdampak
                                    positif pada berbagai aspek kehidupan Anda. Mulailah penilaian Anda sekarang, dan
                                    biarkan dunia psikologi yang menakjubkan memandu Anda menuju pemahaman yang lebih
                                    mendalam tentang siapa diri Anda.</p>
                                <div>
                                    <a href="/main"
                                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="source" class="about">
            <div class="container">

                <div class="row no-gutters">
                    <div
                        class="image col-xl-5 d-flex align-items-center justify-content-center justify-content-lg-start">
                        <iframe width="560" height="315" class=""
                            src="https://www.youtube.com/embed/videoseries?list=PLeQWb-QhJnFll0z_8vm-DgC-SktN3fRuA"
                            frameborder="0" allowfullscreen></iframe>
                    </div>


                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3>Sumber Pertanyaan</h3>
                            <p>
                                Video ini berisi kumpulan pertanyaan yang digunakan dalam tes psikopat yang kami ambil.
                                Tes ini dirancang untuk mengungkapkan berbagai aspek psikologis dan perilaku individu.
                                Dalam video ini, Anda akan menemukan pertanyaan-pertanyaan yang dirancang untuk menggali
                                pemahaman lebih dalam tentang karakteristik psikologis seseorang.
                            </p>
                            <div class="row">
                                <div class="col-md-6 icon-box">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Kumpulan pertanyaan tes psikopat</h4>
                                    <p>Pertanyaan-pertanyaan ini dirancang untuk menggali berbagai aspek psikologis
                                        individu, membantu mengidentifikasi ciri-ciri tertentu, dan memberikan pemahaman
                                        yang lebih dalam tentang sifat manusia.</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Diskusi tentang arti dan relevansi tes</h4>
                                    <p>Anda akan mendapatkan wawasan tentang mengapa tes ini penting dan bagaimana
                                        hasilnya dapat digunakan untuk pemahaman psikologis yang lebih baik.</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="bx bx-images"></i>
                                    <h4>Contoh jawaban yang mungkin muncul</h4>
                                    <p>Ini akan membantu Anda memahami bagaimana tes ini diinterpretasikan dan bagaimana
                                        jawaban-jawaban tersebut dapat menggambarkan karakteristik psikologis.</p>
                                </div>
                                <div class="col-md-6 icon-box">
                                    <i class="bx bx-shield"></i>
                                    <h4>Wawasan tentang pemahaman psikologis</h4>
                                    <p>Anda akan memahami bagaimana tes psikopat menjadi alat penting untuk
                                        mengungkapkan berbagai aspek psikologis manusia dan bagaimana hal ini dapat
                                        berguna dalam berbagai konteks</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>Team</h2>

                </div>

                <div class="d-flex flex-row flex-wrap justify-content-center gap-4">

                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="static/assets/img/team/tasya.jpg" class="img-fluid team-photo" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Tasya Nadila</h4>
                                    <span>Web Developer</span>
                                    <div class="social">
                                        <a href="https://github.com/Tasyanadila"><i class="bi bi-github"></i></a>
                                        <a href="https://instagram.com/tasyanadilaa_"><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="https://www.linkedin.com/in/tasyanadila/"><i
                                                class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="static/assets/img/team/ichsan.jpg" class="img-fluid team-photo" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Muhammad Ichsan</h4>
                                    <span>Web Developer</span>
                                    <div class="social">
                                        <a href="https://github.com/MhmmdIchsan"><i class="bi bi-github"></i></a>
                                        <a href="https://www.instagram.com/_mhmmd.ichsan_"><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="https://www.linkedin.com/in/mhmmdichsan"><i
                                                class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="static/assets/img/team/khairul.jpg" class="img-fluid team-photo" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Khairul Auni</h4>
                                    <span>Web Developer</span>
                                    <div class="social">
                                        <a href="https://github.com/Khairul2991"><i class="bi bi-github"></i></a>
                                        <a href="https://www.instagram.com/khrl_auni28/"><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="https://www.linkedin.com/in/khairul-auni-17a3a4276/"><i
                                                class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-2 col-md-6">
                        <div class="member">
                            <img src="static/assets/img/team/leni.jpg" class="img-fluid team-photo" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Leni Agustina</h4>
                                    <span>Web Developer</span>
                                    <div class="social">
                                        <a href="https://github.com/Leniagustina11"><i class="bi bi-github"></i></a>
                                        <a href="https://instagram.com/leniagustiinaa?igshid=NzZlODBkYWE4Ng=="><i
                                                class="bi bi-instagram"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="static/assets/img/team/naziel.jpg" class="img-fluid team-photo" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Ahmad Naziel Firdaus</h4>
                                    <span>Web Developer</span>
                                    <div class="social">
                                        <a href="https://github.com/AhmadNazielF"><i class="bi bi-github"></i></a>
                                        <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Kami menghargai masukan Anda dan berusaha membuat pengalaman Anda bersama kami semulus dan
                        semenyenangkan mungkin. Jangan ragu untuk menghubungi kami hari ini, dan biarkan kami membantu
                        Anda menemukan solusi yang Anda perlukan untuk membuat hidup Anda lebih mudah dan nyaman.</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <address>Universitas Syiah Kuala</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+6282369311817">+628 2369 3118 17</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">info@mhs.usk.ac.id</a></p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; 2023 <strong><span>SAIKO</span></strong>. All Rights Reserved.
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/groovin-free-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">KILAAT</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('static/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('static/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('static/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('static/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('static/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('static/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('static/assets/js/main.js') }}"></script>

</body>

</html>
