<?php
session_start();
include "connection.php";


if(isset($_GET['token'])){
	$token=$_GET['token'];

	$updatequery = "update registration set status='active' where token='$token'";

	$query = mysqli_query($link,$updatequery);

	if ($query) {
		if(isset($_SESSION['msg'])){
			$_SESSION['msg'] = "Account Updated Successfully. You can Login now.";
			header("location:login.php");
		}else{
			$_SESSION['msg'] = "You are logged out.";
			header("location:login.php");
		}
	}else{
		$_SESSION['msg'] = "Account not Updated";
			header("location:register.php");
	}
}

?>