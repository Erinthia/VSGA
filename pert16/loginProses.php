<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect,$query);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    echo "Anda Berhasil Login";
    echo "<a href= 'adminDasboard.html'>Admin</a>";
}else {
    echo "Anda Gagal Login";
    echo "<a href= 'loginForm.html'>Login Form</a>";
}
mysqli_close($connect);?>