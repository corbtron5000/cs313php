<?php
	require("dbConnect.php");
	$db = get_db();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="meal.css">
</head>
<body>
	<header>
		<h1 id="title">Meal Shopper</h1>
		<ul>
			<li><a href="prove5.php" class="link">Home</a></li>
			<li><a href="meal.php" class="link">Add Meal</a></li>
			<li><a href="groceries.php" class="link">Grocery List</a></li>
		</ul>
	</header>
	<main>
		<br><br><br><br><br><br><br>
		<h1>Meal was Created</h1>
		<?php

			$name = $_POST['name'];
			$desc = $_POST['description'];
			$dirc = $_POST['Directions'];
			$size = $_POST['size'];
			$ingr = $_POST['ingred'];
			$quan = $_POST['quantity'];
			$meas = $_POST['measure']

			echo "name=$name\n";
			echo "description=$desc\n";
			echo "directions=$dirc\n";
			echo "size=$size\n";
			var_dump($ingr);
			var_dump($quan);
			var_dump($meas);
		?>
	</main>
</body>
</html>