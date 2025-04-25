<?= $this->extend('admin/dashboard/Layout/template') ?>

<?= $this->section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Laporan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">data laporan</li>
            </ol>
            
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Kode Nomor</th>
                                <th scope="col">Laporan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No. Telp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($laporan as $row) : ?>
                                <tr>
                                    <td><?= $row['id']; ?></td>
                                    <td><?= $row['kode_nomor']; ?></td>
                                    <td><?= $row['laporan']; ?></td>
                                    <td><?= $row['tanggal']; ?></td>
                                    <td><?= $row['alamat']; ?></td>
                                    <td><?= $row['no_telp']; ?></td>

                                    <td>                              
                                    <a href="<?= base_url('laporan/detail/' . $row['id']); ?>" class="btn btn-sm btn-info">Detail</a></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>


    <?= $this->endsection(); ?>