<?= $this->extend('admin/dashboard/Layout/template') ?>

<?= $this->section('content') ?>

<style>
  .img-fixed {
    width: 300px;
    height: 200px;
    object-fit: cover;
    object-position: center;
    border-radius: 8px;
    border: 1px solid #ddd;
  }
</style>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">
        <?= isset($berita) ? 'Edit Berita' : 'Tambah Berita'; ?>
      </h1>

      <?php if (session()->getFlashdata('sukses')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('sukses') ?></div>
      <?php elseif (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
      <?php endif; ?>

      <div class="card mb-4">
        <div class="card-body">
          <form action="<?= isset($berita) ? base_url('/admin/edit/berita' . $berita['id_berita']) : base_url('/admin/upload/berita') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input class="form-control" type="text" name="judul" value="<?= isset($berita) ? esc($berita['judul']) : ''; ?>" id="judul" placeholder="Masukkan Judul Dokumentasi" required>
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Isi Berita</label>
              <textarea class="form-control" rows="6" name="deskripsi" value="<?= isset($berita) ? esc($berita['deskripsi']) : ''; ?>" id="deskripsi" placeholder="Isi Berita.." required></textarea>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Foto berita</label>
              <input type="file" class="form-control" name="image" id="image" required onchange="previewImage(event)">
              <?php if (isset($berita) && !empty($berita['image'])): ?>
                <div class="mt-3">
                  <img id="preview-img" class="img-fixed" style="display:none;" alt="Preview Foto Dokumentasi">
                </div>
              <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary"><?= isset($berita) ? 'Update' : 'Simpan'; ?></button>
            <?php if (isset($berita)) : ?>
              <a href="<?= base_url('admin/berita/hapus/' . $berita['id_berita']); ?>" class="btn btn-danger ms-2" onclick="return confirm('Yakin ingin menghapus berita ini?')">Hapus</a>
            <?php endif;  ?>
          </form>
        </div>
      </div>
    </div>
  </main>
</div>

<script>
  function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('preview-img');
    if (input.files && input.files[0]) {
      const reader = new FileReader();
      reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
      }
      reader.readAsDataURL(input.files[0]);
    } else {
      preview.src = '';
      preview.style.display = 'none';
    }
  }
</script>

<?= $this->endSection(); ?>