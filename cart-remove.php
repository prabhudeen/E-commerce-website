<?php

require 'include/common.php';
if($_SERVER['REQUEST_METHOD']=='GET')
{
	 $user_id=$_SESSION['id'];
	 $item_id=$_GET['id'];
	 $query="DELETE FROM users_items WHERE users_items.user_id=$user_id AND users_items.item_id=$item_id";
	 $res=mysqli_query($con,$query);
	 if(!$res)
	 {
		 echo mysqli_error($con);
	 }
	 mysqli_close($con);
	 header('location:cart.php');
	
}

?>