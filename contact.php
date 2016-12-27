<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head >
  
  
  <style>
  body {
    background-image: url("");
     background-repeat: no-repeat ;
	 background-size: 100% 100%;
	}
	
	</style>
    <?php include("head.php") ?>

    <title>Contact us</title>
 

  </head>
  
  
  <body >
  
	<?php include("navbar.php"); ?>
	  <!--  FORM!!!!   -->
	
	
<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" action="mailto:opera@edu.eg"	>
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Us</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="text"  name ="body" id="body" placeholder="Message" maxlength="140" rows="7"  ></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Max. 140 characters</p></span>                    
                    </div>
            
        <button type="submit"  class="btn btn-primary" value="Send"  id="submit" name="submit"  class="">Send</button>
        </form>
    </div>
</div>
</div>
	
	
	
   
   
		

	<!-- FOOTER -->
      <?php include("footer.php"); ?>
  </body>
</html>
