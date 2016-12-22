<html>
<head>
</head>

<?php 

$HallName =$_POST["HallName"];
$HallNameOld =$_POST["HallNameOld"];
$NumberOfSeats=$_POST["NumberOfSeats"];
$SeatsPerRow=$_POST["SeatsPerRow"];


$con=mysql_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysql_error());
}
mysql_select_db("Opera",$con);

$q="UPDATE `hall` set `hname` = '".$HallName."' , `seats`  =  ".$NumberOfSeats." ,  `hrows` = ".$SeatsPerRow." WHERE `hall`.`hname` ='".$HallNameOld."'" ;

//echo $q;

echo '<script type="text/javascript">
window.onload=function() {alert("Successfuly Updated")}
</script>';
echo"<script>setTimeout(\"location.href = 'EditHall.php';\",0);</script>";

$c=mysql_query($q,$con);