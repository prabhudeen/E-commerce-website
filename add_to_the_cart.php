<?php

function added_to_the_cart($item){
	//include 'include/common.php';
	$con=mysqli_connect('localhost','root','','store');
	$user_id="";
	if(isset($_SESSION['email'])){
		$user_id=$_SESSION['id'];
	}
	$query=" SELECT *FROM users_items WHERE user_id= $user_id AND item_id= $item and status= 'Added to cart' ";
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res)>=1){
		
		return 1;
	}
	else
	{
		return 0;
	}
	
	
	
}

?>