<!DOCTYPE html>
<html lang="en">
  <head >
  <style>

	
	</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Calendar</title>
 
    <!-- Bootstrap core CSS -->
    <link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    
  </head>
  
  
  <body >

	
    <nav class="navbar navbar-static-top navbar-light bg-faded">
      
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <img src="images/logo.png" style="height:43px;">
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
     </nav>  
	
	



	
	
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
      <footer>
        <p class="float-xs-right"><a href="#">Back to top&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy; Cairo Opera House &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="http://v4-alpha.getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
