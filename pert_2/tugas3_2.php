<?php
// Input jumlah produk yang dibeli dan harga satuan produk
$jumlahProduk = 25;
$hargaSatuan = 30000;

// Menghitung total harga sebelum diskon
$totalHargaSebelumDiskon = $jumlahProduk * $hargaSatuan;

// Menghitung diskon berdasarkan jumlah pembelian
if ($jumlahProduk > 20) {
    $diskon = 0.20;
} elseif ($jumlahProduk > 10) {
    $diskon = 0.10;
} else {
    $diskon = 0;
}

// Menghitung total harga setelah diskon
$totalDiskon = $totalHargaSebelumDiskon * $diskon;
$totalHargaSetelahDiskon = $totalHargaSebelumDiskon - $totalDiskon;

// Menentukan apakah pengiriman gratis berlaku
$pengirimanGratis = ($totalHargaSetelahDiskon > 500000) ? "Ya" : "Tidak";

// Menampilkan hasil
echo "Jumlah produk yang dibeli: $jumlahProduk<br>";
echo "Harga satuan produk: Rp" . number_format($hargaSatuan, 2, ',', '.') . "<br>";
echo "Total harga sebelum diskon: Rp" . number_format($totalHargaSebelumDiskon, 2, ',', '.') . "<br>";
echo "Total diskon: Rp" . number_format($totalDiskon, 2, ',', '.') . "<br>";
echo "Total harga setelah diskon: Rp" . number_format($totalHargaSetelahDiskon, 2, ',', '.') . "<br>";
echo "Pengiriman gratis: $pengirimanGratis";
?>
