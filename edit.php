<?php
include 'db_connect.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "select * from students where id= $id");

$data = mysqli_fetch_assoc($result);
// echo $data;

?>

<form action="" method="post">

Name:
<input type="text" name = "name" value = "<?= $data['name']; ?>"> <br> <br>

Email:
<input type="email" name = "email" value = "<?= $data['email']; ?>"> <br> <br>

<input type="submit" name = "update" value="Update">

</form>

<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "update students set 
    name='$name',
    email= '$email'
    where id= $id";

    if(mysqli_query($conn,$sql)){
        echo "Updated Successfully";
    }else{
        echo "Error: " . mysqli_error($conn);
    }

}
//View → Edit → Change → Update → Database
?>

