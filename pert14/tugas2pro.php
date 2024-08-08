<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbopro";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

// Menyiapkan SQL untuk memperbarui data
$sql = "UPDATE participants SET email = ? WHERE nama = ?";

// Menyiapkan statement
$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {
    die("Error preparing statement: " . mysqli_error($conn));
}

// Menetapkan parameter untuk statement
$nama = 'Dinda'; // Nama yang ingin diupdate
$email = 'dindakanyadewi1@gmail.com'; // Email baru
mysqli_stmt_bind_param($stmt, 'ss', $email, $nama);

// Mengeksekusi statement
if (mysqli_stmt_execute($stmt)) {
    echo "Record updated successfully";
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}

// Menutup statement dan koneksi
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
