<?php
// Menghubungkan ke database
require 'connect_and_create_table.php';

// Mengambil nilai harga minimum dari input POST
$minPrice = isset($_POST['min_price']) ? $_POST['min_price'] : null;

// Validasi input
if ($minPrice !== null && is_numeric($minPrice)) {
    try {
        // Query untuk memilih produk dengan harga di atas nilai minimum
        $sql = "SELECT name, price FROM products WHERE price > :minPrice";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':minPrice', $minPrice, PDO::PARAM_STR);
        $stmt->execute();

        // Ambil data hasil query
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Simpan data dalam session
        session_start();
        $_SESSION['products'] = $products;
        $_SESSION['minPrice'] = $minPrice;

        // Redirect ke read_filter.php
        header('Location: read_filter.php');
        exit();

    } catch (PDOException $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
} else {
    echo "Harga minimum harus berupa angka.";
}

// Menutup koneksi
$pdo = null;
?>
