<!DOCTYPE html>

<body>

<?php

/*
This script will do multiple things to complete an order.
First it inserts the order based on the session id into the completed 
orders table. Then it updates the inventory table based on the values stored in
the order form. Finally it will delete the order from the orders table.
*/

$id = $_POST['id'];

$server = 'localhost';
$user = 'phalvorsen';
$pass = '10995253';
$mydb = 'phalvorsendb';
 
$connect = mysqli_connect($server, $user, $pass, $mydb); 

if(!$connect)
{
	die("Connection failed: " . mysqli_connect_error());
}

$select_q = "SELECT * FROM meadorders WHERE orderid = '$id';";
$result = mysqli_query($connect, $select_q);
$order = mysqli_fetch_row($result);

//insert query to completed orders table
$insert_q = "INSERT INTO Completed_Orders (
			orderid,
			customerid, 
			surtr, 
			freyja, 
			idunn, 
			odin, 
			sif)
			VALUES (
			'$order[0]',
			'$order[1]',
			'$order[2]',
			'$order[3]',
			'$order[4]',
			'$order[5]',
			'$order[6]')";

if (mysqli_query($connect, $insert_q))
{
   echo "Order Transfered to completed orders successfully<br>";
}
else
{
   echo "Error: " . $insert_q . "<br>" . mysqli_error($connect);
}

//the following series of if statments will update inventory if order has more than 0 of each item
if ($order[2] > 0)
{
	$update_q1 = "UPDATE meadinventory SET Count = Count - '$order[2]' WHERE Prod_name = 'Surtr'";
 
	if(mysqli_query($connect, $update_q1))
	{
		echo "Surtr updated successfully <br>";
	}  
	else
	{
		echo "Error: " . $update_q1 . "<br>" . mysqli_error($connect);
	}
}

if ($order[3] > 0)
{
	$update_q2 = "UPDATE meadinventory SET Count = Count - '$order[3]' WHERE Prod_name = 'Freyja'";
	if(mysqli_query($connect, $update_q2))
	{
		echo "Freyja updated successfully <br>";
	}  
	else
	{
		echo "Error: " . $update_q2 . "<br>" . mysqli_error($connect);
	}
}

if ($order[4] > 0)
{
 	$update_q3 = "UPDATE meadinventory SET Count = Count - '$order[4]' WHERE Prod_name = 'Idunn'";
	if(mysqli_query($connect, $update_q3))
	{
		echo "Idunn updated successfully <br>";
	}  
	else
	{
		echo "Error: " . $update_q3 . "<br>" . mysqli_error($connect);
	}
}

if ($order[5] > 0)
{
	$update_q4 = "UPDATE meadinventory SET Count = Count - '$order[5]' WHERE Prod_name = 'Odin'";
	if(mysqli_query($connect, $update_q4))
	{
		echo "Odin updated successfully <br>";
	}  
	else
	{
		echo "Error: " . $update_q4 . "<br>" . mysqli_error($connect);
	}
}

if ($order[6] > 0)
{
	$update_q5 = "UPDATE meadinventory SET Count = Count - '$order[6]' WHERE Prod_name = 'Sif'";
	if(mysqli_query($connect, $update_q5))
	{
		echo "Sif updated successfully <br>";
	}  
	else
	{
		echo "Error: " . $update_q5 . "<br>" . mysqli_error($connect);
	}
}

//delete query removes the row from the table based on orderid
$delete_q = "DELETE FROM meadorders WHERE orderid = '$id' LIMIT 1";

if(mysqli_query($connect, $delete_q))
{
	echo "Order completed successfully <br>";
}  
else
{
	echo "Error: " . $delete_q . "<br>" . mysqli_error($connect);
}
?>

<br>
<a href="http://csci1450.spcompsci.org/~phalvorsen/Project/report.php">Return to Orders Report Page</a>

</body>
</html>