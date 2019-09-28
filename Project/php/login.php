<?php
//File to login as a member
session_start();

if (isset($_POST['login'])){
	include_once("connect.php");
	$user_e_mail = strip_tags($_POST['e_mail']);
	$mypassword = strip_tags($_POST['psw']);
	
	$user_e_mail = stripslashes($user_e_mail);
	$mypassword = stripslashes($mypassword);
	
	$user_e_mail = mysqli_real_escape_string($link, $user_e_mail);
	$mypassword = mysqli_real_escape_string($link, $mypassword);
	
	//$mypassword =md5($mypassword);
	
	$sql = "SELECT * FROM users WHERE user_email = '$user_e_mail'";
	$result = mysqli_query($link,$sql);

	$row = mysqli_fetch_array($result);
	$id = $row['user_id'];  
	$db_password = $row['user_password'];
	$user_fname = $row['user_firstname'];
	$user_surename = $row['user_surenamename'];
	  
	// If result matched $user_e_mail and $mypassword
		
	if($mypassword == $db_password) {
		//session_register("user_e_mail");
		$_SESSION['login_user'] = $user_e_mail;
		$_SESSION['id']=$id;
		$_SESSION['loggedIn'] = true;	
		header("location: ../donation.html");
	}else {
		echo "Your email or Password is invalid";		
	}
} 
?>