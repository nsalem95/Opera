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

    <title>Edit Event</title>
 

  </head>
  
  
  <body >
  
	<?php include("navbar.php"); ?>
	
	
	
	  <!--  FORM!!!!   -->
	
  <h1 class="	" style="color :white ;padding-left:1%"></h1>  
  <br>
  <div>
	  <form action="EditEventphp.php" method="post"	enctype="multipart/form-data" style="border: 2px solid white;border-radius: 8px;padding-top: 1%; padding-left:1% ;padding-right:1% ;width:460px; margin-right:auto; margin-left:auto; ;background-color:#FFFFFF;background-size: 100%">
	  
	  <!-- to store old event name -->	
	<input type="text" value="<?php echo($_GET['ename'])?>" name="Old"  style="display:none" class="form-control" >

	
	
  <div class="form-group">
    <label for="exampleInputEmail1">Event Name</label>
    <input required type="text" name="EventName" style="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter event name"
	
	value ="<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("Opera",$con);
	$ename=$_GET['ename'];
	$sql = mysql_query("SELECT name from event where name= '".$ename."'",$con);
	$row = mysql_fetch_array($sql);
	if($row)
	{
		echo $row['name'];
	}
	else
	{
		echo " ";
	}



 ?>">
   
  </div>
  
  <div class="form-group">
    <label for="exampleTextarea">Description</label>
    <textarea required class="form-control" name="Description" style="" id="exampleTextarea" rows="3"><?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("Opera",$con);

	$sql = mysql_query("SELECT edescription from event where name= '".$ename."'",$con);
	$row = mysql_fetch_array($sql);
	if($row)
	{
		echo $row['edescription'];
	}
	else
	{
		echo " ";
	}



 ?></textarea> 
  </div>
  
  
  <div class="form-group">
    <label for="exampleSelect1">Select Hall</label>
    <select class="form-control" name="SelectHall"  style="" id="exampleSelect1">
      <?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("Opera",$con);
$sql = mysql_query("SELECT hname from hall",$con);
$sql2 = mysql_query("SELECT hname from hall where hno=(select hnumber from event where name='".$ename."')",$con);
$row2 = mysql_fetch_array($sql2);
while ($row = mysql_fetch_array($sql)){
echo "<option value=\"". $row['hname'] ."\"";
if($row['hname']==$row2['hname'])
	echo 'selected';
echo ">" . $row['hname'] . "</option>";
}

?>
    </select>
  </div>
  
  <div class="form-group">
  <label for="example-datetime-local-input" class=" col-form-label">Date and time</label>
  <div >
    <input required class="form-control" type="datetime-local" name="Date"  style="" value="<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("Opera",$con);

	$sql = mysql_query("SELECT edate, etime from event where name= '".$ename."'",$con);
	$row = mysql_fetch_array($sql);
	if($row)
	{
		echo $row['edate']."T".$row['etime'];
	}
	else
	{
		echo " ";
	}



 ?>" id="example-datetime-local-input">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputFile">Upload Event Poster</label>
    <input id='file'  type="file" name="EventPoster" class="form-control-file"  id="exampleInputFile" aria-describedby="fileHelp">
    </div>
  
  <br>
  <button type="submit" name="Submit"   value="submit" class="btn btn-primary"  onclick="myFunction();" >Submit</button>
  </div>
</form>
	  
   <script> //JS to detect if no file is uploaed
   function myFunction()
   {
	var nme = document.getElementById("file");
	if(nme.value.length < 2)
	{
		alert('Event Poster will not be updated!');


	}
   }
</script>
   
	<hr> 	

	
	<!-- FOOTER -->
      <?php include("footer.php"); ?>
  </body>
</html>
