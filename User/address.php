<?php
$msg = '';
$msg1 = '';
if (isset($_POST['submit'])) {
  $city = strtolower($_POST['city']);
  $locality = strtolower($_POST['locality']);
  $street = strtolower($_POST['street']);
  $bname = strtolower($_POST['bname']);
  $username=$_SESSION["username"]; 
  $pincode=$_POST['pincode'];
  $loged_in_user = $_SESSION["userid"];
  $sql="SELECT * FROM address WHERE  user_id='{$loged_in_user}' ";
  $regex = "^[1-9][0-9]{5}$";
  if(preg_match($pincode,$regex)){
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) >=1) {
    $msg1 = 'Address already saved..!';
  }
  else{
    $sql = "INSERT INTO address (user_id,bname,street,locality,city,pincode) VALUES('{$loged_in_user }','{$bname}','{$street}','{$locality}','{$city}','{$pincode}')";
         if (mysqli_query($conn, $sql)) {
           $msg = 'Succesfully Saved';
         }
         else{ $msg = 'Query Failed';}
  }
 }else{
   $msg1="Wrong Pincode";
}
}
  


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Address</title>
  <style>
    .field_success {
      color: #3051c9;
    background-color: #a7e5a1;
    width: 246px;
    font-size: 20px;
    }
    .field_error {
      color: #3051c9;
    background-color: #e2c3e7;
    width: 227px;
    font-size: 20px;
    }
    .btn-primary{margin-left: 20px;}
  </style>
</head>

<body>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" id="address" method="post">
    <div class="field_error"><?php echo $msg1; ?></div>
    <div class="field_success"><?php echo $msg; ?></div>
    <h1 id="heading">Address Details</h1>
    <div class="form-group">
      <label for="pwd">Building Name :</label>
      <input type="text" class="form-control" placeholder="" name="bname" id="bname" require>
    </div>
    <div class="form-group">
      <label for="pwd">Street :</label>
      <input type="text" class="form-control" placeholder="Street" name="street" id="street" require>
    </div>
    <div class="form-group">
      <label for="pwd">Locality :</label>
      <input type="text" class="form-control" placeholder="" name="locality" id="locality" require>
    </div>
    <div class="form-group">
      <label for="pwd">City:</label>
      <input type="text" class="form-control" placeholder="City" name="city" id="city" require>
    </div>
    <div class="form-group">
      <label for="pincode">Pincode:</label>
      <input type="text" class="form-control" placeholder="pincode" name="pincode" id="pincode"  maxlength="6" require>
    </div>

    <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button><br>
  </form>

  </div>
</body>

</html>