<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Kumpulan Data
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('data'); ?>">Data Laporan</a>
                        <a class="nav-link" href="<?= base_url('data_satuvisi'); ?>">Data Aspirasi</a>
                    </nav>
                </div>

                <a class="nav-link" href="<?= base_url('anggota'); ?>">
                    <div class="sb-nav-link-icon"><i class="bi bi-person-lines-fill"></i></div>
                    Anggota
                </a>
                <a class="nav-link" href="<?= base_url('upber'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Uploud Berita
                </a>
                <a class="nav-link" href="<?= base_url('listdoc'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Uploud Dokumentasi
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Log in:</div>
            SATU VISI
        </div>
    </nav>
</div>