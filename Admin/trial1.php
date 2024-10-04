<?php
require('connection.inc.php');

$sql="SELECT * FROM orders";
$result=mysqli_query($conn,$sql) or die("Can not run query");
$output='';

if(mysqli_num_rows($result)>0){
    $output.='<table border="2" cellpadding="5" cellspacing="5" width="100%">
    <thead>
    
    <tr>
        
        <th>Order Id</th>
        <th>Qynatity</th>
        <th>Total </th>
        <th>Buy Date</th>
    </tr>
    </thead>';
    while($row=mysqli_fetch_assoc($result)){
        $output.='
        <tbody>
        <tr>
        <td>{$row["order_id"]}</td>
        <td>{$row["qty"]}</td>
        <td>{$row["total"]}</td>
        <td>{$row["buy_date"]}</td>    
                   
                </tr>
                </tbody>
        ';
    }
    $output.="</table>";
    mysqli_close($conn);
    echo $output;
}
else{
    echo "<h2>Rercord Not found</h2>";
}

?>