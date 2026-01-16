<?php
include 'db_connect.php';

$email = "user@gmail.com";
$password = password_hash("123445",PASSWORD_DEFAULT);

$sql = "INSERT INTO users (email,password) values ('$email','$password')";

mysqli_query($conn, $sql);
?>