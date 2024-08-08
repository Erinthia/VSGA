<?php
// Fungsi untuk menghitung luas persegi panjang
function hitungLuas($panjang, $lebar) {
    return $panjang * $lebar;
}

// Fungsi untuk menghitung keliling persegi panjang
function hitungKeliling($panjang, $lebar) {
    return 2 * ($panjang + $lebar);
}

// Fungsi untuk menghitung panjang diagonal persegi panjang
function hitungDiagonal($panjang, $lebar) {
    return sqrt(($panjang * $panjang) + ($lebar * $lebar));
}

// Contoh nilai panjang dan lebar persegi panjang
$panjang = 8;
$lebar = 6;

// Menghitung luas, keliling, dan panjang diagonal
$luas = hitungLuas($panjang, $lebar);
$keliling = hitungKeliling($panjang, $lebar);
$diagonal = hitungDiagonal($panjang, $lebar);

// Menampilkan hasil perhitungan
echo "<h2>--Hasil Perhitungan Persegi Panjang--</h2>";
echo "Panjang: $panjang<br>";
echo "Lebar: $lebar<br>";
echo "Luas: $luas<br>";
echo "Keliling: $keliling<br>";
echo "Panjang Diagonal: " . number_format($diagonal, 2) . "<br>";
?>