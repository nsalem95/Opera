<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head >

    <?php include("head.php"); ?>
    <title>Reservations</title>
    
  </head>
  <body>

    <?php include("navbar.php"); ?>
	
	<table class="table">
  <thead class="thead-inverse">
    
  </thead>
  
  <tbody>

<?php 
$con=mysql_connect("localhost", "root", "");
	if (!$con) {
		die('could not connect: '.mysql_error());
	}
	mysql_select_db("opera", $con);
	$q="SELECT * from reservation where cust='".$_SESSION['uname']."'";
	$r1=mysql_query($q, $con);
	if($r1)
	{
		while ($row1=mysql_fetch_array($r1)) 
		{
		  	$q="SELECT * from event where eid=".$row1['eno'];
			$r=mysql_query($q, $con);
			$row=mysql_fetch_array($r);
			$pic = preg_replace('/\s+/', '_', $row[4]);

		   echo("<tr>");
			 echo(' <td width=360; rowspan ="4"  colspan="" > <img src="EventImages\\'.$pic.'.jpg'.'"class="rounded " style="width:420px;height:260px;"  > </td>');
		 
		    echo('</tr>');
			
		    echo('<tr >') ;    
		   echo('<td height=60  style="font-size:28px"><strong> <a style="color:#373a3c;"  href="event.php?id='.$row[2].'">'.$row[2].' </a></strong></td>');
		   
		   echo('</tr>');;
		   
		    echo('<tr  style="border-style:hidden;">') ;    
		      echo('<td><strong> Reservation ID:</strong> <br>'.$row1['rid'].'</td>');
		   
		   echo('</tr>');
		   
		    echo('<tr>') ;    
		      echo('<td> <strong>Date: </strong><br>'.$row[1].' at '.$row[6].'</td>');
		      $date1 = new DateTime($row[1]);
				$date2 = new DateTime();

			$diff = $date2->diff($date1)->format("%a");
		      if ($diff > 3) 
			{
		      	
		   		echo '<td><a OnClick="javascript: return confirm(\'Are you sure you want to cancel the reservation?\');" style="float: right; margin-right: 20px;" class="btn btn-primary" href="Reservationsphp.php?rid='.$row1['rid'].'" role="button">Cancel Reservation</a></td>';
		   	}
		   echo('</tr>');;

		}
	}
	else
	{
		
		
	}
 ?>

   </tbody>
</table>

	<!-- FOOTER -->
      <?php include("footer.php"); ?>
  </body>
</html>
