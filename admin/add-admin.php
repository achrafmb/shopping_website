 <?php include("parties/header.php"); ?>

 <!-- nav bar ends here -->

        
    

    <!-- main content starts here -->
    <div class="main">
        <div class="main-content mt-5">
            <strong class="m-5 mx-5"><u><b>ADD ADMIN</b></u></strong>
            <strong class="mx-5 text-danger"><?php 
            if (isset($_SESSION["fail"])){
                echo $_SESSION["fail"]; 
                unset($_SESSION["fail"]);
            }
            
            ?></strong>

            
            
        </div>
        <div class="form mt-5 mx-5">
        <form action="" method="post" >
            <div class="form-group mx-5">
                <label for="usr"><b><h4>Full name:</h4></b></label>
                <input type="text" class="form-control" id="usr" name="fullname" placeholder="Enter your full name ...">
            </div>
            <div class="form-group mx-5">
                <label for="user"><b><h4>Username:</h4></b></label>
                <input type="text" class="form-control" id="user" name="username" placeholder="Enter your Username .." >
            </div>
            <div class="form-group mx-5">
                <label for="pwd"><b><h4>Password:</h4></b></label>
                <input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter password..">
            </div>
            <input type="submit" class="btn btn-primary mt-2 mx-5" name="submit" value="ADD ADMIN">
            
            
        </form>
            
        </div>
    </div>
  



 


 <?php 
    // process the value from the form, and save it database
    // check whether the submit button is clicked or not 

    if(isset($_POST["submit"])){
        
        // get date from form
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $pass = $_POST["pass"];
        // sql query to save the data in database
        $sql = "INSERT INTO admin_table SET 
        full_name = '$fullname',
        username = '$username',
        password ='$pass'
        ";

        $res = mysqli_query($conn, $sql) or die(mysqli_error());
        if ($res==TRUE){
            //data insert
            $_SESSION["add"] = "Admin added successfully";
            header("location:http://localhost/dw/admin/manage-admin.php");



        }else {
            //data failed to insert
            $_SESSION["fail"] = "Failed to add admin opp!!";
            header("location:http://localhost/dw/admin/add-admin.php");


        }

    
        
    }  
    
    
    
    
    
    
    ?>
    <?php include("parties/footer.php"); ?>