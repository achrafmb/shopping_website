<?php include("header2.php")?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  /*background-color: black;*/
  background-image : url("") ;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text]/*, input[type=password]*/ {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
    <?php 
    if(isset($_GET["id"])){

    
    $id = $_GET["id"];
    $sql = "SELECT * FROM product_table WHERE id =$id";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if($count == 1){
        $rows = mysqli_fetch_assoc($res);
        $title = $rows["title"];
        $price = $rows["price"];
        $image = $rows["image_name"];
        //echo $price;
    }
    }

    ?>

<!--<form action="demand.php" method="POST"> -->
  <div class="container">
    <h1 class="text-center text-info" >Command right now</h1>
    <b><p class="text-success text-center" ><?php
    if(isset($_SESSION["success msg"])){
      echo $_SESSION["success msg"] ;
      unset($_SESSION["success msg"]);
      //destroy($_SESSION["success msg"]);
    }
    ?></p></b>
    <div class="">
    <img style="margin-left:36%" class="border rounded" height="200px" src="http://localhost/dw/img/product-img/<?php echo $image;?>">
    </div>
    <p class="text-center"><b><?php echo $title;?></b></p>
    <p class="text-center" ><b><?php echo $price?> DH</b></p>
    <form action="" method="POST" >
    <div class="input-group input-group-sm mb-3 w-50%">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Quality</span>
        </div>
        <input type="number" name="quantity" class="form-control w-50%" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
    </div>
    <hr>

    <label for="fullname"><b>Full name</b></label>
    <input type="text" placeholder="Enter your name" name="fullname" id="fullname" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    

    <label for="tel"><b>Tél</b></label>
    <input type="text" placeholder="Enter your phone" name="tel" id="tel" required>
    <br>
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your Address..." name="address" id="address" required>
    
    <hr>
    
    

    <button type="submit" name="submit" class="registerbtn">Demand Now</button>
  </div>
  
  
    
</form>
<?php 
if(isset($_POST["submit"])){
  $q = $_POST["quantity"];
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $address = $_POST["address"];
  //echo $_GET["title"];
  //echo $address;
  $sq = "INSERT INTO demand SET client_name = '$fullname', quantity = '$q', client_phone = $tel, client_email = '$email',
  client_address = '$address', product_name = '$title', price='$price'";
  $res = mysqli_query($conn, $sq);
  if($res == true){
    $_SESSION["success msg"] = "OK , we got your msg ,Soon we will rsend you back a msg on your email ";

  }else{
    $_SESSION["opps msg"] = "Opps , error Try again";

  }
  

} 
?>

</body>
</html>


<?php include ("footer2.php") ?>