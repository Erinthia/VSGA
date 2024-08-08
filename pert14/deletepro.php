<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "dbopro";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM participants WHERE id=2";
    //use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
} catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>