<?php
	$uname=$_POST["Username"];
	$pass=$_POST["Password"];
	$fname=$_POST["FirstName"];
	$lname=$_POST["LastName"];
	$email=$_POST["Email"];
	$address=$_POST["Address"];
	$bdate=$_POST["BirthDate"];
	$sex=$_POST["Gender"];
	$city=$_POST["City"];

	$con=mysql_connect("localhost", "root", "");
	if (!$con) {
		die('could not connect: '.mysql_error());
	}
	mysql_select_db("opera", $con);
	$q="INSERT INTO `users` (`uname`, `pass`, `Fname`, `Lname`, `email`, `Bdate`, `Sex`, `city`, `utype`, `address`) VALUES ('".$uname."', '".$pass."', '".$fname."', '".$lname."', '".$email."', '".$bdate."', '".$sex."', '".$city."', '0', ";
	if ($address=="") 
		$q=$q."NULL";
	else
		$q=$q."'".$address."'";
	$q=$q.");";
	$r=mysql_query($q, $con);
	if($r)
	{
		session_start();
		$_SESSION['uname'] = $uname;
		$_SESSION['utype'] = 0;
		echo "user registered";
		echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
		exit();
	}
	else
	{
		echo '<script type="text/javascript">
          window.onload = function () { alert("Error registering user in database"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
		exit();
	}
?>