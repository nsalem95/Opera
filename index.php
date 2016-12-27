<?php session_start();
$q="SELECT * FROM event WHERE `featured`=1";
$q2="SELECT * FROM event WHERE `featured` IS NULL";
$con=mysql_connect("localhost", "root", "");
  if (!$con) {
    die('could not connect: '.mysql_error());
  }
  mysql_select_db("opera", $con);
  $r=mysql_query($q, $con);
  $r2=mysql_query($q2, $con);
  $feat=True;
  $i=0;
  while ($i < 3 || $feat) 
  {
    if ($row=mysql_fetch_array($r)) 
    {
      $events[$i]=$row;
    }
    else
    {
      $feat=False;
      if ($i >= 3)
      {
        break;
      }
      $row2=mysql_fetch_array($r2);
      $events[$i]=$row2;
    }
    $i+=1;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include("head.php"); ?>
    <title>Cairo Opera House</title>
    
    <!-- Custom styles for the carousel -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <?php include("navbar.php"); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php 
        for ($j=0; $j < $i; $j++) 
        { 
          echo '<li data-target="#myCarousel" data-slide-to="'.$j.'"';
          if ($j == 0) {
            echo ' class="active"';
          }
          echo '></li>';
        }
         ?>
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php 
        for ($j=0; $j < $i; $j++) 
        { 
          echo '<div class="carousel-item';
          if ($j == 0) {
             echo ' active';
          }
          echo '">';
          echo '<img class="first-slide" src="EventImages/'.$events[$j]['poster'].'.jpg" alt="Event Poster">
            <div class="container">
              <div class="carousel-caption text-xs-right">
                <h1>'.$events[$j]['name'].'</h1>
                <p>'.$events[$j]['edescription'].'</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Reserve seat</a></p>
              </div>
            </div>
          </div>';
        }
        
         ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    <?php  
    /*
    for ($j=0; $j < $i; $j++) 
    { 

      echo '<hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 push-md-4">
          <h2 class="featurette-heading">'.$events[$j]['name'].'<span class="text-muted">'.$events[$j]['edate'].'</span></h2>
          <p class="lead">'.$events[$j]['edescription'].'</p>
        </div>
        <div class="col-md-5 pull-md-7">
          <img class="featurette-image img-fluid mx-auto" style="height:400px; width:400px; margin-left:10%;" src="EventImages/'.$events[$j]['poster'].'.jpg" alt="Event Poster">
        </div>
      </div>';
    }*/
      ?>
     <!-- FOOTER -->
     <?php include("footer.php") ?>
  </body>
</html>
