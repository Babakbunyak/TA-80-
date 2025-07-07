<?= $this->extend('admin/dashboard/Layout/template') ?>

<?= $this->section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Upload Berita</h1>

            <div class="card mb-4">
                <div class="card-body">

                    <!-- Flash Message -->
                    <?php if (session()->getFlashdata('sukses')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('sukses') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php elseif (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('error') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <!-- Form Upload -->
                    <form action="<?= base_url('admin/upload_berita/upload') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>

                        <!-- Judul -->
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Berita</label>
                            <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul berita" required>
                        </div>

                        <!-- Teks Berita -->
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Isi Berita</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="6" placeholder="Tulis isi berita di sini..." required></textarea>
                        </div>

                        <!-- Upload Gambar -->
                        <div class="mb-3">
                            <label for="foto" class="form-label">Gambar Berita</label>
                            <input type="file" name="foto" id="foto" class="form-control" accept="image/*" required onchange="previewImage(event)">
                            <div class="mt-3 text-center">
                                <img id="preview-img" src="#" alt="Preview Gambar" style="max-width:220px; max-height:180px; display:none; border-radius:8px; box-shadow:0 2px 8px #0002;" />
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-success w-100">Upload</button>
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
                preview.style.display = 'inline-block';
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    }
</script>

<?= $this->endSection(); ?>