<?php
require("connection.inc.php");
$user_id=$_POST["user_id"];
$user_name=$_POST["user_name"];
$user_pass=$_POST["user_pass"];
$sql="UPDATE user SET username='{$user_name}',pass='{$user_pass}' WHERE id='{$user_id}'";
if(mysqli_query($conn,$sql)){
    echo 1;
}
else{echo 0;}
 ?>