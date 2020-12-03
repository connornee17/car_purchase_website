<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Assignment 1 for Web Apps" />
	<meta name="keywords" content="HTML, Form, tags" />
	<meta name="author" content="Connor"  />
	<link href= "styles/style.css" rel="stylesheet"/>
	<link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet'/>
	<title>Car Purchase Index Page</title>
	<script src="part2.js"></script>
</head>
<body>
<article>
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
		<h2>ENQUIRE</h2>
		<form id="regform" class ="description" method="post" action="payment.php" novalidate="novalidate">
			<fieldset>
				<legend>Contact Details</legend>
				<p><label for="Email">Email</label> <input type="email" name="email" id="Email"/></p>
				<p><label for="givenname">Given Name</label> <input type="text" name="givenname" id="givenname" pattern="[A-Za-z]{1,25}"/> 
				   <label>Family Name</label> <input type="text" name="familyname" id="familyname" pattern="[A-Za-z]{1,25}"/></p>
				<p><label>Street Name</label> <input type="text" name="street" id="street" maxlength="40"/>
				   <label>Suburb</label> <input type="text" name="suburb" id="suburb" maxlength="20"/></p>
				<p><label>State</label>
					<select name="state" id="state">
						<option value="VIC" id="VIC">VIC</option>			
						<option value="TAS" id="TAS'">TAS</option>
						<option value="NSW" id="NSW">NSW</option>
						<option value="QLD" id="QLD">QLD</option>
						<option value="WA" id="WA">WA</option>
						<option value="SA" id="SA">SA</option>
						<option value="NT" id="NT">NT</option>
					</select></p>
					<label for="postcode">Postcode</label> <input type="text" name="postcode" id="postcode"  pattern="[0-9]{4}" title="4 digit number: e.g. 1234" placeholder="1234"/>
				<p><label for="Phone">Phone Number</label> <input type="text" name="Phone" id="Phone" pattern="[0-9]{10}" title="10 digit number: e.g. 1234567890" placeholder="0123456789"/></p>
			</fieldset>
			<fieldset>
				<legend>Car Information</legend>
					<fieldset id="myid">
					<label for="poor">Poor Condition</label><input type="radio" id="poor" name="condition" value="Poor"/>
					<label for="used">Pre Owned</label> <input type="radio" id="used" name="condition" value="Used"/>
					<label for="new">Brand New</label> <input type="radio" id="new" name="condition" value="New"/>
					</fieldset>
				<p>
					<label for="Brand">Car Brand</label>
					<select name="Brand" id="Brand">
						<option value="Toyota">Toyota</option>			
						<option value="Kia">Kia</option>
						<option value="Jeep">Jeep</option>
						<option value="Volvo">Volvo</option>
						<option value="Honda">Honda</option>
						<option value="Holden">Holden</option>
					</select>
				</p>
				<p><label for="carage"></label>Age of Car<input type="text" name="carage" id="carage" size="5"/></p>
			</fieldset>
			<fieldset>
				<legend>Enquiry Description</legend>
				<p>
					<label for="Selling">Selling</label> <input type="checkbox" id="Selling" name="issue" value="Selling" />
					<label for="Buying">Buying</label> <input type="checkbox" id="Buying" name="issue" value="Buying" />
					<label for="Repairs">Repairs</label> <input type="checkbox" id="Repairs" name="issue" value="Repairs" />
					<label for="ProductCheck">Product Check</label> <input type="checkbox" id="ProductCheck" name="issue" value="ProductCheck" />
					<label for="Other">Other</label> <input type="checkbox" id="Other" name="Issue" value="Other" />
				</p>
				<p><label for="description">Describe your enquiry here</label></p>
				<p>
					<textarea id="description" name="description" rows="4" cols="40" placeholder="Description..."></textarea>
				</p>
			</fieldset>
			<fieldset id="addon">
				<legend>Buy Extra Add Ons</legend>
					<p><label>Paint - $100</label> <input type="checkbox" id="paint" name="paint" value="paint" /></p>
					<p><label>Spoiler - $250</label> <input type="checkbox" id="spoiler" name="spoiler" value="spoiler" /></p>
					<p><label>Roof Racks - $400</label> <input type="checkbox" id="roofRacks" name="roofRacks" value="roofRacks" /></p>
					<p><label>Tinted Windows - $500</label> <input type="checkbox" id="tintedWindows" name="tintedWindows" value="tintedWindows" /></p>
			</fieldset>
		
			<input type= "submit" value="Pay Now"/>
			<input type= "reset" value="Reset Form"/>
		</form>
	</section>
	<footer>
		<p>COS10011/COS60004/COS60007 CWA</p>
		<p>&#169; Swinburne University of Technology</p>
		<p>Assignment 2</p>
	</footer>
</article>
</body>
</html>