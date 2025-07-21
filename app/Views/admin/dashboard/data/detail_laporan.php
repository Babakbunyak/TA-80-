<?= $this->extend('admin/dashboard/Layout/template') ?>

<?= $this->section('content') ?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Data Laporan</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Laporan</li>
      </ol>
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
      <div class="card mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center">

            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<?= $this->endSection(); ?>