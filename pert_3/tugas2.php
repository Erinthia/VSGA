<?php 
echo "<h3>Menampilkan Hasil Penjumlahan Nilai Genap</h3>";
$i = 2;
$jumlah = 0;

while ($i <= 24) {
    $jumlah += $i;
    echo $i . " ";
    $i+=2;
}
echo "<br>Total Jumlah Bilangan Genap: $jumlah";
?>