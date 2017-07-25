<?php
require 'include/common.php';
$name=$email=$password=$contact=$city=$address="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$contact=mysqli_real_escape_string($con,$_POST['contact']);
	$city=mysqli_real_escape_string($con,$_POST['city']);
	$address=mysqli_real_escape_string($con,$_POST['address']);
	
	$query="SELECT * FROM users WHERE email='$email' ";
	if(!($res=mysqli_query($con,$query))){
		echo mysqli_error($con);
	}
	
	if(!mysqli_num_rows($res))
	{
		$password=MD5($password);
		$query="INSERT INTO users(name,email,password,contact,city,address)
		                          VALUES('$name','$email','$password','$contact','$city','$address')";
					
       					
	   if(!mysqli_query($con,$query)){
		  echo mysqli_error($con);
	   }
		
		$res=mysqli_insert_id($con);
		$query="SELECT * FROM users WHERE id='$res'";
		
		if(!($res=mysqli_query($con,$query))){
		    echo mysqli_error($con);
	}
		$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
		$_SESSION['id']=$row['id'];
		$_SESSION['email']=$row['email'];
		$_SESSION['name']=$row['name'];
		mysqli_close($con);
		header("location:products.php");
	}
}
?>