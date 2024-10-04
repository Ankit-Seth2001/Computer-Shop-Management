<!-- All between Dates -->
<?php
require('connection.inc.php');
require('header.php');
?>

    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="POST">

        <div class="form-group">
            <label>From</label>&nbsp;&nbsp;
            <input type="text" name="data1" id="data1"/>  &nbsp;&nbsp;
            <label>To</label>&nbsp;&nbsp;
            <input type="text" name="data2" id="data2"/>
        </div>
        <br>
        <input class="submit" type="submit"  name="submit" value="Search"  />
    </form>

    

<?php
if(isset($_POST['submit'])){
$data1=$_POST['data1'];
$data2=$_POST['data2'];

$sql="SELECT * FROM orders WHERE buy_date  BETWEEN '{$data1}' AND '{$data2}'";
$result=mysqli_query($conn,$sql) or die("Can not run query");

?>
   <table border="2" cellpadding="5" cellspacing="5">
    <tr>
        <th>User name</th>
        <th>Product Name</th>
        <th>Qynatity</th>
        <th>Total </th>
        <th>Buy Date</th>
    </tr>
    <?php
    if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
            ?>
        
            <tr>
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
    </table>
    <?php
    }
        }
         ?>
        </body>
        </html>
   
    
