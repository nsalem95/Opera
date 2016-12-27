<?php
	$con=mysql_connect("localhost", "root", "");
	if (!$con) {
		die('could not connect: '.mysql_error());
	}
	mysql_select_db("opera", $con);
	$q='DELETE FROM `reservation` WHERE `reservation`.`rid` = "'.$_GET['rid'].'"';
	$r=mysql_query($q, $con);
	if($r)
	{
		echo '<script type="text/javascript">
          window.onload = function () { alert("Reservation cancelled"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'Reservations.php';\",0);</script>";
		exit();
	}
	else
	{
		echo '<script type="text/javascript">
          window.onload = function () { alert("Error canceling reservation"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
		exit();
	}
 ?>