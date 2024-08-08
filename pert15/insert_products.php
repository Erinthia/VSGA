<?php
require 'connect_and_create_table.php';

$name = $_POST['name'];
$price = $_POST['price'];

$sql = "INSERT INTO products (name, price) VALUES (:name, :price)";
$stmt = $pdo->prepare($sql);

$stmt->execute(['name' => $name, 'price' => $price]);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':price', $price);

$stmt->execute();

echo "Data berhasil ditambahkan!";
?>