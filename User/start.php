<?php require("header.php");
require("connection.inc.php");
?>

  <div class="row">
    <div class="col-md-8">

 
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1 " class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="3" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="4" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="5" class="active"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="../images/Pre_built_PC1.png" alt="Los Angeles" class="d-block w-100">
  </div>
  <div class="carousel-item">
    <img src="../images/Pre_built_PC2.png" alt="Chicago" class="d-block w-100">
  </div>
  <div class="carousel-item ">
    <img src="../images/Pre_built_PC3.png" alt="New York" class="d-block w-100">
  </div>
  <div class="carousel-item ">
    <img src="../images/Pre_built_PC4.png" alt="New York" class="d-block w-100">
  </div>
  <div class="carousel-item ">
    <img src="../images/Pre_built_PC5.png" alt="New York" class="d-block w-100">
  </div>
  <div class="carousel-item ">
    <img src="../images/Pre_built_PC6.png" alt="New York" class="d-block w-100">
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>
</div>
    <div class="col-md-4">
      <?php require("address.php"); ?>
    </div>
  </div>

  <?php require("footer.php");?>
</div>
</body>
</html>