<?php
//code for connect PHP logic to mysqli Database 
try{
    $servername = "localhost";
$user = "root";
$password = "Amitkumar@789";
// $password = " ";
$database = "PHP_db";

//pipeline to conncet php to mysql
$conn = mysqli_connect($servername,$user,$password,$database);

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());
}

echo "Database connected Successfully";

}
catch(Exception $x){
    echo "message " . $x->getMessage();
}


?>