<?php
$servername = "localhost";
$username = "root";
$password ="";

//membuat koneksi
$conn = new mysqli($servername, $username, $password);

//cek koneksi
if ($conn->connect_error){
    die("Koneksi Gagal: " . $conn->connect_error);
}
echo "Koneksi Berhasil";
?>