<?php
require("header.php");
require('connection.inc.php');
if(isset($_POST['submit']))
{
    $category_id=$_POST['category_id'];
    $comany_id=$_POST['company_id'];
    $product_name=$_POST['product_name'];
    $mrp=$_POST['mrp'];
    $saleing_price=$_POST['saleing_price'];
    $short_desc=$_POST['short_desc'];
    $long_desc=$_POST['long_desc'];
    $stock=$_POST['stock'];
    $product_status=$_POST['product_status'];

    $sql="INSERT INTO products (category_id,company_id,product_name,mrp,saleing_price,short_desc,long_desc,stock,product_status)
        VALUES ('$category_id','$comany_id','$product_name','$mrp','$saleing_price','$short_desc','$long_desc',
        '$stock','$product_status')";
    if(!mysqli_query($conn,$sql))
    {
        echo "Record not inserted<br>";
    }
    else{
        header("Location:show_product.php");
    }
}
?>

<div id="main-content">
    <h2>Add Products</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">

        <div class="form-group">
            <label>Category Id</label><br><br>
            <input type="text" name="category_id" />
        </div>
        <div class="form-group">
            <label>Name of Product</label><br><br>
            <textarea cols="40" rows="5" name="product_name" ></textarea>
        </div>
        <div class="form-group">
            <label>MRP</label><br><br>
            <input type="text" name="mrp" />
        </div>
        <div class="form-group">
            <label>Saleing price</label><br><br>
            <input type="text" name="saleing_price" />
        </div>
        <div class="form-group">
            <label>Short Description</label><br><br>
            <textarea cols="40" rows="5" name="short_desc" ></textarea>
        </div>
        <div class="form-group">
            <label>Long Description</label><br><br>
            <textarea cols="40" rows="5" name="long_desc" ></textarea>
        </div>
        <div class="form-group">
            <label>Stock</label><br><br>
            <input type="text" name="stock" />
        </div>
        <div class="form-group">
            <label>Product status</label><br><br>
            <input type="text" name="product_status" />
        </div>

        <input class="submit" type="submit"  name="submit" value="submit"  />
    </form>
</div>
</div>
</body>
</html>