<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect,$query);
$fechResult = mysqli_fetch_assoc($result);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    }
if ($fechResult['role'] == 'admin') {
        echo "Anda Berhasil Login";
        echo "<a href= 'adminDasboard.php'>Admin</a>";
    }elseif($fechResult['role'] == 'user'){
        echo "Anda Berhasil Login";
        echo "<a href= 'userDasboard.php'>User Dasboard</a>";
    }else {
        echo "Anda Gagal Login";
        echo "<a href= 'loginForm.html'>Login Form</a>";
    }   
mysqli_close($connect);
?>