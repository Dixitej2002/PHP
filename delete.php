<?php
include 'db_connect.php';

$id = $_GET['id'];

$sql = "delete from students where id = $id";

if(mysqli_query($conn,$sql)){
    header("Location: view_students.php");
}else{
    echo "Error: " . mysqli_error($conn);
}
?>