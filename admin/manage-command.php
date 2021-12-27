<?php include("parties/header.php") ?>
<!-- nav bar ends here -->
<div class="main">
        .
    </div>

    <!-- main content starts here -->
    <div class="main">
        <div class="main-content">
            <strong class="m-5 text-warning "><b>MANAGE COMMANDS</b></strong>
            <strong class="text-success"><b><?php?></b></strong>
            
            
        </div>
    

        <div class="table">
        <table class="table mt-5">

            <thead>

                <tr>
                    <th scope="col" class="text-info">#</th>
                    <th scope="col" class="text-danger">Client name</th>
                    <th scope="col" class="text-danger">Client email</th>
                    
                    <th scope="col" class="text-danger">Clien tél</th>
                    <th scope="col" class="text-danger">Client address</th>
                    <th scope="col" class="text-danger">Product name</th>
                    <th scope="col" class="text-danger">quantité</th>
                    <th scope="col" class="text-danger">Price</th>
                    <th scope="col" class="text-danger">DELETE</th>
                </tr>
            </thead>
            <tbody>

           

                <?php 
                $sql = "SELECT * FROM demand";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if($count > 0){
                    //we have data
                    while($rows = mysqli_fetch_assoc($res)){
                        $id = $rows["id"];
                        $clientname = $rows["client_name"];
                        $clientemail =$rows["client_email"];
                        $clienttel = $rows["client_phone"];
                        $clientaddress = $rows["client_address"];
                        $price = $rows["price"];
                        $productname = $rows["product_name"];
                        $quantity = $rows["quantity"];

                        ?>
                        <tr>
                            <th scope="row" class="text-info"><?php echo $id;?></th>
                            <td><b><?php echo $clientname; ?></b></td>
                            <td><b><?php echo $clientemail; ?></b></td>
                            <td><b><?php echo $clienttel; ?></b></td>
                            <td><b><?php echo $clientaddress; ?></b></td>
                            <td><b><?php echo $productname;?></b></td>
                            <td><b><?php echo $quantity;?></b></td>

                            <td><b><?php echo $price; ?> DH</b></td>
                            <!--<td class="resp h-20px"><img width = 100px src="../img/cat img/<?php?>"> </td>-->
                    
                            <td>
                            <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
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