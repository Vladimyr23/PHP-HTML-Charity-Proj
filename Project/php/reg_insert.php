<?php
//Code to insert a registration form data into the SQL Database 'users' table
session_start();
include ('connect.php');

// Escape user inputs for security
$first_name = htmlentities(mysqli_real_escape_string($link, $_REQUEST['firstname']));
$last_name = htmlentities(mysqli_real_escape_string($link, $_REQUEST['lastname']));
$email = htmlentities(mysqli_real_escape_string($link, $_REQUEST['email']));
$pass = htmlentities(mysqli_real_escape_string($link, $_REQUEST['password']));

// attempt insert query execution
$query = "insert into users (user_firstname, user_surename, user_password, user_email ) values('$first_name', '$last_name', '$pass', '$email')";

if(mysqli_query($link, $query)){
    echo "Records added successfully.";
    header("Location: ../index.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

?>