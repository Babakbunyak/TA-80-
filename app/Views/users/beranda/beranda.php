<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SATU VISI</title>
    <Link rel="shortcut icon" href="<?= base_url('favicon.ico'); ?>" type="image/x-icon">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="<?= base_url('assets'); ?>/img/favicon.png" rel="icon">
    <link href="<?= base_url('assets'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- gaya CSS Files -->
    <link href="<?= base_url('assets'); ?>/gaya/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/gaya/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/gaya/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/gaya/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/gaya/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?= base_url('assets'); ?>/css/main.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/css/dokumentasi.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Shuffle
  * Template URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="<?= base_url('assets'); ?>/img/logo.png" alt=""> -->
                <div class="col-auto">
                    <img src="<?= base_url('assets'); ?>/img/satuvisi.jpg" alt="Logo" class="logo">
                </div>
                <h1 class="sitename">SATU VISI </h1>

            </a>

            <nav id="navmenu" class="navmenu">


                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li><a href="#about">Buat Laporan</a></li>
                    <li><a href="#services">Berita</a></li>
                    <li><a href="#portfolio">Sejarah</a></li>
                    <li><a href="#team">Pengurus</a></li>
                    <li><a href="#contact">Kontak</a></li>
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

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="<?= base_url('assets'); ?>/img/banner/7.jpg" alt="">
                    <div class="carousel-container">
                        <h2>Selamat Datang di Satu Visi</h2>
                        <p>Selamat datang di Satu Visi, tempat di mana mimpi bertemu aksi, dan suara kecil menjadi kekuatan besar. Kami bukan hanya gerakan, tapi cerita yang terus tumbuh bersama setiap langkahmu. Di sinilah semangat baru dibangun, harapan ditanam, dan masa depan dirangkai bersama. Ayo jadi bagian dari perubahan. Karena di Satu Visi, kamu tidak hanya melihat—kamu ikut menciptakan.

                        </p>
                        <!--<a href="#featured-services" class="btn-get-started">Get Started</a> -->
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="<?= base_url('assets'); ?>/img/banner/8.jpg" alt="">
                    <div class="carousel-container">
                        <h2>Masyarakat Sumba Yang Sejahterah</h2>
                        <p>Masyarakat Sumba yang Sejahtera adalah cita-cita yang kami perjuangkan bersama—di mana setiap keluarga hidup layak, anak-anak mendapatkan pendidikan yang layak, dan budaya tetap lestari dalam kemajuan. Kami percaya, dengan kerja nyata dan kolaborasi semua pihak, Sumba bisa bangkit, mandiri, dan menjadi contoh kearifan lokal yang berdampak nasional. Bersama, kita wujudkan harapan ini menjadi kenyataan yang dirasakan oleh semua.</p>
                        <!--<a href="#featured-services" class="btn-get-started">Get Started</a> -->
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="<?= base_url('assets'); ?>/img/banner/9.jpg" alt="">
                    <div class="carousel-container">
                        <h2>Kami Ada Untuk Membangun Sumba Lebih Baik</h2>
                        <p>Kami ada untuk membangun Sumba lebih baik—dengan hati, aksi, dan komitmen. Kami hadir bukan hanya untuk melihat, tapi terlibat langsung dalam setiap proses perubahan. Dari pelosok desa hingga pusat kota, kami bekerja demi pendidikan yang lebih merata, ekonomi yang lebih kuat, dan budaya yang terus hidup. Bersama masyarakat, kami melangkah menuju Sumba yang mandiri, berdaya saing, dan sejahtera untuk generasi masa depan.</p>
                        <!--<a href="#featured-services" class="btn-get-started">Get Started</a> -->
                    </div>
                </div><!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Buat Laporan</h2>
                <p>Laporkan Aspirasi dan Keluhan Anda Disini</p>
            </div><!-- End Section Title -->

            <!-- Button buat laporan dengan gambar lebih gelap -->
            <div class="container my-5">
                <div class="custom-container p-4 bg-light rounded position-relative text-center"
                    style="background-image: url('https://tempatwisataunik.com/wp-content/uploads/2019/11/d060afdd-pantai-ratenggaro.jpg'); 
                background-size: cover; 
                background-position: center; 
                filter: brightness(0.9);"> <!-- Brightness dikurangi untuk membuat gambar lebih gelap -->
                    <div class="overlay bg-black position-absolute top-0 start-0 w-100 h-100 opacity-50"></div> <!-- Overlay hitam semi-transparan -->
                    <div class="content position-relative z-3 text-white">
                        <p class="large-text">Layanan Aspirasi dan Pengaduan Masyarakat</p>
                        <?php if (session()->get('logged_in')): ?>
                            <a href="<?= base_url('laporan/laporan'); ?>" class="btn btn-custom btn-sm" style="background-color: #21d1f8; color: white;">Buat Laporan</a>
                        <?php else: ?>
                            <a href="<?= base_url('auth'); ?>" class="btn btn-custom btn-sm" style="background-color: #21d1f8; color: white;">Buat Laporan</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>



        </section><!-- /About Section -->


        </section><!-- /Stats Section -->

        <!-- Berita Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Berita</h2>
                <p>Update Berita Hari Ini :</p>
            </div><!-- End Section Title -->
            <div class="container mt-5">
                <div class="row g-4">
                    <?php foreach ($berita as $b) : ?>
                        <div class="col-lg-4">
                            <div class="card">
                                <?php if (isset($b['image'])) : ?>
                                    <img src="<?= base_url('uploads/berita/' . $b['image']) ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <?php else : ?>
                                        <img src="<?= base_url('uploads/berita/default.jpg') ?>" class="card-img-top" alt="...">
                                    <?php endif; ?>
                                    <h5 class="card-title"><?= $b['judul'] ?></h5>
                                    <?php if (isset($b['deskripsi'])) : ?>
                                        <p class="card-text"><?= substr($b['deskripsi'], 0, 100) ?>...</p>
                                    <?php else : ?>
                                        <p class="card-text">Belum ada deskripsi</p>
                                    <?php endif; ?>
                                    <a href="<?= base_url('berita/detail-berita/' . ($b['id'] ?? $b['id_berita'] ?? '')) ?>" class="btn btn-custom btn-sm">Lihat Detail</a>
                                    </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- /Services Section -->



        <!-- More Services Section -->
        <section id="more-services" class="more-services section">
            <!-- Section Title -->

            <div class="container section-title" data-aos="fade-up">
                <h2>Dokumentasi Kegiatan</h2>
                <p>Kegiatan Satu Visi Untuk Masyarakat :</p>
            </div><!-- End Section Title -->


            <div class="container">
                <div class="row gy-4">
                    <div class="container my-5">
                        <div class="custom-container p-4 bg-light rounded position-relative text-center"
                            style="background-image: url('https://destinasian.co.id/id/wp/wp-content/uploads/Kuda-Sumbawa-05.jpg'); 
                background-size: cover; 
                background-position: center; 
                filter: brightness(0.9);"> <!-- Brightness dikurangi untuk membuat gambar lebih gelap -->
                            <div class="overlay bg-black position-absolute top-0 start-0 w-100 h-100 opacity-50"></div> <!-- Overlay hitam semi-transparan -->
                            <div class="content position-relative z-3 text-white">
                                <p class="large-text">Dokumentasi Kegiatan Satu Visi</p>
                                <a href="user/list-dokumentasi" class="btn btn-custom btn-sm" style="background-color: #21d1f8; color: white;">Lihat Dokumentasi</a>
                            </div>
                        </div>
                    </div>
        </section><!-- /More Services Section -->


        <!-- Sejarah Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Sejarah</h2>
                <p>Sejarah berdirinya Satu Visi</p>
            </div><!-- End Section Title -->

            <!-- Card Sejarah -->
            <div class="container">
                <div class="card horizontal-card">
                    <div class="row g-0 flex-column flex-md-row">
                        <!-- Gambar -->
                        <div class="col-12 col-md-4 img-col">
                            <img src="<?= base_url('assets'); ?>/img/dokumentasi satuvisi/i.jpg" alt="..." class="img-fluid w-100 h-100 object-fit-cover">
                        </div>
                        <!-- Teks -->
                        <div class="col-12 col-md-8">
                            <div class="card-body card-body-custom">
                                <h5 class="card-title card-title-custom">Cerita Singkat</h5>
                                <p class="card-text">
                                    Ide berdirinya Yayaysan Satu Visi oleh saya (Ibu Debora R.Kasuatu dengan Bapa Alfonsus Y.Bora). Saat itu kami bekerja di LSM sebagai pendamping Lapangan.
                                    Saat itu, hanya ada 5 LSM di Sumba.
                                    Dalam perjalanan bekerja sambil belajar di dunia LSM, kami berdua merasa bahwa pelatih-pelatih kami semua adalah orang² dari luar Sumba, yakni dari Jakarta, Denpasar, Mataram dan Kupang. Tidak ada satu orangpun pelatih dari Sumba. Rata-rata kami bekerja sebagai staf pendamping desa. Dalam perjalanan 3-5 tahun kami bekerja di LSM, terasa semakin kuat keinginan kami untuk mewujudkan keinginan yakni memperbanyak pelatih2 orang Sumba yang memiliki skill yang bagus.
                                    Hal kedua adalah, sangat sedikit perempuan Sumba yang bekerja di ruang publik. Rata-rata perempuan bekerja sebagai ibu Rumah Tangga dan yang paling tinggi menjadi ibu Guru.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="container">
                <div class="card horizontal-card">
                    <div class="row g-0 flex-column flex-md-row">
                        <!-- Gambar -->
                        <div class="col-12 col-md-4 img-col">
                            <img src="<?= base_url('assets'); ?>/img/dokumentasi satuvisi/j.jpg" alt="..." class="img-fluid w-100 h-100 object-fit-cover">
                        </div>
                        <!-- Teks -->
                        <div class="col-12 col-md-8">
                            <div class="card-body card-body-custom">
                                <h5 class="card-title card-title-custom">Isu Yang Beredar Di Masa itu</h5>
                                <p class="card-text">
                                    Masalah keterbelakangan perempuan Sumba menjadi kegundahan saya saat itu. Diantaranya, perempuan diragukan kemampuannya dalam memimpin. Terbukti di dalam pertemuan-pertemuan level desa, hampir tidak ada perempuan yang ikut untuk duduk sebagai peserta pertemuan apalagi terlibat dalam pengambilan keputusan. kalau pun ada,itu hanya istri dari kepala desa saja dan itu pun sebagai ketua konsumsi. Jadi perempuan selalu mendapat peran sebagai penyedia konsumsi dipertemuan-pertemuan desa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="container">
                <div class="card horizontal-card">
                    <div class="row g-0 flex-column flex-md-row">
                        <!-- Gambar -->
                        <div class="col-12 col-md-4 img-col">
                            <img src="<?= base_url('assets'); ?>/img/dokumentasi satuvisi/h.jpg" alt="..." class="img-fluid w-100 h-100 object-fit-cover">
                        </div>
                        <!-- Teks -->
                        <div class="col-12 col-md-8">
                            <div class="card-body card-body-custom">
                                <h5 class="card-title card-title-custom">Munculnya Niat Membangun LSM dan Pergumulan Saat Itu</h5>
                                <p class="card-text">
                                    Waktu itu, Saya (Ibu Debora R. Kasuatu dan Bapa Alfonsus Y. Bora) mengajak beberapa aktivis-aktivis LSM dan mendiskusikan tentang hal ini. Ternyata, ini membuka pikiran kami saat itu. Hal inilah kemudian yang menjadi dasar berdirinya Yayasan Satu Visi.
                                    Pergumulan mendirikan Yayasan Satu Visi berjalan sampai 3 tahun lebih. Sambil belajar di LSM, kami terus menempa kemampuan pribadi kami. Kebetulan saat itu saya dipercaya menjadi Manajer Program di salah satu LSM, dan ini sangat langka. Saya merasa percaya bahwa perempuan Sumba hanya butuh kesempatan untuk maju.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="container">
                <div class="card horizontal-card">
                    <div class="row g-0 flex-column flex-md-row">
                        <!-- Gambar -->
                        <div class="col-12 col-md-4 img-col">
                            <img src="<?= base_url('assets'); ?>/img/dokumentasi satuvisi/k.jpg" alt="..." class="img-fluid w-100 h-100 object-fit-cover">
                        </div>
                        <!-- Teks -->
                        <div class="col-12 col-md-8">
                            <div class="card-body card-body-custom">
                                <h5 class="card-title card-title-custom">Berdirinya Yayasan Satu Visi</h5>
                                <p class="card-text">
                                    Pada saat Yayasan Satu Visi berdiri pertama kali, kami hanya mempunyai 4 staf dan belum ada donor atau Agensi-agensi yang mendukung kami pada saat itu. Kami berdua memanfaatkan penghasilan kami yg kecil di LSM lain, mulai menyewa ruangan, membeli komputer/PC bekas, serta swadaya yang mem-fasilitasi pertemuan dgn kelompok masyarakat di desa, terutama kelompok perempuan.
                                    Hal pertama yang kami lakukan dengan kelompk di desa yakni melakukan Asesment kebutuhan masyarakat desa termasuk kebutuhan kelompok perempuan. Dan setelah 1 tahun berdiri, pada Mei 2006, Yayasan Satu Visi mendapatkan kepercayaan dari Pemerintah Provinsi NTT yakni Dinas Penyuluhan Pertanian Terpadu. Yayasan Satu Visi menjadi Lembaga Konsultan Program PIDRA (Participatory Integrated Development Rainfid Area) atau program Partisipasi Lahan Kering untuk pengembangan ekonomi masyarakat desa dan Ketahanan Pangan di 18 Desa di Kabupaten Sumba Barat. Program PIDRA saat itu didukung oleh IFAD.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="container">
                <div class="card horizontal-card">
                    <div class="row g-0 flex-column flex-md-row">
                        <!-- Gambar -->
                        <div class="col-12 col-md-4 img-col">
                            <img src="<?= base_url('assets'); ?>/img/dokumentasi satuvisi/l.jpg" alt="..." class="img-fluid w-100 h-100 object-fit-cover">
                        </div>
                        <!-- Teks -->
                        <div class="col-12 col-md-8">
                            <div class="card-body card-body-custom">
                                <h5 class="card-title card-title-custom">Apa Itu IFAD ?</h5>
                                <p class="card-text">
                                    IFAD adalah singkatan dari International Fund for Agricultural Development, atau dalam bahasa Indonesianya, Dana Internasional untuk Pengembangan Pertanian. IFAD adalah badan khusus Perserikatan Bangsa-Bangsa (PBB) yang berfokus pada pemberantasan kemiskinan dan kelaparan di daerah pedesaan negara-negara berkembang termasuk Indonesia.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="container">
                <div class="card horizontal-card">
                    <div class="row g-0 flex-column flex-md-row">
                        <!-- Gambar -->
                        <div class="col-12 col-md-4 img-col">
                            <img src="<?= base_url('assets'); ?>/img/dokumentasi satuvisi/m.jpg" alt="..." class="img-fluid w-100 h-100 object-fit-cover">
                        </div>
                        <!-- Teks -->
                        <div class="col-12 col-md-8">
                            <div class="card-body card-body-custom">
                                <h5 class="card-title card-title-custom">Keberhasilan Satu Visi Di Dalam Usaha dan Kerja Keras</h5>
                                <p class="card-text">
                                    Sampai saat ini, Yayasan Satu Visi telah bekerja sama dengan beberapa donor atau Agensi-agensi serta sudah mendampingi atau memfasitasi hampir 100 desa yang tersebar di Kabupaten Sumba Barat, Sumba Barat Daya, Sumba Tengah dan Sumba Timur.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>

            </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Pengurus Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pengurus</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="<?= base_url('assets'); ?>/img/MAMA.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>DEBORA RAMBU KASUATU</h4>
                                    <span>Direktur Satu Visi</span>

                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="<?= base_url('assets'); ?>/img/MAMA DEA.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Yublina Maru
                                    </h4>
                                    <span>Manager Program</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="<?= base_url('assets'); ?>/img/KA AMBU.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4> Lestari Rambu Boba </h4>
                                    <span>Devisi Pendidikan dan Kelembagaan</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="<?= base_url('assets'); ?>/img/RAMBU YANA.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Rambu Yana </h4>
                                    <span>manager keuangan</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="<?= base_url('assets'); ?>/img/MAMA CLARA.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Marice Suruk</h4>
                                    <span>Sekretaris</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="<?= base_url('assets'); ?>/img/KEVIN.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Chaviendi U.Nusa Mesa</h4>
                                    <span>Anggota DP</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="<?= base_url('assets'); ?>/img/KA CINDY.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Cindi Yohana </h4>
                                    <span>devisi politik, hukum dan advokasi</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="<?= base_url('assets'); ?>/img/KA VERNI.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Farniati T. Winu</h4>
                                    <span>Anggota DP</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->


                </div>

            </div>



        </section><!-- /Team Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="content px-xl-5">
                            <h3><span>Kami hadir untuk </span><strong>Masyarakat</strong></h3>
                            <p>
                                "Kami hadir bukan sekadar ada, tapi untuk memberi arti bagi masyarakat.

                                Kehadiran kami adalah wujud kepedulian dan pengabdian untuk masyarakat.

                                Kami hadir bukan untuk dilihat, tapi untuk melayani dan membangun bersama masyarakat.

                                Karena setiap langkah kami adalah janji untuk masyarakat yang lebih baik.

                                Kami hadir sebagai harapan, untuk masa depan masyarakat yang lebih sejahtera."


                            </p>
                        </div>
                    </div>

                    <!-- Kata-Kata Motivasi -->

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-container">
                            <div class="faq-item faq-active">
                                <h3><span class="num"></span> <span>Motivasi Untukmu</span></h3>
                                <div class="faq-content">
                                    <p>"Kegagalan bukan akhir, tapi pijakan awal menuju sukses."</p>
                                    <p>"Setiap hari adalah kesempatan baru untuk tumbuh."</p>
                                    <p>"Kamu lebih kuat dari apa yang kamu pikirkan."</p>
                                    <p>"Lakukan dengan hati, hasil akan mengikuti."</p>
                                    <p>"Jangan takut gagal, takutlah untuk tidak mencoba."</p>
                                    <p>"Percaya diri bukan sombong, tapi bukti kamu menghargai dirimu."</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div>
                </div>

            </div>

            <!-- Visi Misi Tampilan -->
            <div class="container mt-5">
                <div class="row">
                    <!-- Visi Section -->
                    <div class="col-md-6 d-flex align-items-stretch mb-3">
                        <div class="card shadow-sm w-100">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title text-center">Visi</h3>
                                <ul class="list-group list-group-flush flex-grow-1">
                                    <li class="list-group-item">Menjadi pelopor perubahan sosial melalui pemberdayaan masyarakat yang adil, inklusif, dan berkelanjutan.</li>
                                    <li class="list-group-item">Mewujudkan masyarakat yang mandiri, berdaya, dan aktif membangun lingkungan sosial yang lebih baik.</li>
                                    <li class="list-group-item">Menghadirkan perubahan bermakna bagi kehidupan masyarakat melalui kerja nyata, kolaborasi, dan nilai kemanusiaan.</li>
                                    <li class="list-group-item">Menjadi yayasan terpercaya dalam membangun kekuatan bersama masyarakat menuju kesejahteraan yang merata.</li>
                                    <li class="list-group-item">Menghadirkan solusi nyata bagi tantangan sosial masyarakat melalui aksi yang terstruktur dan berkelanjutan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Misi Section -->
                    <div class="col-md-6 d-flex align-items-stretch mb-3">
                        <div class="card shadow-sm w-100">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title text-center">Misi</h3>
                                <ul class="list-group list-group-flush flex-grow-1">
                                    <li class="list-group-item">Memberdayakan masyarakat melalui pendidikan, pelatihan, dan pendampingan berkelanjutan.</li>
                                    <li class="list-group-item">Meningkatkan akses masyarakat terhadap layanan sosial, ekonomi, dan hak dasar.</li>
                                    <li class="list-group-item">Mendorong partisipasi aktif masyarakat dalam pembangunan lokal dan pengambilan keputusan.</li>
                                    <li class="list-group-item">Mengembangkan kemitraan strategis dengan pemerintah, swasta, dan komunitas lokal.</li>
                                    <li class="list-group-item">Membangun kesadaran akan nilai kemanusiaan, kesetaraan, dan keadilan sosial.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </section><!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title text-center" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Silahkan hubungi kami</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center gy-4"> <!-- Center the row -->

                    <div class="col-lg-8"> <!-- Max lebar di 8 kolom, agar tidak terlalu lebar -->
                        <div class="row gy-4 text-center"> <!-- Center text -->

                            <div class="container" data-aos="fade-up" data-aos-delay="100">
                                <div class="row justify-content-center gy-4">
                                    <div class="col-lg-8">
                                        <div class="row gy-4 text-center">

                                            <!-- Alamat -->
                                            <div class="col-md-6">
                                                <a href="https://maps.app.goo.gl/DBFkLdmyaR8Rfs8H6?g_st=aw" target="_blank" class="text-decoration-none text-dark">
                                                    <div class="info-item h-100" data-aos="fade" data-aos-delay="200">
                                                        <i class="bi bi-geo-alt"></i>
                                                        <h3>Alamat</h3>
                                                        <p>Desa Wairasa- Retetlement, Kec. Umbu Ratu Nggay Barat, Kab. Sumba Tengah, Provinsi Nusa Tenggara Timur</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Telepon -->
                                            <div class="col-md-6">
                                                <a href="https://wa.me/6282146527966" target="_blank" class="text-decoration-none text-dark">
                                                    <div class="info-item h-100" data-aos="fade" data-aos-delay="300">
                                                        <i class="bi bi-telephone"></i>
                                                        <h3>Hubungi Kami</h3>
                                                        <p>082146527966</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Email -->
                                            <div class="col-md-6">
                                                <a href="https://mail.google.com/mail/?view=cm&to=satuvisisumba@gmail.com" target="_blank" class="text-decoration-none text-dark">
                                                    <div class="info-item h-100" data-aos="fade" data-aos-delay="400">
                                                        <i class="bi bi-envelope"></i>
                                                        <h3>Email</h3>
                                                        <p>satuvisisumba@gmail.com</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Hari dan Jam Kerja (tidak diklik) -->
                                            <div class="col-md-6">
                                                <div class="info-item h-100" data-aos="fade" data-aos-delay="500">
                                                    <i class="bi bi-clock"></i>
                                                    <h3>Hari dan Jam Kerja</h3>
                                                    <p>Senin - Sabtu</p>
                                                    <p>08.00 - 17.00 WIT</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div><!-- End .col-lg-8 -->

                </div><!-- End .row -->
            </div><!-- End Container -->

        </section><!-- /Contact Section -->


    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">SATU VISI</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">

                        <a href="https://www.facebook.com/groups/1122613994496942/?ref=share&mibextid=KtfwRi" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-facebook"></i>
                        </a>



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
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p>United States</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
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
                Dibuat oleh <a href="https://bootstrapmade.com/">SATU VISI</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- gaya JS Files -->
    <script src="<?= base_url('assets'); ?>/gaya/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/php-email-form/validate.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/aos/aos.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets'); ?>/gaya/swiper/swiper-bundle.min.js"></script>



    <!-- Main JS File -->
    <script src="<?= base_url('assets'); ?>/js/main.js"></script>
    <script src=></script>

</body>

</html>