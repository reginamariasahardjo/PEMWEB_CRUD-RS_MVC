<?php
include 'controller_kunjungan.php';

$controller = new KunjunganController($koneksi);
$dataKunjungan = $controller->tampilkanKunjungan();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Kunjungan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h3 class="mt-3">Tabel Kunjungan</h3>
    <a href="../tambahkunjungan.php" class="btn btn-primary btn-sm">Tambah Kunjungan</a>
    <table class="table table-striped mt-3">
        <tr>
            <th>No</th>
            <th>ID Kunjungan</th>
            <th>ID Pasien</th>
            <th>ID Dokter</th>
            <th>Tanggal</th>
            <th>Keluhan</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while ($row = $dataKunjungan->fetch_assoc()) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['idKunjungan']; ?></td>
            <td><?= $row['idPasien']; ?></td>
            <td><?= $row['idDokter']; ?></td>
            <td><?= $row['tanggal']; ?></td>
            <td><?= $row['keluhan']; ?></td>
            <td>
                <a href="editkunjungan.php?id=<?= $row['idKunjungan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="../controller/hapusKunjungan.php?id=<?= $row['idKunjungan']; ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>