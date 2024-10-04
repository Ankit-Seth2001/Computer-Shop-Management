<?php require("header.php");
require("connection.inc.php");
$userid = $_SESSION['userid'];


// Address information
$sql2 = "SELECT * FROM address WHERE user_id='{$userid}'";
$result2 = mysqli_query($conn, $sql2) or die("Error");

// User info
$sql = "SELECT * FROM user WHERE id='{$userid}'";
$result = mysqli_query($conn, $sql) or die("Error");
?>

<h2>Order History</h2>
<table class="table table-dark" border="3">
<?php
        
       
        $sql7 = "SELECT * FROM orders where user_id='{$userid}'";
        $result7=mysqli_query($conn, $sql7) or die("Query falied");
        if(mysqli_num_rows($result7)>0){
        ?>
            <thead>

                <tr>
                    
                    <th>Product Name</th>
                    <th>Qynatity</th>
                    <th>Total </th>
                    <th>Buy Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result7)) {
                        
                    ?>
                <tr>
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
            </tbody>
    </table>
    <?php } else {echo "<br><h4>No Orders YET !!</h4>";}?>


<!-- Address  -->



<div>
    <table class="table table-striped payment">
        <thead>
            <tr>
                <th>
                    <h3>Shipping Address :</h3>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php 
                if(mysqli_num_rows($result2)>0){
                while ($row2 = mysqli_fetch_assoc($result2)) {
                        echo $row2["bname"];
                        echo "&nbsp &nbsp;";
                        echo $row2["street"];
                        echo "&nbsp&nbsp;";
                        echo $row2["locality"];
                        echo "&nbsp&nbsp;";
                        echo $row2["city"]; 
                        echo "&nbsp&nbsp;";
                        echo $row2["pincode"];
                    }

                    ?>
                </td>
                <td><a href='edit_address.php '><input class="submit" type="button" name="edit" value="Edit" /></button></a></td>
            </tr>

        </tbody>
    </table>
    <?php }  else{echo "<a href='start.php'>Please Give Shiping Details</a>";}?>
</div>


<!-- User details -->

<div id="model">
    <div id="model-form">
        <h3>Edit form</h3>
        <table cellpadding='10' width='100%'>

        </table>
        <div id="close-btn">X</div>
    </div>
</div>
<div>
    <table cellpadding="5" cellspacing="5">
        <tr>
            <th>
                <h3>Your Info :</h3>
            </th>
        </tr>
        <?php if (mysqli_num_rows($result) > 0) {
            $n = mysqli_num_rows($result);

        ?>
            <tr>

                <th>Name</th>
                <th>Password</th>
                <th></th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th><input type="text" name="uname" class="uname" value="<?php echo $row["username"]; ?>" disabled></th>
                    <th><input type="text" name="pass" class="pass" value="<?php echo $row["pass"]; ?>" disabled></th>
                    <th><input type="hidden" name="uid" class="uid" value="<?php echo $row["id"]; ?>" disabled></th>
                </tr>
        <?php }
        } ?>
        <tr>
            <td><input class="edit-btn" type="button" name="user_info" value="Edit" /></td>
        </tr>


    </table>
</div>

<?php require("footer.php");?>

<script>
    $(document).ready(function() {

        $(document).on("click", ".edit-btn", function() {
            $("#model").show();
            var uid = $(".uid").val();
            var uname = $(".uname").val();
            var pass = $(".pass").val();

            $.ajax({
                url: "update_user.php",
                type: "POST",
                data: {
                    uid: uid
                },
                success: function(data) {
                    $("#model-form table").html(data);
                }
            });
        });

        //Hide Model box
        $("#close-btn").on("click", function() {
            $("#model").hide();
        });

        //Save update from
        $(document).on("click","#edit-sub", function() {
            var user_name=$("#uname").val();
            var user_id=$("#uid").val();
            var user_pass=$("#pass").val();
            
            $.ajax({
                url:"ajax_update_user.php",
                type:"POST",
                data:{user_id:user_id,user_name:user_name,user_pass:user_pass},
                success:function(data){
                   if(data == 1){
                    $("#model").hide();
                   }
                }
            });
        });
    });
</script>
</div>
</body>

</html>