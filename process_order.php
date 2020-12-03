<?php
	function sanitise_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}

	function sanitise_string($data) {
		$data = preg_replace('/[^A-Za-z0-9]/', ' ', $data);
		$data = strip_tags($data);
		$data = trim($data);
		
		return $data;
	}

	function match_state($givenstate, $givenpostcode) {
		$result = false;
		$firstdigit = floor(($givenpostcode / 1000) % 10); 

		switch($givenstate) {
			case "VIC":
				if ($firstdigit == 3) {
					$result = true;
				}
			case "NSW":
				if ($firstdigit == 1 || $firstdigit == 2) {
					$result = true;
				}
			case "QLD":
				if ($firstdigit == 4 || $firstdigit == 9) {
					$result = true;
				}
			case "ACT":
				if ($firstdigit == 0) {
					$result = true;
				}
			case "NT":
				if ($firstdigit == 0) {
					$result = true;
				}
			case "SA":
				if ($firstdigit == 5) {
					$result = true;
				}
			case "WA":
				if ($firstdigit == 6) {
					$result = true;
				}
			case "TAS":
				if ($firstdigit == 7) {
					$result = true;
				}
		}

		return $result;
	}

	require_once ("settings.php");

	$conn = @mysqli_connect($host,
		$user,
		$pwd,
		$sql_db
	);

	if (!$conn) {
		echo "<p>Database connection failure</p>";
	} else {

	if (isset ($_POST["givenname"])) {
		$fname = sanitise_string($_POST["givenname"]);
		$fname = sanitise_input($fname);
	}

	if (isset ($_POST["familyname"])) {
		$lname = sanitise_string($_POST["familyname"]);
	}

	if (isset ($_POST["state"])) {
		$state = sanitise_string($_POST["state"]);
	}
	if (isset ($_POST["postcode"])) {
		$postcode = sanitise_input($_POST["postcode"]);
	}

	$product_cost = $_POST["cost"];
	$product_name = $_POST["addon"];
	$condition = $_POST["condition"];
	$status = "PENDING";


	$errMsg = "";

	if (empty($fname)) {
		$errMsg .= "<p>First name cannot be empty.</p>";
	} else if (!preg_match("/^[a-zA-Z]{1,25}/", $fname)) {
		$errMsg .= "<p>First name must be no more than 25 characters.</p>";
	}

	if (empty($lname)) {
		$errMsg .= "<p>Last name cannot be empty.</p>";
	} else if (!preg_match("/^[a-zA-Z]{1,25}/",$lname)) {
		$errMsg .= "<p>last name must be no more than 25 characters.</p>";
	}

	if ($state != "VIC" && $state != "NSW" && $state != "NT" && $state != "ACT" && $state != "TAS" && $state != "QLD" && $state != "WA" && $state != "SA") {
		$errMsg .= "<p>State must be VIC, NSW, NT, ACT, TAS, QLD, WA, or SA.</p>";
	}

	if (!preg_match("/^[0-9]{4}/", $postcode)) {
		$errMsg .= "<p>Postcode must be 4 digits.</p>";
	} else if (!match_state($state, $postcode)) {
		$errMsg .= "<p>The given postcode does not match the given state.</p>";
	}


	if ($errMsg == "") {

		if (!$conn) {
			echo "<p>Database connection failure. Application has failed.</p>";
		} else {
			$sql_table= "orders";
			$query = "INSERT INTO $sql_table (fname, lname, order_cost, order_status, product_name) VALUES ('$fname', '$lname', '$product_cost', '$status', '$product_name')";
			$result = mysqli_query($conn, $query);

			if (!$result) {
				echo "<p class=\"wrong\">Something went wrong, your application could not be processed", $query, "</p>";
			} else {
				echo "<p class=\"ok\">Successfully added your application.</p>";
			}

			mysqli_close($conn);
		}
	} else {
		echo "<p>$errMsg</p>";
	}
}
?>