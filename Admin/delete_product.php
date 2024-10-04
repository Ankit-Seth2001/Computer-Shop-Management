<?php 
include 'connection.inc.php'; 
    $product_id=$_GET['pro_id'];

    $sql="DELETE FROM products WHERE product_id={$product_id}";
    $result=mysqli_query($conn,$sql);
    header("Location:show_product.php");

?>
