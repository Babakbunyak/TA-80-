<?= $this->extend('admin/dashboard/Layout/template') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4 mb-3">Dokumentasi</h1>
      <button type="button" class="btn btn-success mb-2" onclick="location.href='<?= base_url('updoc'); ?>'">Tambah</button>

      <div class="card mt-3 mb-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead class="table-dark">
                <tr>
                  <th style="width: 50px;">No.</th>
                  <th>Foto</th>
                  <th>Judul</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($dokumentasi as $row) : ?>
                  <tr>
                    <td style="width: 50px;"><?= $no++; ?></td>
                    <td>
                      <?php
                      $image = !empty($row['image']) ? $row['image'] : 'default.png';
                      $imagePath = FCPATH . 'uploads/dokumentasi/' . $image;
                      if (!file_exists($imagePath) || empty($row['image'])) {
                        $image = 'default.png';
                      }
                      ?>
                      <img src="<?= base_url('uploads/dokumentasi/' . $image); ?>" alt="Foto" width="50">
                    </td>
                    <td><?= esc($row['judul'] ?? '-'); ?></td>
                    <td>
                      <a href="<?= base_url('/upload-doc/uploaddoc/' . $row['id_dokumentasi']); ?>" class="btn btn-sm btn-info">Edit</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                <?php if (empty($dokumentasi)) : ?>
                  <tr>
                    <td colspan="4" class="text-center">Tidak ada data dokumentasi.</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </main>
</div>

<?= $this->endSection(); ?>