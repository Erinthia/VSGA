<?php
include "koneksi2.php";

//membuat database
$sql = "CREATE DATABASE dbopro";
if (mysqli_query($conn, $sql)){
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
?>