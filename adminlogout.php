<?php 
/*
This script is simply a log out for the admin
*/
session_destroy();

header("location:home.php");

?>