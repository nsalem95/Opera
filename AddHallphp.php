<html>
<head>
</head>

<?php 

$HallName =$_POST["HallName"];
$NumberOfSeats=$_POST["NumberOfSeats"];
$SeatsPerRow=$_POST["SeatsPerRow"];


$con=mysql_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysql_error());
}
mysql_select_db("opera",$con);

$q="insert into `hall` (`hname`,`seats`,`hrows`) values('".$HallName."',".$NumberOfSeats.",".$SeatsPerRow.")" ;

echo $q;

echo '<script type="text/javascript">
window.onload=function() {alert("Successfuly inserted")}
</script>';
echo"<script>setTimeout(\"location.href = 'AddHall.php';\",0);</script>";

$c=mysql_query($q,$con);



?>


</html>