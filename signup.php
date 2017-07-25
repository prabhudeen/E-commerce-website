<!DOCTYPE html>

<?php 

require 'include/common.php'

?>
<html>
<head>
<title> LifeStyle Store</title>
<meta  charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/ >
<link type="text/css" rel="stylesheet" href="index.css"></link>
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<

<body>
  <?php include 'include/header.php' ?>
  
  <div class="container " style="margin-bottom:185px;">
    <div class="row">
	   <div class="col-sm-offset-3 col-sm-5">
		     <div style="margin-top:80px;">
			  <h1><b>SIGN UP</b></h1>
			 </div>
			 <form action="signup_submit.php" method="post">
			    <div class="form-group">
			        <input type="text" placeholder="Name" name="name" class="form-control" required autofocus></input><br>
			     </div>
				 <div class="form-group">
			        <input type="email" placeholder="Email" name="email" class="form-control"></input><br>
			     </div>
				 <div class="form-group">
			        <input type="password" placeholder="Password" name="password" class="form-control"></input><br>
			     </div>
				 <div class="form-group">
			        <input type="text" placeholder="Contact" name="contact" class="form-control"></input><br>
			     </div>
				 <div class="form-group">
			        <input type="text" placeholder="City" name="city" class="form-control"></input><br>
			     </div>
				 <div class="form-group">
			        <input type="text" placeholder="Address" name="address" class="form-control"></input><br>
			     </div>
				 <div class="form-group">
			        <button type="submit"  class="btn btn-lg btn-primary">Submit</button><br>
			     </div>
			 </form>
		 
		</div>
	    
	
	</div>
  
  </div>
  
  <?php include 'include/footer.php'?>
 
  
</body>
</html>