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

    <title>Event</title>
 
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
echo(' <p style="font-size:48px; padding-left:1%""><strong>'.$row[2].'</strong> <span style="font-size:20px;padding-right:1%;float:right">'.$row[1].' at '.$row[6].'<br>'.$hallname[0].' Hall</span></p>');

echo(' <p style="font-size:30px; padding-left:3%"">'.$row[3].'</strong></p>');

?>


  <button  style="margin-left:18px;padding-left:1%" type="submit" name="Reserve" class="btn">Reserve Now!</button>
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
