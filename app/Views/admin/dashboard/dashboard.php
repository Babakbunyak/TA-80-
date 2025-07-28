<?= $this->extend('admin/dashboard/Layout/template') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <div class="row g-4 mt-4">
        <!-- Kiri: Foto & Nama Anggota Login -->
        <div class="col-md-4">
          <div class="card mb-4 text-center">
            <div class="card-body">
              <img src="<?= base_url('uploads/foto/' . ($user['foto'] ?? 'default.png')) ?>" class="rounded-circle mb-3" width="100" height="100" alt="Foto Profil">
              <h5 class="card-title mb-0"><?= esc($user['nama'] ?? '-') ?></h5>
              <div class="text-muted small"><?= esc($user['jabatan'] ?? '-') ?></div>
            </div>
          </div>
          <div class="row g-2">
            <div class="col-6">
              <div class="card text-center">
                <div class="card-body">
                  <div class="fw-bold fs-4"><?= $totalAnggota ?></div>
                  <div class="text-muted">Anggota</div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card text-center">
                <div class="card-body">
                  <div class="fw-bold fs-4"><?= $totalPengguna ?></div>
                  <div class="text-muted">Pengguna</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Kanan: Statistik Laporan & Aspirasi -->
        <div class="col-md-8">
          <div class="row g-3">
            <div class="col-6">
              <div class="card text-center">
                <div class="card-body">
                  <div class="fw-bold fs-3 text-warning mb-1">
                    <?= $laporanProses ?> <i class="fa fa-spinner"></i>
                  </div>
                  <div class="text-muted">Laporan Diproses</div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card text-center">
                <div class="card-body">
                  <div class="fw-bold fs-3 text-success mb-1">
                    <?= $laporanSelesai ?> <i class="fa fa-check-circle"></i>
                  </div>
                  <div class="text-muted">Laporan Selesai</div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card text-center">
                <div class="card-body">
                  <div class="fw-bold fs-3 text-warning mb-1">
                    <?= $aspirasiProses ?> <i class="fa fa-spinner"></i>
                  </div>
                  <div class="text-muted">Aspirasi Diproses</div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card text-center">
                <div class="card-body">
                  <div class="fw-bold fs-3 text-success mb-1">
                    <?= $aspirasiSelesai ?> <i class="fa fa-check-circle"></i>
                  </div>
                  <div class="text-muted">Aspirasi Selesai</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<?= $this->endSection() ?>