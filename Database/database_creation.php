<?php
    $conn=mysqli_connect("localhost" ,"root" ,"");
    $sql="CREATE DATABASE computer_shop";
    if(!mysqli_query($conn,$sql))
    {
        echo mysqli_error($conn);
    }
    ?>
    
    