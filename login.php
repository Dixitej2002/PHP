<form method="post">
Email: <input type="email" name="email"> <br> <br>
Password : <input type="password" name ="password"> <br> <br>
<button type="submit" name ="login"> Login</button>
</form>

<?php
include 'db_connect.php';

session_start();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user where email = '$email'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($pass,$row['password'])){
            $_SESSION['user'] = $email;
            echo "Login Successful";
        }else{
            echo "Wrong password";
        }
    }else{
        echo "User not found";
    }
}

?>