<!DOCTYPE html>
<html lang="en">
  <head >

    <?php include("head.php"); ?>
    <title>Calendar</title>
    
  </head>
  
  
  <body >

	
    <?php include("navbar.php"); ?>
	



	
	
	<table class="table">
  <thead class="thead-inverse">
    
  </thead>
  
  <tbody>
  	  <?php

//$poster=$_POST["EventPoster"];


$con = mysql_connect("localhost","root","");
if (!$con)
{
   die('Could not connect: '.mysql_error());
}

mysql_select_db("Opera", $con);


$str = "SELECT* FROM Event";


$result =mysql_query( $str, $con);

  while($row = mysql_fetch_row($result) )
  {  
  
//echo $row[2];
  $pic = preg_replace('/\s+/', '_', $row[4]);

   echo("<tr>");
//     echo('<td >th</td>');
	 echo(' <td width=360; rowspan ="4"  colspan="" > <img src="EventImages\\'.$pic.'.jpg'.'"class="rounded " style="width:420px;height:260px;"  > </td>');
 
    echo('</tr>');
	
    echo('<tr >') ;    
      /*echo('<td height=60  style="font-size:28px"><strong> <a href="event.php?id=<?php echo ('.$row[2].');?>">'.$row[2].' </a></strong></td>');*/
   echo('<td height=60  style="font-size:28px"><strong> <a style="color:#373a3c;"  href="event.php?id='.$row[2].'">'.$row[2].' </a></strong></td>');
   
   echo('</tr>');;
   
    echo('<tr  style="border-style:hidden;">') ;    
      echo('<td><strong> Description:</strong> <br>'.$row[3].'</td>');
   
   echo('</tr>');
   
    echo('<tr>') ;    
      echo('<td> <strong>Date: </strong><br>'.$row[1].' at '.$row[6].'</td>');
   
   echo('</tr>');;
   
   }
   	
?>	
  </tbody>
</table>

	<!-- FOOTER -->
      <?php include("footer.php"); ?>
  </body>
</html>
