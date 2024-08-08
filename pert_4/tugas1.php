<?php
$angka = [23, 24, 24, 30, 34, 35, 40, 40, 46, 47];
echo "Bilangan Bulat: " . implode(" + ", $angka) . "<br>";
//Menghitung total hasil penjumlahan semua angka 
echo "Total Hasil Penjumlahan: " . array_sum($angka) . "<br>";
//Menghitung rata-rata dari semua angka
echo "Rata-rata: " . array_sum($angka) / count($angka) . "<br>";
//Menghitung nilai yang ada di posisi tengah
echo "Nilai Tengah: " . $angka[count($angka) / 2] . "<br>";
//Menampilkan angka ganjil
$ganjil = array_filter($angka, function ($a) {
    return $a % 2 == 1;
});
echo "Angka Ganjil: " . implode(", ", $ganjil) . "<br>";
?>