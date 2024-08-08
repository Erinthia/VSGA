<?php
include "koneksi.php";
$password = md5($_POST['password']);
$username = $_POST['username'];

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect,$query);
$fechResult = mysqli_fetch_assoc($result);

if ($fechResult['role'] == 'admin') {
    echo "Anda Berhasil Login";
    echo "<a href= 'adminDasboard.html'>Admin</a>";
}elseif ($fechResult['role'] == 'user') {
    echo "Anda Berhasil Login";
    echo "<a href= 'userDasboard.html'>User Dasboard</a>";
}else {
    echo "Anda Gagal Login";
    echo "<a href= 'loginForm.html'>Login Form</a>";
}
mysqli_close($connect);
?>