<?php 
include 'connection.inc.php'; 
   $id=$_GET['id'];

    $sql="DELETE FROM user WHERE id={$id}";
    $result=mysqli_query($conn,$sql);
    header("Location:show_admin.php");

?>


