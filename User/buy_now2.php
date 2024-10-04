<?php require("connection.inc.php");
require("header.php");
?>


    <?php
    if (isset($_GET['submit'])) {
        ?>
        <h3>Order Summery:</h3><br>
<table class="table table-dark">
    <?php
        $passed_id = $_GET['prod_id'];
        $quantity = $_GET['qty'];
        $userid = $_SESSION['userid'];
        $sql1 = "SELECT * FROM address WHERE user_id='{$userid}'";
        $result1 = mysqli_query($conn, $sql1) or die("Error");
        $sql = "SELECT * from products WHERE product_id='{$passed_id}'";
        $result = mysqli_query($conn, $sql) or die("Can not run ");
        if (mysqli_num_rows($result) > 0) {

    ?>
            <thead>

                <tr>
                    <th>Product Name</th>
                    <th>Saleing Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                <tr>

                    <td><?php echo $row["product_name"]; ?></td>
                    <td id="price"><?php echo $row["saleing_price"]; ?></td>
                     <td>   <?php echo $quantity; ?>  </td> 
                    <td id="total"><?php $price=$row["saleing_price"] ;
                    $total= $price *$quantity; 
                    echo $total;?></td>

                </tr>
        <?php
                    }
                } else {
                   echo "no record found";
                }
        ?>
            </tbody>
</table>

<!-- <a href='final_order.php'><input class="submit" id="confirm" type="button" name="edit" value="Confirm Order" "/></button></a> -->

<div>
    <table class="table table-striped payment">
        <thead>
            <tr>
                <th>
                    <h3>Shipping Address :</h3>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php 
                if(mysqli_num_rows($result1)>0){

                while ($row1 = mysqli_fetch_assoc($result1)) {
                        echo $row1["bname"];
                        echo "&nbsp,&nbsp;";
                        echo $row1["street"];
                        echo "&nbsp,&nbsp;";
                        echo $row1["locality"];
                        echo "&nbsp,&nbsp;";
                        echo $row1["city"];
                        echo "&nbsp,&nbsp;";
                        echo $row1["pincode"];
                    }

                    ?>
                </td>
                <!-- <td><a href='edit_address.php '><input class="submit" type="button" name="edit" value="Edit" /></button></a></td> -->
            </tr>

        </tbody>
    </table>
</div>

<div>

    <table class=" table table-striped">
        <thead>
            <tr>
                <th>
                    <h3>Payment Mode:</h3>
                </th>
            </tr>
        </thead>
        <tbody>
            <td id="td">Cash <input type="checkbox" name="cash" id="cash" value="1"><br><br>
            </td>
        </tbody>
    </table>
</div>

<?php
                }
                else{echo "<a href='start.php'>Please Give Shiping Details</a>";}

    }
    else{
       if(isset($_GET['cart'])){
        $passed_id = $_GET['prod_id'];
        $quantity = $_GET['qty'];
        $userid = $_SESSION['userid'];
        $sql1= "SELECT saleing_price from products WHERE product_id='{$passed_id}'";
        $result1 = mysqli_query($conn, $sql1) or die("Can not run ");
        $row1 = mysqli_fetch_assoc($result1);
            $total=$row1["saleing_price"];
         
        
        $sql2="INSERT INTO cart (prod_id,user_id,qty,total) VALUES('$passed_id','$userid',$quantity,$total)";
           if(!mysqli_query($conn,$sql2)){
               echo "Can not insert ".mysqli_error($conn);
           }
           else{
               header("Location:cart.php");
           }
        }
    }
   

?>


<script type="text/javascript">
    $(document).ready(function() {
        var price = $("#price").html();

        $(".qty").change(function() {
            var qty = $(this).val();
            // var t=qty*price;
            $("#total").text(qty * price);
        });
        $("#cash").change(function() {
            $("<td><a href='final_order.php?product_id=<?php echo $passed_id;?>& qty=<?php echo $quantity;?> & total=<?php echo $total;?>'><input class='submit' id='pay' type='button' name='Place Order' value='Place Order' '/></button></a></td>'").appendTo('#td');

        });


    });
</script>
<?php require("footer.php");?>
</body>

</html>