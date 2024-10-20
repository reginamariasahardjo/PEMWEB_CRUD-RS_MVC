<?php
class Kunjungan {
    private $db;

    public function __construct($koneksi) {
        $this->db = $koneksi;
    }

    public function getAllKunjungan() {
        $query = "SELECT * FROM kunjungan";
        return $this->db->query($query);
    }

    public function tambahKunjungan($idKunjungan, $idPasien, $idDokter, $tanggal, $keluhan) {
        $query = "INSERT INTO kunjungan (idKunjungan, idPasien, idDokter, tanggal, keluhan) 
                  VALUES ('$idKunjungan', '$idPasien', '$idDokter', '$tanggal', '$keluhan')";
        return $this->db->query($query);
    }

    public function hapusKunjungan($id) {
        $query = "DELETE FROM kunjungan WHERE idKunjungan='$id'";
        return $this->db->query($query);
    }
}
?>