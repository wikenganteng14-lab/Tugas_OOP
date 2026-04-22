<?php

final class Database {
    public function koneksi() {
        return "Koneksi Database Berhasil (FINAL - Tidak bisa di-extend)";
    }
}
$db = new Database();
echo "<h3>" . $db->koneksi() . "</h3>";
?>