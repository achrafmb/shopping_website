<?php include("parties/header.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Add Category</title>
    
</head>
<body>

    <div class="main">
            <div class="main-content mt-5">
                <strong class="m-5 mx-5"><u><b>ADD CATEGORY</b></u></strong>
                <strong class="mx-5 text-danger"><?php
                if(isset($_SESSION["failed to upload image"])){
                    echo $_SESSION["failed to upload image"];
                    unset($_SESSION["failed to upload image"]);
                }
                ?></strong>
            </div>

    </div>
    <!-- enctype  multipart/form-data -->
    <!-- file is an array with 3 parameter name , tmp, size -->
    <form action="" method="POST" enctype="multipart/form-data" > 
        <div class="form-group mt-5 border border-danger rounded mx-5">
            <div class="form-group mx-5 mt-5 mb-5">
            <label for="usr" class="h3" ><b>Category name :</b></label>
            <input type="text" name="image-title" class="form-control w-50" id="usr">
            <label class="form-label h3" for="customFile"><b>Insert your category image :</b></label>
            <input type="file" name="image-name" class="form-control w-50" id="customFile" />
            <input type="submit" class="btn btn-primary mt-5 mx-5" name="submit" value="UPLOAD">

            </div>
            

        </div>
    </form>
    <?php
    if (isset($_POST["submit"])){
        $image_title = $_POST["image-title"];
        //echo $image_title;
        if (isset($_FILES["image-name"]["name"])){
            $image = $_FILES["image-name"]["name"];
            $image_path = $_FILES["image-name"]["tmp_name"];
            $destination = "../img/cat img/".$image;
            $transfer = move_uploaded_file($image_path, $destination);
            //echo $image;
            if($transfer == true){
                $_SESSION["upload-image-successfully"] = "upload image successfully";
                $sql = "INSERT INTO category_table SET image_name='$image', description='$image_title'";
                $res = mysqli_query($conn, $sql);
                if ($res == true){
                    $_SESSION["image uploaded successfully"] = "Image category uploaded successfully";
                    header("location:http://localhost/dw/admin/manage-category.php");
                }
                else{
                    $_SESSION["failed to upload image"] = "Failed to upload image";
                    header("location:http://localhost/dw/admin/add-category.php");
                }
            }else{
                $_SESSION["failed-upload-image"]= "failed to upload image";
                die();
            }
            
            
        }
        
        
        
    
    }

    
    
    ?>
</body>
</html>


<?php include("parties/footer.php") ?>