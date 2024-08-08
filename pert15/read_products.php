<?php
require 'connect_and_create_table.php';

$sql = "SELECT * FROM products";
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['name'] . " - " . $row['price'] . "<br>";
}
?>