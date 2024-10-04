<?php include 'header.php';
include 'connection.inc.php'; 
$product_id=$_GET['p_id'];
?>

<div id="main-content">   
    <h2>Update Admin</h2>
    <?php 
    $sql="SELECT * FROM  products WHERE product_id='{$product_id}' " ;
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {   
?>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <div class="form-group">

            <label>Category Id</label>
            <input type="hidden" name="product_id" value="<?php echo $row["product_id"];?>"/>
            <input type="text" name="category_id" value="<?php echo $row["category_id"];?>"/>
        </div>
        <div class="form-group">
            <label>Name</label>
            <textarea cols="40" rows="5" name="product_name" ><?php echo $row["product_name"];?></textarea>
        </div>
        <div class="form-group">
            <label>MRP</label>
            <input type="text" name="mrp" value="<?php echo $row["mrp"];?>"/>
        </div>
        <div class="form-group">
            <label>Saleing price</label>
            <input type="text" name="saleing_price" value="<?php echo $row["saleing_price"];?>"/>
        </div>
        <div class="form-group">
            <label>Short Description</label>
            <textarea cols="40" rows="5" name="short_desc" ><?php echo $row["short_desc"];?></textarea>
        </div>
        <div class="form-group">
            <label>Long Description</label>
            <textarea cols="40" rows="5" name="long_desc" ><?php echo $row["long_desc"];?></textarea>
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="text" name="stock" value="<?php echo $row["stock"];?>"/>
        </div>
        <div class="form-group">
            <label>Product status</label>
            <input type="text" name="product_status" value="<?php echo $row["product_status"];?>"/>
        </div>
    
      <input class="submit" type="submit" name ="update" value="Update"/>
    </form>
    <?php }
    }
    else{
        echo "NO record Found";
    }
    ?>
    <?php
    if(isset($_POST['update']))
    {
        $product_id=$_POST['product_id'];
        $category_id=$_POST['category_id'];
        $product_name=$_POST['product_name'];
        $mrp=$_POST['mrp'];
        $saleing_price=$_POST['saleing_price'];
        $short_desc=$_POST['short_desc'];
        $long_desc=$_POST['long_desc'];
        $stock=$_POST['stock'];
        $product_status=$_POST['product_status'];
        
          $sql="UPDATE products SET 
            category_id='{$category_id}',
            product_name='{$product_name}',
            mrp='{$mrp}',
            saleing_price='{$saleing_price}',
            short_desc='{$short_desc}',
            long_desc='{$long_desc}',
            stock='{$stock}',
            product_status='{$product_status}'
            WHERE product_id={$product_id} ";
        if(mysqli_query($conn,$sql)) 
        {
            header("Location:show_product.php");
        }
        else{
            echo "Can not update".mysqli_error($conn);
        }
        
        }
    ?>
</div>
</div>
</body>
</html>
