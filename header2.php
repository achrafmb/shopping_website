<?php include("admin/config/mysqli_conn.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- this is an tag to make our website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Accueil</title>
</head>
<body>
    <!-- our menu section starts here -->
    <section class="menuu" style="background-color: antiquewhite;">
           <!-- navbar starts from here-->
    <div class="navbar ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-expand-lg m-auto ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><i class="fa fa-heart" ></i> shopping</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="categories.php">Category</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="product.php">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contactez-nous.php">Contact me</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="a_propos_de.php">About me</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Accounts
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="signin.php">sign in</a></li>
                      <li><a class="dropdown-item" href="signup.php">sign up</a></li>
                      
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="panier.php"><i class="fa fa-shopping-cart" ></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="admin/login.php"><i class="fa fa-sign-in"></i></a>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>
        

    </div>
    <!-- navbar ends here -->

    </section>


    <!-- our menu section ends here -->


