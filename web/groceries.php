<?php
	require("dbConnect.php");
	$db = get_db();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="homeMeal.css">
</head>
<body>
	<header>
		<h1 id="title">Meal Shopper</h1>
		<ul>
			<li><a href="homeMeal.php" class="link">Home</a></li>
			<li><a href="meal.php" class="link">Add Meal</a></li>
			<li><a href="groceries" class="link">Grocery List</a></li>
		</ul>
	</header>

</body>
</html>