<?php
	session_start();
	if (!isset($_SESSION['cart'])) {
		$_SESSION["p2"] = 7;
		$_SESSION["p3"] = 9;
		$_SESSION["p4"] = 13;
		$_SESSION["p5"] = 16;
		$_SESSION["p6"] = 19;
		$_SESSION["p7"] = 22;
		$_SESSION["count2"] = 0;
		$_SESSION["count3"] = 0;
		$_SESSION["count4"] = 0;
		$_SESSION["count5"] = 0;
		$_SESSION["count6"] = 0;
		$_SESSION["count7"] = 0;
		$_SESSION["cart"] = 0;
		$_SESSION["total"] = 0;
		$_SESSION["street"] = "";
		$_SESSION["zips"] = "";
		$_SESSION["states"] = "";
		$_SESSION['cities'] = "";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="prove3.css">
	<title>Puzzle Mania</title>
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
		<form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">
			<div class="div1">
				<img src="c2x2.jpg" height="200" width="200">
				<div class="div2">
					<h3>2 x 2 Rubik's Cube</h3>
					<p>Price: $7.00</p>
					<select name="cube2">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
					<input type="submit" name="Add2x2" value="Add to cart">
					<?php
						if (isset($_POST['Add2x2']))
						{
							$_SESSION["count2"] += 1;
							$_SESSION["cart"] += 1;
						}
					?>
				</div>

				<img src="c3x3.jpg"  height="200" width="200">
				<div class="div2">
					<h3>3 x 3 Rubik's Cube</h3>
					<p>Price: $9.00</p>
					<select name="cube3">
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>
						<option value="5"> 5 </option>
						<option value="6"> 6 </option>
						<option value="7"> 7 </option>
						<option value="8"> 8 </option>
						<option value="9"> 9 </option>
						<option value="10"> 10 </option>
					</select>
					<input type="submit" name="Add3x3" value="Add to cart">
					<?php
						if (isset($_POST["Add3x3"])) {
						$_SESSION["count3"] += 1;
						$_SESSION["cart"] += 1;
					}
					?>
				</div>
			</div>
			<div class="div1">
				<img src="c4x4.jpg"  height="200" width="200">
				<div class="div2">
					<h3>4 x 4 Rubik's Cube</h3>
					<p>Price: $13.00</p>
					<select name="cube4">
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>
						<option value="5"> 5 </option>
						<option value="6"> 6 </option>
						<option value="7"> 7 </option>
						<option value="8"> 8 </option>
						<option value="9"> 9 </option>
						<option value="10"> 10 </option>
					</select>
					<input type="submit" name="Add4x4" value="Add to cart">
					<?php
						if (isset($_POST["Add4x4"])) {
						$_SESSION["count4"] += 1;
						$_SESSION["cart"] += 1;
					}
					?>
				</div>

				<img src="c5x5.jpg"  height="200" width="200">
				<div class="div2">
					<h3>5 x 5 Rubik's Cube</h3>
					<p>Price: $16.00</p>
					<select name="cube5">
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>
						<option value="5"> 5 </option>
						<option value="6"> 6 </option>
						<option value="7"> 7 </option>
						<option value="8"> 8 </option>
						<option value="9"> 9 </option>
						<option value="10"> 10 </option>
					</select>
					<input type="submit" name="Add5x5" value="Add to cart">
					<?php
						if (isset($_POST["Add5x5"])) {
						$_SESSION["count5"] += 1;
						$_SESSION["cart"] += 1;
					}
					?>
				</div>
			</div>
			<div class="div1">
				<img src="c6x6.jpg"  height="200" width="200">
				<div class="div2">
					<h3>6 x 6 Rubik's Cube</h3>
					<p>Price: $19.00</p>
					<select name="cube6">
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>
						<option value="5"> 5 </option>
						<option value="6"> 6 </option>
						<option value="7"> 7 </option>
						<option value="8"> 8 </option>
						<option value="9"> 9 </option>
						<option value="10"> 10 </option>
					</select>
					<input type="submit" name="Add6x6" value="Add to cart">
					<?php
						if (isset($_POST["Add6x6"])) {
						$_SESSION["count6"] += 1;
						$_SESSION["cart"] += 1;
					}
					?>
				</div>

				<img src="c7x7.jpg"  height="200" width="200">
				<div class="div2">
					<h3>7 x 7 Rubik's Cube</h3>
					<p>Price: $22.00</p>
					<select name="cube7">
						<option value="1"> 1 </option>
						<option value="2"> 2 </option>
						<option value="3"> 3 </option>
						<option value="4"> 4 </option>
						<option value="5"> 5 </option>
						<option value="6"> 6 </option>
						<option value="7"> 7 </option>
						<option value="8"> 8 </option>
						<option value="9"> 9 </option>
						<option value="10"> 10 </option>
					</select>
					<input type="submit" name="Add7x7" value="Add to cart">
					<?php
						if (isset($_POST["Add7x7"])) {
						$_SESSION["count7"] += 1;
						$_SESSION["cart"] += 1;
					}
					?>
				</div>

			</div>
		</form>

	</main>
	<footer>
		
	</footer>
</body>
</html>