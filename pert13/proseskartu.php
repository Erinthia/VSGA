<?php
// Koneksi ke database MySQL
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; 
$dbname = "pertemuan13"; 

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$fullname = htmlspecialchars($_POST['fullname']);
$address = htmlspecialchars($_POST['address']);
$class = htmlspecialchars($_POST['class']);
$program = htmlspecialchars($_POST['program']);
$email = htmlspecialchars($_POST['email']);

// Proses upload foto
$photo = $_FILES['photo']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($photo);

// Pindahkan file ke folder tujuan
if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
    echo "Foto berhasil diunggah.<br>";
} else {
    echo "Terjadi kesalahan saat mengunggah foto.<br>";
}

// Query untuk menyimpan data ke database
$sql = "INSERT INTO pendaftar (fullname, address, class, program, email, photo)
VALUES ('$fullname', '$address', '$class', '$program', '$email', '$photo')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
