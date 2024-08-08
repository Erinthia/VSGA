<?php
// Mulai sesi
session_start();

// Mengambil data produk dari sesi
$products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
$minPrice = isset($_SESSION['minPrice']) ? $_SESSION['minPrice'] : null;

// Hapus data sesi
unset($_SESSION['products']);
unset($_SESSION['minPrice']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Daftar Produk dengan Harga Di Atas <?php echo htmlspecialchars($minPrice); ?></h1>

    <?php if (!empty($products)): ?>
        <table>
            <tr><th>Name</th><th>Price</th></tr>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                    <td><?php echo htmlspecialchars($product['price']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Data tidak ditemukan untuk harga minimum yang diberikan.</p>
    <?php endif; ?>
</body>
</html>
