
<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "dbopro";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

//cek koneksi
if (!$conn){
    die("Koneksi Gagal: " . mysqli_connect_error());
}
//menyiapkan sql untuk memasukkan data
$sql = "INSERT INTO participants (nama, email) VALUES 
('Erinthia', 'erin@gmail.com'),
('Fadil', 'fadil@gmail.com')";

if (mysqli_query($conn, $sql)){
    echo "New record created successfully";
} else {
    echo "Error: " . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>