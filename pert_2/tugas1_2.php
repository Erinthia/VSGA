<?php
// Jumlah lembar yang akan difotokopi
$jumlahLembar = 10;

// Menghitung biaya berdasarkan jumlah lembar
if ($jumlahLembar <= 100) {
    $biayaPerLembar = 150;
} elseif ($jumlahLembar <= 500) {
    $biayaPerLembar = 120;
} else {
    $biayaPerLembar = 100;
}

// Menghitung total biaya sebelum diskon
$totalBiaya = $jumlahLembar * $biayaPerLembar;

// Menghitung diskon berdasarkan total biaya
if ($totalBiaya > 200000) {
    $diskon = 0.10;
} elseif ($totalBiaya > 100000) {
    $diskon = 0.05;
} else {
    $diskon = 0;
}

// Menghitung total biaya setelah diskon
$totalBiayaSetelahDiskon = $totalBiaya - ($totalBiaya * $diskon);

// Menampilkan hasil
echo" <h3>--Biaya Fotokopi--</h3>";
echo "Total biaya fotokopi untuk $jumlahLembar lembar adalah Rp" . number_format($totalBiayaSetelahDiskon, 2, ',', '.');
?>
