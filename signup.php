<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("head.php"); ?>
    
    <title>Sign up</title>

    <style type="text/css">
    body{
    	background-image: url("images/signup.jpeg");
    	background-repeat: no-repeat;
    	background-size: 100% 100%;
    };
    </style>
  </head>
  <body>
    <?php include("navbar.php"); ?>
    <!--Register Form-->
    <form action="signupphp.php" method="post" style="border: 2px solid white;border-radius: 8px;padding-top: 1%; padding-left:2% ;padding-right:2% ;width:450px; margin-right:auto; margin-left:auto; margin-top: 4% ;background-color:#FFFFFF;background-size: 100%">
    <div class="" style="margin-bottom: 1px;">
  <label for="Username" style="display: inline-block;" class="col-form-label">Username</label>
  <label for="Password" style="display: inline-block; margin-left: 31%;" class="col-form-label">Password</label>
</div> 
  <div style="margin-top: 1px;">
  <input required name="Username" style="display: inline-block; width: 40%;" class="form-control" type="text" placeholder="Username" id="Username" value="<?php echo $_POST['username'];?>">
    <input required name="Password" style="display: inline-block; width: 40%; margin-left: 10%;" class="form-control" placeholder="Password" type="password" id="Password" value="<?php echo $_POST['password'];?>">

</div>

</div>
    <div class="" style="margin-bottom: 1px;">
  <label for="FirstName" style="display: inline-block;" class="col-form-label">First Name</label>
  <label for="LastName" style="display: inline-block; margin-left: 31%;" class="col-form-label">Last Name</label>
</div> 
  <div style="margin-top: 1px;">
  <input required name="FirstName" style="display: inline-block; width: 40%;" class="form-control" type="text" placeholder="First Name" id="FirstName">
    <input required name="LastName" style="display: inline-block; width: 40%; margin-left: 10%;" class="form-control" placeholder="Last Name" type="text" id="LastName">
</div>

<div class="form-group row" style="margin-left: 0.3%; margin-right: 2%;">
  <label for="Email" class="col-form-label">Email</label>
  <div class="">
    <input required name="Email" class="form-control" type="email" placeholder="Enter Email" id="Email" value="<?php echo $_POST['email'];?>">
  </div>
<div class="form-group row" style="margin-left: 0.3%; margin-right: 2%; margin-bottom: 1px;">
  <label for="example-date-input" class="col-form-label">BirthDate</label>
  <div class="">
    <input required name="BirthDate" class="form-control" type="date" placeholder="mm/dd/yyyy" id="example-date-input">
  </div>
</div>
<div class="form-group row" style="margin-left: 0.3%; margin-right: 2%;">
  <div class="" style="margin-bottom: 1px;">
  <label for="City" style="display: inline-block;" class="col-form-label">City</label>
  <label for="Address" style="display: inline-block; margin-left: 45%;" class="col-form-label">Address</label>
</div> 
  <div style="margin-top: 1px;">
  <input required name="City" style="display: inline-block; width: 40%;" class="form-control" type="text" placeholder="City" id="City">
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
<input style="display: block;" type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-primary" value="Register">
</div>

</form>
     <!-- FOOTER -->
     <?php include("footer.php") ?>
  </body>
</html>
