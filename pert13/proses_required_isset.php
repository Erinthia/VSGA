<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email;
    }else{
        echo "Form data is incomplete. Please fill out all fields.";
    }
}else{
    echo "Invalid request method";
}
?>