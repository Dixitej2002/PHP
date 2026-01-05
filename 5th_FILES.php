<?php
if($_FILES['files']['error'] == 0){
    $tmp = $_FILES['files']['tmp_name'];
    $orgname = basename($_FILES['files']['name']);

    if(move_uploaded_file($tmp,'uploads/'.$orgname)){
        echo "File upload succesfully";
    }else{
        echo "Upload failed";
    }
}

    // if(isset($_FILES)){
    //     echo "<pre>";
    //     print_r($_FILES) . "<br>";
    //     echo "</pre>";
    // }else{
    //     echo "not upload";
    // }
?>