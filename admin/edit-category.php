<?php include("parties/header.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Edit category</title>
    
</head>
<body>

    <div class="main">
            <div class="main-content mt-5">
                <strong class="m-5 mx-5"><u><b>EDIT CATEGORY</b></u></strong>
                <strong class="mx-5 text-danger">
                    <?php 
                    if(isset($_SESSION["update category failed"])){
                        echo $_SESSION["update category failed"];
                        unset($_SESSION["update category failed"]);
                    }
                    
                    ?>
                </strong>
            </div>
            <?php
        $id = $_GET["id"];
        //echo $id;
        //if(isset($_GET["id"])){
        $sql = "SELECT * FROM category_table WHERE category_id = '$id'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if($count == 1){
            //i have daata
            $rows = mysqli_fetch_assoc($res);
            $image = $rows["image_name"];
            $desc = $rows["description"];
            //echo $image;

        } 
        
            //}
         ?>
    <!-- enctype  multipart/form-data -->
    <!-- file is an array with 3 parameter name , tmp, size -->
    <form action="" method="POST" enctype="multipart/form-data" > 
        <div class="form-group mt-5 border border-danger rounded mx-5">
            <div class="form-group mx-5 mt-5 mb-5">
            <label for="usr" class="h3" ><b>Category name :</b></label>
            <input type="text" name="image-title" class="form-control w-50" id="usr" placeholder="<?php echo $desc;?>" >
            <label for="usr" class="h3" ><b>Ancien image :</b></label><img width="100px" src="../img/cat img/<?php echo $image; ?>"><br>
            <!--<input type="text" name="image-title" class="form-control w-50" id="usr"> -->
            <label class="form-label h3" for="customFile"><b>Insert your New category image :</b></label>
            <input type="file" name="image" class="form-control w-50" id="customFile" />
            <input type="submit" class="btn btn-primary mt-5 mx-5" name="submit" value="CHANGE">

            </div>
            

        </div>
    </form>
    
    <?php
    //echo $id;
    //$image = $_GET["image"];
    //echo $image;
    if(isset($_POST["submit"])){
        $title = $_POST["image-title"];
        if(isset($_FILES["image"]["name"])){
            $image_name = $_FILES["image"]["name"];
            $tmp = $_FILES["image"]["tmp_name"];
            $dest = "../img/cat img/".$image_name;
            $transfer = move_uploaded_file($tmp, $dest);
            if($transfer == TRUE){
                $_SESSION["success-upload-image"]="Successfully upload image to your local folder";
                $sql = "UPDATE category_table SET description = '$title', image_name = '$image_name' WHERE category_id=$id";
                $res = mysqli_query($conn, $sql);
                if($res == TRUE){
                    $_SESSION["update category successfuly"]="Update category successfully";
                    header("location:http://localhost/dw/admin/manage-category.php");
                    $lien ="../img/cat img/".$image;
                    unlink($lien);
                    
                }else{
                    $_SESSION["update category failed"] = "Failed to update category";
                    header("location:http://localhost/dw/admin/edit-category.php");
                }
                
            }else{
                $_SESSION["failed to upload"] = "Failed to upload image to your local folder";
                die();
            }
        }
        

    }
    
    
    ?>
   


    </div>

    
</body>
</html>

<?php include("parties/footer.php") ?>