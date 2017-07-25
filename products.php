<!DOCTYPE html>
<?php require 'include/common.php' ?>
<?php require 'add_to_the_cart.php' ?>

<html>
<head>
<title> LifeStyle Store</title>
<meta  charset="UTF-8">

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="index.css"></link>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/ >

<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style>
.products{
	
	width:200px;
	height:200px;
	margin:auto;
	
}
.block-content{
	
	border:3px solid #f2ecec;
	margin:auto;
	border-radius:3px;
}
</style>
</head>
<body>
  <?php  require 'include/header.php';
         
  ?>
  <div class="container">
     <div class="row">
	     <div class="col-sm-12" style="margin-top:90px;">
		     <div class="jumbotron">
			    <h1><b>Welcome to our LifeStyle Store!</b><h1>
				<p>We have the best Cameras,Watches and Shirts for you.No need to hunt around.We have all in one place.</p>
			 </div>
			 <div class="col-sm-3">
			   <div class="block-content">
			     <div class="products">
			      <img src="images/camera.jpg" class="img-responsive img-thumbail" ></img>
			     </div>
			     <div style="text-align:center;">
			       <h3>Cannon EOS</h3>
			       <P>Price:Rs. 36000.00</P>
			     </div>
			      <?php if (!isset($_SESSION['email'])) { ?>       
				          <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>                     
				 <?php     } else {             
				 //We have created a function to check whether this particular product is added to cart or not.       
				 if (added_to_the_cart(1)) { ?>             
					<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>                
              <?php   } else {       ?>                 
				 <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>            
				 <?php         }                  
				 }    ?>  
				     
				</div>
			 </div>
			 
			  <div class="col-sm-3" >
			    <div class="block-content">
			      <div class="products" >
			        <img src="images/sony-camera.jpg" class="img-responsive img-thumbail" ></img> 
			      </div>
			      <div style="text-align:center;">
			        <h3>Sony DSLR</h3>
			         <P>Price:Rs. 60000.00</P>
			      </div>
			   			      <?php if (!isset($_SESSION['email'])) { ?>       
				          <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>                     
				 <?php     } else {             
				 //We have created a function to check whether this particular product is added to cart or not.       
				 if (added_to_the_cart(2)) { ?>             
					<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>                
              <?php   } else {       ?>                 
				 <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>            
				 <?php         }                  
				 }    ?>  
				 
			    </div>
			</div>
			 
			  <div class="col-sm-3">
			    <div class="block-content">
			       <div class="products">
			          <img src="images/filker-camera.jpg" class="img-responsive img-thumbail" ></img>
			       </div>
			       <div style="text-align:center;">
			         <h3>Olympus DSLR</h3>
			          <P>Price:Rs. 46000.00</P>
			        </div>
			          			      <?php if (!isset($_SESSION['email'])) { ?>       
				          <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>                     
				 <?php     } else {             
				 //We have created a function to check whether this particular product is added to cart or not.       
				 if (added_to_the_cart(3)) { ?>             
					<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>                
              <?php   } else {       ?>                 
				 <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>            
				 <?php         }                  
				 }    ?>  
				 
			   </div>
			 </div>
			 
			  <div class="col-sm-3" >
			    <div class="block-content">
			      <div class="products">
			         <img src="images/nicon-camera.jpg" class="img-responsive img-thumbail" ></img>
			      </div>
			       <div style="text-align:center;">
			         <h3>Nikon DSLR</h3>
			         <P>Price:Rs. 80000.00</P>
			       </div>
			     			      <?php if (!isset($_SESSION['email'])) { ?>       
				          <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>                     
				 <?php     } else {             
				 //We have created a function to check whether this particular product is added to cart or not.       
				 if (added_to_the_cart(4)) { ?>             
					<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>                
              <?php   } else {       ?>                 
				 <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>            
				 <?php         }                  
				 }    ?>  
				 
			 </div>
			</div>
			
			
			
			<div class="col-sm-3">
			   <div class="block-content">
			     <div class="products">
			      <img src="images/watche_1.jpg" class="img-responsive img-thumbail" ></img>
			     </div>
			     <div style="text-align:center;">
			       <h3>Titan Model #201</h3>
			       <P>Price:Rs. 8000.00</P>
			     </div>
			       			      <?php if (!isset($_SESSION['email'])) { ?>       
				          <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>                     
				 <?php     } else {             
				 //We have created a function to check whether this particular product is added to cart or not.       
				 if (added_to_the_cart(5)) { ?>             
					<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>                
              <?php   } else {       ?>                 
				 <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>            
				 <?php         }                  
				 }    ?>  
				 
				</div>
			 </div>
			 
			  <div class="col-sm-3" >
			    <div class="block-content">
			      <div class="products" >
			        <img src="images/watch_2.jpg" class="img-responsive img-thumbail" ></img> 
			      </div>
			      <div style="text-align:center;">
			        <h3>Titan Model #301</h3>
			         <P>Price:Rs. 3400.00</P>
			      </div>
			         			      <?php if (!isset($_SESSION['email'])) { ?>       
				          <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>                     
				 <?php     } else {             
				 //We have created a function to check whether this particular product is added to cart or not.       
				 if (added_to_the_cart(6)) { ?>             
					<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>                
              <?php   } else {       ?>                 
				 <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>            
				 <?php         }                  
				 }    ?>  
				 
				 
			    </div>
			</div>
			 
			  <div class="col-sm-3">
			    <div class="block-content">
			       <div class="products">
			          <img src="images/watch_3.jpg" class="img-responsive img-thumbail" ></img>
			       </div>
			       <div style="text-align:center;">
			         <h3>Fastrack</h3>
			          <P>Price:Rs. 6000.00</P>
			        </div>
			            			      <?php if (!isset($_SESSION['email'])) { ?>       
				          <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>                     
				 <?php     } else {             
				 //We have created a function to check whether this particular product is added to cart or not.       
				 if (added_to_the_cart(7)) { ?>             
					<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>                
              <?php   } else {       ?>                 
				 <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>            
				 <?php         }                  
				 }    ?>  
			   </div>
			 </div>
			 
			  <div class="col-sm-3" >
			    <div class="block-content">
			      <div class="products">
			         <img src="images/watch_4.jpg" class="img-responsive img-thumbail" ></img>
			      </div>
			       <div style="text-align:center;">
			         <h3>Fastrack</h3>
			         <P>Price:Rs. 900.00</P>
			       </div>
			         			 <?php if (!isset($_SESSION['email'])) { ?>       
				          <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>                     
				 <?php     } else {             
				 //We have created a function to check whether this particular product is added to cart or not.       
				 if (added_to_the_cart(8)) { ?>             
					<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>                
              <?php   } else {       ?>                 
				 <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>            
				 <?php         }                  
				 }    ?>  
				 
			     </div>
			</div>
			
			
			
			<div class="col-sm-3">
			   <div class="block-content">
			     <div class="products">
			      <img src="images/shirt_1.jpg" class="img-responsive img-thumbail" ></img>
			     </div>
			     <div style="text-align:center;">
			       <h3>H&W</h3>
			       <P>Price:Rs. 800.00</P>
			     </div>
			         			      <?php if (!isset($_SESSION['email'])) { ?>       
				          <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>                     
				 <?php     } else {             
				 //We have created a function to check whether this particular product is added to cart or not.       
				 if (added_to_the_cart(9)) { ?>             
					<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>                
              <?php   } else {       ?>                 
				 <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>            
				 <?php         }                  
				 }    ?>  
				</div>
			 </div>
			 
			  <div class="col-sm-3" >
			    <div class="block-content">
			      <div class="products" >
			        <img src="images/shirt_2.jpg" class="img-responsive img-thumbail" ></img> 
			      </div>
			      <div style="text-align:center;">
			        <h3>John wick</h3>
			         <P>Price:Rs. 800.00</P>
			      </div>
			          			      <?php if (!isset($_SESSION['email'])) { ?>       
				          <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>                     
				 <?php     } else {             
				 //We have created a function to check whether this particular product is added to cart or not.       
				 if (added_to_the_cart(10)) { ?>             
					<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>                
              <?php   } else {       ?>                 
				 <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>            
				 <?php         }                  
				 }    ?>  
				 
			    </div>
			</div>
			 
			  <div class="col-sm-3">
			    <div class="block-content">
			       <div class="products">
			          <img src="images/shirt_3.jpg" class="img-responsive img-thumbail" ></img>
			       </div>
			       <div style="text-align:center;">
			         <h3>Levi's</h3>
			          <P>Price:Rs. 3000.00</P>
			        </div>
			            			      <?php if (!isset($_SESSION['email'])) { ?>       
				          <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>                     
				 <?php     } else {             
				 //We have created a function to check whether this particular product is added to cart or not.       
				 if (added_to_the_cart(11)) { ?>             
					<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>                
              <?php   } else {       ?>                 
				 <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>            
				 <?php         }                  
				 }    ?>  
			   </div>
			 </div>
			 
			  <div class="col-sm-3" >
			    <div class="block-content">
			      <div class="products">
			         <img src="images/shirt_4.jpg" class="img-responsive img-thumbail" ></img>
			      </div>
			       <div style="text-align:center;">
			         <h3>Peter England</h3>
			         <P>Price:Rs. 2000.00</P>
			       </div>
			         			      <?php if (!isset($_SESSION['email'])) { ?>       
				          <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>                     
				 <?php     } else {             
				 //We have created a function to check whether this particular product is added to cart or not.       
				 if (added_to_the_cart(12)) { ?>             
					<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>                
              <?php   } else {       ?>                 
				 <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>            
				 <?php         }                  
				 }    ?>  
				 
			 </div>
			</div>
			
			
			 
		 </div>
		   
	 </div>
  
  </div>
  
 <?php include 'include/footer.php' ?>
  
 </body>
</html> 