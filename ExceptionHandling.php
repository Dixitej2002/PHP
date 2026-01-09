<?php

$age = -5;


try {
    if($age < 0){
        throw new Exception("Invalid Age...");
    }
    echo $age . "<br>";
} catch (Exception $e) {
    //throw $th;
     echo $e->getMessage();
}finally{
    echo "it is always executed";
}

?>