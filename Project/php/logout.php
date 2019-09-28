<?php
//Logout page is having information about how to logout from login session.
session_start();
unset($_SESSION["login_user"]);
   
session_destroy();
header("Location: ../register.html");

?>