<!DOCTYPE html>

<br>
<body>

<?php

/*
This script will output a report of all orders placed by customers
It also provides the administrator a button which will complete orders
*/

$server = 'localhost';
$user = 'phalvorsen';
$pass = '10995253';
$mydb = 'phalvorsendb';

$connect=mysqli_connect($server, $user, $pass, $mydb);
if(!$connect)
{
   die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM meadorders";
$result = mysqli_query($connect, $sql);
 
if (mysqli_num_rows($result) > 0) 
{
    // Table Headers
    echo '<table border="1"><tr><th>Order#</td><th>Customer#</td><th>Surtr</td><th>Freyja</td><th>Idunn</td><th>Odin</td><th>Sif</td><td>Complete Order</td></tr>';



	//Results inserted into table
	while($row = mysqli_fetch_assoc($result)) 
	{
      $id = $row['orderid'];

    	echo '<tr><td>'.$row['orderid'].'</td><td>'.$row['customerid'].'</td><td>'.$row['surtr'].'</td><td>'.$row['freyja'].'</td><td>'.$row['idunn'].'</td>
             <td>'.$row['odin'].'</td><td>'.$row['sif'].'</td>
          <td><form action="completeorder.php" method="post"><input type="hidden" name="id" value="' . $id . '"/><input type="submit" value="Complete Order"></form></td></tr>';
	}
}

else 
{
           echo '0 results. That\'s odd.';
}
 

?>


<!--Provides a logout button for the user to return to the main page of the website-->
<p>Would you like to log out?</p>
<form name="form2" method="post" action="adminlogout.php">
<input type="submit" name="Submit" value="Logout"></td>
</form>
</body>
</html>