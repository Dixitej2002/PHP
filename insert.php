<?php
include "db_connect.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name,email) values ('$name','$email')";

    if(mysqli_query($conn,$sql)){
        echo "Student added successfully";
    }else{
        echo "Error:" . mysqli_error($conn);
    }
}


?>