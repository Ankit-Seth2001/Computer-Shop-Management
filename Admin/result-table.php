/<?php
require('connection.inc.php');
$data1=$_POST['data1'];
$data2=$_POST['data2'];
$sql="SELECT * FROM orders WHERE buy_data BETWEEN '{$data1}' AND '{$data2}'";
$result=mysqli_query($conn,$sql) or die("Can not run query");
$output='';

if(mysqli_num_rows($result)>0){
    $output='<table border="2" cellpadding="5" cellspacing="5">
    <thead>
    
    <tr>
        
        <th>Product Name</th>
        <th>Qynatity</th>
        <th>Total </th>
        <th>Buy Date</th>
    </tr>
    </thead>';
    while($row=mysqli_fetch_assoc($result)){
        $output.='
        <tbody>
        <tr>
                   <td><?php $pid=$row["prod_id"];  
                
                    $sql4="SELECT product_name from products WHERE product_id="{$pid}" GROUP BY product_name";
                    $result4=mysqli_query($conn,$sql4);
                    $row4=mysqli_fetch_assoc($result4);    
                    echo $row4["product_name"];
                    ?></td>
                   
                    <td><?php echo $row["qty"]; ?></td>
                    <td><?php echo $row["total"]; ?></td>
                    <td><?php echo $row["buy_date"]; ?></td>
                   
                   
                </tr>
                </tbody>
        ';
    }
    $output.="</table>";
   
    echo $output;
}
else{
    echo "<h2>Rercord Not found</h2>";
}

?>