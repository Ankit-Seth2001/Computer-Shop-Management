<?php include 'header.php';
include 'connection.inc.php'; 
$uid=$_SESSION['userid'];
echo $uid;
?>

<div id="main-content">   
    <h2>Update Address</h2>
    <?php 
    $sql="SELECT * FROM  address WHERE user_id='{$uid}' " ;
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {   
?>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
       
        <div class="form-group">
            <label>Building Name</label>
            <input type="text" name="bname" value="<?php echo $row["bname"];?>"/>
        </div>
        <div class="form-group">
            <label>Locality</label>
            <input type="text" name="locality" value="<?php echo $row["locality"];?>"/>
        </div>
        <div class="form-group">
            <label>Street</label>
            <input type="text" name="street" value="<?php echo $row["street"];?>"/>
        </div>
        <div class="form-group">
            <label>City</label>
            <input type="text" name="city" value="<?php echo $row["city"];?>"/>
        </div>
        <div class="form-group">
            <label>Pincode</label>
            <input type="text" name="pincode" value="<?php echo $row["pincode"];?>"/>
        </div>

      <input class="submit" type="submit" name ="update" value="Update"/>
    </form>
    <?php }
    }
    else{
        echo "NO record Found";
    }
    ?>
    <?php
    if(isset($_POST['update']))
    {
        $bname=$_POST['bname'];
        $street=$_POST['street'];
        $locality=$_POST['locality'];
        $city=$_POST['city'];
        $pincode=$_POST['pincode'];

        $sql = "UPDATE address SET bname='{$bname}', street='{$street}', locality='{$locality}', city='{$city}',pincode='{$pincode}' WHERE user_id={$uid}";
        if(mysqli_query($conn, $sql)){
            header("Location:profile.php");}
            else{
                echo mysqli_error($conn);
            }
       
}
    ?>
</div>
</div>
</body>
</html>