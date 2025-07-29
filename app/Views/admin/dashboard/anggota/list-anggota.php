<?= $this->extend('admin/dashboard/Layout/template') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 mb-3">Anggota</h1>
            <button type="button" class="btn btn-success" onclick="location.href='<?= base_url('/anggota/tambah'); ?>'">Tambah</button>

            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jabatan</th>
                                    <th>Email</th>
                                    <th>No. Telp</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($anggota as $row) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td>
                                            <?php
                                            $foto = !empty($row['foto']) ? $row['foto'] : 'default.png';
                                            $fotoPath = FCPATH . 'uploads/foto/' . $foto;
                                            if (!file_exists($fotoPath) || empty($row['foto'])) {
                                                $foto = 'default.png';
                                            }
                                            ?>
                                            <img src="<?= base_url('uploads/foto/' . $foto); ?>" alt="Foto" width="50">
                                        </td>
                                        <td><?= $row['nama']; ?></td>

                                        <td><?= $row['alamat']; ?></td>
                                        <td><?= $row['jabatan']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['no_telp']; ?></td>
                                        <td>
                                            <?php
                                            $status = strtolower(trim($row['status_anggota'] ?? ''));
                                            $badge = 'secondary';
                                            if ($status === 'aktif') {
                                                $badge = 'success';
                                            } elseif ($status === 'cuti') {
                                                $badge = 'danger';
                                            } elseif ($status === 'tidak aktif') {
                                                $badge = 'secondary';
                                            }
                                            ?>
                                            <span class="badge bg-<?= $badge ?>">
                                                <?= ucwords($status) ?: 'Tidak Diketahui' ?>
                                            </span>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('anggota/edit/' . $row['id_anggota']); ?>" class="btn btn-sm btn-info">Edit</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </main>
</div>

<?= $this->endSection(); ?>