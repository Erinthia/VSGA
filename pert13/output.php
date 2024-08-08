<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
}
?>