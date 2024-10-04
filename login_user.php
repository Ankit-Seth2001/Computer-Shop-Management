<!-- User Login -->
<?php
require('connection.inc.php');
session_start();
if (isset($_SESSION["username"])) {
  header("Location:{$location}/User/start.php");
}
session_unset();
session_destroy();

$msg = '';
if (isset($_POST['submit'])) {
  $username = strtolower($_POST['username']);
  $pass = strtolower($_POST['pwd']);
  //$u_role=$_POST['u_role'];

  $sql = "SELECT * FROM user WHERE username='$username' AND pass='$pass'";
  $res = mysqli_query($conn, $sql);
  if (mysqli_num_rows($res) == 1) {
   

    while ($row = mysqli_fetch_assoc($res)) {
      if ($row['u_role'] == 1) //check if the person is admin
      {
        $msg = "This is user Login";
      }
      else{
        session_start();
      $_SESSION["userid"] = $row['id'];
      $_SESSION["username"]= $row['username'];
      $_SESSION["role"]= $row['u_role'];
    
    header("Location:$location/User/start.php");
      }
  }
    
  } else {
    $msg = "Enter correct username and password....!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> User Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css_files/bootstrap.min.css">
  <link rel="stylesheet" href="css_files/users_css.css">
  <script src="css_files/bootstrap.min.js"></script>
  <script src="css_files/jquery.min.js"></script>
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
    <form action="<?php $_SERVER['PHP_SELF']; ?>" id="login" method="post">
      <h1 id="heading">User Login</h1>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" placeholder="Enter Username " name="username" id="username">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="pwd" id="pwd">
      </div>

      <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
      <p>Don't have an account? <a style='text-decoration:"none;"' href="signup.php">Sign Up</a></p>
      <br>
      <p> <a style='text-decoration:"none;"' href="login_admin.php">Admin Login</a></p>
      <br>
      <div class="field_error"><?php echo $msg; ?></div>
    </form>
  </div>
</body>