<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cairo Opera House</title>

    <!-- Bootstrap core CSS -->
    <link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body{
    	background-image: url("images/signup.jpeg");
    	background-repeat: no-repeat;
    	background-size: 100% 100%;
    };
    </style>
  </head>
  <body>
    <nav class="navbar navbar-static-top navbar-light bg-faded">
      
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <img src="images/logo.png" style="height:43px;">
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
    </nav>
    <!--Register Form-->
    <form action="editprofilephp.php" method="post" style="border: 2px solid white;border-radius: 8px;padding-top: 1%; padding-left:2% ;padding-right:2% ;width:450px; margin-right:auto; margin-left:auto; margin-top: 4% ;background-color:#FFFFFF;background-size: 100%">
    <div class="" style="margin-bottom: 1px;">
  <label for="Username" style="display: inline-block;" class="col-form-label">Username</label>
  <label for="Password" style="display: inline-block; margin-left: 31%;" class="col-form-label">Password</label>
</div> 
  <div style="margin-top: 1px;">
  <input name="Username" style="display: inline-block; width: 40%;" class="form-control" type="text" placeholder="Username" id="Username" value="">
    <input name="Password" style="display: inline-block; width: 40%; margin-left: 10%;" class="form-control" placeholder="Password" type="password" id="Password" value="">

</div>

</div>
    <div class="" style="margin-bottom: 1px;">
  <label for="FirstName" style="display: inline-block;" class="col-form-label">First Name</label>
  <label for="LastName" style="display: inline-block; margin-left: 31%;" class="col-form-label">Last Name</label>
</div> 
  <div style="margin-top: 1px;">
  <input name="FirstName" style="display: inline-block; width: 40%;" class="form-control" type="text" placeholder="First Name" id="FirstName">
    <input name="LastName" style="display: inline-block; width: 40%; margin-left: 10%;" class="form-control" placeholder="Last Name" type="text" id="LastName">
</div>

<div class="form-group row" style="margin-left: 0.3%; margin-right: 2%;">
  <label for="Email" class="col-form-label">Email</label>
  <div class="">
    <input name="Email" class="form-control" type="email" placeholder="Enter Email" id="Email" value="">
  </div>
<div class="form-group row" style="margin-left: 0.3%; margin-right: 2%; margin-bottom: 1px;">
  <label for="example-date-input" class="col-form-label">BirthDate</label>
  <div class="">
    <input name="BirthDate" class="form-control" type="date" placeholder="mm/dd/yyyy" id="example-date-input">
  </div>
</div>
<div class="form-group row" style="margin-left: 0.3%; margin-right: 2%;">
  <div class="" style="margin-bottom: 1px;">
  <label for="City" style="display: inline-block;" class="col-form-label">City</label>
  <label for="Address" style="display: inline-block; margin-left: 45%;" class="col-form-label">Address</label>
</div> 
  <div style="margin-top: 1px;">
  <input name="City" style="display: inline-block; width: 40%;" class="form-control" type="text" placeholder="City" id="City">
    <input name="Address" style="display: inline-block; width: 40%; margin-left: 10%;" class="form-control" placeholder="Address" type="text" id="Address">
</div>
</div>
<div class="form-check" style="display: inline-block;">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="Gender" id="optionsRadios1" value="Male" checked>
        Male
      </label>
    </div>
    <div class="form-check" style="display: inline-block; margin-left: 5%;">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="Gender" id="optionsRadios2" value="Female">
        Female
      </label>
    </div>
<input style="display: block;" type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-primary" value="Save">
</div>

</form>
     <!-- FOOTER -->
     <hr>
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
