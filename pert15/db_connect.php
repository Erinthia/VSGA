<?php
$host = 'localhost';
$db = 'koneksi';
$user = 'root';
$pass = '';

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi Berhasil";
} catch (PDOException $e) {
    echo "Koneksi Gagal : " . $e->getMessage();
}
?>
