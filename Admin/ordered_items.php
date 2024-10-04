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
    <title>Ordered Items</title>

</head>

<body>
    <table border="0" cellpadding="10" cellspacing="10">
        <?php
        $limit = 7;
        if(isset($_GET['page'])){
            $page =$_GET['page'];
        }
        else{
            $page=1;
        }
       
        $offset =($page-1)*$limit;
        $sql = "SELECT * FROM orders LIMIT {$offset},{$limit}";
        $result=mysqli_query($conn, $sql);
        ?>
            <thead>

                <tr>
                    <th>Order Number </th>
                    <th>Username </th>
                    <th>Product Name</th>
                    <th>Qynatity</th>
                    <th>Total </th>
                    <th>Buy Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {    
                    ?>
                <tr>
                    <td><?php echo $row["order_id"]; ?></td>

                    <td><?php $uid=$row["user_id"]; 
                    $sql3="SELECT username from user WHERE id='{$uid}'  GROUP BY id";
                    $result3=mysqli_query($conn,$sql3) or die("Query Failed");
                    $row3=mysqli_fetch_assoc($result3);    
                    echo $row3["username"];
                    ?></td>
                    
                    <td><?php $pid=$row["prod_id"];  
                
                    $sql4="SELECT product_name from products WHERE product_id='{$pid}' GROUP BY product_name";
                    $result4=mysqli_query($conn,$sql4);
                    $row4=mysqli_fetch_assoc($result4);    
                    echo $row4["product_name"];
                    ?></td>
                   
                    <td><?php echo $row["qty"]; ?></td>
                    <td><?php echo $row["total"]; ?></td>
                    <td><?php echo $row["buy_date"]; ?></td>
                   
                </tr>
        <?php
                    }    
        ?>
            </tbody>
    </table>

    <?php
        $sql1="SELECT * FROM orders";
        $result1=mysqli_query($conn,$sql1) or die("Query Failed");
        if(mysqli_num_rows($result1)>0)
        {
            $total_records =mysqli_num_rows($result1);
            $limit =7;
            $total_page =ceil($total_records/$limit);
            echo ' <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              ';
              if($page > 1 ){
                    echo '<li class="page-item ">
                    <a class="page-link" href="ordered_items.php?page='.($page-1).'" tabindex="-1">Previous</a>
                  </li>';
              }
            for($i=1;$i<=$total_page;$i++)
            {
                
                echo "<li class='page-item'><a class='page-link' href='ordered_items.php?page={$i}'>$i</a></li>";
            }
            if($total_page >$page){
                echo ' <li class="page-item">
                <a class="page-link" href="ordered_items.php?page='.($page+1).'">Next</a>
              </li>
            </ul>
          </nav> ';
            }
           
        }
    ?>
 

        
</body>

</html>