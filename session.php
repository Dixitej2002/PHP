<?php

session_start();
// $_SESSION['name'] = 'Rahul';
// echo $_SESSION['name'];

//update session 
$_SESSION['name'] = [];
// echo $_SESSION['name'];

//checked session is exist

if(isset($_SESSION['name'])){
    echo 'login sucess <br>' . $_SESSION['name'];
}
//remove the stored data in session 
// unset($_SESSION['name']);
// echo $_SESSION['name'];
session_destroy();
echo $_SESSION['name'];
?>