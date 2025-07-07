<?= $this->extend('admin/dashboard/Layout/template') ?>

<?= $this->section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <pre><?php print_r($laporan); ?></pre>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Aspirasi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Aspirasi</li>
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
                            <thead class="table-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>ID Aspirasi</th>
                                    <th>Nama</th>
                                    <th>lokasi</th>
                                    <th>objek</th>
                                    <th>isi laporan</th>
                                    <th>Tanggal dibuat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($laporan)) : ?>
                                    <?php $no = 1;
                                    foreach ($laporan as $row) : ?>
                                        <?php if (isset($row['jenis']) && $row['jenis'] === 'aspirasi') : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= esc($row['id_laporan']); ?></td>
                                                <td>
                                                    <?php
                                                    $penggunaModel = model('App\\Models\\PenggunaModel');
                                                    $nama = '-';
                                                    if (!empty($row['id_pengguna'])) {
                                                        $pengguna = $penggunaModel->find($row['id_pengguna']);
                                                        if ($pengguna && isset($pengguna['nama'])) {
                                                            $nama = $pengguna['nama'];
                                                        }
                                                    }
                                                    echo esc($nama);
                                                    ?>
                                                </td>
                                                <td><?= esc($row['lok_kejadian']); ?></td>
                                                <td><?= esc($row['objek']); ?></td>
                                                <td>
                                                    <?php
                                                    $teks = isset($row['text_laporan']) ? $row['text_laporan'] : '';
                                                    $teks_singkat = wordwrap($teks, 20, "\n");
                                                    $teks_rows = explode("\n", $teks_singkat);
                                                    $max_rows = 2;
                                                    $output = '';
                                                    for ($i = 0; $i < min(count($teks_rows), $max_rows); $i++) {
                                                        $output .= esc($teks_rows[$i]) . '<br>';
                                                    }
                                                    if (count($teks_rows) > $max_rows) {
                                                        $output .= '<span class="text-muted">...</span>';
                                                    }
                                                    echo $output;
                                                    ?>
                                                </td>
                                                <td><?= esc($row['tanggal_dibuat']); ?></td>
                                                <td>
                                                    <a href="<?= base_url('laporan/detail/' . $row['id_laporan']); ?>" class="btn btn-sm btn-info mb-1">Detail</a>
                                                    <form action="<?= base_url('laporan/hapus/' . $row['id_laporan']); ?>" method="post" style="display:inline;">
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus laporan ini?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php if ($no === 1): // Tidak ada data berjenis aspirasi 
                                    ?>
                                        <tr>
                                            <td colspan="9">Belum ada data aspirasi.</td>
                                        </tr>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="9">Belum ada data aspirasi.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?= $this->endSection(); ?>