<?php

//  check form submitted or not
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     echo "Form submitted";
// }

// empty check

// if(empty($_POST['username'])){
//     echo "Name is required";
// }

// check extra spaces (trim)
// $name = trim($_POST['username']);
// echo $name;

// checks the text format like name , city, address . space is allowed

// $name = $_POST['username'];
// if(!preg_match("/^[a-zA-Z]+$/",$name)){
//     echo "Only text, space allowed other symbols are not allowed";
// }

// filter_var($mixed varibale, validate lines) validate value 

// $email= "sikg@mail.com";
// if(filter_var($email,FILTER_VALIDATE_EMAIL)){
//     echo "email with correct format";
// }else{
//     echo"Something went wrong";
// }

// mostly use in password check length strlen()
// $password = "12345";
// if(strlen($password) < 6){
//     echo "password is too short";
// }

// number check 
// $age = "dfd";
// if(!is_numeric($age)){
//     echo " Age must be number";
// }
// else echo $age;




?>