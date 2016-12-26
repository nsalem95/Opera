<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Approve Authority</title>

    <!-- Bootstrap core CSS -->
    <link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for the carousel -->
    <link href="css/carousel.css" rel="stylesheet">
    <!--dropdown menus navbar css-->
    <link rel="stylesheet" type="text/css" href="css/navdropdown.css">
  
  
  <script type="text/javascript">
  function show()
  {
    document.all.style.display='block';
  }
  
  function hide()
  {
    document.all.style.display='none';
  }

  

  
  
  </script>

  </head>
  
  
  
  <style>
  body {
    background-image: url("images/users.jpg");
     background-repeat: no-repeat ;
   background-size: 100% 100%;
  }
  
  </style>
  
  
 <body style="background-color:black" >
 

 
 
   <div id="header">
  
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

    </div>
   
  
  <br/>
  
  <div id="body">
  
  <form action="ApproveAuthorityphp.php"  method="post" style="border: 2px solid white;border-radius: 8px;padding-top: 1%; padding-left:1% ;padding-right:1% ;padding-bottom:2%;width:460px; margin-right:auto; margin-left:auto; ;background-color:#FFFFFF;background-size: 100%">
  <div class="form-group">
    <label for="dnjedpiw">Select username of the user you want to approve</label>
    <select name="user" class="form-control" style="width:70%" >
<?php 

$con=mysql_connect("localhost","root","");
mysql_select_db("Opera",$con);
$sql = mysql_query("SELECT `uname` from `users`",$con);
while ($row = mysql_fetch_array($sql)){
echo "<option value=\"". $row['uname'] ."\">" . $row['uname'] . "</option>";
}


?>
</select>
  </div>
  


 <div class="form-group">
    <label for="fiodfjs">Select type</label>
    <select name="type" class="form-control" style="width:70%;height:90%" >

<option value=1> Site Administrator</option>"
<option value=2> Opera Manager</option>"
<option value=3> Customer</option>"

</select>
  </div>



  <button  class="btn btn-primary">Approve</button>
  
 
</form>


</br>
 </br>
</br>
</br>
</br> 


</br>
</br>
</br>
</br>
</br>
     <hr>
     
    <footer style="margin-bottom:auto"; style="button:0" >
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