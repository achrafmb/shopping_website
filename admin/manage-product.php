<?php include("parties/header.php")?>

<!-- nav bar ends here -->
<div class="main">
        .
    </div>

    <!-- main content starts here -->
    <div class="main">
        <div class="main-content">
            <strong class="m-5 text-info "><b>MANAGE PRODUCT</b></strong>
            <strong class="text-success"><b><?php
            if(isset($_SESSION["upload successfuly"])){
                echo $_SESSION["upload successfuly"];
                unset($_SESSION["upload successfuly"]);
            }if(isset($_SESSION["delete product successfully"])){
                echo $_SESSION["delete product successfully"];
                unset($_SESSION["delete product successfully"]);
            }
            ?></b></strong>
            <strong class="text-danger" ><?php 
            if(isset($_SESSION["empty"])){
                echo $_SESSION["empty"];
                unset($_SESSION["empty"]);
            }
            ?></strong>
            
        </div>
        <div class="add">

            <a href="add-product.php"><button type="button" class="btn btn-outline-primary mt-5 mx-5">ADD PRODUCT</button></a>
        </div>

        <div class="table">
        <table class="table mt-5">

            <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <tbody>



           

                <?php 
                $sql = "SELECT * FROM product_table";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if($count > 0){
                    //we have data
                    while($rows = mysqli_fetch_assoc($res)){
                        $id = $rows["id"];
                        $title = $rows["title"];
                        $desc = $rows["description"];
                        $price = $rows["price"];
                        $image = $rows["image_name"];?>
                        <tr>
                            <th scope="row"><?php echo $id;?></th>
                            <td><?php echo $title;?></td>
                            <td class="resp h-20px"><?php echo $desc;?></td>
                            <td class="resp h-20px"><?php echo $price;?> DH</td>
                            <td class="resp h-20px"><img width="100px" src="../img/product-img/<?php echo $image;?>"></td>
                
                            <td><a href="http://localhost/dw/admin/edit-product.php?id=<?php echo $id;?>"><button type="submit" class="btn btn-success">Edit</button></a>
                            <a href="http://localhost/dw/admin/delete-product.php?id=<?php echo $id;?>"><button  type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                         </tr>


                        <?php


                    }

                }else{
                    //we dont have data 
                    $_SESSION["empty"] = "products not added yet";
                    //echo "<tr>NO product </tr>";
                }
                

                       
                      

                    

                    
                
                
                ?>
              

              





</tbody>   

           

                
                
            
        

           
            </tbody>   
        </table>    
    </div>

<?php include("parties/footer.php") ?>