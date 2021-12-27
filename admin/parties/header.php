<?php include ('config/mysqli_conn.php');?>
<?php 
if(!isset($_SESSION["check"])){
  header("location:http://localhost/dw/admin/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <!-- nav bar starts here -->
    <div class="manu">
        <nav class="navbar navbar-expand-lg navbar-blue mx-5 bg-light">
            <div class="container-fluid mx-5">
              <a class="navbar-brand mx-5" href="index.php"><?php echo $_SESSION["check"] ?></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="manage-admin.php">Admin-manage</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="manage-category.php">Category</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="manage-product.php" >Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="manage-command.php">Commands</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="comment.php"><img width="32px" src="http://localhost/dw/img/comm icon.jpg"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/dw/admin/deconnexion.php">log out</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>


    </div>