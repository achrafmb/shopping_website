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
input[type=text], select, textarea {
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
    <h2>Contact Me</h2>
    <p>Leave me a message:</p>
    <b class="text-success">
      <?php 
      if(isset($_SESSION["success opinion"])){
        echo $_SESSION["success opinion"];
        unset($_SESSION["success opinion"]);
      }
      
      ?>
    </b>
  </div>
  <div class="row">
    <div class="column">
      <img src="img/youropionmatter.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="" method="POST">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="fullname" placeholder="Your name..">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email..">
        <label for="city">City</label>
        <select id="city" name="city">
          <option value="oued laou">OUED LAOU</option>
          <option value="tetouan">TETOUAN</option>
          <option value="tanger">TANGER</option>
        </select>
        <label for="sex" >Sex</label>
        <select id="sex" name="sex">
          <option value="male">Male</option>
          <option value="female">Female</option>
          
        </select>
        <label for="like" >Do you like my website?</label>
        <select id="like" name="loved">
          <option value="yes">YES, I DO</option>
          <option value="so so">A LITTLE BIT</option>
          <option value="no">NO, I DON'T</option>
        </select>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" name ="submit" value="Send">
      </form>
      <?php 
      if(isset($_POST["submit"])){
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $city = $_POST["city"];
        $msg = $_POST["subject"];
        $sex = $_POST["sex"];
        $loved = $_POST["loved"];
        $sql = "INSERT INTO contactme SET fullname = '$fullname' , email = '$email', city = '$city', msg = '$msg', loved= '$loved', sex = '$sex'";
        $res = mysqli_query($conn, $sql);
        if($res == true){
          $_SESSION["success opinion"] = "Thanks i got your msg, Keep in touch";
        }else {
          $_SESSION["failed opinion"] = "Opps !!";
        }


      }
      

      
      
      
      ?>
    </div>
  </div>
</div>






<?php include("footer2.php") ?>