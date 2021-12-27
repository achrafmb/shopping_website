<?php include("parties/header.php");  ?>

    <!-- nav bar ends here -->
    <div class="main">
        .
    </div>

    <!-- main content starts here -->
    <div class="main">
        <div class="main-content">
            <strong class="m-5 text-success "><b><u>MANAGE ADMIN</u></b></strong>
            <strong class="mx-5 text-success"><?php 
            if (isset($_SESSION["add"])){
                echo $_SESSION["add"]; 
                unset($_SESSION["add"]);
            }
            if (isset($_SESSION["delete-success"])){
                echo $_SESSION["delete-success"];
                unset($_SESSION["delete-success"]);
            }
            
            
            ?></strong>
            
            
        </div>
        <div class="add">

            <a href="add-admin.php"><button type="button" class="btn btn-outline-primary mt-5 mx-5">ADD ADMIN</button></a>
        </div>

        <div class="table">
        <table class="table mt-5">

            <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql = "SELECT * FROM admin_table";

            $res = mysqli_query($conn, $sql);

            

            $count = mysqli_num_rows($res);
            if ($count > 0){
                // we have data 
                
                while($rows = mysqli_fetch_assoc($res)){
                    $id=$rows["id"];
                    $fullname=$rows["full_name"];
                    $username=$rows["username"];
                    $pass=$rows["password"];
                
            
                ?>

                
                <tr>
                    <th scope="row"><?php echo $id ;?></th>
                    <td><?php echo $fullname;?></td>
                    <td><?php echo $username;?></td>
                    <td><?php echo $pass;?></td>
                    <td><a href="http://localhost/dw/admin/edit_admin.php?id=<?php echo $id; ?>"><button type="submit" class="btn btn-success">Edit</button></a>
                    <a href="http://localhost/dw/admin/delete_admin.php?id=<?php echo $id;?>"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            
        

            <?php
            }

                
            }
            
            ?>
         </tbody>   
        </table>    
        </div>
    </div>

    <!-- main content ends here -->
    <!-- footer starts here -->
<?php include("parties/footer.php")?>