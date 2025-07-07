<?= $this->extend('admin/dashboard/Layout/template') ?>
<?= $this->section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 mb-3">Anggota</h1>
            <button type="button" class="btn btn-success" onclick="location.href='<?= base_url('/anggota/tambah'); ?>'">Tambah</button>

            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Email</th>
                                <th scope="col">No. Telp</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($anggota as $row) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>
                                        <img src="<?= base_url('uploads/foto/' . $row['foto']); ?>" alt="Foto" width="50">
                                    </td>
                                    <td><?= $row['nama']; ?></td>

                                    <td><?= $row['alamat']; ?></td>
                                    <td><?= $row['jabatan']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['no_telp']; ?></td>
                                    <td>
                                        <span class="badge bg-<?= $row['status_anggota'] === 'aktif' ? 'success' : ($row['status_anggota'] === 'cuti' ? 'warning' : 'secondary') ?>">
                                            <?= ucfirst($row['status_anggota'] ?? 'Tidak Diketahui') ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('/anggota/edit/' . $row['id_anggota']); ?>" class="btn btn-sm btn-info">Edit</a>
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