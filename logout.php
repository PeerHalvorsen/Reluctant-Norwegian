<?php 
session_destroy(); //destroys a session for logout
?>
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
<p>You Have Been Logged Out.</p>

</main>

<?php
include('footer.html');
?>

</div>
</div>

</body>
</html>

