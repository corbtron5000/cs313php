<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<script>
		function verify() {
			var address = document.getElementById("address").value;
			var city = document.getElementById("city").value;
			var zip = document.getElementById("zip").value;
			var state = document.getElementById("state").value;

			if (address == "" || city == "" || zip == "" || state == "") {
				return false;
			}

			return true;
		}
	</script>
<head>
	<link rel="stylesheet" type="text/css" href="checkout.css">
	<title>Checkout</title>
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

	<main>
		<br><br><br><br><br><br><br><br>
		<h1 id="check">Checkout</h1>
		<div id="form">
		<form method="POST", action="confirmation.php" onsubmit="return verify()">
			<label>Address </label><input type="text" name="address" id="address" placeholder="123 Main St." value=""><br>
			<label>City </label><input type="text" name="city" id="city" placeholder="Rexburg"><br>
			<label>Zip Code </label><input type="text" name="zip" id="zip" placeholder="11111"><br>
			<label>State </label><input type="text" name="state" id="state" placeholder="CA"><br>
			<input type="submit" name="submit" value="place order">
			<a href="cart.php">Return to cart</a>
		</form>
		</div>
	</main>
</body>
</html>