<h2>Data Laporan</h2>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>No.</th>
      <th>ID Laporan</th>
      <th>Nama</th>
      <th>Lokasi</th>
      <th>Objek</th>
      <th>Isi Laporan</th>
      <th>Tanggal Dibuat</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1;
    foreach ($laporan as $row): ?>
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
        <td><?= esc($row['text_laporan']); ?></td>
        <td><?= esc($row['tanggal_dibuat']); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>