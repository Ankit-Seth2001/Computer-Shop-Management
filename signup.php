<!-- <?php
require('connection.inc.php');
$msg = '';
if (isset($_POST['submit'])) {
  $username = strtolower($_POST['username']);
  $pass = strtolower($_POST['pwd']);
  $u_role = strtolower($_POST['u_role']);
  $regx = "/[a-zA-z]/i";
  if (preg_match($regx, $username) && preg_match($regx, $pass)) {
    $sql = "SELECT username FROM user WHERE username='{$username}' and u_role='{$u_role}'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $msg = 'Account Already Creared...!';
    } else {
      $sql = "INSERT INTO user (username,pass,u_role) VALUES('{$username}','{$pass}','{$u_role}')";
      mysqli_query($conn, $sql) or die("Can not insert");
    }
  } else {
    $msg = "Enter valid username and password";
  }
  if($u_role==1){header("Location:login_admin.php");}
  if($u_role==0){header("Location:login_user.php");}
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- JS,css bootstrap and my css-->
 <link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- fontawsom icons -->
<link href="all.min.css" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/my_css.css" rel="stylesheet">

   <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <style>
    .field_error {
      color: red;
      margin-top: 15x;
      font-size: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="<?php $_SERVER['PHP_SELF'];?>" id="signup" method="post">
      <h1 id="heading">Sign up</h1>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" placeholder="Enter Username " name="username" id="username" require>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="pwd" id="pwd" require>
      </div>
     
      <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button><br>
      <div class="field_error"><?php echo $msg;?></div>
    </form>
  </div>
</body>