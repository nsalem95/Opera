<?php
	$con=mysql_connect("localhost", "root", "");
	if (!$con) {
		die('could not connect: '.mysql_error());
	}
	mysql_select_db("opera", $con);
	$q='DELETE FROM `event` WHERE `event`.`name` = "'.$_GET['ename'].'"';
	$r=mysql_query($q, $con);
	if($r)
	{
		echo '<script type="text/javascript">
          window.onload = function () { alert("Event Deleted"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'Calendar.php';\",0);</script>";
		exit();
	}
	else
	{
		echo '<script type="text/javascript">
          window.onload = function () { alert("Error Deleting event"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'Calendar.php';\",0);</script>";
		exit();
	}
 ?>