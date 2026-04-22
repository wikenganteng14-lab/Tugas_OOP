<?php

class Pengunjung {

    // static variable untuk menyimpan jumlah objek
    public static $jumlah = 0;

    // constructor, akan otomatis jalan saat object dibuat
    public function __construct() {
        self::$jumlah++;
    }

    // method reset
    public static function reset() {
        self::$jumlah = 0;
    }
}

// =======================
// SEBELUM RESET
// =======================

// membuat 5 objek
$p1 = new Pengunjung();
$p2 = new Pengunjung();
$p3 = new Pengunjung();
$p4 = new Pengunjung();
$p5 = new Pengunjung();

// tampilkan jumlah sebelum reset
echo "Jumlah Pengunjung sebelum reset: " . Pengunjung::$jumlah . "<br>";

// =======================
// RESET
// =======================
Pengunjung::reset();

// tampilkan jumlah setelah reset
echo "Jumlah Pengunjung setelah reset: " . Pengunjung::$jumlah . "<br>";

?>

