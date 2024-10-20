<?php
include '../koneksi.php';
include 'controller_kunjungan.php';

class KunjunganController {
    private $model;

    public function __construct($koneksi) {
        $this->model = new Kunjungan($koneksi);
    }

    public function tampilkanKunjungan() {
        return $this->model->getAllKunjungan();
    }

    public function tambahKunjungan($idKunjungan, $idPasien, $idDokter, $tanggal, $keluhan) {
        return $this->model->tambahKunjungan($idKunjungan, $idPasien, $idDokter, $tanggal, $keluhan);
    }

    public function hapusKunjungan($id) {
        return $this->model->hapusKunjungan($id);
    }
}
?>
