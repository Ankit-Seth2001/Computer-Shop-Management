<!-- Stock Report -->
<?php
require('connection.inc.php');
require('header.php');
?>

<form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

    <div class="form-group">
        <label>Category name</label>&nbsp;&nbsp;
        <input type="text" name="data1" id="data1" /> &nbsp;&nbsp;
    </div>
    <br>
    <input class="submit" type="submit" name="submit" value="Search" />
</form>



<?php
if (isset($_POST['submit'])) {
    $data1 = $_POST['data1'];
    $data1 = ucwords($data1);
    $sql = "SELECT DISTINCT product_id,product_name,stock from products where category_id=(SELECT category_id FROM category WHERE category_name LIKE'{$data1}') ORDER BY product_name";
    $result = mysqli_query($conn, $sql) or die("Can not run query");

?>
<br>
    <table border="2" cellpadding="5" cellspacing="5">
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Stock</th>

        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                <td><?php echo $row['product_id'] ?></td>
                    <td><?php echo $row['product_name'] ?></td>
                    <td><?php echo $row['stock'] ?></td>
                </tr>

            <?php
            }
            ?>
    </table>
<?php
        }
        // else{echo "No Record";}
    }
?>
</body>

</html>