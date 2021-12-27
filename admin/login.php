<?php include("config/mysqli_conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="admin/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Admin</h2>
        <div class="text-center mb-5 text-danger mt-5"><strong>
            <?php if (isset($_SESSION["login-failed"])){
              echo $_SESSION["login-failed"];
              unset($_SESSION["login-failed"]);
            }
            ?></strong>
        </div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action= "" method= "POST">

            <!--<div class="text-center">
              <img src="../img/logo/logoo.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div> -->

            <div class="mb-3">
              <input type="text" class="form-control"  name = username id="Username" aria-describedby="emailHelp"
                placeholder="Username">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name = password id="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-danger px-5 mb-5 w-100">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark"><a href="http://localhost/dw/" class="text-dark fw-bold"><-- Return to the website</a>
            </div>
          </form>
          <?php 
          if (isset($_POST["submit"])){
           $username = $_POST["username"];
           $pass = $_POST["password"];

            $sql = "SELECT * FROM admin_table WHERE username='$username' AND password='$pass' " ;
            $res = mysqli_query($conn, $sql) or die(mysqli_error());
            //echo $res;
            
            $count = mysqli_num_rows($res);
            
            if($count == 1){
                  //var_dump($res);
                 // die();
                $_SESSION["login-successfully"] = "welcome admin";
                $_SESSION["check"] = $username;
               // $_SESSION["logged_id"] = $res->id;

                header("location:http://localhost/dw/admin/index.php");
            }else {
                $_SESSION["login-failed"] = "oops! try again";
                header("location:http://localhost/dw/admin/login.php");
              }
            }
            ?>
        
        </div>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


