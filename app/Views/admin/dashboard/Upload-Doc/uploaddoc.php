<?= $this->extend('admin/dashboard/Layout/template') ?>

<?= $this->section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Upload Dokumentasi</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="<?= base_url('admin/upload_dokumentasi/upload') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input class="form-control form-control-lg bg-light bg-gradiant mb-3" type="text" name="judul" placeholder="Masukan Judul">
                        <textarea class="form-control mb-3" rows="10" name="isi"></textarea>
                        <input type="file" class="form-control mb-3" name="dokumen">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?= $this->endsection(); ?>