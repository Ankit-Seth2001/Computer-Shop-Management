<?php include 'header.php';
include 'connection.inc.php';
$admin_id = $_GET['id'];
?>

<div id="main-content">
    <h2>Update Admin</h2>
    <?php
    $sql = "SELECT * FROM  user WHERE id='{$admin_id}' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                    <input type="text" name="username" value="<?php echo $row["username"]; ?>" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="pass" value="<?php echo $row["pass"]; ?>" />
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select name="u_role" value='<?php echo $row["u_role"];?>'>
                    <?php
                    if($row['u_role']==1){
                        echo "<option value='1' selected>Admin</option>
                        <option value='0'>Normal</option>";
                    }else{
                        echo "<option value='1' >Admin</option>
                        <option value='0' selected>Normal</option>";
                    }
                    ?>
                    </select>
                </div>
                <input class="submit" type="submit" name="update" value="Update" />
            </form>
    <?php }
    } else {
        echo "NO record Found";
    }
    ?>
    <?php
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $u_role = $_POST['role'];
        $sql = "UPDATE user SET username='{$username}', pass='{$pass}', u_role='{$u_role}' WHERE id={$id}";
        $result = mysqli_query($conn, $sql);
        header("Location:show_admin.php");
    }
    ?>
</div>
</div>
</body>

</html>