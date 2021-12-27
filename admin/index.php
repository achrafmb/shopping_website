<?php include("parties/header.php")  ?>

    <!-- nav bar ends here -->
    <div class="main">
        .
    </div>

    <!-- main content starts here -->
    <div class="main">
        <div class="main-content">
            <strong class="m-5"> <b>HOME PAGE</b></strong>
            <div class="mx-5 text-success text-center mt-5 h3"><b>
            <?php if(isset($_SESSION["login-successfully"])){
                echo $_SESSION["login-successfully"];
                unset($_SESSION["login-successfully"]);
            } ?></b>
            </div>
            <b>Admin --></b>
            <div class="dash mt-5 mx-3  bg-success">
                <p>Admin</p>
                <?php 
                $sql1 = "SELECT * FROM admin_table";
                $res = mysqli_query($conn, $sql1);
                $count = mysqli_num_rows($res);

                ?>
                
                <h1><?php echo $count;?></h1>


            </div>
            <b>Category --></b>
            <div class="dash mx-3 bg-danger">
                <p>Categories</p>

                <?php 
                $sql2 = "SELECT * FROM category_table";
                $res = mysqli_query($conn, $sql2);
                $count = mysqli_num_rows($res);

                ?>
                <h1><?php echo $count;?></h1>

            </div>
            <b>Products --></b>
            <div class="dash mx-3 bg-info ">
                <p>Products</p>
                <?php
                $sql3 = "SELECT * FROM product_table";
                $res = mysqli_query($conn, $sql3);
                $count = mysqli_num_rows($res);

                ?>
                <h1><?php echo $count;?></h1>

            </div>
            <b>commands--></b>
            <div class="dash bg-warning text-center">
                <p><b></b></p>
                <?php 
                $sql4 = "SELECT SUM(price) AS p FROM demand";
                $res = mysqli_query($conn, $sql4);
                $rows = mysqli_fetch_assoc($res);
                $p = $rows["p"];

                ?>
                <h1><?php echo $p;?><b>DH</b></h1>

            </div>
            <div class="dash mx-3 bg-light">
                <img src="http://localhost/dw/img/good icon.png">
                <?php 
                $s5 = "SELECT * FROM contactme WHERE loved ='yes'";
                $res = mysqli_query($conn, $s5);
                $count = mysqli_num_rows($res);


                ?>
                <h1><?php echo $count;?></h1>

            </div>
            <div class="dash mx-3  bg-light">
            
                <img src="http://localhost/dw/img/not good icon.jpg">
                <?php
                $s6 = "SELECT * FROM contactme WHERE loved = 'no'";
                $res = mysqli_query($conn, $s6);
                $count = mysqli_num_rows($res);
                ?>
                <h1><?php echo $count;?></h1>

            </div>
            <div class="dash mx-3 bg-light">
                <img src="http://localhost/dw/img/so so iconn.png">
                <?php
                $s8 = "SELECT * FROM CONTACTME WHERE LOVED = 'so so'";
                $res = mysqli_query($conn, $s8);
                $count = mysqli_num_rows($res);

                ?>
                <h1><?php echo $count;?></h1>

            </div>
        </div>
    </div>

    <!-- main content ends here -->
    <!-- footer starts here -->
    <?php include("parties/footer.php")?>



