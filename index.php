<?php include("header2.php")?>
    

    <!-- our search section starts here -->
    <section class="product-search">
        <div class="container text-center">
            <form action="http://localhost/dw/search_product.php" method="POST" class="mt-5 pt-5" >
                <input  class="mt-5" type="text" name="search" placeholder="search for a product" required>
                <input class="btn btn-success" type="submit" name="submit" value="search" >

            </form>
        </div>

    </section>
    <?php 
    $sql = "SELECT * FROM category_table";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if($count > 1){

        // i have data
        $rows = mysqli_fetch_assoc($res);
        //while($rows){
        //$id = $rows["category_id"];
        //$title = $rows["description"];
        //$image = $rows["image_name"];



        //}

    }
    else{
        // i dont have data 
        echo "<div class='container text-danger'><h3>YOUR TABLE IS EMPTY </h3></div>";

    }
    
    
    ?>

    <!-- our search section endss here -->

    <!-- our category section starts here -->
    <section class="category">
        <div class="container">
            <h3 class="text-center" style="background-color: antiquewhite;">category</h3>
            <!--<a href="#" >-->
            <?php 
            $sql = "SELECT * FROM category_table";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if($count > 1){
                //$rows = mysqli_fetch_assoc($res);
                while($rows = mysqli_fetch_assoc($res)){
                    $id = $rows["category_id"];
                    $title = $rows["description"];
                    $image = $rows["image_name"];
                    ?>
                    <a href="#" >
                    <div class="cart-category">
                    <!--cart1-->
                        <img src="img/cat img/<?php echo $image;?>" class="resp">
                        <p class="text-center"><?php echo $title;?></p>
                    </div>
                    </a>

                    <?php


                }

            }else {
                echo "<div class='failed text-danger'><p>NO DATA TO ADD</p></div>";
            }
            
            ?>
            
            
            
            
            
            <div class="cleanfix"></div>
        </div>
        

    </section>

    <!-- our category section ends here -->

    <!-- products section starts  here -->
    <section class="product" >
        <div class="container">
            <h3 class="text-center"style="background-color:antiquewhite;" >product</h3>
            <?php 
            $sql = "SELECT * FROM product_table";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if($count > 1){
                while($rows = mysqli_fetch_assoc($res)){
                    $id = $rows["id"];
                    $title = $rows["title"];
                    $desc = $rows["description"];
                    $price = $rows["price"];
                    $image = $rows["image_name"];
                    ?>
                     <div class="cart-product">
                        <div class="product-img">
                            <img  height="200px" src="img/product-img/<?php echo $image;?>" class="resp">
                        </div>
                        <div class="desc-product">
                            <p class="text-center" ><?php echo $title;?></p>
                            <p class="text-decoration-underline">Description :</p>
                            <h5><i><?php echo $desc;?></i></h5>
                            <p class="text-weight opacity" ><?php echo $price;?> DH</p>
                        </div>
                        <div class="button"> 
                            <a href="demand.php?id=<?php echo $id;?>"><button class="btn btn-success" >Demand</button></a>
                            
                        </div>
            
                    </div>



                    <?php


                


                }


            }else{

            }

            
            
            ?>
            
            

            
            <div class="cleanfix"></div>

        </div>
        

    </section>

    <!-- products section ends here -->

    <?php include("footer2.php") ?>