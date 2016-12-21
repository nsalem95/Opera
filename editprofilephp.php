<?php
	$uname=$_POST["UserName"];
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
	$q="UPDATE `users` SET `Fname`='".$fname."', `Lname`='".$lname."', `email`='".$email."', `Bdate`='".$bdate."', `Sex`='".$sex."', `city`='".$city."', `address`=";
	if ($address=="") 
		$q=$q."NULL";
	else
		$q=$q."'".$address."'";
	$q=$q." WHERE `users`.`uname`='".$uname."'";
	$r=mysql_query($q, $con);
	if($r)
	{
		echo '<script type="text/javascript">
          window.onload = function () { alert("User data updated successfully"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
		exit();
	}
	else
	{
		echo '<script type="text/javascript">
          window.onload = function () { alert("Error updating user data. Please try again later"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
		exit();
	}
?>

