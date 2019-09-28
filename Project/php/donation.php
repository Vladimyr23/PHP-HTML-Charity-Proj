<?php
//Code to insert a registration form data into the SQL Database 'users' table
session_start();
include ('connect.php');

// Escape user inputs for security
$don_amount = htmlentities(mysqli_real_escape_string($link, $_REQUEST['donate']));

//User identification
if (isset($_SESSION['loggedIn'])){
	$user=$id;					
}else{
	$user='NULL';
}
// attempt insert query execution
$query = "insert into donations_tbl (user_id, don_amount) values('$user', '$don_amount')";

if(mysqli_query($link, $query)){
    echo "Your payment has been writen into the data base.";
    header("Location: ../register.html");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>