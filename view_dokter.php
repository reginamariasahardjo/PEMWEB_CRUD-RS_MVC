<?php
include 'control_dokter.php';

$controller = new DokterController($koneksi);
$dataDokter = $controller->tampilkandokter();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h3 class="mt-3">Tabel Dokter</h3>
    <a href="../tambahdokter.php" class="btn btn-primary btn-sm">Tambah Dokter</a>
    <table class="table table-striped mt-3">
        <tr>
            <th>No</th>
            <th>ID Dokter</th>
            <th>Nama Dokter</th>
            <th>Spesialisasi</th>
            <th>No Telp</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while ($row = $dataDokter->fetch_assoc()) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['idDokter']; ?></td>
            <td><?= $row['nmDokter']; ?></td>
            <td><?= $row['spesialisasi']; ?></td>
            <td><?= $row['noTelp']; ?></td>
            <td>
                <a href="editdokter.php?id=<?= $row['idDokter']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="../controller/hapusDokter.php?id=<?= $row['idDokter']; ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
