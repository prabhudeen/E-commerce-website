<?php
include 'include/common.php';

 $user_id="" ;
 $password="";
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
	 $user_id=mysqli_real_escape_string($con,$_POST['user_id']);
	 $password=mysqli_real_escape_string($con,$_POST['password']);
	 $password=MD5($password);
	 $query="SELECT * FROM users WHERE email='$user_id' and password='$password'";
	 $res=mysqli_query($con,$query);
	 if(mysqli_num_rows($res)>0)
	 {
		 $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
		 $_SESSION['email']=$row['email'];
		 $_SESSION['id']=$row['id'];
		 $_SESSION['name']=$row['name'];
		 mysqli_close($con);
		// echo "ok";
	   header("location:products.php");
	 
		 
    }
	else{
		mysqli_close($con);
		//echo "Email Address or Password incorrect";
		header('location:login.php');
		
	}
	
 }
?>