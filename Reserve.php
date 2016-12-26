<?php session_start();
$q="SELECT * FROM event WHERE `name`='".$_GET['Ename']."'";
$con=mysql_connect("localhost", "root", "");
$hall = array();
$reserved=array();
  if (!$con) {
    die('could not connect: '.mysql_error());
  }
  mysql_select_db("opera", $con);
  $r=mysql_query($q, $con);
  $x=mysql_fetch_array($r);
  if($x)
  {
    $hno = $x['hnumber'];
    $q="SELECT * FROM seat_reserved WHERE `rid` IN (SELECT rid FROM reservation WHERE eno=".$x['eid'].")";
    $r=mysql_query($q, $con);
  	while($row=mysql_fetch_array($r))
  	{
  		$reserved[$row['sno']] = True;
  		//bool array_key_exists ( mixed $key , array $array ) ay khedma
  	}
  }
  $q="SELECT * FROM hall WHERE `hno`='".$x['hnumber']."'";
  $r=mysql_query($q, $con);
  $hall=mysql_fetch_array($r);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include("head.php"); ?>
    <title>Reserve Seat</title>

    <link rel="stylesheet" type="text/css" href="css/reserve.css">




    
  </head>



<style>
  body {
    background-image: url("images/reserve.jpg");
     background-repeat: no-repeat ;
   background-size: 100% 100%;
  }
  
  </style>


  <body style="background-color: black;">
  <?php include("navbar.php"); ?>



  <form action="Reservephp.php" method="post" style="margin-top: 80px;">
  <table align="center" border="0">
  <div align="cenetr">
  <?php 
  for ($j=0; $j < $hall['seats']/$hall['hrows']; $j++) { 
    echo '<tr>';
 	for ($i=$j*$hall['hrows']+1; $i <= ($j+1)*$hall['hrows']; $i++) { 
    echo '<td>';
  	echo '<div class="checkbox checkbox-primary" style="display:inline-block;">
                        <input name="checkbox'.$i.'" id="checkbox'.$i.'" type="checkbox"';
                        if(array_key_exists($i, $reserved))
                        {
                          echo " disabled";
                        }
                        echo '>
                        <label ';
                        if(array_key_exists($i, $reserved))
                        {
                          echo 'style="color:red;"';
                        }
                        echo 'style="color:white;" for="checkbox'.$i.'">'
                            .$i;
                            
                            echo '
                        </label>
                    </div>';
                    echo '</td>';
                }
                echo '</tr>';
            }
                    ?>
                    </div>
                    </table>
       
        <input type="text" style="display: none;" name="EventName" value="<?php echo $x['eid'];
         ?>">
         <input type="text" style="display: none;" name="NoSeats" value="<?php echo $hall['seats'];
         ?>">
         <input type="number" style="display: none;" name="hno" value="<?php echo $hall['hno'];
         ?>">
        <button style="margin-top: 80px; float: right; margin-right: 80px" type="submit" class="btn btn-primary">Reserve</button>


  </form>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php include('footer.php'); ?>
  </body>