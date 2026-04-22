<?php
class Pengunjung {
    public static $jumlah = 0;
    public function __construct() {
        self::$jumlah++;
    }
    public static function reset() {
        self::$jumlah = 0;
    }
}

// Menjadi 5 objek
$p1 = new Pengunjung();
$p2 = new Pengunjung();
$p3 = new Pengunjung();
$p4 = new Pengunjung();
$p5 = new Pengunjung();

echo "JUMLAH BEFORE (5 Objek): " . Pengunjung::$jumlah . "<br>";

Pengunjung::reset();

echo "JUMLAH AFTER (Setelah Reset): " . Pengunjung::$jumlah;
?>

