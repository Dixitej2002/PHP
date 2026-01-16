<?php
include 'db_connect.php';

$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql);

?>

<h2>Student List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
    </tr>
    
    <?php
while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['created_at']; ?></td>
    </tr>
    <?php } ?>
    
</table>