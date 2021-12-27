<?php include("parties/header.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Add Product</title>
    
</head>
<body>

    <div class="main">
            <div class="main-content mt-5">
                <strong class="m-5 mx-5"><u><b>ADD PRODUCT</b></u></strong>
                <strong class="mx-5 text-danger"></strong>
            </div>

    </div>
    <!-- enctype  multipart/form-data -->
    <!-- file is an array with 3 parameter name , tmp, size -->
    <form action="" method="POST" enctype="multipart/form-data" > 
        <div class="form-group mt-5 border border-danger rounded mx-5">
            <div class="form-group mx-5 mt-5 mb-5">
            <label for="usr" class="h3" ><b>Product title :</b></label>
            <input type="text" name="product_title" class="form-control w-50" id="usr">
            <label for="usr" class="h3" ><b>Product description :</b></label>
            <input type="text" name="product_description" class="form-control w-50" id="usr">
            <label for="usr" class="h3" ><b>Product price :</b></label>
            <input type="text" name="product_price" class="form-control w-50" id="usr">
            <label class="form-label h3" for="customFile"><b>Insert your product image :</b></label>
            <input type="file" name="image_name" class="form-control w-50" id="customFile" />
            <input type="submit" class="btn btn-primary mt-5 mx-5" name="submit" value="UPLOAD">

            </div>
            

        </div>
    </form>
    <?php 
    if(isset($_POST["submit"])){
        $product_title = $_POST["product_title"];
        $product_description = $_POST["product_description"];
        $product_price = $_POST["product_price"];
        if(isset($_FILES["image_name"])){
            $imagename = $_FILES["image_name"]["name"];
            $imagetmp = $_FILES["image_name"]["tmp_name"];
            $dest = "../img/product-img/".$imagename;
            $transfer = move_uploaded_file($imagetmp, $dest);
            if($transfer == true){
                $_SESSION["transfer image success"] = "Tranfer image successfully";
                $sql = "INSERT INTO product_table SET title = '$product_title', description = '$product_description',
                price = '$product_price', image_name = '$imagename'";
                $res = mysqli_query($conn, $sql);
                if($res == true){
                    $_SESSION["upload successfuly"]="Upload successfully";
                    header("location:http://localhost/dw/admin/manage-product.php");
                }

            }else{
                $_SESSION["failed to transfer image"] = "Failed to transfer image";
                header("location:http://localhost/dw/admin/add-admin.php");
            }
        }

    }
    
    ?>
    
</body>
</html>


<?php include("parties/footer.php") ?>