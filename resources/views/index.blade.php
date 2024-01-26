<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Temu Janji Pasien</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('OnePage/assets/img/favicon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('OnePage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('OnePage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('OnePage/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-12 text-center">
                    <h1>Sistem Temu Janji Pasien - Dokter</h1>
                    <h2>Bimbingan Karir 2023 Bidang Web</h2>
                </div>
            </div>
            <div class="row icon-boxes">
                <div class="col-md-5 col-lg-6 d-flex align-items-center mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-user-line"></i></div>
                        <h4 class="title"><a href="{{ route('pasien.login') }}">Login Sebagai Pasien</a></h4>
                        <p class="description">Apabila Anda adalah seorang Pasien silahkan Login terlebih dahulu untuk
                            melakukan pendaftaran sebagai Pasien</p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-6 d-flex align-items-center mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-user-line"></i></div>
                        <h4 class="title"><a href="{{ route('dokter.dashboard') }}">Login Sebagai Dokter</a></h4>
                        <p class="description">Apabila Anda adalah seorang Dokter silahkan Login terlebih dahulu untuk
                            memulai melayani Pasien</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        <section id="testimonials" class="testimonials">
                <div class="section-title">
                    <h2>Testimoni Pasien</h2>
                    <p>Para pasien yang setia</p>
                </div>
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Pelayanan di web ini sangat cepat dan mudah. Detail histori tercatat lengkap, termasuk catatan obat. Harga pelayanan terjangkau, Dokter ramah, pokoke mantab pol! 
                                    <br>- Adi, Semarang
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <br>
                                <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Aku tidak pernah merasakan mudahnya berobat sebelum Aku mengenal web ini. Web yang mudah digunakan dan dokter yar termapil membuat berobat menjadi lebih menyenangkan!
                                    <br>- Ida, Semarang
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                </div>
                            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Poliklinik</span></strong>. All Rights Reserved
                </div>

            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('OnePage/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('OnePage/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('OnePage/assets/js/main.js') }}"></script>

</body>

</html>