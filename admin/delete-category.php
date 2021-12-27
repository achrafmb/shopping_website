<?php include ('config/mysqli_conn.php');?>
<?php

$id =$_GET["id"];
//echo $id;

$sql = "DELETE FROM category_table WHERE category_id = $id";

$res = mysqli_query($conn, $sql);

if($res==true){
    $_SESSION["delete-category-successfully"]="Delete category successfully";
    header("location:http://localhost/dw/admin/manage-category.php");

}else{
    $_SESSION["delete-category-failed"]= "Opps ,Failed to delete category";
    header("location:http://localhost/dw/admin/manage-category.php");
}

?>