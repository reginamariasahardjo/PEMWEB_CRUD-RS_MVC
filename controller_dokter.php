<?php
include '../koneksi.php';
include '..model_dokter.php';

class DokterController {
    private $model;

    public function __construct($koneksi) {
        $this->model = new Dokter($koneksi);
    }

    public function tampilkanDokter() {
        return $this->model->getAllDokter();
    }

    public function tambahDokter($id, $nama, $spesialisasi, $noTelp) {
        return $this->model->tambahDokter($id, $nama, $spesialisasi, $noTelp);
    }

    public function hapusDokter($id) {
        return $this->model->hapusDokter($id);
    }
}
?>
