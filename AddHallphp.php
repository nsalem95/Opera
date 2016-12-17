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
mysql_select_db("Opera",$con);

$q="insert into hall (hname,seats,hrows)user where username=\"".$name. "\" and password=\"" .$pass."\"" ;
//echo $q;
$c=mysql_query($q,$con);
$x=mysql_fetch_row($c);
if($x)
{
	echo "welcome ".$name." your password is ".$pass;
}
else
{
	echo '<script type="text/javascript">
	window,onload=function() {alert("Enter valid username and password");}
	</script>';
	echo "<script>setTimeout(\"location.href='http://localhost:81/Examples/my/req7.php';\",0);</script>";
	exit();
}


?>


</html>