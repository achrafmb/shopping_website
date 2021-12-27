<?php include("parties/header.php") ?>
<!-- nav bar ends here -->
<div class="main">
        .
    </div>

    <!-- main content starts here -->
    <div class="main">
        <div class="main-content">
            <strong class="m-5"><b>SEE COMMENTS</b></strong>
            <strong class="text-success"><b><?php?></b></strong>
            
            
        </div>
    

        <div class="table">
        <table class="table mt-5">

            <thead>

                <tr>
                    <th scope="col" class="text-info">#</th>
                    <th scope="col" class="text-danger">Name</th>
                    <th scope="col" class="text-danger">Email</th>
                    
                    <th scope="col" class="text-danger">City</th>
                    <th scope="col" class="text-danger">Sex</th>
                    <th scope="col" class="text-danger">Do you like my website?</th>
                    
                    <th scope="col" class="text-danger">Subject</th>
                    
                </tr>
            </thead>
            <tbody>

           

                <?php 
                $sql = "SELECT * FROM contactme";
                $res = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($res);
                if($count > 0){
                    //we have data
                    while($rows = mysqli_fetch_assoc($res)){
                        $id = $rows["id"];
                        $name = $rows["fullname"];
                        $email = $rows["email"];
                        $city = $rows["city"];
                        $msg = $rows["msg"];
                        $sex = $rows["sex"];
                        $loved = $rows["loved"];

                        ?>
                        <tr>
                            <th scope="row" class="text-info"><?php echo $id;?></th>
                            <td><b><?php echo $name;?></b></td>
                            <td><b><?php echo $email;?></b></td>
                            <td><b><?php echo $city;?></b></td>
                            <td><b><?php echo $sex;?></b></td>
                            <td class="text-center"><b><?php 
                            if($loved == 'yes'){
                                ?>
                                <img width="50px" src="http://localhost/dw/img/good icon.png" >
                                <?php
                            }elseif($loved == 'no') {
                                ?>
                                <img width="50px" src="http://localhost/dw/img/not good icon.jpg" >
                                <?php
                            }else {
                                ?>
                                <img width="50px" src="http://localhost/dw/img/so so iconn.png" >
                                <?php
                            }
                            
                            ?></b></td>
                            <td><b><?php echo $msg;?></b></td>

                            
                            <!--<td class="resp h-20px"><img width = 100px src="../img/cat img/<?php?>"> </td>-->
                    
                            
                        </tr>

                        <?php
                    }
                }
                ?>                
                
            
        

           
            </tbody>   
        </table>    
    </div>

<?php include("parties/footer.php") ?>