<!DOCTYPE html>
<?php require 'include/common.php';?>
<html>
<head>
 <title>LifeStyle Store</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,intial-scale=1.0">
 <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
 <link type="text/css" rel="stylesheet" href="index.css">
 
 <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
<script src="external.js"></script>
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
<script>
 $(function(){
	
   $("#opass").hide();
   $("#npass").hide();
   $("#rpass").hide();   
   var error_opass=true;
   var error_npass=true;
   var error_rpass=true;
   var both=false;
   
   $("#old_password").focusout(function(){
	   
	   check_length();
   });
   
   $("#new_password").focusout(function(){
	   
	   check_new_pass();
   });
   
   $("#re_password").focusout(function(){
	   
	   check_re_pass();
   });
   
    $("#setting").submit(function(){
	   
	   error_opass=false;
	   error_npass=true;
	   error_rpass=true;
	   
	   
	   check_new_pass();
	   check_re_pass();
	   check_old_pass();
	   if(error_rpass==true && error_npass==true && error_opass==true)
	   {
		   alert("Your password has been changed");
		   return true;
	   }
	   
	   else
	   {
		   return false;
	   }
   });  
   
   function check_old_pass(){
	   
	   
	   
		   $.ajax({
			   
			   url : 'check_password.php',
			   type : 'POST',
			   data : $("#setting").serialize(),
			   cache : false,
			   beforeSend:function()
			   {
				   $("#submit").val("connecting...");
			   },
			   success:function(response)
			   {
				   if(response=="ok")
				   {
					  
					  
					  error_opass=true;
					    $("#opass").hide();
				   }
				   else
				   {
					   error_opass=false;
					   $("#opass").html("incorrect password");
					   $("#opass").show();
					   
				   }
			   }
			   
		   });
		  
	   
   }  
   
   function check_new_pass(){
	   
	   if($("#new_password").val().length<5)
	   {
		   $("#npass").html("should be 5 - 20");
		   $("#npass").show();
		   error_npass=false;
	   }
	   else
	   {
		   $("#npass").hide();
	   }
   }
   
   function check_re_pass(){
	   
	   if($("#re_password").val().length<5 || $("#new_password").val()!=$("#re_password").val())
	   {
		   $("#rpass").html("password not matched");
		   $("#rpass").show();
		   error_rpass=false;
	   }
	   else
	   {
		   $("#rpass").hide();
	   }
   }
   function check_length()
   {
	   if($("#old_password").val().length<4)
	   {
		   $("#opass").html("password is incorrect");
		   $("#opass").show();
		   error_opass=false;
	   }
	   else
	   {
		   $("#opass").hide();
	   }
   }
	 
 });
</script>

<body>
    <?php require 'include/header.php';
	
	$_SESSION['pass']="";
	
	?>
	
	 <div class="container">
	      <div class="row" style="margin-top:90px;">
		     <div class="col-sm-offset-3 col-sm-6">
			    
				<h3><b>Change Password</b></h3>
				<form id="setting" action="setting-change.php" method="post" class="form-group" >
				
				   <label class="" id="opass"></label><br>
				   <input type="password" class="form-control" name= "old_password" id= "old_password"  placeholder="Old Password"  required autofocus> </input><br>
				   <label id="npass"></label><br>
				   <input type="password" class="form-control" name="new_password"  id= "new_password" placeholder="New Password" required> </input><br>
				  <label id="rpass"></label><br>
				   <input type="password" class="form-control" name="re_password" id= "re_password" placeholder="Re-type Password" required></input><br>
				   <button type="submit" id="submit" class="btn btn-lg btn-primary"  >Change</button>
				   
				</form>
			 
			 </div>
			 
			 
		  </div>
	   
	   </div>
	   
	   
	<?php include 'include/footer.php' ?>
	
</body>
</html>