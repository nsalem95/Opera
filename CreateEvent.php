<!DOCTYPE html>
<html lang="en">
  <head >
  <style>
  body {
    background-image: url("images/operared3.jpg");
     background-repeat: no-repeat ;
	 background-size: 100% 100%;
	}
	
	</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create New Event</title>
 
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
	  <!--  FORM!!!!   -->
	<br>
  <h1 class="	" style="color :white ;padding-left:1%"></h1>  
  <br>
  <div>
	  <form action="CreateEventphp.php" method="post" style="border: 2px solid white;border-radius: 8px;padding-top: 1%; padding-left:1% ;padding-right:1% ;width:460px; margin-right:auto; margin-left:auto; ;background-color:#FFFFFF;background-size: 100%">
  <div class="form-group">
    <label for="exampleInputEmail1">Event Name</label>
    <input type="text" name="EventName" style="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter event name">
   
  </div>
  
  <div class="form-group">
    <label for="exampleTextarea">Description</label>
    <textarea class="form-control" name="Description" style="" id="exampleTextarea" rows="3" placeholder="Enter event's full description and details"></textarea> 
  </div>
  
  
  <div class="form-group">
    <label for="exampleSelect1">Select Hall Number</label>
    <select class="form-control" name="SelectHall"  style="" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  
  <div class="form-group">
  <label for="example-datetime-local-input" class=" col-form-label">Date and time</label>
  <div >
    <input class="form-control" type="datetime-local" name="Date"  style="" value="2016-12-19T19:00:00" id="example-datetime-local-input">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputFile">Upload Event Poster</label>
    <input type="file" name="EventPoster" class="form-control-file"  id="exampleInputFile" aria-describedby="fileHelp">
    </div>
  
  <br>
  <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
  </div>
</form>
	  
   
   
	<hr> 	

	
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
