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

<form action="order.php" method=post>

<table>
<caption>The Meads Currently in Our Cellar</caption>
  <thead>
	<tr>
	  <th>Name</th>
	  <th>Description</th>
	  <th>Price(750ml)</th>
	  <th>Order(Max 10)</th>
	</tr>
  </thead>
  <tbody>
    <tr>
	 <td>Surtr's Conflagration</td>
	 <td>A metheglin brewed with orange blossom honey and habaneros</td>
	 <td>$25.00 per bottle</td>
	 <td><input type="number" name='Surtr' value='0' min='0' max='10'><td> 
	</tr>
    <tr>
	 <td>Freyja's Tears</td>
	 <td>A melomel brewed with clover honey and cherries</td>
	 <td>$30.00 per bottle</td>
	 <td><input type="number" name='Freyja' value='0' min='0' max='10'><td> 
	<tr>
	 <td>Idunn's Elixir</td>
	 <td>A cyser brewed with wildflower honey, Golden Delicious apples, and crabapples</td>
	 <td>$25.00 per bottle</td>
	 <td><input type="number" name='Idunn' value='0' min='0' max='10' value='0'><td> 
	</tr>
	<tr>
	 <td>Odin's Ravens</td>
	 <td>A pyment brewed with Syrah grapes and buckwheat honey</td>
	 <td>$20.00 per bottle</td>
	 <td><input type="number" name='Odin' value='0' min='0' max='10'><td> 
	</tr>
	<tr>
	 <td>Sif's Bounty</td>
	 <td>A braggot brewed with wheat malt and wildflower honey</td>
	 <td>$15.00 per bottle</td>
	 <td><input type="number" name='Sif' value='0' min='0' max='10'><td> 
	</tr>
  </tbody>
</table>

<input type="submit" value="Submit Order">
<input type="reset" value="Clear Order">
</form>

	
</main>

<?php
include('footer.html');
?>

</div>
</div>
</body>

</html>