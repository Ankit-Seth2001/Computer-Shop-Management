<?php
require("connection.inc.php");
require("header.php");
$prod_id = $_GET["product_id"];
$qty = (int)$_GET["qty"];
$total = $_GET["total"];
$userid = $_SESSION['userid'];


$sql1 = "SELECT stock FROM products WHERE product_id='{$prod_id}'";
$result1 = mysqli_query($conn, $sql1) or die("Can not run");

while($row1 = mysqli_fetch_assoc($result1)){
     $a=(int)$row1["stock"];
}

$current_stock=(int)$a;
$updated_stock=$current_stock-$qty;


// if($qty > $current_stock ){
//     echo "qty > current";}else{ echo "qty < current";}

if($qty > $current_stock || $current_stock<=0){
    echo '  <div class="alert alert-danger">
    <strong>Product out of Stock!</strong> 
  </div>';
}
else{
$sql = "INSERT INTO orders (user_id,prod_id,qty,total,buy_date) VALUES('$userid','$prod_id',$qty,$total,CURRENT_DATE())";
if (!mysqli_query($conn, $sql)) {
    echo "Can not insert " . mysqli_error($conn);
} else{
    echo '<div class="alert alert-success">
    <strong>Order Placed successfully</strong> 
  </div>';
}
$sql2 = "UPDATE products SET stock='{$updated_stock}' WHERE product_id={$prod_id}";
if(!mysqli_query($conn, $sql2) )
{
    echo mysqli_error($conn);
}
?>
<div>
    <h2>Bill</h2>
    <table cellpadding="5" cellspacing="10" border="1">
        <tr>
            <th>Product Name </th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Order Date</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>
            <?php
            $sql3 = "SELECT product_name FROM products WHERE product_id='{$prod_id}'";
            $result3 = mysqli_query($conn, $sql3);
            while($row3 = mysqli_fetch_assoc($result3)){
                echo $row3["product_name"];

            }
            ?>
        <td>
        <dr><?php echo $qty; ?></td>
        <td><?php echo $total; ?></td>
        <td><?php echo date("d M Y"); ?></td>
        <td>To be Dispached!</td>
        </tr>
    </table>
</div>
<?php  }?>

<?php require("footer.php");?>