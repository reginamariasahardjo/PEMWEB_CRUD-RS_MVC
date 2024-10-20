<?php
class Dokter {
    private $db;

    public function __construct($koneksi) {
        $this->db = $koneksi;
    }

    public function getAllDokter() {
        $query = "SELECT * FROM dokter";
        return $this->db->query($query);
    }

    public function tambahDokter($idDokter, $nmDokter, $spesialisasi, $noTelp) {
        $query = "INSERT INTO dokter (idDokter, nmDokter, spesialisasi, noTelp) 
                  VALUES ('$idDokter', '$nmDokter', '$spesialisasi', '$noTelp')";
        return $this->db->query($query);
    }

    public function hapusDokter($id) {
        $query = "DELETE FROM dokter WHERE idDokter='$id'";
        return $this->db->query($query);
    }
}
?>
