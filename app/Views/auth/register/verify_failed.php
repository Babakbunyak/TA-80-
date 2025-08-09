<?= $this->extend('auth/register/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
  <div class="alert alert-danger">Verifikasi gagal. Link verifikasi tidak valid atau sudah digunakan.</div>
  <a href="<?= base_url('register') ?>" class="btn btn-warning">Daftar Ulang</a>
</div>

<?= $this->endSection() ?>