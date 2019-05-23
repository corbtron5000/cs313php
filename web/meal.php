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
			<li><a href="prove5.php" class="link">Home</a></li>
			<li><a href="meal.php" class="link">Add Meal</a></li>
			<li><a href="groceries.php" class="link">Grocery List</a></li>
		</ul>
	</header>
	<main>
		<br><br><br><br><br><br><br>
		<h1>Add a Meal<h1>

		<?php 

			$statement = $db->prepare("SELECT name, serving_size FROM meals");
			$statement->execute();

			while ($row =$statement->fetch(PDO::FETCH_ASSOC) {

				$name = $row['name'];
				$serving = $row['serving_size'];

				echo "<h1> $name and $serving</h1>";
			}
		?>
	</main>

</body>
</html>