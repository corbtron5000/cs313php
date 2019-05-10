<?php
	start_session(); 

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
	}

?>
!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="prove3.css">
	<title>add to cart</title>
</head>
<body>
	<h1>You add this item</h1>
</body>
</html>
