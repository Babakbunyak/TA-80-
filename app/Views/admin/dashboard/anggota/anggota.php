<?= $this->extend('admin/dashboard/Layout/template') ?>

<?= $this->section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 mb-3">Anggota</h1>
            <button type="button" class="btn btn-success">Tambah</button>
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">no.</th>
                                <th scope="col">nama</th>
                                <th scope="col">alamat</th>
                                <th scope="col">jabatan</th>
                                <th scope="col">email</th>
                                <th scope="col">no.telp</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div style="height: 100vh"></div>
            <div class="card mb-4">
            </div>
        </div>
    </main>

    <?= $this->endsection(); ?>