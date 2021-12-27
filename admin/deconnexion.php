<?php 
include("config/mysqli_conn.php");

session_destroy();
header("location:http://localhost/dw/admin/login.php");

?>