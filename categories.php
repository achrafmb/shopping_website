<?php include("header2.php") ?>

    

    <!-- category begins here-->
    <section class="category">
        <div class="container">
            <h3 class="text-center" style="background-color: antiquewhite;">category</h3>
            <?php 
            $sql = "SELECT * FROM category_table";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if ($count > 1){
                while($rows = mysqli_fetch_assoc($res)){
                    $desc = $rows["description"];
                    $image = $rows["image_name"];?>
                    <a href="#" >
                    <div class="cart-category">
                    <!--cart1-->
                    <img src="img/cat img/<?php echo $image;?>" class="resp">
                    <p class="text-center"><?php echo $desc;?></p>
                    </div>
                    </a>



                    <?php

                }

            }else{
                echo "<div class='failed text-danger'><p>NO DATA TO ADD</p></div>";

            }
            
            ?>
            
            
            
            
            
            
            
            <div class="cleanfix"></div>
        </div>
        

    </section>

    <!-- category ends here-->

    <?php include("footer2.php") ?>