<!DOCTYPE html>
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
<body>
  <nav  class="navbar navbar-inverse navbar-fixed-top">
     <div class="container">
	     <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar" >
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  </button>
			  <a href="index.html" class="navbar-brand">LifeStyle Store</a>
		 </div>
		 
		 <div class="collapse navbar-collapse" id="myNavBar">
		      <ul class="nav navbar-nav navbar-right">
			     <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>  
                 <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> LogIn</a></li>   
			 </ul>
		   </div>
		  
	 </div>
  </nav>
  
  <div class="container " style="height:780px;">
    <div class="row">
	   <div class="col-sm-offset-3 col-sm-6">
		     <div style="margin-top:80px;">
			  <h1><b>SIGN UP</b></h1>
			 </div>
			 <form>
			    <div class="form-group">
			        <input type="text" placeholder="Name" class="form-control" required autofocus></input><br>
			     </div>
				 <div class="form-group">
			        <input type="email" placeholder="Email" class="form-control"></input><br>
			     </div>
				 <div class="form-group">
			        <input type="password" placeholder="Password" class="form-control"></input><br>
			     </div>
				 <div class="form-group">
			        <input type="text" placeholder="Contact" class="form-control"></input><br>
			     </div>
				 <div class="form-group">
			        <input type="text" placeholder="City" class="form-control"></input><br>
			     </div>
				 <div class="form-group">
			        <input type="text" placeholder="Address" class="form-control"></input><br>
			     </div>
				 <div class="form-group">
			        <button type="submit"  class="btn btn-lg btn-primary">Submit</button><br>
			     </div>
			 </form>
		 
		</div>
	    
	
	</div>
  
  </div>
  
  <footer>
	    <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</p>
	  </footer>
  
  
</body>
</html>