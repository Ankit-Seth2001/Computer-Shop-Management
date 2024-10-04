<?php
require("connection.inc.php");

$uid=$_POST["uid"];
$sql="SELECT * FROM user WHERE id='{$uid}'";
$result=mysqli_query($conn,$sql)or die("No records");
$output="";
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $output="
        <tr>
    <td>Username</td>
    <td><input type='text' id='uname' value='{$row["username"]}'  >
    <input type='text' hidden id='uid' value='{$row["id"]}'  ></td>
</tr>
<tr>
    <td>Password</td>
    <td><input type='text' id='pass' value='{$row["pass"]}'></td>
</tr>
<tr>
    <td></td>
    <td><input type='submit' id='edit-sub' value='Save'></td>
</tr>

        ";
   
    echo $output;
 }
}else{echo "No record Found";}
?>