<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="description" content="Creating Web Applications Lab 10" />
<meta name="keywords" content="PHP, MySql" />
<title>Retrieving records to HTML</title>
</head>
<body>
<h1>Orders Search Results</h1>
<?php
	require_once ("settings.php");

	$conn = @mysqli_connect($host,
		$user,
		$pwd,
		$sql_db
	);
	
	if (!$conn) {
		echo "<p>Database connection failure.</p>";
	} else {

		$fname = trim($_POST["fname"]);
		$lname = trim($_POST["lname"]);
		$order_cost = trim($_POST["order_cost"]);
		$order_status = trim($_POST["order_status"]);
		$product_name = "";
		if (isset ($_POST["paint"]))
			$product_name = $product_name."Paint";
		if (isset ($_POST["spoiler"]))
			$product_name = $product_name."Spoiler";
		if (isset ($_POST["roofRacks"]))
			$product_name = $product_name."RoofRacks";
		if (isset ($_POST["tintedWindows"]))
			$product_name = $product_name."TintedWindows";

		$sql_table="orders";

		$query = "SELECT * FROM orders
						WHERE fname LIKE '$fname%' 
						AND lname LIKE '$lname%'
						AND order_status LIKE '$order_status%'
						AND order_cost LIKE '$order_cost%' 
						AND product_name LIKE '$product_name%'";

		if ($_POST['searchtype'] == "delete"){
			$query = "DELETE FROM orders
					WHERE fname = '$fname'
					AND lname = '$lname'";
			mysqli_query($conn, $query);
			$result =  mysqli_query($conn, "SELECT * FROM orders");
		}
		else if ($_POST['searchtype'] == "change"){
			$newstatus = trim($_POST["newstatus"]);
			$query = "UPDATE orders
					SET order_status = '$newstatus'
					WHERE fname = '$fname'
					AND lname = '$lname'";
			mysqli_query($conn, $query);
			$result =  mysqli_query($conn, "SELECT * FROM orders");
		}

		$result = mysqli_query($conn, $query);

		if (!$result) {
			echo "<p>No results found.</p>";
		} else {
			echo "<table border=\"1\">\n";
			echo "<tr>\n "
				."<th scope=\"col\">Order Number</th>\n "
				."<th scope=\"col\">First Name</th>\n "
				."<th scope=\"col\">Last Name</th>\n "
				."<th scope=\"col\">Cost</th>\n "
				."<th scope=\"col\">Time</th>\n "
				."<th scope=\"col\">Status</th>\n "
				."<th scope=\"col\">Product</th>\n "
				."</tr>\n ";

			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>\n ";
				echo "<td>", $row["order_id"], "</td>\n ";
				echo "<td>", $row["fname"], "</td>\n ";
				echo "<td>", $row["lname"], "</td>\n ";
				echo "<td>", $row["order_cost"], "</td>\n ";
				echo "<td>", $row["order_time"], "</td>\n ";
				echo "<td>", $row["order_status"], "</td>\n ";
				echo "<td>", $row["product_name"], "</td>\n ";
				echo "</tr>\n ";
			}
			echo "</table>\n ";

			mysqli_free_result($result);
		}

		mysqli_close($conn);
	}
?>