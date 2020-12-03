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
	<script src="payment.js"></script>
</head>
<body>
<article>
	<header><h1>CONNOR&apos;S CAR PURCHASE</h1></header>
	<nav>
			<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="product.html">Product</a></li>
			<li><a href="enquire.html">Enquire</a></li>
			<li><a href="about.html">About</a></li>
			</ul>		
	</nav>

	<section class="section1">
	<h2>CONFIRM PAYMENT</h2>
	<form class="description" id="bookform" method="post" action="process_order.php" novalidate="novalidate">
	<fieldset>
		<legend>Your Booking</legend>
		<p>Your Name: <span id="confirm_name"></span></p>
		<p>Condition of Car: <span id="confirm_condition"></span></p>
		<p>Postcode: <span id="confirm_postcode"></span></p>
		<p>State: <span id="confirm_state"></span></p>
		<p>Addons: <span  id="confirm_addon"></span></p>
		
		<p>Total Cost: $<span  id="confirm_cost"></span></p>
		<input type="hidden" name="givenname" 	id="givenname" />
		<input type="hidden" name="familyname" 	id="familyname" />
		<input type="hidden" name="postcode" 	id="postcode" />
		<input type="hidden" name="state"       id="state"   />
		<input type="hidden" name="condition" 	id="condition" />
		<input type="hidden" name="addon"		id="addon" />
		<input type="hidden" name="cost" 		id="cost" />
		
		<p><label for="date">Preferred Date</label>
			<input type="text" id="date" name="bookday" required="required" placeholder="dd/mm/yyyy" pattern="\d{1,2}/\d{1,2}/\d{4}" title="Format dd/mm/yyyy" maxlength="10" size="10" />
		</p>
	
    </fieldset>
    <h2>Card Info</h2>
    <fieldset>
    	<legend>Your Credit Details</legend>
    		
					
    				<fieldset id="cardType">
					<label for="Mastercard">MasterCard</label><input type="radio" id="Mastercard" name="cardType" value="Mastercard"/>
					<label for="Visa">Visa</label><input type="radio" id="Visa" name="cardType" value="Visa"/>
					<label for="Americanexpress">Americanexpress</label><input type="radio" id="Americanexpress" name="cardType" value="Americanexpress"/>		
					<label for="Giftcard">Giftcard</label><input type="radio" id="Giftcard" name="cardType" value="Giftcard"/>
					</fieldset>
				
			
			<p><label for="cardName">Name on Card</label> <input type="text" name="cardName" id="cardName" pattern="[A-Za-z- ]{1,40}"/></p>
			<p><label for="cardNumber">Card Number</label> <input type="text" name="cardNumber" id="cardNumber" pattern="[0-9]{15-16}" title="cardNumber"required="required"/></p>
			<p><label for="cardExpire">Expiry Date</label> <input type="text" name="cardExpire" id="cardExpire" pattern="\d{1,2}/\d{1,2}" placeholder="MM/YY" required="required" /></p>
			<p><label for="cardCvv">CVV</label> <input type="text" name="cardCvv" id="cardCvv" pattern="[0-9]{3-4}" required="required"/></p>

	</fieldset>
	
	
	<input type="submit" value="Confirm Payment" />
	<button type="button" id="cancelButton">Cancel Order</button>
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