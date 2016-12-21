<?php 
session_start();
$q="SELECT * FROM users WHERE `uname`='".$_SESSION['uname']."'";
$con=mysql_connect("localhost", "root", "");
  if (!$con) {
    die('could not connect: '.mysql_error());
  }
  mysql_select_db("opera", $con);
  $r=mysql_query($q, $con);
  $x=mysql_fetch_array($r);
  if(!$x)
  {
    echo '<script type="text/javascript">
          window.onload = function () { alert("Error! Try again later"); }
      </script>';
    echo "<script>setTimeout(\"location.href = 'index.php';\",0);</script>";
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("head.php"); ?>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Profile</title>

    <style type="text/css">
    body{
    	background-image: url("images/signup.jpeg");
    	background-repeat: no-repeat;
    	background-size: 100% 100%;
    };
    </style>
  </head>
  <body>
    <?php include("navbaruser.php"); ?>
    <!--Edit Profile Form-->
    <form action="editprofilephp.php" method="post" style="border: 2px solid white;border-radius: 8px;padding-top: 1%; padding-left:2% ;padding-right:2%;padding-bottom: 1%; width:450px; margin-right:auto; margin-left:auto; margin-top: 4% ;background-color:#FFFFFF;background-size: 100%">
   

</div>
    <div class="" style="margin-bottom: 1px;">
  <label for="FirstName" style="display: inline-block;" class="col-form-label">First Name</label>
  <label for="LastName" style="display: inline-block; margin-left: 31%;" class="col-form-label">Last Name</label>
</div> 
  <div style="margin-top: 1px;">
  <input required name="FirstName" style="display: inline-block; width: 40%;" class="form-control" type="text" value="<?php echo $x['Fname']; ?>" id="FirstName">
    <input required name="LastName" style="display: inline-block; width: 40%; margin-left: 10%;" class="form-control" value="<?php echo $x['Lname']; ?>" type="text" id="LastName">
</div>

<div class="form-group row" style="margin-left: 0.3%; margin-right: 2%;">
  <label for="Email" class="col-form-label">Email</label>
  <div class="">
    <input style="display: none;" name="Password" class="form-control" type="password" value="<?php echo $x['pass']; ?>" id="pass">
    <input required name="Email" class="form-control" type="email" value="<?php echo $x['email']; ?>" id="Email" value="">
  </div>
<div class="form-group row" style="margin-left: 0.3%; margin-right: 2%; margin-bottom: 1px;">
  <label for="example-date-input" class="col-form-label">BirthDate</label>
  <div class="">
    <input required name="BirthDate" class="form-control" type="date" value="<?php echo $x['Bdate']; ?>" id="example-date-input">
  </div>
</div>
<div class="form-group row" style="margin-left: 0.3%; margin-right: 2%;">
  <div class="" style="margin-bottom: 1px;">
  <label for="City" style="display: inline-block;" class="col-form-label">City</label>
  <label for="Address" style="display: inline-block; margin-left: 45%;" class="col-form-label">Address</label>
</div> 
  <div style="margin-top: 1px;">
  <input required name="City" style="display: inline-block; width: 40%;" class="form-control" type="text" value="<?php echo $x['city']; ?>" id="City">
    <input name="Address" style="display: inline-block; width: 40%; margin-left: 10%;" class="form-control" value="<?php echo $x['address']; ?>" type="text" id="Address">
</div>
</div>
<div class="form-check" style="display: inline-block;">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="Gender" id="optionsRadios1" value="M" 
        <?php if ($x['Sex'] == 'M') {
          echo "checked";
        } ?>>
        Male
      </label>
    </div>
    <div class="form-check" style="display: inline-block; margin-left: 5%;">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="Gender" id="optionsRadios2" value="F"
        <?php if ($x['Sex'] == 'F') {
          echo "checked";
        } ?>>
        Female
      </label>
    </div>
    <label style="display: block;" for="confirm-pass" class="col-form-label">Confirm Password</label>
    <input name="ConfirmPassword" style="display: inline-block; width: 40%;" class="form-control" type="password" placeholder="Confirm Password" id="confirm-pass" required>
<input style="display: inline-block; float: right;" type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-primary" value="Save">
</div>

</form>
     <!-- FOOTER -->
     <?php include("footer.php") ?>
  </body>
</html>
