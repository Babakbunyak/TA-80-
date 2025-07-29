<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= esc($berita['judul']) ?> - Berita</title>
    <link rel="shortcut icon" href="<?= base_url('favicon.ico'); ?>" type="image/x-icon">
    <link href="<?= base_url('assets'); ?>/img/favicon.png" rel="icon">
    <link href="<?= base_url('assets'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="<?= base_url('assets/gaya/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/gaya/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/gaya/aos/aos.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/gaya/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/gaya/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/main.css'); ?>" rel="stylesheet">
</head>

<body class="index-page">

    <!-- Header -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <div class="col-auto">
                    <img src="<?= base_url('assets/img/satuvisi.jpg') ?>" alt="Logo" class="logo">
                </div>
                <h1 class="sitename">SATU VISI</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="active">Beranda</a></li>
                    <li><a href="/#about">Buat Laporan</a></li>
                    <li><a href="/#services">Berita</a></li>
                    <li><a href="/#portfolio">Sejarah</a></li>
                    <li><a href="/#team">Pengurus</a></li>
                    <li><a href="/#contact">Kontak</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>


    <!-- Footer -->
    <footer id="footer" class="footer dark-background mt-5">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="/" class="logo d-flex align-items-center"><span class="sitename">SATU VISI</span></a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra...</p>
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
                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>A108 Adam Street<br>New York, NY 535022<br>United States</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>
            </div>
        </div>
        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Satu Visi</strong></p>
            <div class="credits">Dibuat oleh <a href="https://bootstrapmade.com/">SATU VISI</a></div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- JS Files -->
    <script src="<?= base_url('assets/gaya/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/gaya/php-email-form/validate.js'); ?>"></script>
    <script src="<?= base_url('assets/gaya/aos/aos.js'); ?>"></script>
    <script src="<?= base_url('assets/gaya/purecounter/purecounter_vanilla.js'); ?>"></script>
    <script src="<?= base_url('assets/gaya/glightbox/js/glightbox.min.js'); ?>"></script>
    <script src="<?= base_url('assets/gaya/imagesloaded/imagesloaded.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('assets/gaya/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('assets/gaya/swiper/swiper-bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/main.js'); ?>"></script>

</body>

</html>