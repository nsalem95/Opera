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



  <form name="formname" action="Reservephp.php" method="post" style="margin-top: 80px;">
  <table align="center" border="0" width="1000px">
  <div>
  <?php 
  for ($j=0; $j < $hall['seats']/$hall['hrows']; $j++) { 
    echo '<tr>';
 	for ($i=$j*$hall['hrows']+1; $i <= ($j+1)*$hall['hrows']; $i++) { 
    echo '<td width="10%">';
  	echo '<div align="center" class="checkbox checkbox-primary" style="display:inline-block;">
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
                        echo 'style="color:white;" for="checkbox'.$i.'">';
                        if($i<10)
                            echo '0'.$i;
                          else
                            echo $i;
                            
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

         <div style="color:white; width:30%; float: right; margin-top: 40px; margin-right: 40px;">
         <div class="form-group" >
    <label for="exampleInputEmail1">Credit Card Number</label>
    <input required type="number" name="Credit"  maxlength="16"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter 16 digits">
   
  </div>
  
  <div class="form-group">
    <label for="exampleTextarea">Pin number</label>
    <input type="password" name="" required class="form-control" name="Description" id="exampleTextarea" rows="1" placeholder="">
  </div>
  
  
  <label class="form-group" for="expiry-month">Expiration Date</label>
        <div class="">
          <div class="">
            <div class="">
              <select class="form-control" name="expiry-month" id="expiry-month">
                <option>Month</option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
            </div>
            <div class="">
              <select class="form-control" name="expiry-year">
         
        
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
  </div>
        <button style="margin-top: 80px; float: right; margin-right: 120px" type="submit" class="btn btn-primary">Reserve</button>



  </form>

  <?php /*
    echo '<script>
          var box;
          var st="";
          ';
    for ($i=0; $i < $hall['seats']; $i++) 
    { 
      echo 'if (document.formname.checkbox'.$i.'.checked == True)
      {
        st+="_'.$i.'";
      }';
    } 
          echo "var page = \"location.href = 'Reserve.php?Ename=".$_GET['Ename']."?l=\";
          page+=st;
          page+=\"';\";
          ";

          echo "setTimeout(page,5);</script>";*/
   ?>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php include('footer.php'); ?>
  </body>