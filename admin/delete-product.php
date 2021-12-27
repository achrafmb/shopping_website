<?php include("config/mysqli_conn.php") ?>
<?php
$id = $_GET["id"];
//echo $id;
$sql = "DELETE FROM product_table WHERE id=$id";
$res = mysqli_query($conn, $sql);
if($res == true){
    $_SESSION["delete product successfully"] = "Delete image successfully";
    header("location:http://localhost/dw/admin/manage-product.php");
}else{
    $_SESSION["failed delete ptoduct"] = "Failed to delete product";
    header("location:http://localhost/dw/admin/manage-product.php");

}


?>