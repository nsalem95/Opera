<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head >
  <style>

	
	</style>
    <?php include("head.php") ?>

    <title>Event</title>

    
  </head>
  <body >

	
    <?php include("navbar.php"); ?>
	
  	  <?php

$name=$_GET["id"];
//echo $name;
//$name="Omar khayrat Piano";

$con = mysql_connect("localhost","root","");
if (!$con)
{
   die('Could not connect: '.mysql_error());
}

mysql_select_db("Opera", $con);


$str = "SELECT* FROM Event WHERE name = '".$name."'";


$result =mysql_query( $str, $con);
  $row = mysql_fetch_row($result);

$str = "SELECT hname FROM hall WHERE hno = '".$row[5]."'";


$result =mysql_query( $str, $con);

   
   $hallname = mysql_fetch_row($result);

   
 
   	 $pic = preg_replace('/\s+/', '_', $row[4]);

 
echo('<img src="EventImages\\'.$pic.'.jpg'.'"class="rounded " style="width:100%;height:400px;"  >');
echo(' <p style="font-size:48px; padding-left:1%""><strong>'.$row[2].'</strong> <span style="font-size:20px;padding-right:1%;float:right">'.$row[1].' at '.$row[6].'<br>'.$hallname[0].'</span></p>');

echo(' <p style="font-size:30px; padding-left:3%"">'.$row[3].'</strong></p>');

?>

  <?php
  if(isset($_SESSION['uname']))
  {
  echo '<a style="margin-left: 20px;" class="btn btn-primary" href="Reserve.php?Ename='.$name.'" role="button">Reserve Now</a>';
  if($_SESSION['utype'] > 0)
  {
  echo '<a style="margin-left: 20px;" class="btn btn-primary" href="EditEvent.php?ename='.$name.'" role="button">Edit Event</a>';
  echo '<a OnClick="javascript: return confirm(\'Please confirm deletion\');" style="margin-left: 20px;" class="btn btn-primary" href="CancelEvent.php?ename='.$name.'" role="button">Cancel Event</a>';
}
}
  ?>
  
	<!-- FOOTER -->
      <?php include("footer.php"); ?>
  </body>
</html>
