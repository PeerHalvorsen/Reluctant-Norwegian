<?php
session_start();
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

<?php
/*
This script accepts data from the order form and will insert it into the
meadorders table.  It also calculates the bill for the user.
*/

$server = 'localhost';
$user = 'phalvorsen';
$pass = '10995253';
$mydb = 'phalvorsendb';

$connect = mysqli_connect($server, $user, $pass, $mydb);
if(!$connect)
{
   die("Connection failed: " . mysqli_connect_error());
}

$name = stripslashes($_SESSION["myusername"]);
$password = stripslashes($_SESSION["mypassword"]);

$_SESSION["Surtr"] = $_POST['Surtr'];
$_SESSION["Freyja"] = $_POST['Freyja'];
$_SESSION["Idunn"] = $_POST['Idunn'];
$_SESSION["Odin"] = $_POST['Odin'];
$_SESSION["Sif"] = $_POST['Sif'];

//these variable store the count of items ordered
$surtr = $_SESSION["Surtr"];
$freyja = $_SESSION["Freyja"];
$idunn = $_SESSION["Idunn"];
$odin = $_SESSION["Odin"];
$sif = $_SESSION["Sif"];

//these variables storer the cost of a single item and the total cost
$totalcost = "0.00";
$surtrcost = "25.00";
$freyjacost = "30.00";
$idunncost = "25.00";
$odincost = "20.00";
$sifcost = "15.00";

//select the customerid based on the name and password to instert into orders taqble
$select_q = "SELECT customerid FROM meadcustomers WHERE username ='$name' and password ='$password';";
$result = mysqli_query($connect, $select_q);
$customerid = mysqli_fetch_row($result);


$insert_q = "INSERT INTO meadorders (
			orderid,
			customerid, 
			surtr, 
			freyja, 
			idunn, 
			odin, 
			sif)
         	Values ('0',
         	'$customerid[0]',
         	'$surtr',
         	'$freyja',
         	'$idunn',
         	'$odin',
         	'$sif')";

if (mysqli_query($connect, $insert_q)) 
{
   echo "Thank you $name for your order<br>";
   echo "Your bill is as follows: <br>";
}
else
{
   echo "Error: " . $insert_q . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);


//this series of if statements calculates the bill
if ($surtr > 0)
{
   $subcost = $surtrcost * $surtr;
   $totalcost = $totalcost + $subcost;
   echo "<h3>Surtr's Conflagration - $surtr bottles: &#36 $subcost</h3>";
}

if ($freyja > 0)
{
   $subcost = $freyjacost * $freyja;
   $totalcost = $totalcost + $subcost;
   echo "<h3>Freyja's Tears - $freyja bottles: &#36 $subcost</h3>";
}

if ($idunn > 0)
{
   $subcost = $idunncost * $idunn;
   $totalcost = $totalcost + $subcost;
   echo "<h3>Idunn's Elixir - $idunn bottles: &#36 $subcost</h3>";
}

if ($odin > 0)
{
   $subcost = $odincost * $odin;
   $totalcost = $totalcost + $subcost;
   echo "<h3>Odin's Ravens - $odin bottles: &#36 $subcost</h3>";
}

if ($sif > 0)
{
   $subcost = $sifcost * $sif;
   $totalcost = $totalcost + $subcost;
   echo "<h3>Sif's Bounty - $sif bottles: &#36 $subcost</h3>";
}

if ($totalcost == 0)
{
   echo "You didn't order anything";
}
else
{
   echo "<h3>Your total cost for this order is: &#36 $totalcost</h3>";
}

?>

</main>

<?php
include('footer.html');
?>

</div>
</div>

</body> 
</html>