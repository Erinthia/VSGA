<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "dboo";

//membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

//cek koneksi
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//SQL untuk menghapus sebuah record
$sql = "DELETE FROM participants WHERE id=2";

if ($conn->query($sql) === TRUE){
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " .  $conn->error;
}

//menutup koneksi
$conn->close();
?>