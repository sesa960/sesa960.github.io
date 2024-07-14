<?php
//Handle form submission
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    // Save data to database
(use prepared statements)
    // ...
    // Send email verification link
    // ...
}
?>