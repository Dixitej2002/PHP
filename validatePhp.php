<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $count = 0;
    //empty
    //text pattern
    //trim
    if(empty($_POST['name'])){
        echo "fill the name box <br>";
        $count++;
    }elseif(!preg_match("/^[a-zA-Z]+$/",$_POST['name'])){
        echo "type valid name.";
        $count++;
    }else{
        echo "Your name: " . trim($_POST['namename']);
    }

    //email
    if(empty($_POST['email'])){
        echo "Enter your email. <br>";
        $count++;
    }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        echo "enter valid email format";
        $count++;
    }else{
        echo "Email: " .trim($_POST['email']);
    }

    //password
    if(empty($_POST['password'])){
        echo "password must be fill <br>";
        $count++;
    }elseif(!strlen($_POST['password'])>6){
        echo 'password should be 6 characters';
        $count++;
    }else{
        echo "your password: " . $_POST['password'];
    }

    if($count == 0){

        echo "Register Successfully.";
    }else{
        echo "Register Unsucessfull.";
    }
}


?>