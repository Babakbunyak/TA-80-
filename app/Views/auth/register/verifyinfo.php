<?= $this->extend('auth/register/template') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
  <div class="alert alert-info">Silakan cek email Anda untuk kode verifikasi akun.</div>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="<?= base_url('register/verify') ?>" method="post">
        <div class="form-group mb-3">
          <label for="kode_verifikasi">Masukkan Kode Verifikasi</label>
          <input type="text" name="kode_verifikasi" id="kode_verifikasi" class="form-control" required autofocus>
        </div>
        <button type="submit" class="btn btn-primary">Verifikasi</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection() ?>