<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head >

    <?php include("head.php"); ?>
    <title>Available Seats</title>
    <link rel="stylesheet" type="text/css" href="css/Reserve.css">
    
  </head>
  <body style="background-color: black;">

    <?php include("navbar.php"); ?>
	
	

<?php 
$con=mysql_connect("localhost", "root", "");
	if (!$con) {
		die('could not connect: '.mysql_error());
	}
	mysql_select_db("opera", $con);
	$q="SELECT * from event";
	$r1=mysql_query($q, $con);
		while ($x=mysql_fetch_array($r1)) 
		{
			echo '<h1 align="center" style="color:white; margin-top:80px;">'.$x['name'].'</h1>';
		  	 $hno = $x['hnumber'];
		    $q="SELECT * FROM seat_reserved WHERE `rid` IN (SELECT rid FROM reservation WHERE eno=".$x['eid'].")";
		    $r=mysql_query($q, $con);
		  	while($row=mysql_fetch_array($r))
		  	{
		  		$reserved[$row['sno']] = True;
		  		//bool array_key_exists ( mixed $key , array $array ) ay khedma
		  	}
		  	$q="SELECT * FROM hall WHERE `hno`='".$x['hnumber']."'";
			  $r=mysql_query($q, $con);
			  $hall=mysql_fetch_array($r);



			 echo '<table align="center" border="0" width="1000px">
  <div>';

  for ($j=0; $j < $hall['seats']/$hall['hrows']; $j++) { 
    echo '<tr>';
 	for ($i=$j*$hall['hrows']+1; $i <= ($j+1)*$hall['hrows']; $i++) { 
    echo '<td width="10%">';
  	echo '<div align="center" class="checkbox checkbox-primary" style="display:inline-block;">
                        <input disabled name="checkbox'.$i.'" id="checkbox'.$i.'" type="checkbox"';
                        if(array_key_exists($i, $reserved))
                        {
                          echo " checked";
                        }
                        echo '>
                        <label ';
                        
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

                   echo' </div>
                    </table>';

		}
	
 ?>


<br>
	<!-- FOOTER -->
      <?php include("footer.php"); ?>
  </body>
</html>
