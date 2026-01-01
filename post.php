<?php

if(isset($_POST['username'])){
    echo "Username: " . $_POST['username']."<br>";
    echo "Email: " . $_POST['email']."<br>";
    echo "Password: " . $_POST['password']."<br>";
}

?>