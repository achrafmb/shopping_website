<?php include("header2.php") ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 100%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: rgb(0, 255, 0, 0.5);
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: green;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color:  rgb(0, 255, 0, 0.8) ;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Me</h1>
  <p><b>My name is Achraf Mabsout, 22 years old, I live in Oued Laou, I m a student , I graduate last year at university Abd Maalik Saadi, my major was Physics, </b></p>
  
</div>

<h2 style="text-align:center">MY PHOTO</h2>
<div class="row">
  <div class="column">
    <div class="card text-center">
      <img  class="rounded float-left mx-auto" width="200px" src="img/my photo/achraf.jpg" alt="achraf" >
      <div class="container">
        <h2>Achraf mabsout</h2>
        <p class="title">Conputer science lover</p>
        <h4 class="text-danger">What i did :</h4>
        <b class="text-danger"> In programing :</b>
        <p class="text-success" >A Simple calculator.</p>
        <p class="text-success" >A Simple game (tic tac ).</p>
        <b class="text-danger"> In Networking (Using Python) :</b>
        <p class="text-success" >A made a program to intercept communication bet net devices.</p>
        <p class="text-success" >A made a trojon to steal data in computer.</p>
        <p class="text-success" >A made program to make protocols as DHCP , ARP, ...</p>
        <p><i class="fa fa-envelope-open-text"></i> mabsoutachraf@gmail.com</p>
        <p><a href="contactez-nous.php" ><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

 
  
 
</div>

</body>
</html>


<?php include("footer2.php") ?>