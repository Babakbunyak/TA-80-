<?= $this->extend('admin/dashboard/Layout/template') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 mb-3">
                <?= isset($anggota) ? 'Edit Anggota' : 'Tambah Anggota'; ?>
            </h1>
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <form action="<?= isset($anggota) ? base_url('anggota/update/' . $anggota['id_anggota']) : base_url('anggota/simpan'); ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= isset($anggota) ? esc($anggota['nama']) : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_ktp" class="form-label">No. KTP</label>
                            <input type="text" class="form-control" id="no_ktp" pattern="[0-9]{16}" maxlength="16" name="no_ktp" value="<?= isset($anggota) ? esc($anggota['no_ktp']) : ''; ?>" <?= isset($anggota) ? 'readonly' : 'required'; ?>>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= isset($anggota) ? esc($anggota['tanggal_lahir']) : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= isset($anggota) ? esc($anggota['alamat']) : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">No. Telp</label>
                            <input type="text" class="form-control" id="no_telp" pattern="[0-9]{12}" name="no_telp" value="<?= isset($anggota) ? esc($anggota['no_telp']) : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                            <?php if (isset($anggota) && !empty($anggota['foto'])): ?>
                                <div class="mt-2">
                                    <img src="<?= base_url('uploads/foto/' . $anggota['foto']); ?>" alt="Foto" width="80">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label><br>
                            <?php $jabatan = isset($anggota) ? $anggota['jabatan'] : 'anggota'; ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jabatan" id="jenis_kepala" value="kepala" <?= $jabatan == 'kepala' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="jenis_kepala">Kepala</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jabatan" id="jenis_wakil" value="wakil" <?= $jabatan == 'wakil' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="jenis_wakil">Wakil</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jabatan" id="jenis_anggota" value="anggota" <?= $jabatan == 'anggota' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="jenis_anggota">Anggota</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= isset($anggota) ? esc($anggota['email']) : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password <?= isset($anggota) ? '(Kosongkan jika tidak ingin mengubah)' : ''; ?></label>
                            <input type="password" class="form-control" id="password" name="password" <?= isset($anggota) ? '' : 'required'; ?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status Anggota</label><br>
                            <?php $status = isset($anggota) ? $anggota['status_anggota'] : ''; ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_anggota" id="status_anggota" value="aktif" <?= $status == 'aktif' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="status_aktif">Aktif</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_anggota" id="status_tidak_aktif" value="tidak aktif" <?= $status == 'tidak aktif' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="status_tidak_aktif">Tidak Aktif</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status_anggota" id="status_cuti" value="cuti" <?= $status == 'cuti' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="status_cuti">Cuti</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><?= isset($anggota) ? 'Update' : 'Simpan'; ?></button>
                        <?php if (isset($anggota)) : ?>
                            <a href="<?= base_url('anggota/hapus/' . $anggota['id_anggota']); ?>" class="btn btn-danger ms-2" onclick="return confirm('Yakin ingin menghapus anggota ini?');">Hapus</a>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

<?= $this->endSection(); ?>