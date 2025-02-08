<?= $this->extend('admin/dashboard/Layout/template') ?>

<?= $this->section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Aspirasi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">data aspirasi</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Aspirasi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No. Telp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($aspirasi as $row) : ?>
                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['nama']; ?></td>
                                    <td><?= $row['aspirasi']; ?></td>
                                    <td><?= $row['tanggal']; ?></td>
                                    <td><?= $row['alamat']; ?></td>
                                    <td><?= $row['no_telp']; ?></td>
                                    <td><a href="<?= base_url('aspirasi/detail/' . $row['id']); ?>" class="btn btn-sm btn-info">Detail</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?= $this->endsection(); ?>