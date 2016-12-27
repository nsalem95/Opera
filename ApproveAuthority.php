<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">



<head>
   

    <title>Approve Authority</title>

    <?php include("head.php"); ?>
  
  
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
 

 
 <?php include("navbar.php"); ?>
   
  
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

<option value=2> Site Administrator</option>"
<option value=1> Opera Manager</option>"
<option value=0> Customer</option>"

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

    <?php include("footer.php"); ?>
  </body>

</html>