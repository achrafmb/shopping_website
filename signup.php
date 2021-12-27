<?php include("header2.php") ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text],input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
 /* background-color: #f2f2f2;*/
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>



<div class="container">
  <div style="text-align:center">
    <h2>Enregister</h2>
    <p><?php 
    if (isset($_SESSION["register successfully"])){
        echo $_SESSION["register successfully"];
        unset($_SESSION["register successfully"]);
    }
    ?></p>
    <b class="text-success"></b>
  </div>
  <div class="row">
    <!--<div class="column">
      <img src="img/youropionmatter.jpg" style="width:100%">
    </div> -->
    <div class="column">
      <form action="" method="POST">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="fullname" placeholder="Your name..">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email..">
        <label for="tel">Tel</label>
        <input type="text" id="tel" name="tel" placeholder="Tel..">
        <label for="pass">Password </label>
        <input type="password" id="pass" name="pass" placeholder="Password..">
        <input type="submit" name ="submit" value="Enregister">
        <?php 
        if(isset($_POST["submit"])){
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $tel = $_POST["tel"];
            $pass = $_POST["pass"];
            $sql = "INSERT INTO user_table SET full_name = '$fullname', user_email = '$email', user_tel = '$tel', password = '$pass'";
            $res = mysqli_query($conn, $sql);
            if ($res = true){
                $_SESSION["register successfully"] = "Register successfully";
                //header("location:http://localhost/dw/signup.php");
            }else{
                $_SESSION["failed Register "] = "Failed to register";
                header("location:http://localhost/dw/signup.php");
            }
        }
        ?>

    </div>
  </div>
</div>






<?php include("footer2.php") ?>