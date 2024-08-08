<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbopro";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query SQL dengan ORDER BY untuk mengurutkan data berdasarkan nama dari A-Z
$sql = "SELECT id, nama, email FROM participants ORDER BY nama ASC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Nama: " . $row["nama"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
