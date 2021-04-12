<!DOCTYPE html>
<html>
<head>
  <title>Banking System
  </title>
 <?php
include "includes/links.php";
  ?>

  <style>
    #bg_img2 {
  background-image: url('img/12.jpg');
  background-size: 100% 100%;
  background-attachment: fixed;
  width: 100%;
  height: 722px;
}

table, td, th {
  border: 1px solid white;
  text-align: center;
  color: white;
  padding-top: 10px;
  padding-bottom: 10px;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>



</head>
<body>

<div id="bg_img2">
   
   <nav class="navbar navbar-expand-md navbar-dark">

    <div class="container-fluid" style="padding-left: 70px; padding-right: 70px; padding-top: 30px;">
      
        <a class="navbar-brand" href="#"><h3>Basic Banking System</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active" style="padding-right: 40px;";>
            <a class="nav-link" href="index.php"><h3>Home</h3> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active" style="padding-right: 40px;">
            <a class="nav-link" href="about.php"><h3>about</h3></a>
            </li>
          </ul>

    </div>

   </nav>  

<br>

<br>
    
   <div class="container">

      <div class="jumbotron">
    <h1>About Banking System</h1>   
    <br>   
    <h4>Basic Banking System is a online banking system designed for basic & simple tasks like:-</h4>
    <br>
      <ul class="list-group">
    <li class="list-group-item"><h5>Transfer of money between different users.</h5></li>
    <li class="list-group-item"><h5>All the Transactions done by the users.</h5></li>
    <li class="list-group-item"><h5>Mini Statement of the Users.</h5></li>
    <li class="list-group-item"><h5>User Account Information.</h5></li>
  </ul>
  </div>
     
   </div>

  </body>
</html>
