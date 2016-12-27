<?php
session_start();
$name=$_POST['EventName'];
$seats=$_POST["NoSeats"];
$arr=array();


$con=mysql_connect("localhost", "root", "");
	if (!$con) {
		die('could not connect: '.mysql_error());
	}
	mysql_select_db("opera", $con);
	$q="SELECT MAX(rid) AS rid FROM reservation;";
	$r=mysql_query($q, $con);
	$m=mysql_fetch_array($r);
	$max=$m['rid']+1;
	$q="insert into reservation(`rid`, `eno`, `cust`) values(".$max.", ".$name.", '".$_SESSION['uname']."')";
	$r=mysql_query($q, $con);
	if($r)
	{
		for ($i=1; $i < $seats+1; $i++) 
	{ 
		if (isset($_POST['checkbox'.$i])) 
		{
			$q="insert into seat_reserved(`rid`, `sno`, `hno`) Values(".$max.", ".$i.",".$_POST['hno'].")";
			$r=mysql_query($q, $con);
		}
	}
			echo '<script type="text/javascript">
          	window.onload = function () { alert("Seats Reserved. Your ReservationID is '.$max.'"); }
				</script>';
			echo "<script>setTimeout(\"location.href = 'Calendar.php';\",0);</script>";
			exit();
	}
	else
	{
		echo '<script type="text/javascript">
          window.onload = function () { alert("Error Reserving seat. Please try again later"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'Calendar.php';\",0);</script>";
		exit();
	}
	
	
	  
?>