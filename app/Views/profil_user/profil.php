<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/profil.css') ?>">

</head>

<body>

    <div class="card card-custom shadow-lg">
        <div class="card-header card-header-custom">
            <div class="avatar"><i class="bi bi-person"></i></div>
            <h4 class="mb-0">Dashboard Profil</h4>
            <small>Kelola informasi akun Anda</small>
        </div>
        <div class="card-body bg-white">
            <h5 class="text-center mb-4"><i class="bi bi-info-circle-fill text-primary me-1"></i> Informasi Profil</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="bi bi-person-fill me-2 text-muted"></i> <strong>Nama Lengkap: </strong> <?= esc($pengguna['nama'] ?? '-') ?></li>
                <li class="list-group-item"><i class="bi bi-envelope-fill me-2 text-muted"></i> <strong>Email:</strong> <?= esc($pengguna['email'] ?? '-') ?></li>
                <li class="list-group-item"><i class="bi bi-bar-chart-fill me-2 text-muted"></i> <strong>Status Laporan:</strong> <span class="badge-status">-</span></li>
                <li class="list-group-item"><i class="bi bi-clock-fill me-2 text-muted"></i> <strong>Terakhir Login:</strong> -</li>
            </ul>

            <div class="text-center mt-4">
                <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#editProfileModal"><i class="bi bi-pencil-square me-1"></i> Edit Profil</button>
                <button class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#changePasswordModal"><i class="bi bi-key me-1"></i> Ganti Password</button>
                <a href="<?= base_url('logout') ?>" class="btn btn-danger"><i class="bi bi-box-arrow-right me-1"></i> Logout</a>
            </div>
        </div>
    </div>

    <!-- Modal: Edit Profil -->
    <div class="modal fade" id="editProfileModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('/profil/update') ?>" method="post">
                    <div class="modal-header bg-gradient text-white" style="background: linear-gradient(135deg, #6a11cb, #8e44ad);">
                        <h5 class="modal-title"><i class="bi bi-pencil-square me-1"></i> Edit Profil</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= esc($pengguna['nama'] ?? '') ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= esc($pengguna['email'] ?? '') ?>" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal: Ganti Password -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('/profil/password') ?>" method="post">
                    <div class="modal-header bg-gradient text-white" style="background: linear-gradient(135deg, #6a11cb, #8e44ad);">
                        <h5 class="modal-title"><i class="bi bi-key me-1"></i> Ganti Password</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Password Saat Ini</label>
                            <input type="password" class="form-control" name="password_lama" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password Baru</label>
                            <input type="password" class="form-control" name="password_baru" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" name="konfirmasi_password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-key me-1"></i> Ganti Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>