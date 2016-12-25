<html>
<body>
<?php

$eventname=$_POST["EventName"];
$description=$_POST["Description"];
$hallnum=$_POST["SelectHall"];
$date=$_POST["Date"];
//$poster=$_POST["EventPoster"];


$con = mysql_connect("localhost","root","");
if (!$con)
{
   die('Could not connect: '.mysql_error());
}

mysql_select_db("Opera", $con);

//if error in upload
if ($_FILES["EventPoster"]["error"] > 0)
  {
  echo "Error: " . $_FILES["EventPoster"]["error"] . "<br />";
  }

//replace space with _
$eventname2 = preg_replace('/\s+/', '_', $eventname);

//store uploaded file
move_uploaded_file($_FILES['EventPoster']["tmp_name"],'EventImages\\'.$eventname2.'.jpg');

$str = "INSERT INTO Event ( edate,etime, name, edescription, poster, featured, hnumber) SELECT '". substr($date,0,10)."', '". substr($date,11,8)."',  \"".$eventname."\", \"".$description."\",\"".$eventname ."\", 1, hno from hall WHERE hname=\"".$hallnum."\"";


$result =mysql_query( $str, $con);

//redirect user!
if (!$result)
{	
	echo '<script type="text/javascript">
          window.onload = function () { alert("ERROR!: EVENT COULD NOT BE STORED IN DB"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'CreateEvent.php';\",0);</script>";
}

if ($result)
{
 echo '<script type="text/javascript">
          window.onload = function () { alert("Event Added Successfully!"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'CreateEvent.php';\",2);</script>";
		exit();
}	
	

mysql_close($con);


?> 
</body>
</html>