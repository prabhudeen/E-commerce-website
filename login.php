<!DOCTYPE html>
<?php require 'include/common.php' ?>
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

<script>
/*$(function(){
	
	var userid=$("#user_id").val();
	var pass=$("#pass").val();
	$("#email").hide();
	$("#password").hide();
	 $("#user_id").focusout(function(){
	   
	   check_email();
   });
	
	 $("#login").submit(function(){
	   
	     check_email();
		 $.ajax({
			
             url: 'login_submit.php',
             type: 'POST'.,
             data : $("#login").serialize(),
			 success :function (response){
				 
				 if(response=="ok"){
					 
					 header('location: products.php');
				 }
				 else{
					 $("#message").html(response);
					 $("#message").show();
					 return false;
			     }
             			 
			 }
		 });
   });
   
   function check_email()
   {
	   var reg=new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,9}$/i);
	   if(reg.test(userid)){
		   $("#email").hide();
	   }
	   else{
		   $("#email").html("Enter valid email address");
		   $("#email").show();
	   }
   }
   function check_password()
   {
	   if(pass.lenght()<1)
	   {
		   $("#password").html()
	   }
   }
});
 */
</script>

<body>
  <?php include 'include/header.php'?>
  
  <div class="container " style="margin-bottom:250px;">
    <div class="row">
	   <div class="col-sm-offset-3 col-sm-6">
		     <div class="panel panel-primary" style="margin-top:130px;">
			     <div class="panel panel-heading">
				     <h3>LOGIN</h3>
				 
				 </div>
				 <div class="panel-body">
				     <p><i><b> LogIn to make a purchase.</b></i></p>
				    <form id="login" method='post' action="login_submit.php" class="form-group">
					      <label id="email"></label><br>
					      <input type="email" class="form-control"  name="user_id" id="user_id" placeholder="Email" required></input><br>
						  <label id="password"></label><br>
						  <input type="password" class="form-control" name="password" id="pass" placeholder="password" required></input><br>
						  <label id="message"></label><br>
						         <button  class="btn btn-lg btn-primary " type="submit"  id="submit"> Login</button><br><br>
							 
					</form>
					
				 </div>
			 
                 <div class="panel-footer">
					    <p><b>Don't have an account? <a href="signup.php">Register</a></b></p>
					</div>			 
			   
		     </div>
		 
		</div>
	    
	
	</div>
  
  </div>
  
  <?php include 'include/footer.php'?>
  
  
</body>
</html>