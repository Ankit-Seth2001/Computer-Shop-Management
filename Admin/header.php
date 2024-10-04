<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location:{$loation}/login.php");
    }
      

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="../css_files/bootstrap.min.css">
  <link rel="stylesheet" href="../css_files/admin_css.css">
  <link rel="stylesheet" href="../css_files/all.css">
  <script src="../css_files/all.js"></script>
  <script src="../css_files/bootstrap.min.js"></script>
  <script src="../css_files/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
        <div id="header">
            <h1>Admin Panel</h1>
            
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="show_admin.php">Admins list</a>
                </li>
                <li>
                    <a href="add_products.php">Add products</a>
                </li>
                <li>
                    <a href="show_product.php">Product details</a>
                </li>
                <li>
                    <a href="ordered_items.php">Ordered Items</a>
                </li>
                <li>
                    <a href="report1.php">Sales Report</a>
                </li>
                <li>
                    <a href="report.php">Stock Report</a>
                </li>
            
             
            </ul>
        </div>
        <div align="right" id="logout"><i class="fa-solid fa-user" style="font-size:18px;padding:1px;margin-right:5px;margin-top:10px;"></i>&nbsp;<?php echo $_SESSION["username"];?> <br>
        <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" style="font-size:19px;padding:1px;margin-top:5px;margin-top:15px;"></i></a>
         </div>
