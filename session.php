<?php
session_start();
// Check if user is logged in
if(isset($_SESSION["user_id"])){
    // User is logged in; show exclusive content
    // ...
} else{
    // Redirect to login page
    header("Location: login.php");
    exit;
}
?>