<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>
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

<script>
     function random_function()
            {
                var a=document.getElementById("input").value;
        if(a==="Aniket"){
         var arr=["Prajval","Aaryan","Rohit","Shrsuhti","Saakshi","Sayali","Derek","Sahil","Kiara"];
        }
        else if(a==="Prajval"){
          var arr=["Aniket","Aaryan","Rohit","Shrsuhti","Saakshi","Sayali","Derek","Sahil","Kiara"];
        }
        else if(a==="Aaryan"){
          var arr=["Aniket","Prajval","Rohit","Shrsuhti","Saakshi","Sayali","Derek","Sahil","Kiara"];
        }
        else if(a==="Rohit"){
          var arr=["Aniket","Prajval","Aaryan","Shrsuhti","Saakshi","Sayali","Derek","Sahil","Kiara"];
         }
         else if(a==="Shrsuhti"){
          var arr=["Aniket","Prajval","Aaryan","Rohit","Saakshi","Sayali","Derek","Sahil","Kiara"];
         }
         else if(a==="Saakshi"){
          var arr=["Aniket","Prajval","Aaryan","Rohit","Shrsuhti","Sayali","Derek","Sahil","Kiara"];
         }
         else if(a==="Sayali"){
          var arr=["Aniket","Prajval","Aaryan","Rohit","Shrsuhti","Saakshi","Derek","Sahil","Kiara"];
         }
         else if(a==="Derek"){
          var arr=["Aniket","Prajval","Aaryan","Rohit","Shrsuhti","Saakshi","Sayali","Sahil","Kiara"];
         }
         else if(a==="Sahil"){
          var arr=["Aniket","Prajval","Aaryan","Rohit","Shrsuhti","Saakshi","Sayali","Derek","Kiara"];
         }
         else if(a==="Kiara"){
          var arr=["Aniket","Prajval","Aaryan","Rohit","Shrsuhti","Saakshi","Sayali","Derek","Sahil"];
         }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
  </script> 

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
     <center>
     <h1 class="text-white">Transfer Amount</h1>

     <center><hr style="width:500px ;height:2px;border-width:0;color:gray;background-color:gray"></center>
  <div class="center">
  <form action="updatecredit.php" method="post">
    <label for="sender" align="left" class="text-white" style="padding-right: 30px;" >Senders Name: &nbsp;</label>
    <select id="input" name="sender"style="font-size: 12pt; height: 30px; width:290px;" align="middle" onchange="random_function()">
      <option  selected>Select Name</option>
      <option value="Aniket">Aniket</option>
      <option value="Prajval">Prajval</option>
      <option value="Aaryan">Aaryan</option>
      <option value="Rohit">Rohit</option>
      <option value="Shrushti">Shrushti</option>
      <option value="Saakshi">Saakshi</option>
      <option value="Sayali">Sayali</option>
      <option value="Derek">Derek</option>
      <option value="Sahil">Sahil</option>
      <option value="Kiara">Kiara</option>
    </select><br><br>
    <label for="receiver" align="left" class="text-white" style="padding-right: 30px;" >Receiver Name:&nbsp;</label>
    <select id="output" name="receiver"style="font-size: 12pt; height: 30px; width:290px;" align="middle" onchange="random_function1()" >
        </select><br><br>
    <label for="transfer" align="left" class="text-white" style="padding-right: 20px;" >Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
    <input type="number"  name="transfer" style="font-size: 12pt; height: 30px; width:285px;" align="middle" required>
    <center><hr style="width:500px ;height:2px;border-width:0;color:gray;background-color:gray"></center>
    <div class="button1" style="padding-left:130px; ">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:200px;">
    </div>
  </form> 
  </div>

     </center>
   </div>

  </body>
</html>