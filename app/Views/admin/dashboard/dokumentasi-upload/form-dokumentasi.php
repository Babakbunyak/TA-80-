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
            <h1 class="mt-4">Upload Dokumentasi</h1>

            <?php if (session()->getFlashdata('sukses')): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('sukses') ?></div>
            <?php elseif (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <div class="card mb-4">
                <div class="card-body">
                    <form action="<?= base_url('admin/upload_dokumentasi/upload') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input class="form-control" type="text" name="judul" id="judul" placeholder="Masukkan Judul Dokumentasi" required>
                        </div>
                        <div class="mb-3">
                            <label for="dokumentasi" class="form-label">Isi Dokumentasi</label>
                            <textarea class="form-control" rows="6" name="dokumentasi" id="dokumentasi" placeholder="Isi dokumentasi..." required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Foto Dokumentasi</label>
                            <input type="file" class="form-control" name="image" id="image" required onchange="previewImage(event)">
                            <div class="mt-3">
                                <img id="preview-img" class="img-fixed" style="display:none;" alt="Preview Foto Dokumentasi">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Upload</button>
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