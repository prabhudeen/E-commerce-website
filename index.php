<!DOCTYPE html>
<?php require 'include/common.php' ?>
<html>
<head>
 <title>LifeStyle Store</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,intial-scale=1.0">
 <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
 <link type="text/css" rel="stylesheet" href="index.css">
 <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
 

</head>
<body>
    
	<?php include 'include/header.php' ?>
	
	<div class="banner-image" style="margin-top:50px;" >
	   <div class="container">
	        <div class="banner-content">
			<div>
			<h2> We Sell LifeStyle.</h2>
			  <p>Flat 40% OFF on Premium Brands</p>
			</div>
			 <a href="products.php" class="btn btn-danger btn-lg active"> Shop Now</a>
			</div>
	   </div>
	
	</div>
	
	<div class="container"  style="margin-bottom:120px;>
	
	  <div class="row" ">
	       <div class=" content" >
		      <a href="products.php">
		      <div class="img-respondive img-thumbail" > <img src="images/camera.jpg"/></div>
			  <div><h3>Cameras</h3><p>Choose Among The Availbale In The World</p></div>
			  </a>
		   </div>
		   
		   <div class="  content">
		      <a href="products.php">
		      <div class="img-respondive img-thumbail"> <img src="images/watches.jpg"/></div>
			  <div><h3>Watches</h3><p>Originol Watches From Best Brands</p></div>
			  </a>
		   </div>
		   
		   <div class="content">
		      <a href="products.php">
		      <div class="img-respondive img-thumbail" > <img src="images/shirts.jpg"/></div>
			  <div><h3>Shirts</h3><p>Our Exclusive Collectios Of Shirts</p></div>
			  </a>
		   </div>
		   
		   <div class="clear"></div>
		   
	  </div>
	 
	
	</div>
	
	<?php include 'include/footer.php'?>

</body>

</html>