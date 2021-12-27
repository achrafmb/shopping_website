<?php include("header2.php") ?>

  <!-- products section starts  here -->
  <section class="product" >
    <div class="container">
        <h3 class="text-center"style="background-color:antiquewhite;" >product</h3>

        <?php
        $sql = "SELECT * FROM product_table";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count > 1){
            // i have data 
            while($rows = mysqli_fetch_assoc($res)){
                $id = $rows["id"];
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
                            <a href="demand.php?id=<?php echo $id;?>" ><button class="btn btn-success" >Demander</button></a>
                         </div>
        
                    </div>


                <?php 

            }
        }else{
            //i dont have data 

        }
        
        
        ?>
       
        

        
        <div class="cleanfix"></div>

    </div>
    

</section>

<?php include("footer2.php") ?>