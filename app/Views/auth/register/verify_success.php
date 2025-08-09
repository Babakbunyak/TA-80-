<?= $this->extend('auth/register/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
  <div class="alert alert-success">Verifikasi akun berhasil! Silakan login.</div>
  <a href="<?= base_url('auth') ?>" class="btn btn-primary">Login</a>
</div>

<?= $this->endSection() ?>