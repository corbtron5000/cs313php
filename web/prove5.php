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
			<li><a href="homeMeal.php" class="link"></a>Home</li>
			<li><a href="meal.php" class="link"></a>Add Meal</li>
			<li><a href="groceries" class="link"></a>Groceries List</li>
		</ul>
	</header>

</body>
</html>