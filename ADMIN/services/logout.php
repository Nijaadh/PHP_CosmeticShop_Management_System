

<?php

session_start();
include"../config/dbConnection.php";


?>

<?php

session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page or any other page as needed
header("Location: login.php");
exit();
?>