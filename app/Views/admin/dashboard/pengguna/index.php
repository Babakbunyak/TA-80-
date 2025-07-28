<?= $this->extend('admin/dashboard/Layout/template') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4 mb-3">Data Pengguna</h1>
      <div class="card mt-3 mb-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead class="table-dark">
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>No. Telp</th>
                  <th>Jumlah Laporan/Aspirasi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($pengguna as $row) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= esc($row['nama']); ?></td>
                    <td><?= esc($row['email']); ?></td>
                    <td><?= esc($row['alamat']); ?></td>
                    <td><?= esc($row['no_telp']); ?></td>
                    <td>
                      <?php
                      $laporanModel = model('App\\Models\\LaporanModel');
                      $jumlah = $laporanModel->where('id_pengguna', $row['id_pengguna'])->countAllResults();
                      echo $jumlah;
                      ?>
                    </td>
                    <td>
                      <a href="<?= base_url('pengguna/detail/' . $row['id_pengguna']); ?>" class="btn btn-sm btn-info">Detail</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                <?php if (empty($pengguna)) : ?>
                  <tr>
                    <td colspan="6" class="text-center">Tidak ada data pengguna.</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<?= $this->endSection(); ?>