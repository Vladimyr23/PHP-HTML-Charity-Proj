<?php 
//Login check for login window
session_start();
include('connect.php');
							
if (isset($_SESSION['login_user'])){
	$btn_label=$_SESSION['login_user']." Log Out";
	$btn_action="./php/logout.php";									
}else{
	$btn_label='Login';
	$btn_action="document.getElementById('id01').style.display='block'";
}
$str = "<button class=\"button\" onclick=\"$btn_action\">$btn_label</button>";
echo $str;
 ?>	