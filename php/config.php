<?php 

$server = "localhost:3308";
$user = "root";
$pass = "";
$database = "users";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>