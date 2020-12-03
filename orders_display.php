<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="description" content="Creating Web Applications Lab 10" />
<meta name="keywords" content="PHP, MySql" />
<title>Retrieving records to HTML</title>
</head>
<body>
<h1>List of Orders</h1>
<?php
	require_once ("settings.php");

	$conn = @mysqli_connect($host,
		$user,
		$pwd,
		$sql_db
	);

	if (!$conn) {
		echo "<p>Database connection failure</p>";
	} else {
		$sql_table="orders";

		$query = "select order_id, fname, lname, order_cost, order_time, order_status, product_name FROM orders ORDER BY order_id, fname, lname, order_cost, order_time, order_status, product_name";

		$result = mysqli_query($conn, $query);

		if(!$result) {
			echo "<p>Something is wrong with ", $query, "</p>";
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

			mysqli_close($conn);
		}
	}
?>
</body>
</html>