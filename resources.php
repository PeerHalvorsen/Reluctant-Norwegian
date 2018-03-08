<!-- This page is just informational. It's superfluous to the project beyond the includes -->
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
<h3>Health Benefits of Mead</h3>
<p>Check out this <a href="http://gizmodo.com/the-drink-of-viking-warlords-could-help-fight-disease-1759503055">Gizmodo article</a> for the potential health benefits of mead!</p>

<h3>Questions or Comments?</h3>
<fieldset>
<legend>Contact Us</legend>
<form name="contact" id="contact" method="post" action="contact.php">
	<label for="name">Name:</label>
	<input type="text" name="name" id="name" required><br><br>
	<label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>
	<label for="questions">Questions or Comments:</label><br>
	<textarea name="questions" id="questions" rows="5" cols="40" required>Let us know what you think.</textarea><br><br>
</fieldset>
   
   <div id="form-buttons">
      <input type="submit" value="Send">
      <input type="reset" value="Clear">
   </div>
 </form>  

</main>

<?php
include('footer.html');
?>

</div>
</div>
</body>

</html>