<?php
// Deklarasi variabel untuk menyimpan data inventaris
$products = [
    [
        "nama_produk" => "komputer",
        "jumlah_produk" => 15,
        "harga_satuan" => 15000000,
        "status_ketersediaan" => true
    ],
   
    [
        "nama_produk" => "PC",
        "jumlah_produk" => 10,
        "harga_satuan" => 150000,
        "status_ketersediaan" => false
    ],
    [
        "nama_produk" => "Laptop",
        "jumlah_produk" => 5,
        "harga_satuan" => 250000,
        "status_ketersediaan" => true
    ],
    [
        "nama_produk" => "Printer",
        "jumlah_produk" => 5,
        "harga_satuan" => 3000000,
        "status_ketersediaan" => true
    ]
];

// Fungsi untuk menghitung total nilai inventaris
function calculateTotalValue($jumlah_produk, $harga_satuan) {
    return $jumlah_produk * $harga_satuan;
}

// Menampilkan laporan inventaris
echo "<h2>--Laporan Inventaris--</h2>";
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Jumlah</th><th>Harga Satuan<th>Total Nilai</th><th>Status Ketersediaan</th></tr>";

foreach ($products as $product) {
    $total_value = calculateTotalValue($product["jumlah_produk"], $product["harga_satuan"]);
    $status_ketersediaan = $product["status_ketersediaan"] ? "Tersedia" : "Tidak Tersedia";

    echo "<tr>";
    echo "<td>{$product['nama_produk']}</td>";
    echo "<td>{$product['jumlah_produk']}</td>";
    echo "<td>Rp " . number_format($product['harga_satuan'], 0, ',', '.') . "</td>";
    echo "<td>Rp " . number_format($total_value, 0, ',', '.') . "</td>";
    echo "<td>{$status_ketersediaan}</td>";
    echo "</tr>";
}

echo "</table>";
?>