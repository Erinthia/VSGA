<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "dboo";

//membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

//cek koneksi
if ($conn->connect_error){
    die("Koneksi Gagal: " . $conn->connect_error);
}
//buat table
$sql = "CREATE TABLE participants (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE){
    echo "Table participants created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>