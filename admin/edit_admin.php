<?php include("parties/header.php") ?>
<div class="main">
        <div class="main-content mt-5">
            <strong class="m-5 mx-5"><u><b>EDIT ADMIN</b></u></strong>
            <strong class="mx-5 text-danger"></strong>

            
            
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
  



 <?php include("parties/footer.php")  ?>