<?php include("header2.php") ?>

<?php $s = $_POST["search"];?>
    <!-- our menu section ends here -->
    

    <!-- our search section starts here -->
    <section class="product-search">
        <div class="container text-center">
            <p>Search for <?php echo $s;?></p>
            <P> 
                <?php
                if(isset( $_SESSION["No product"])){
                    echo  $_SESSION["No product"];
                    unset($_SESSION["No product"]);
                }
                ?>
            </P>
        </div>

    </section>


    <!-- our search section endss here -->

    
    <!-- products section starts  here -->
    <section class="product" >
        <div class="container">
            <h3 class="text-center"style="background-color:antiquewhite;" >product</h3>

            <?php 
            $s = $_POST["search"];

            $sql = "SELECT * FROM product_table WHERE title LIKE '%$s%' OR description LIKE '%$s%'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if ($count > 1){
            while($rows = mysqli_fetch_assoc($res)){
            $title = $rows["title"];
            $desc = $rows["description"];
            $price = $rows["price"];
            $image = $rows["image_name"];
            ?>
            <div class="cart-product">
                <div class="product-img">
                    <img  height ="200px" src="img/product-img/<?php echo $image;?>" class="resp">
                </div>
                <div class="desc-product">
                    <p class="text-center" ><?php echo $title;?></p>
                    <p class="text-decoration-underline">Description :</p>
                    <h5><i><?php echo $desc;?></i></h5>
                    <p class="text-weight opacity" ><?php echo $price;?> DH</p>
                </div>
                <div class="button"> 
                    <a href="panier.html" ><button class="btn btn-success" href="#">Demander</button></a>
                </div>
            
            </div>

            

            <?php

            }


        }else{
                $_SESSION["No product"] = "Opps, There is no product with that name";
                

            }

            ?>
            
            

            
            <div class="cleanfix"></div>

        </div>
        

    </section>

    <!-- products section ends here -->

<?php include("footer2.php") ?>