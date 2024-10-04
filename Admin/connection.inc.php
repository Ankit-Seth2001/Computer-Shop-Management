<?php
$conn=mysqli_connect("localhost","root","","computer_shop");
$location="http://localhost/Computer Shop Mgt";
if(!$conn)
{
    die("Could not connect to database<br>".mysqli_connect_error($conn));
}

?>