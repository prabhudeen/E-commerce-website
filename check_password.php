<?php
  include 'include/common.php';
  if(isset($_SESSION['email']))
  {
	  if(isset($_POST['old_password'])){
	  $pass=md5(mysqli_real_escape_string($_POST['old_password']));
	  $email=mysqli_real_escape_string($_SESSION['email']);
	  $query="SELECT * FROM users WHERE email='$email' AND password='$pass'";
	  $res= mysqli_query($con,$query);
	  if(mysqli_num_rows($res)>0)
	  {
		  $_SESSION['email']=$_SESSION['email'];
		  mysqli_close($con);
		  echo "ok";
	  }
	  else{
		   echo "false";
		   mysqli_close($con);
	    }
	  }
	  else{
		  echo "false";
		  mysqli_close($con);
	  }
	  
	  
  }
?>