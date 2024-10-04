<?php
require('connection.inc.php');
require('header.php');
$sql = "SELECT * FROM user ORDER BY id DESC ";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All admins</title>

</head>

<body>

    <table border="0" cellpadding="10" cellspaceing="10">
        <?php
        if (mysqli_num_rows($result) > 0) {
        ?>
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["pass"]; ?></td>
                    <td><?php
                        if ($row["u_role"] == 1) echo "Admin";
                        else echo "Normal"; ?></td>
                    <td><a href='edit_admin.php?id=<?php echo $row["id"]; ?> '><input class="submit" type="button" name="edit" value="Edit" /></a></button></td>
                    <td><a href='delete_admin.php?id=<?php echo $row["id"]; ?> '><input class="submit" type="button" name="delete" value="Delete" /></a></button></td>
                </tr>
            <?php
                    }
            ?>
            </tbody>
    </table>
<?php
        } else {
            echo "No record found";
        }
?>

</table>
</body>

</html>