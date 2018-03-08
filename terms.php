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
$terms = array('Metheglin', 'Melomel', 'Cyser', 'Pyment', 'Braggot', 'Varietal'); //store the terms in an array 

print'Below is a list of terms as they apply to mead. This will surely help you in picking out one of our various brews.<br><dl>';

	for($i=0; $i<count($terms); $i++) //iterate through the terms and output their definitions
	{
		print"<dt>$terms[$i]</dt>";

		if($i == 0)
		{
			print'<dd>Meads that are brewed with spices and herbs</dd>';
		}
		elseif($i == 1)
		{
			print'<dd>Meads brewed with fruit</dd>';
		}
		elseif($i == 2)
		{
			print'<dd>A special term for meads brewed with apples</dd>';
		}
		elseif($i == 3)
		{
			print'<dd>A special term for meads brewed with grapes</dd>';
		}
		elseif($i == 4)
		{
			print'<dd>Meads brewed with malted grains</dd>';
		}
		elseif($i == 5)
		{
			print'<dd>Refers to the nectar source obtained by the bees to make the honey, such as buckwheat or orange blossom honey</dd>';
		}
	}
print'</dl>';

?>

</main>

<?php
include('footer.html');
?>

</div>
</div>
</body>

</html>