<?php 
include ("config/mysqli_conn.php");
$id = $_GET["id"];


$sql = "DELETE FROM admin_table WHERE id =$id";
//var_dump($_SESSION);
//die();
$res = mysqli_query($conn, $sql);
if ($res == TRUE){
    $_SESSION["delete-success"] = "admin deleted successfully"; 
    //change
    header("location:http://localhost/dw/admin/manage-admin.php");


}
else{
    $_SESSION["delete-failed"] = "oppss !"; 
    header("location:http://localhost/dw/admin/manage-admin.php");


}


?>