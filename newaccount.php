<!DOCTYPE html>
<html lang="en">
<head>
<title>Reluctant Norwegian's Mead</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="reluctant.css">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
</script>
<! [endif]-->
</head>


<body>
<div id="wrapper">
<div id="container">

<?php
include('header.html');
include('nav.php');
?>


<main role="main" id="content">
<?php
/*
This script will allow a user to create a new account
*/

$host = "localhost"; // Host name 
$username = "phalvorsen"; // Mysql username 
$password = "10995253"; // Mysql password 
$db_name = "phalvorsendb"; // Database name 
$tbl_name = "members"; // Table name 


// Connect to server and select databse.
$connect = mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect" . mysqli_connect_error()); 


// username and password sent from form 
$myusername = mysqli_real_escape_string($connect, $_POST['myusername']); 
$mypassword = mysqli_real_escape_string($connect, $_POST['mypassword']); 

$sql = "INSERT INTO meadcustomers(
					customerid,
					username,
					password)
					VALUES ('0',
					'$myusername',
					'$mypassword')";

if (mysqli_query($connect, $sql)) 
{
   echo "Your Account Has Been Created.  Please login.";
}
else
{
   echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);

?>

</main>

<?php
include('footer.html');
?>

</div>
</div>

</body> 
</html>