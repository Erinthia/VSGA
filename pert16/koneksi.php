<?php
$servername = "localhost";
$database = "tsa_web";
$username = "root";
$password = "";

//create connection
$connect = new mysqli($servername, $username, $password, $database);

//check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
echo "Connected successfully";
?>