<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Assignment 1 for Web Apps" />
	<meta name="keywords" content="HTML, Form, tags" />
	<meta name="author" content="Connor"  />
	<link href= "styles/style.css" rel="stylesheet"/>
	<link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet'/>
	<title>Car Purchase Index Page</title>
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
	<section>
		<h2>PRODUCT</h2>

		<section id="Lists">
		<h3>Full Range of Cars</h3>
	 	<ul>
        	<li>Honda</li>
        	<li>Jeep</li>
        	<li>Kia</li>
        	<li>Holden</li>
        	<li>Toyota</li>
        	<li>Volvo</li>
      	</ul>
      	<h3>Ergonomic Rating</h3>
      	<ol>
        	<li>Honda</li>
        	<li>Volvo</li>
        	<li>Holden</li>
        	<li>Jeep</li>
        	<li>Kia</li>
        	<li>Toyota</li>
        </ol>
	  	<h3>Custom Mod options (1 being cheapest)</h3>
	  	<ol>
			<li>Tinted Windows</li>
			<li>Custom Paint
				<ul>
				   <li>Red</li>
				   <li>Green</li>
				   <li>Black</li>
				   <li>Blue</li>
				</ul>
			</li>
			<li>Roof Racks</li>
			<li>Spoiler</li>
		</ol>
		</section>		

		<section id="tables">
		<table>
			<caption id="tableheading"><strong>Table of Car Products</strong></caption>
				<thead>
					<tr>
						<!-- the scope attribute assists non-visual user agents -->
						<!-- rowspan and colspan allow multiple cells to be merged -->
						<th class="tabletitle" rowspan="2" scope="col">Car Image</th>
						
					</tr>
					<tr>
						<th class="tabletitle" scope="col"><strong>Car Model</strong></th>
						<th class="tabletitle" scope="col"><strong>Car Condition</strong></th>
						<th class="tabletitle" scope="col"><strong>Car Price</strong></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><img src="images/Car1.jpg" alt="Car Photo 1" title="Filesize 222kb" width="300" height="150"/></th>
						<td>VOLVO</td>
			  			<td>Pre Owned</td>
			   			<td>$4,800</td>
					</tr>
					<tr>
						<th scope="row"><img src="images/Car2.jpg" alt="Car Photo 2" title="Filesize 222kb" width="300" height="150"/></th>
						<td>HONDA</td>
			   			<td>Brand New</td>
			   			<td>$45,000</td>
					</tr>
					<tr>
						<th scope="row"><img src="images/Car3.jpg" alt="Car Photo 3" title="Filesize 222kb" width="300" height="150"/></th>
						<td>TOYOTA</td>
			   			<td>Pre Owned</td>
			   			<td>$6,700</td>
					</tr>
					<tr>
						<th scope="row"><img src="images/Car4.jpg" alt="Car Photo 4" title="Filesize 222kb" width="300" height="150"/></th>
						<td>KIA</td>
			   			<td>Brand New</td>
			   			<td>$14,700</td>
					</tr>
					<tr>
						<th scope="row"><img src="images/Car5.jpg" alt="Car Photo 5" title="Filesize 222kb" width="300" height="150"/></th>
						<td>JEEP</td>
			   			<td>Poor Condition</td>
			   			<td>$1,250</td>
					</tr>
					<tr>
						<th scope="row"><img src="images/Car6.jpg" alt="Car Photo 6" title="Filesize 222kb" width="300" height="150"/></th>
						<td>HOLDEN</td>
			   			<td>Poor Condition</td>
			   			<td>$900</td>
					</tr>
				</tbody>
				<tfoot>
			 		
				</tfoot>
		</table>
		</section>
	</section>
	<footer>
		<p>COS10011/COS60004/COS60007 CWA</p>
		<p>&#169; Swinburne University of Technology</p>
		<p>Assignment 2</p>
	</footer>
</article>
</body>
</html>