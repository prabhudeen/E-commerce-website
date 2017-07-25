<?php
require 'include/common.php';
if(isset($_SESSION['email'])){
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		 $old_password=MD5($_POST['old_password']);
		 $new_password=MD5($_POST['new_password']);
		 $re_password=MD5($_POST['re_password']);
		 $email_id=$_SESSION['email'];
		 if(mysqli_num_rows(mysqli_query($con,"SELECT * FROM users WHERE email='$email_id' AND password='$old_password' "))>=1){
			 
		 $query=" UPDATE users SET password='$new_password' WHERE email='$email_id' AND password='$old_password' ";
		 $res=mysqli_query($con,$query);
		  
			
		 mysqli_close($con);
		 header('location:setting.php');
		 }
		 else{
			 
			 mysqli_close($con);
			 $_SESSION['pass']="wrong password"	;
            header('location:setting.php');	
		 }
	      
	}
	
}
?>