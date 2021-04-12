<!DOCTYPE html>
<html>
<head>
	<title>Banking System
  </title>
 <?php
include "includes/links.php";
  ?>
</head>
<body>

<div class="bg_img">
   
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
            <a class="nav-link" href="aboutBank.php"><h3>about</h3></a>
            </li>
          </ul>

    </div>

   </nav>  

<br>
<br>
<br>
<br>
<br>
   <div class="container-fluid" style="padding-right: 70px;">
  <div class="btn-group-vertical" style = "width :250px; float: right;">
    <a href="details.php">
    <button type="button" class="btn btn-outline-light" style="width: 250px;"><h4>View Users</h4></button>
  </a>
    <br>
    <br>
    <br>
    <a href="transfer.php">
    <button type="button" class="btn btn-outline-light btn-lg" style="width: 250px;"><h4>Transfer</h4></button>
    </a><br>
    <br>
    <br>  
    <a href="transactions.php">
    <button type="button" class="btn btn-outline-light btn-lg" style="width: 250px;"><h4>All Transactions</h4></button>
    </a> 
  </div>
</div>

  
</div>

  </body>
</html>