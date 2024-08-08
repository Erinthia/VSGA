<?php
$toko = array(
    array("Mie", 3000, 50),
    array("Gula", 12000, 15),
    array("Sabun", 4000, 20),
    array("Snack", 1000, 30)
);
foreach ($toko as $data_produk) {
    echo "Nama Produk: " . $data_produk[0] . ", Harga: " . $data_produk[1] . ", 
Stok: " . $data_produk[2] . "<br>";
}
//Menampilkan produk yang memiliki stok paling banyak
$stok = array_column($toko, 2);
$index = array_search(max($stok), $stok);
echo "Produk dengan stok paling banyak: " . $toko[$index][0] . "<br>";
//Menampilkan produk yang memiliki harga paling murah
$harga = array_column($toko, 1);
$index = array_search(min($harga), $harga);
echo "Produk dengan harga paling murah: " . $toko[$index][0] . "<br>";
?>