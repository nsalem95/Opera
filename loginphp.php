<?php
	$uname=$_POST["username"];
	$pass=$_POST["password"];

	$con=mysql_connect("localhost", "root", "");
	if (!$con) {
		die('could not connect: '.mysql_error());
	}
	mysql_select_db("opera", $con);
	$q="SELECT * FROM users WHERE uname=\"".$uname."\" and pass=\"".$pass."\"";
	$r=mysql_query($q, $con);
	$x=mysql_fetch_array($r);
	if($x)
	{
		session_start();
		$_SESSION['uname'] = $uname;
		$_SESSION['utype'] = $x['utype'];
		echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
		exit();
	}
	else

	{
		echo '<script type="text/javascript">
          window.onload = function () { alert("Enter valid username and password"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
		exit();
	}
?>