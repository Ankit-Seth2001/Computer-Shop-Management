<?php require("header.php");
require("connection.inc.php");

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE category_id='{$id}'  LIMIT 0,10";

$result = mysqli_query($conn, $sql);

?>

<div class="items">
    <div class="row">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <?php if ($id == 1) {
                            echo '<img src="../images/cpu.jpg" class="card-img-top" alt="...">';
                        }
                         elseif ($id == 2) {
                            echo '<img src="../images/motherboard.jpg" class="card-img-top" alt="...">';
                        }
                        elseif ($id == 3) {
                            echo '<img src="../images/gpu.jpg" class="card-img-top" alt="...">';
                        }
                        elseif ($id == 4) {
                            echo '<img src="../images/abc.jpg" class="card-img-top" alt="...">';
                        }
                        elseif ($id == 5) {
                            echo '<img src="../images/storage.jpg" class="card-img-top" alt="...">';
                        }
                        elseif ($id == 6) {
                            echo '<img src="../images/cabinate.jpg" class="card-img-top" alt="...">';
                        }
                        elseif ($id == 7) {
                            echo '<img src="../images/moniter.jpg" class="card-img-top" alt="...">';
                        }
                        elseif ($id == 8) {
                            echo '<img src="../images/keyboard.jpeg" class="card-img-top" alt="...">';
                        }
                        elseif ($id ==9) {
                            echo '<img src="../images/mouse.jpg" class="card-img-top" alt="...">';
                        }
                        elseif ($id ==10) {
                            echo '<img src="../images/smps.jpeg" class="card-img-top" alt="...">';
                        }
                   
                       
                        ?>

                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">
                                <?php echo  $row["product_name"]; ?><br>
                                <strike><?php echo 'MRP :Rs ', $row["mrp"]; ?><br></strike>
                                <?php echo  'Saeling Price : Rs ', $row["saleing_price"]; ?><br>
                                <!-- <?php echo $row["short_desc"]; ?><br> -->

                            </p>
                            <form action="buy_now2.php" method="GET" id="buy">
                                <!-- -->

                                <input id="prod_id" type="hidden" value="<?php echo $row["product_id"]; ?>" name="prod_id">
                                <label>Qty:</label>&nbsp;
                                <select name="qty" class="qty" id="qty">
                                    <option value="1" default>1</option>
                                    <?php
                                    for ($i = 2; $i <= 10; $i++) {

                                        echo "<option value='{$i}'>$i</option>";
                                    }
                                    ?>
                                </select>


                                <input type="submit" name="submit" value="Buy Now" id="buy">
                                <!-- <a href="cart.php"> <i class="fa-solid fa-cart-arrow-down" style="color:black;font-size:25px;float:right;margin: 20px 40px ;"></i> </a> -->
                                <input type="submit" name="cart" value="Add to cart" id="buy">

                                <!-- <a href='cart.php?product_id=<?php echo $row["product_id"]; ?>'><input class="submit" type="button" name="cart" value="Add to cart" /></button></a>  -->
                            </form>
                        </div>
                    </div>
                </div>
        <?php

            }
        }
        ?>
    </div>
    <?php require("footer.php");?>
</div>
    
</div>
</body>

</html>