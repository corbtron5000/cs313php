<?php
	session_start();

	$street = $_POST['address'];
	$zip = $_POST['zip'];
	$state = $_POST['state'];
	$city = $_POST['city'];

	$_SESSION['street'] = $street;
	$_SESSION['zips'] = $zip;
	$_SESSION['states'] = $state;
	$_SESSION['cities'] = $city;
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="confirmation.css">
		<title>Confirmation</title>
		</head>
	<body>
		<header>
		<h1 id="title">Puzzle Mania</h1>
		<ul>
			<li><a href="prove3.php">Home</a></li>
			<li><a href="cart.php">Shopping Cart</a></li>
			<li><a href="checkout.php">Checkout</a></li>
			<li><a href="assignments.html">Assignments</a></li>
		</ul>
		</header>
		<br><br><br><br><br><br><br><br>
		<main>
			<h1>Your order has been placed.</h1>
			<?php

				if ($_SESSION['count2'] > 0) {

					$q2 = $_SESSION['count2'];
					echo "<div>";
					echo "<img src='c2x2.jpg' height='200' width='200'>";
					echo "<div id='cube2'>";
					echo "<h3> 2 x 2 Rubik's Cube </h3>";
					echo "<label> Quantity: $q2 </table>";
					echo "</div></div>";
		
					
				}
				if ($_SESSION['count3'] > 0) {
					
					$q3 = $_SESSION['count3'];
					
					echo "<img src='c3x3.jpg' height='200' width='200'>";
					echo "<div id='cube3'>";
					echo "<h3> 3 x 3 Rubik's Cube </h3>";
					echo "<label> Quantity: $q3 </table>";
					echo "</div></div>";
					
				}
				if ($_SESSION['count4'] > 0) {
					
					$q4 = $_SESSION['count4'];
					echo "<div>";
					echo "<img src='c4x4.jpg' height='200' width='200'>";
					echo "<div id='cube4'>";
					echo "<h3> 4 x 4 Rubik's Cube </h3>";
					echo "<label> Quantity: $q4 </table>";
					echo "</div></div>";
					
				}
				if ($_SESSION['count5'] > 0) {
					
					$q5 = $_SESSION['count5'];
					echo "<div>";
					echo "<img src='c5x5.jpg' height='200' width='200'>";
					echo "<div id='cube5'>";
					echo "<h3> 5 x 5 Rubik's Cube </h3>";
					echo "<label> Quantity: $q5 </table>";
					echo "</div></div>";
					
				}
				if ($_SESSION['count6'] > 0) {
					
					$q6 = $_SESSION['count6'];
					echo "<div>";
					echo "<img src='c6x6.jpg' height='200' width='200'>";
					echo "<div id='cube6'>";
					echo "<h3> 6 x 6 Rubik's Cube </h3>";
					echo "<label> Quantity: $q6 </table>";
					echo "</div></div>";
					
				}
				if ($_SESSION['count7'] > 0) {
					
					$q7 = $_SESSION['count7'];
					echo "<div>";
					echo "<img src='c7x7.jpg' height='200' width='200'>";
					echo "<div id='cube7'>";
					echo "<h3> 7 x 7 Rubik's Cube </h3>";
					echo "<label> Quantity: $q7 </table>";
					echo "</div></div>";
					
				}

				$street = $_SESSION['street'];
				$zip = $_SESSION['zips'];
				$state = $_SESSION['states'];
				$city = $_SESSION['cities'];

				echo "<br><br><label>your order is being shipped to: $street $city, $state $zip </label>";
			?>
		</main>
	</body>
</html>