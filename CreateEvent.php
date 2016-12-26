<?php session_start(); ?>
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
    <?php include("head.php") ?>

    <title>Create New Event</title>
 

  </head>
  
  
  <body >
  
	<?php include("navbar.php"); ?>
	  <!--  FORM!!!!   -->
	<br>
  <h1 class="	" style="color :white ;padding-left:1%"></h1>  
  <br>
  <div>
	  <form action="CreateEventphp.php" method="post"	enctype="multipart/form-data" style="border: 2px solid white;border-radius: 8px;padding-top: 1%; padding-left:1% ;padding-right:1% ;width:460px; margin-right:auto; margin-left:auto; ;background-color:#FFFFFF;background-size: 100%">
  <div class="form-group">
    <label for="exampleInputEmail1">Event Name</label>
    <input required type="text" name="EventName" style="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter event name">
   
  </div>
  
  <div class="form-group">
    <label for="exampleTextarea">Description</label>
    <textarea required class="form-control" name="Description" style="" id="exampleTextarea" rows="3" placeholder="Enter event's full description and details"></textarea> 
  </div>
  
  
  <div class="form-group">
    <label for="exampleSelect1">Select Hall</label>
    <select class="form-control" name="SelectHall"  style="" id="exampleSelect1">
      <?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("Opera",$con);
$sql = mysql_query("SELECT hname from hall",$con);
while ($row = mysql_fetch_array($sql)){
echo "<option value=\"". $row['hname'] ."\">" . $row['hname'] . "</option>";
}

?>
    </select>
  </div>
  
  <div class="form-group">
  <label for="example-datetime-local-input" class=" col-form-label">Date and time</label>
  <div >
    <input required class="form-control" type="datetime-local" name="Date"  style="" value="2016-12-31T19:00:00" id="example-datetime-local-input">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputFile">Upload Event Poster</label>
    <input required type="file" name="EventPoster" class="form-control-file"  id="exampleInputFile" aria-describedby="fileHelp">
    </div>
  
  <br>
  <button type="submit" name="Submit" class="btn btn-primary">Add Event</button>
  </div>
</form>
	  
   
   
	<hr> 	

	
	<!-- FOOTER -->
      <?php include("footer.php"); ?>
  </body>
</html>
