<?= $this->extend('admin/dashboard/Layout/template') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4 mb-3">Detail Aspirasi</h1>
      <div class="card mt-3 mb-3">
        <div class="card-body">
          <?php if (isset($aspirasi)) : ?>
            <dl class="row">
              <dt class="col-sm-3">ID Aspirasi</dt>
              <dd class="col-sm-9"><?= esc($aspirasi['id_laporan']) ?></dd>
              <dt class="col-sm-3">Nama</dt>
              <dd class="col-sm-9"><?= esc($aspirasi['nama_pengguna'] ?? '-') ?></dd>
              <dt class="col-sm-3">Lokasi</dt>
              <dd class="col-sm-9"><?= esc($aspirasi['lok_kejadian']) ?></dd>
              <dt class="col-sm-3">Objek</dt>
              <dd class="col-sm-9"><?= esc($aspirasi['objek']) ?></dd>
              <dt class="col-sm-3">Isi Laporan</dt>
              <dd class="col-sm-9"><?= esc($aspirasi['text_laporan']) ?></dd>
              <dt class="col-sm-3">Tanggal Dibuat</dt>
              <dd class="col-sm-9"><?= esc($aspirasi['tanggal_dibuat']) ?></dd>
              <dt class="col-sm-3">Status</dt>
              <dd class="col-sm-9">
                <form action="<?= base_url('admin/dashboard/data_satuvisi/updatestatus/' . $aspirasi['id_laporan']) ?>" method="post" class="d-inline">
                  <select name="status" class="form-select d-inline w-auto" style="display:inline-block;">
                    <option value="proses" <?= ($aspirasi['status'] ?? 'proses') === 'proses' ? 'selected' : '' ?>>Proses</option>
                    <option value="selesai" <?= ($aspirasi['status'] ?? '') === 'selesai' ? 'selected' : '' ?>>Selesai</option>
                  </select>
                  <button type="submit" class="btn btn-sm btn-primary ms-2">Simpan</button>
                </form>
                <span class="badge bg-<?= ($aspirasi['status'] ?? 'proses') === 'selesai' ? 'success' : 'warning' ?> ms-2">
                  <?= ucfirst($aspirasi['status'] ?? 'proses') ?>
                </span>
              </dd>
            </dl>
            <a href="<?= base_url('data_satuvisi') ?>" class="btn btn-secondary">Kembali</a>
          <?php else : ?>
            <div class="alert alert-danger">Data aspirasi tidak ditemukan.</div>
            <a href="<?= base_url('data_satuvisi') ?>" class="btn btn-secondary">Kembali</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </main>
</div>

<?= $this->endSection(); ?>