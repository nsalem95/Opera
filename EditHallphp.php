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
$q="delete from `seat` where  hnumber =(select hno from hall where hname='".$HallNameOld."')";
$c=mysql_query($q,$con);



$q="UPDATE `hall` set `hname` = '".$HallName."' , `seats`  =  ".$NumberOfSeats." ,  `hrows` = ".$SeatsPerRow." WHERE `hall`.`hname` ='".$HallNameOld."'" ;

$c=mysql_query($q,$con);

for($i=1;$i<=$NumberOfSeats;$i++)
{
	$q="insert into `seat` (`sno`,`hnumber`) select ".$i.", hno from hall where hname='".$HallName."'";
	$c=mysql_query($q,$con);

}


//echo $q;

echo '<script type="text/javascript">
window.onload=function() {alert("Successfuly Updated")}
</script>';
echo"<script>setTimeout(\"location.href = 'EditHall.php';\",0);</script>";

