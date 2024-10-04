<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location:{$location}/login_user.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First Page</title>
  <link rel="stylesheet" href="../css_files/bootstrap.min.css">
  <link rel="stylesheet" href="../css_files/users_css.css">
  <link rel="stylesheet" href="../css_files/all.css">
  <script src="../css_files/all.js"></script>
  <script src="../css_files/bootstrap.min.js"></script>
  <script src="../css_files/jquery.min.js"></script>
</head>

<body>
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-10">
        <center>
          <h1 class="title">PC Specs</h1>
        </center>
      </div>

      <div class="col-md-1 profile"><a href="profile.php" id="profile"><i class="fa-solid fa-user" style="font-size:23px;padding:2px;margin-right:15px;margin-top:26px;"></i>&nbsp;
    <?php echo $_SESSION["username"];?></a></div>

          <div class="col-md-1 logout"> <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" style="font-size:23px;padding:2px;margin-top:5px;margin-top:26px;"></i> </a></div>

      </div>
    

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="display_products.php?id=1">Processor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_products.php?id=2">Mother Board</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_products.php?id=3">Graphic Card</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="display_products.php?id=4">RAM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_products.php?id=5">Storage</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="display_products.php?id=6">Cabinate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_products.php?id=7">Moniter</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="display_products.php?id=8">Keyboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="display_products.php?id=9">Mouse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="display_products.php?id=10">SMPS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="start.php">Home</a>
        </li>
     

      </ul>
    </nav>
   
    <a href="cart.php"> <i class="fa-solid fa-cart-arrow-down" style="font-size:25px;float:right;margin: 20px 40px ;"></i> </a>