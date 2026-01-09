<?php
include 'db_connect.php';

$create_sql = "create table students(
    id int auto_increment primary key,
    name varchar(100),
    email varchar(100),
    created_at timestamp default current_timestamp
)";

if(mysqli_query($conn, $create_sql)){
    echo "Table created Successfully";
}else{
    echo "Error creating table:". mysqli_error($conn);
}

?>