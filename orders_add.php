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

		$fname = trim($_POST["fname"]);
		$lname = trim($_POST["lname"]);
		$order_cost = trim($_POST["order_cost"]);
		$order_status = trim($_POST["order_status"]);
		$product_name = "";
		if (isset ($_POST["paint"]))
			$product_name = $product_name."Paint ";
		if (isset ($_POST["spoiler"]))
			$product_name = $product_name."Spoiler ";
		if (isset ($_POST["roofRacks"]))
			$product_name = $product_name."Roof Racks ";
		if (isset ($_POST["tintedWindows"]))
			$product_name = $product_name."Tinted Windows ";
		

		$sql_table="orders";

		$query = "insert into $sql_table(fname, lname, order_cost, order_status, product_name) values ('$fname', '$lname', '$order_cost', '$order_status', '$product_name')";

		$result = mysqli_query($conn, $query);

		if(!$result) {
			echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
		} else {
			echo "<p class=\"ok\">Successfully added New Order record</p>";
		}

		mysqli_close($conn);
	}
?>