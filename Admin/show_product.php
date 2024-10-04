<?php
require('connection.inc.php');
require('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <table border="0">
        <?php
        $limit = 6;
        if(isset($_GET['page'])){
            $page =$_GET['page'];
        }
        else{
            $page=1;
        }
       
        $offset =($page-1)*$limit;
        $sql = "SELECT * FROM products LIMIT {$offset},{$limit}";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {

        ?>
            <thead>

                <tr>
                    <th>Product Id </th>
                    <th>Category Id</th>
                    <th>Product Name</th>
                    <th>MRP</th>
                    <th>Saleing Price</th>
                    <th>Short Description</th>
                    <th>Long Description</th>
                    <th>Stock</th>
                    <th>Add date</th>
                    <th>Product Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <tr>
                    <td><?php echo $row["product_id"]; ?></td>
                    <td><?php echo $row["category_id"]; ?></td>
                    <td><?php echo $row["product_name"]; ?></td>
                    <td><?php echo $row["mrp"]; ?></td>
                    <td><?php echo $row["saleing_price"]; ?></td>
                    <td><?php echo $row["short_desc"]; ?></td>
                    <td><?php echo $row["long_desc"]; ?></td>
                    <td><?php echo $row["stock"]; ?></td>
                    <td><?php echo $row["add_date"]; ?></td>
                    <td><?php echo $row["product_status"]; ?></td>
                    <td><a href='edit_product.php?p_id=<?php echo $row["product_id"]; ?>'><input class="submit" type="button" name="edit" value="Edit" /></a></button></td>
                    <td><a href='delete_product.php?pro_id=<?php echo $row["product_id"]; ?>'><input class="submit" type="button" name="delete" value="Delete" /></a></button></td>
                </tr>
        <?php
                    }
                } else {
                    echo "No record found";
                }
        ?>
            </tbody>
    </table>

    <?php
        $sql1="SELECT * FROM products";
        $result1=mysqli_query($conn,$sql1) or die("Query Failed");
        if(mysqli_num_rows($result1)>0)
        {
            $total_records =mysqli_num_rows($result1);
            $limit =6;
            $total_page =ceil($total_records/$limit);
            echo ' <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              ';
              if($page > 1 ){
                    echo '<li class="page-item ">
                    <a class="page-link" href="show_product.php?page='.($page-1).'" tabindex="-1">Previous</a>
                  </li>';
              }
            for($i=1;$i<=$total_page;$i++)
            {
                
                echo "<li class='page-item'><a class='page-link' href='show_product.php?page={$i}'>$i</a></li>";
            }
            if($total_page >$page){
                echo ' <li class="page-item">
                <a class="page-link" href="show_product.php?page='.($page+1).'">Next</a>
              </li>
            </ul>
          </nav> ';
            }
           
        }
    ?>
 

        
</body>

</html>