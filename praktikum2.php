<?php
class Matematika {
    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

// Menangkap data dari form input
$hasilLuas = "";
if (isset($_POST['hitung'])) {
    $sisiInput = $_POST['sisi'];
    $hasilLuas = Matematika::luasPersegi($sisiInput);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Praktikum 2 - Static Method</title>
</head>
<body>
    <h2>Praktikum 2: Kalkulator & Luas Persegi</h2>

    <form method="POST">
        <p>Hitung Luas Persegi:</p>
        <input type="number" name="sisi" placeholder="Masukkan angka sisi" required>
        <button type="submit" name="hitung">Hitung Luas</button>
    </form>

    <?php if ($hasilLuas !== ""): ?>
        <p>Hasil Luas: <strong><?php echo $hasilLuas; ?></strong></p>
    <?php endif; ?>

    <hr>
    <h3>Contoh Operasi Lainnya (Static):</h3>
    <p>Penjumlahan (10 + 5) = <?php echo Matematika::tambah(10, 5); ?></p>
    <p>Pengurangan (20 - 8) = <?php echo Matematika::kurang(20, 8); ?></p>
</body>
</html>