<?php include("parties/header.php")?>

<!-- nav bar ends here -->
<div class="main">
        .
    </div>

    <!-- main content starts here -->
    <div class="main">
        <div class="main-content">
            <strong class="m-5  text-danger "><b>MANAGE CATEGORY</b></strong>
            <strong class="text-success"><b><?php
            if(isset($_SESSION["image uploaded successfully"])){
                echo $_SESSION["image uploaded successfully"];
                unset($_SESSION["image uploaded successfully"]);
            }if(isset($_SESSION["delete-category-successfully"])){
                echo $_SESSION["delete-category-successfully"];
                unset($_SESSION["delete-category-successfully"]);
            }if(isset( $_SESSION["update category successfuly"])){
                echo  $_SESSION["update category successfuly"];
                unset( $_SESSION["update category successfuly"]);
            }
            
            
            
            
            ?></b></strong>
            
            
        </div>
        <div class="add">

            <a href="add-category.php"><button type="button" class="btn btn-outline-primary mt-5 mx-5">ADD CATEGORY</button></a>
        </div>

        <div class="table">
        <table class="table mt-5">

            <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

           

                <?php 
                $sql = "SELECT * FROM category_table";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if($count > 0){
                    //we have data
                    while($rows=mysqli_fetch_assoc($res)){
                        $id = $rows["category_id"];
                        $desc = $rows["description"];
                        $image = $rows["image_name"];

                        ?>
                        <tr>
                            <th scope="row"><?php echo $id?></th>
                            <td><?php echo $desc?></td>
                            <td class="resp h-20px"><img width = 100px src="../img/cat img/<?php echo $image;?>"> </td>
                    
                            <td><a href="http://localhost/dw/admin/edit-category.php?id=<?php echo $id;?>"><button type="submit" class="btn btn-success">Edit</button></a>
                            <a href="http://localhost/dw/admin/delete-category.php?id=<?php echo $id;?>"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>

                        <?php
                    }
                }
                ?>                
                
            
        

           
            </tbody>   
        </table>    
    </div>

<?php include("parties/footer.php") ?>