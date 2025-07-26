<?= $this->extend('admin/dashboard/Layout/template') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4 mb-3">Dokumentasi</h1>
      <button type="button" class="btn btn-success" onclick="location.href='<?= base_url('updoc'); ?>'">Tambah</button>

      <div class="card mt-3 mb-3">
        <div class="card-body">
          <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($dokumentasi as $row) : ?>
                <tr>
                  <td><?= $no++; ?></td>
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
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
</div>

<?= $this->endSection(); ?>