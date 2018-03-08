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

<h2>Please Enter Your Login Information</h2>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td colspan="3"><strong>User Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<h3>New User? Please Enter a Login and Password Below To Create a New Account</h3>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<form name="form2" method="post" action="newaccount.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td colspan="3"><strong>User Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Create Account"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</main>

<?php
include('footer.html');
?>

</div>
</div>
</body>


</html>