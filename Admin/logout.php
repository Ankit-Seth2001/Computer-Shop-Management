<?php
require("header.php");
require('connection.inc.php');
session_start();
session_unset();
session_destroy();
header("Location:{$location}/login_admin.php");
?>
