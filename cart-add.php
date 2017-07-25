<?php
include 'include/common.php';
$user_id=$item_id="";
if(isset($_SESSION['email'])){
	
	$user_id=$_SESSION['id'];
}

if($_SERVER['REQUEST_METHOD']=='GET'){
	
	$item_id=$_GET['id'];
	$query="INSERT INTO users_items(user_id,item_id,status)
	                             values($user_id,$item_id,'Added to cart')";
    $res=mysqli_query($con,$query);
	if(mysqli_error($con))
	{
		echo mysqli_error($con);
	}
	header('location:products.php');
	
}
?>