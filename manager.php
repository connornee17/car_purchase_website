<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Assignment 1 for Web Apps" />
	<meta name="keywords" content="HTML, Form, tags" />
	<meta name="author" content="Connor"  />
	<link href= "styles/style.css" rel="stylesheet"/>
	<link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet'/>
	<title>Add Order Forms</title>
</head>
<article>
<body>
<header><h1>CONNOR&apos;S CAR PURCHASE</h1></header>
	<nav>
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="product.php">Product</a></li>
			<li><a href="enquire.php">Enquire</a></li>
			<li><a href="about.php">About</a></li>
			</ul>		
	</nav>
	<section class="section1">
	<h2>Manager - Add Order Form</h2>
	<form id="regform" class ="description" method="post" action="orders_add.php">
	<fieldset><legend>New Order Details</legend>

		<p class="row">	<label for="fname">First Name: </label>
			<input type="text" name="fname" id="fname" /></p>
		<p class="row">	<label for="lname">Last Name: </label>
			<input type="text" name="lname" id="lname" /></p>
		<p class="row">	<label for="order_cost">Order Cost: </label>
			<input type="text" name="order_cost" id="order_cost" /></p>
		<p> <label for="order_status">Order Status</label>
		<select name="order_status" id="order_status">
			<option value="PENDING">PENDING</option>
			<option value="FULLFILLED">FULFILLED</option>
			<option value="PAID">PAID</option>
			<option value="ARCHIVED">ARCHIVED</option>
		</select></p>

		<fieldset id="addon">
				<legend>Buy Extra Add Ons</legend>
					<p><label>Paint</label> <input type="checkbox" id="paint" name="paint" value="paint" /></p>
					<p><label>Spoiler</label> <input type="checkbox" id="spoiler" name="spoiler" value="spoiler" /></p>
					<p><label>Roof Racks</label> <input type="checkbox" id="roofRacks" name="roofRacks" value="roofRacks" /></p>
					<p><label>Tinted Windows</label> <input type="checkbox" id="tintedWindows" name="tintedWindows" value="tintedWindows" /></p>
		</fieldset>

		<p>	<input type="submit" value="Add New Order" /></p>
	</fieldset>
	</form>


	<h2>Manager - Search Order Form</h2>
	<form id="regform" class ="description" method="post" action="orders_search.php">
	<fieldset><legend>Search Order Details</legend>
		<p><input type="hidden" value="search" name="searchtype"/></p>

		<p class="row">	<label for="fname">First Name: </label>
			<input type="text" name="fname" id="fname" /></p>
		<p class="row">	<label for="lname">Last Name: </label>
			<input type="text" name="lname" id="lname" /></p>
		<p class="row">	<label for="order_cost">Order Cost: </label>
			<input type="text" name="order_cost" id="order_cost" /></p>
		<p> <label for="order_status">Order Status</label>
		<select name="order_status" id="order_status">
			<option value="PENDING">PENDING</option>
			<option value="FULLFILLED">FULFILLED</option>
			<option value="PAID">PAID</option>
			<option value="ARCHIVED">ARCHIVED</option>
		</select></p>

		<fieldset id="addon">
				<legend>Buy Extra Add Ons</legend>
					<p><label>Paint</label> <input type="checkbox" id="paint" name="paint" value="paint" /></p>
					<p><label>Spoiler</label> <input type="checkbox" id="spoiler" name="spoiler" value="spoiler" /></p>
					<p><label>Roof Racks</label> <input type="checkbox" id="roofRacks" name="roofRacks" value="roofRacks" /></p>
					<p><label>Tinted Windows</label> <input type="checkbox" id="tintedWindows" name="tintedWindows" value="tintedWindows" /></p>
		</fieldset>

		<p>	<input type="submit" value="Search Order" /></p>
	</fieldset>
	</form>

	<h2>Manager - Delete Order Form</h2>
	<form id="regform" class ="description" method="post" action="orders_search.php">
	<fieldset><legend>Delete Order Details</legend>
		<p><input type="hidden" value="delete" name="searchtype"/></p>

		<p class="row">	<label for="fname">First Name: </label>
			<input type="text" name="fname" id="fname" /></p>
		<p class="row">	<label for="lname">Last Name: </label>
			<input type="text" name="lname" id="lname" /></p>
		<p class="row">	<label for="order_cost">Order Cost: </label>
			<input type="text" name="order_cost" id="order_cost" /></p>
		<p> <label for="order_status">Order Status</label>
		<select name="order_status" id="order_status">
			<option value="PENDING">PENDING</option>
			<option value="FULLFILLED">FULFILLED</option>
			<option value="PAID">PAID</option>
			<option value="ARCHIVED">ARCHIVED</option>
		</select></p>

		<fieldset id="addon">
				<legend>Buy Extra Add Ons</legend>
					<p><label>Paint</label> <input type="checkbox" id="paint" name="paint" value="paint" /></p>
					<p><label>Spoiler</label> <input type="checkbox" id="spoiler" name="spoiler" value="spoiler" /></p>
					<p><label>Roof Racks</label> <input type="checkbox" id="roofRacks" name="roofRacks" value="roofRacks" /></p>
					<p><label>Tinted Windows</label> <input type="checkbox" id="tintedWindows" name="tintedWindows" value="tintedWindows" /></p>
		</fieldset>

		<p>	<input type="submit" value="Delete Order" /></p>
	</fieldset>
	</form>

	<h2>Manager - Change Order Form</h2>
	<form id="regform" class ="description" method="post" action="orders_search.php">
		<fieldset><legend>Change Order Status</legend>

		<p class="row">	<label for="fname">First Name: </label>
			<input type="text" name="fname" id="fname" /></p>
		<p class="row">	<label for="lname">Last Name: </label>
			<input type="text" name="lname" id="lname" /></p>	
		 
		<p> <label for="newstatus">Order Status</label>
			<select name="newstatus" id="newstatus">
				<option value="PENDING">PENDING</option>
				<option value="FULLFILLED">FULFILLED</option>
				<option value="PAID">PAID</option>
				<option value="ARCHIVED">ARCHIVED</option>
			</select>
		</p>
			<p> <input type="submit" value="Change" /></p>
			<p><input type="hidden" value="change" name="searchtype"/></p>
		</fieldset>
	</form>

	<h2>Manager - Look at all Orders</h2>
	<form id="regform" class ="description" method="post" action="orders_display.php">
		<fieldset>
			<p> <input type="submit" value="View Form" /></p>
		</fieldset>
	</form>
	</section>
<?php include("footer.inc"); ?>
</article>
</body>
</html>