<?php
    setcookie('user',"Rahul",time()+3600);

    // check if exist
    if(isset($_COOKIE['user'])){
        echo "Cookie exist";
    }
    echo $_COOKIE['user'];

    setcookie("user", "", time() - 3600);
?>