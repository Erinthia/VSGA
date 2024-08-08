<?php
if($_SERVER['REQUEST_METHOD'] == 'GET') {
   $name= htmlspecialchars($_GET['name']);
    $email= htmlspecialchars($_GET['email']);

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>