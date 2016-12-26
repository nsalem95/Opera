<html>
<body>
<?php

$eventname=$_POST["EventName"];
$description=$_POST["Description"];
$hallnum=$_POST["SelectHall"];
$date=$_POST["Date"];
$old=$_POST["Old"];
//$poster=$_POST["EventPoster"];


$con = mysql_connect("localhost","root","");
if (!$con)
{
   die('Could not connect: '.mysql_error());
}

mysql_select_db("Opera", $con);



//replace space with _
$eventname2 = preg_replace('/\s+/', '_', $eventname);

$str = "SELECT hno from hall WHERE hname= '".$hallnum."'";
 
//echo $str;
$result =mysql_query( $str, $con); //get hall number
$hno = mysql_fetch_array($result);


//if file is upload
if (  is_uploaded_file($_FILES["EventPoster"]["tmp_name"]) )
  {
 // echo "Error: " . $_FILES["EventPoster"]["error"] . "<br />";
 
	//store uploaded file
	move_uploaded_file($_FILES['EventPoster']["tmp_name"],'EventImages\\'.$eventname2.'.jpg');

 $str = "UPDATE Event SET edate='".substr($date,0,10)."', etime= '".substr($date,11,8)."', name= '".$eventname."', edescription= '".$description."', poster= '".$eventname2."', featured= 'NULL', hnumber = ".$hno[0]." where name ='".$old."'";
 
 //( edate,etime, name, edescription, poster, featured, hnumber) SELECT '". substr($date,0,10)."', '". substr($date,11,8)."',  \"".$eventname."\", \"".$description."\",\"".$eventname ."\", 1, hno from hall WHERE hname=\"".$hallnum."\"";


  }
else	{ 
$str = "UPDATE Event SET edate='".substr($date,0,10)."', etime= '".substr($date,11,8)."', name= '".$eventname."', edescription= '".$description."',featured= 'NULL', hnumber = ".$hno[0]." where name ='".$old."'";
  }


//echo $str;
$result =mysql_query( $str, $con);

//redirect user!
if (!$result)
{	
	echo '<script type="text/javascript">
          window.onload = function () { alert("ERROR!: EVENT COULD NOT BE UPDATED"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'CreateEvent.php';\",0);</script>";
}

if ($result)
{
 echo '<script type="text/javascript">
          window.onload = function () { alert("Event UPDATED Successfully!"); }
			</script>';
		echo "<script>setTimeout(\"location.href = 'Calendar.php';\",2);</script>";
		exit();
}	
	

mysql_close($con);


?> 
</body>
</html>