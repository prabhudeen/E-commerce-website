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
 <style>
  footer{
	  
	  position:fixed;
	height:40px;
	
	background-color:black;
	
	text-align:center;
	
	color:white;
	
	left:0px;
	right:0px;
	bottom:0px;
	margin-bottom:0px;
  }
 </style>
 
</head>
<body>
   <?php require 'include/header.php';
    
   ?>
	
	 <div class="container">
	      <div class="row" style="margin-top:90px;">
		      <div class="col-sm-offset-3 col-sm-6">
			     
					  <?php 
					  
					      $sum=0;
					     
					  if(isset($_SESSION['email'])){
						  
						  $user_id=$_SESSION['id'];
						  $query="SELECT items.id,items.name,items.price  FROM items INNER JOIN users_items ON items.id=users_items.item_id
                                                       						 AND users_items.user_id= $user_id";
						  $res=mysqli_query($con,$query);
						    if(mysqli_num_rows($res)>=1){
							?>
							
							<table class="table table-striped">
				    
					            
								<thead>
					               <tr>
						               <th>ItemNumber</th>
					                    <th>ItemName</th>
					                    <th>Price</th>
						            </tr>
					             <thead>
						<?php	
						  $id="";
						  while($arr=mysqli_fetch_array($res,MYSQLI_NUM)){ 
						     
							 $sum=$sum+$arr[2];
							 $id=$arr[0];
						  ?>
							<tbody> 
							  <tr>
							      <td><?php echo $arr[0] ;?></td>
								  <td><?php echo $arr[1] ;?></td>
								  <td><?php echo $arr[2] ;?></td>
								  <td> <a href="cart-remove.php?id=<?php echo $id; ?>" class="btn btn-success bnt-block">Remove</a></td>

       							  </tr>
							  
							  
							  
						<?php  }
						
						
							?>
							
							  <tr>
					           <th></th>
						       <th>Total</th>
						        <th>Rs.<?php echo $sum; ?></th>
					   
					          <td> <a href="succes.php" class="btn btn-primary ">Confirm Order</a></td>
					   
				            	</tr>
								
						</tbody>
				 </table>
							
					<?php	
						  
					  }
					  else{
						  ?>
						  
						  <div class="jambotron">
						    <p><strong><h3>You have not selected any Item.</h3<</strong></p>
						  </div>
						  <?php
					  }
					  }?>
					  
					 
					
			  
			  </div>
		  </div>
	   
	   </div>
	   
	   
	<?php include 'include/footer.php' ?>
	
</body>
</html>