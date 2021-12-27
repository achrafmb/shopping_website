<?php include("parties/header.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Edit Product</title>
    
</head>
<body>

    <div class="main">
            <div class="main-content mt-5">
                <strong class="m-5 mx-5"><u><b>EDIT PRODUCT</b></u></strong>
                <strong class="mx-5 text-danger"></strong>
            </div>

    </div>
    <?php
    $id = $_GET["id"];
    //echo $id;
    $sql = "SELECT * FROM product_table WHERE id = '$id'";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if($count == 1){
        // we have data
        $rows = mysqli_fetch_assoc($res);
        $id = $rows["id"];
        $title = $rows["title"];
        $desc = $rows["description"];
        $price = $rows["price"];
        $oldimage = $rows["image_name"];
    }
    ?>
    <!-- enctype  multipart/form-data -->
    <!-- file is an array with 3 parameter name , tmp, size -->
    <form action="" method="POST" enctype="multipart/form-data" > 
        <div class="form-group mt-5 border border-danger rounded mx-5">
            <div class="form-group mx-5 mt-5 mb-5">
            <label for="usr" class="h3" ><b>Product title :</b></label>
            <input type="text" name="product_title" class="form-control w-50" id="usr" placeholder="<?php echo $title;?>">
            <label for="usr" class="h3" ><b>Product description :</b></label>
            <input type="text" name="product_description" class="form-control w-50" id="usr" placeholder="<?php echo $desc;?>">
            <label for="usr" class="h3" ><b>Product price :</b></label>
            <input type="text" name="product_price" class="form-control w-50" id="usr" placeholder="<?php echo $price;?>">
            <label class="form-label h3" for="customFile"><b>Old image :</b></label><img width="100px" src="../img/product-img/<?php echo $oldimage;?>"><br>
            <label class="form-label h3" for="customFile"><b>Insert your New product image :</b></label>
            <input type="file" name="image_name" class="form-control w-50" id="customFile" />
            <input type="submit" class="btn btn-primary mt-5 mx-5" name="submit" value="UPLOAD">

            </div>
            

        </div>
    </form>
    <?php 
    if(isset($_POST["submit"])){
        $producttitle = $_POST["product_title"];
        $productdesc = $_POST["product_description"];
        $productprice = $_POST["product_price"];
        //$image = $_POST["image_name"];
        if(isset($_FILES["image_name"]["name"])){
            $imagename = $_FILES["image_name"]["name"];
            $imagetmp = $_FILES["image_name"]["tmp_name"];
            $dest = "../img/product-img/".$imagename;
            $transfer = move_uploaded_file($imagetmp, $dest);
            if($transfer == true){
                $old_image = "../img/product-img/".$oldimage;
                $delete = unlink($old_image);
                if($delete = false){
                    $_SESSION["failed to delete old image"]= "Failed to delete old image";
                    header("location:http://localhost/dw/admin/manage-product.php");
                    die();
                }

            }else{
                $_SESSION["failed to transfer image"] = "Failed to transfer image to your folder ";
                header("location:http://localhost/dw/admin/manage-product.php");
                die();
            }
        }
        $sql1 = "UPDATE product_table SET title = '$producttitle', description = '$productdesc' , price = $productprice
        , image_name = '$imagename' WHERE id=$id";
        $res = mysqli_query($conn, $sql1);
        if($res == true){
            $_SESSION["edit-success"] = "Edit product successfully";
            header("location:http://localhost/dw/admin/manage-product.php");

        }else{
            $_SESSION["failed-edit-image"] = "Failed to edit product";
            header("location:http://localhost/dw/admin/edit-product.php");
            die();
        }


        }
    ?>
    
    
</body>
</html>


<?php include("parties/footer.php") ?>