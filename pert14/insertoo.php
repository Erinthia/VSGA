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
// menyiapkan sql untuk memasukkan data
$sql = "INSERT INTO participants (nama, email) VALUES 
('Erinthia', 'erin@gmail.com'),
('Fadil', 'fadil@gmail.com')";

if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: " .$sql . "<br>" . $conn->error;
}
$conn->close();
?>