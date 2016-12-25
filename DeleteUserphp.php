<html>
<head>
</head>

<?php 

$username =$_POST["user"];


$con=mysql_connect("localhost","root","");

if(!$con)
{
	die('could not connect: '.mysql_error());
}
mysql_select_db("Opera",$con);

$q="Delete From `users` WHERE `users`.`uname` ='".$username."'" ;

//echo $q;

echo '<script type="text/javascript">
window.onload=function() {alert("Successfuly Updated")}
</script>';
echo"<script>setTimeout(\"location.href = 'DeleteUser.php';\",0);</script>";

$c=mysql_query($q,$con);