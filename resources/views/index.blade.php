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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('static/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('static/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('static/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('static/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('static/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('static/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ ('static/assets/css/style.css') }}" rel="stylesheet">

  <link href="{{ ('asset(https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
          <div class="carousel-item active" style="background-image: url(static/assets/img/slide/psikopat1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Introduction</h2>
                <p class="animate__animated animate__fadeInUp">Welcome to the captivating world of the Psychopath Test Website, where we invite you to embark on a profound journey of self-discovery and delve into the intricate complexities of human psychology. Our platform is designed to offer you an insightful glimpse into the inner workings of your mind, enabling you to unlock a deeper understanding of your personality and emotions</p>
                <div>
                  <a href="{{ route('main') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(static/assets/img/slide/psikopat2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Test Description</h2>
                <p class="animate__animated animate__fadeInUp">Our Psychopath Test is a meticulously crafted assessment that offers a unique opportunity to explore and reflect upon your personality traits and behaviors. By answering a series of thought-provoking questions, you'll gain valuable insights into the factors that influence your thoughts, feelings, and actions. This journey of self-exploration is not just about taking a test; it's about uncovering the hidden facets of your psychological makeup</p>
                <div>
                  <a href="/main" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(static/assets/img/slide/psikopat3.jpeg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Benefits</h2>
                <p class="animate__animated animate__fadeInUp">Understanding your psychological profile provides you with the tools to nurture personal growth, enhance relationships, and make informed decisions. Moreover, it fosters empathy and compassion by helping you comprehend the diverse perspectives of others. By taking this step, you embark on a transformative journey towards a more profound understanding of both yourself and the world around you..</p>
                <div>
                  <a href="/main" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="carousel-item" style="background-image: url(static/assets/img/slide/psikopat4.jpeg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Ready to take the test?</h2>
                <p class="animate__animated animate__fadeInUp"> It's time to begin your journey of self-discovery. Our Psychopath Test awaits your thoughtful responses. As you embark on this exploration of the human psyche, you'll gain insights that can impact various aspects of your life positively. Start your assessment now, and let the fascinating world of psychology guide you towards a deeper understanding of who you are.</p>
                <div>
                  <a href="/main" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
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
                    <a href="https://github.com/"><i class="bi bi-github"></i></a>
                    <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
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
                    <a href="https://github.com/"><i class="bi bi-github"></i></a>
                    <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
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
                    <a href="https://www.instagram.com/khrl_auni28/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/khairul-auni-17a3a4276/"><i class="bi bi-linkedin"></i></a>
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
                    <a href="https://github.com/"><i class="bi bi-github"></i></a>
                    <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
            <div class="member">
              <img src="static/assets/img/team/team-1.jpg" class="img-fluid team-photo" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ahmad Naziel Firdaus</h4>
                  <span>Web Developer</span>
                  <div class="social">
                    <a href="https://github.com/"><i class="bi bi-github"></i></a>
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
          <p>We value your input and strive to make your experience with us as seamless and enjoyable as possible. Don't hesitate to get in touch with us today, and let us assist you in finding the solutions you need to make your life easier and more convenient.</p>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

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