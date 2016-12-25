<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>Add Hall</title>
     <style>
  body {
    background-image: url("images/operared.jpg");
     background-repeat: no-repeat ;
   background-size: 100% 100%;
  }
  
  </style>

  </head> 
  
 <body style="background-color:black">
 
   <?php include("navbar.php"); ?>
   <br>
  
  <div id="body">
<form action="AddHallphp.php" method="post" style="border: 2px solid white;border-radius: 8px;padding-top: 1%; padding-left:1% ;padding-right:1% ;padding-bottom:2%;width:460px; margin-right:auto; margin-left:auto; ;background-color:#FFFFFF;background-size: 100%">
  <div class="form-group">
    <label for="exampleinputHallName">Hall Name</label>
    <input  type="text" class="form-control" style="width:70%" required id="exampleinputHallName" name="HallName" placeholder="Hall Name">
  </div>
  <div class="form-group">
    <label for="exmaplenumberofseats">Number Of Seats</label>
    <input type="number" class="form-control" style="width:70%;"  required id="exmaplenumberofseats" name="NumberOfSeats" placeholder="400">
  </div>	
  <div class="form-group">   
   <label for="exmaplenumberofseatsperrow">Setas Per Row</label>
    <input type="number" class="form-control" style="width:70%;"  required id="exmaplenumberofseatsperro" name="SeatsPerRow" placeholder="40">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  
 
</form>
</div>

</br>
</br>
</br>
</br>
</br>
	 
	  
    <?php include("footer.php"); ?>
  </body>

</html>