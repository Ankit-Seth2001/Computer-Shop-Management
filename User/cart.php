<?php
require("connection.inc.php");
require("header.php");

$userid = $_SESSION['userid'];

$sql = "SELECT * from cart WHERE user_id='{$userid}'";
$result = mysqli_query($conn, $sql) or die("Can not run ");

 if (mysqli_num_rows($result) > 0) {
?>
<form action="" type="post">
    <table class="table-primary" cellpadding="20" cellspacing="20">
        <thead>
            <tr>
                <th></th>
                <th>Product Name</th>
                <th>Quantity</th>
               <th>Total</th>
            </tr>
        </thead>
   

        <tbody>
            <tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                       
                ?>
            <tr>
                    <td>
                        <input type="checkbox" name="chk[]" > 
                    </td>
                <td><?php 
                 $pid=$row['prod_id'];
                  $sql1 = "SELECT product_name from products WHERE product_id='{$pid}'";
                  $result1 = mysqli_query($conn, $sql1) or die("Can not run ");
                    while($row1=mysqli_fetch_assoc($result1))

                       { ?><input type="text" size="70" name="pname" value='<?php echo $row1["product_name"];?>' style="border:none;"><?php }?>
                    
                 </td>

               <td><select name="qty" id="qty" >
                   <option value="<?php echo $row['qty'];?>"><?php echo $row['qty'];?></option>
                   <?php
                        for ($i = 1; $i <= 10; $i++) {

                            echo "<option value='{$i}'>$i</option>";
                        }
                        ?>
               </select></td>
              
                   <td><input type="text" size="18" name="pname" value='<?php echo $row["total"];?>' style="border:none;"></td>

            </tr>
            <?php }?>
            <tr>
               
                <td>
                    <center><input type="submit" name="update-cart" value="Buy Now"></center>
                </td>
            </tr>
            </tbody>
    <?php
                    
                
            }else{echo "<h2>No products Added";}
    ?>
       
</table>
        </form>

        <?php require("footer.php");?>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        $(".qty").change(function() {
            var qty = ("this").val();
           $("#val").html();
        });
    });
</script> -->