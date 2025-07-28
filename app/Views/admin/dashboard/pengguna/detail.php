<?= $this->extend('admin/dashboard/Layout/template') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4 mb-3">Detail Pengguna</h1>
      <div class="card mt-3 mb-3">
        <div class="card-body">
          <?php if (isset($pengguna)) : ?>
            <dl class="row">
              <dt class="col-sm-3">Nama</dt>
              <dd class="col-sm-9"><?= esc($pengguna['nama']) ?></dd>
              <dt class="col-sm-3">Email</dt>
              <dd class="col-sm-9"><?= esc($pengguna['email']) ?></dd>
              <dt class="col-sm-3">Alamat</dt>
              <dd class="col-sm-9"><?= esc($pengguna['alamat']) ?></dd>
              <dt class="col-sm-3">No. Telp</dt>
              <dd class="col-sm-9"><?= esc($pengguna['no_telp']) ?></dd>
            </dl>
            <a href="<?= base_url('pengguna') ?>" class="btn btn-secondary">Kembali</a>
          <?php else : ?>
            <div class="alert alert-danger">Data pengguna tidak ditemukan.</div>
            <a href="<?= base_url('pengguna') ?>" class="btn btn-secondary">Kembali</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </main>
</div>

<?= $this->endSection(); ?>