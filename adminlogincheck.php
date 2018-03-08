<?php
session_start();

/*
This script checks the login data from the admin table to verify
that it is an admin logging in to review the orders table
*/

$host = "localhost"; // Host name 
$username = "phalvorsen"; // Mysql username 
$password = "10995253"; // Mysql password 
$db_name = "phalvorsendb"; // Database name 
$tbl_name = "meadcustomers"; // Table name 


// Connect to server and select databse.
$connect = mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect" . mysqli_connect_error()); 


// username and password sent from form 
$_SESSION["myusername"] = mysqli_real_escape_string($connect, $_POST['myusername']); 
$_SESSION["mypassword"] = mysqli_real_escape_string($connect, $_POST['mypassword']); 

$myusername = stripslashes($_SESSION["myusername"]);
$mypassword = stripslashes($_SESSION["mypassword"]);

$sql = "SELECT * FROM meadadmin WHERE username ='$myusername' and password ='$mypassword';";
$result = mysqli_query($connect, $sql);

// Mysql_num_row is counting table row
$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

header("location:report.php");
}
else {
echo "Wrong Username or Password";
}

?>