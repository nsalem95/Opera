<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php include("head.php"); ?>
    <title>Edit Hall</title>
	<style>
  body {
    background-image: url("images/operared.jpg");
     background-repeat: no-repeat ;
   background-size: 100% 100%;
  }
  
  </style>

	<script type="text/javascript">
	function show()
	{
		document.all.style.display='block';
	}
	
	function hide()
	{
		document.all.style.display='none';
	}	
	</script>

  </head>
  
  
  
  
  
  
 <body style="background-color:black" >
 
 <?php include("navbar.php");  ?>
  <br/>
  
  <div id="body">
  
  <form action=#  method="post" style="border: 2px solid white;border-radius: 8px;padding-top: 1%; padding-left:1% ;padding-right:1% ;padding-bottom:2%;width:460px; margin-right:auto; margin-left:auto; ;background-color:#FFFFFF;background-size: 100%">
  <div class="form-group">
    <label for="exampleinputHallName">Select Hall name that you want to edit</label>
    <select name="HallNameSelected" class="form-control" style="width:70%" >
<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("Opera",$con);
$sql = mysql_query("SELECT hname from hall",$con);
while ($row = mysql_fetch_array($sql)){
echo "<option value=\"". $row['hname'] ."\">" . $row['hname'] . "</option>";
}

?>
</select>
  </div>
  
  <button  class="btn btn-primary">Select</button>
  
 
</form>

</br>
  
  <div  >
<form  name="all" action="EditHallphp.php" method="post" style="border: 2px solid white;border-radius: 8px;padding-top: 1%; padding-left:1% ;padding-right:1% ;padding-bottom:2%;width:460px; margin-right:auto; margin-left:auto; ;background-color:#FFFFFF;background-size: 100%">
  <div class="form-group">
    <label for="exampleinputHallName">Hall Name</label>
    <input  type="text" class="form-control" style="width:70%" id="exampleinputHallName" name="HallName" value="<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("Opera",$con);
if(isset($_POST['HallNameSelected']))
{
$sql = mysql_query("SELECT hname from hall where hname= '".$_POST['HallNameSelected']."'",$con);
$row = mysql_fetch_array($sql);
if($row)
{
echo $row['hname'];
}
else
{
	echo " ";
}
}
else
{
	echo "";
}


 ?>

" >
<input type="text" style="display:none" name="HallNameOld" value="<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("opera",$con);
if(isset($_POST['HallNameSelected']))
{
$sql = mysql_query("SELECT hname from hall where hname= '".$_POST['HallNameSelected']."'",$con);
$row = mysql_fetch_array($sql);
if($row)
{
echo $row['hname'];
}
else
{
	echo " ";
}
}
else
{
	echo "";
}


 ?>

">


  </div>
  <div class="form-group">
    <label for="exmaplenumberofseats">Number Of Seats</label>
    <input type="number" class="form-control" style="width:70%;" name="NumberOfSeats" 
	id="exmaplenumberofseats" value= <?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("Opera",$con);
if(isset($_POST['HallNameSelected']))
{
$sql = mysql_query("SELECT seats from hall where hname= '".$_POST['HallNameSelected']."'",$con);
$row = mysql_fetch_array($sql);
if($row)
{
echo $row['seats'];
}
else
{
	echo " query";
}
}
else
{
	echo "";
}


 ?>
 >
  </div>	
  <div class="form-group">   
   <label for="exmaplenumberofseatsperrow">Setas Per Row</label>
    <input type="number" class="form-control" style="width:70%;" name="SeatsPerRow" 
	id="exmaplenumberofseatsperro" value= <?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("Opera",$con);
if(isset($_POST['HallNameSelected']))
{
$sql = mysql_query("SELECT hrows from hall where hname= '".$_POST['HallNameSelected']."'",$con);
$row = mysql_fetch_array($sql);
if($row)
{
echo $row['hrows'];
}
else
{
	echo " ";
}
}
else
{
	echo "";
}


 ?>  >
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
  </div>
 
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