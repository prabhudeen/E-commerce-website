<!DOCTYPE html>

<html>
<head>
 <title></title>
 <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <link type="text/css" rel="stylesheet" href="index.css">
 <script src="bootstrap/js/jquery-3.2.1.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container">
	   <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
		    <span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			
		  </button>
		  <a class="navbar-brand" href="index.php"> LifeStyle Store</a>
	   
	   </div>
	   <div class="collapse navbar-collapse" id="myNavBar">
	     <u class="nav navbar-nav navbar-right">
		   <?php
		       if(isset($_SESSION['email'])){
				   ?>
				   <li> <a href="cart.php" ><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
				   <li> <a href="setting.php" ><span class="glyphicon glyphicon-user"></span>Setting</a></li>
				   <li> <a href="logout.php" ><span class="glyphicon glyphicon-shopping-log-out"></span>Logout</a></li>
				<?php   
				   
			   }
		   
		   
		       else{
				   ?>
				   <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>                
				   <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>   
				   
			 <?php  }
		    
		   ?>
		 
		 </u>
	   
	   </div>
	 
	 </div>
  </nav>
</body>
</html>