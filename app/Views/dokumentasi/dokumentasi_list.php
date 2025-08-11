<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title> Dokumentasi Satu Visi</title>
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
                    <?php if (session()->get('logged_in')): ?>
                        <li><a href="<?= base_url('profil-pengguna'); ?>">Profil</a></li>
                    <?php else: ?>
                        <li><a href="<?= base_url('auth'); ?>">Login</a></li>
                    <?php endif; ?>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>
    <main class="main">
        <!-- More Services Section -->
        <section id="more-services" class="more-services section">
            <!-- Section Title -->

            <div class="container section-title" data-aos="fade-up">
                <h2>Dokumentasi Kegiatan</h2>
                <p>Kegiatan Satu Visi Untuk Masyarakat :</p>
            </div><!-- End Section Title -->


            <div class="container">
                <div class="row gy-4">
                    <?php foreach ($dokumentasi as $d) : ?>
                        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 d-flex  justify-content-between">
                                <?php
                                $fotoPath = FCPATH . 'uploads/dokumentasi/' . $d['image'];
                                $fotoURL = base_url('uploads/dokumentasi/' . $d['image']);
                                ?>
                                <?php if (!empty($d['image']) && file_exists($fotoPath)) : ?>
                                    <img src="<?= $fotoURL ?>" class="img-fixed-doc" alt="<?= esc($d['judul']) ?>">
                                <?php else : ?>
                                    <img src="<?= base_url('assets/img/default-image.jpg') ?>" class="img-fixed-doc" alt="Gambar tidak tersedia">
                                <?php endif; ?>
                                <div class="card-body w-100 p-2">
                                    <h3 class="mt-2 mb-2"><?= esc($d['judul']) ?></h3>
                                    <a href="<?= base_url('user/dokumentasi/' . $d['id_dokumentasi']) ?>" class="btn btn-custom btn-sm mt-2">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- /More Services Section -->
    </main>

    <!-- Footer -->
    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">SATU VISI</span>
                    </a>
                    <p>Yayasan Satu Visi adalah lembaga sosial masyarakat yang hadir untuk memberdayakan masyarakat melalui pendidikan, pelatihan, dan pendampingan yang berkelanjutan. Kami percaya bahwa setiap orang memiliki potensi untuk berkembang jika diberi akses yang tepat. Fokus utama kami adalah menciptakan masyarakat yang mandiri, sejahtera, dan sadar akan hak serta tanggung jawabnya. Melalui program-program nyata di bidang pendidikan, ekonomi, dan sosial, kami berupaya menghadirkan solusi yang menyentuh langsung kebutuhan masyarakat. Dengan semangat kolaborasi dan kepedulian, Yayasan Satu Visi terus bergerak untuk membawa perubahan positif dan berdampak luas bagi masa depan bersama.</p>
                    <div class="social-links d-flex mt-4">

                        <a href="https://www.facebook.com/groups/1122613994496942/?ref=share&mibextid=KtfwRi" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-facebook"></i>
                        </a>



                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">

                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#hero">Beranda</a></li>
                        <li><a href="#about">Buat Laporan</a></li>
                        <li><a href="#services">Berita</a></li>
                        <li><a href="#portfolio">Sejarah</a></li>
                        <li><a href="#team">Pengurus</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Hubungi Kami</h4>
                    <p>Satu Visi</p>
                    <p>Sumba Tengah, Resetlemen</p>
                    <p>Indonesia</p>
                    <p class="mt-4"><strong>Telepon:</strong> <span>082146527966</span></p>
                    <p><strong>Email:</strong> <span>satuvisisumba@gmail.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Satu Visi</strong> </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Dibuat oleh ">SATU VISI</a>
            </div>
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