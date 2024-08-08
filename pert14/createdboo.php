<?php
include "koneksi1.php";

//membuat database
$sql = "CREATE DATABASE dboo";
if ($conn->query($sql) === TRUE){
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
?>