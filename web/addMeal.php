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
		<h1>List of Meals</h1>

		<?php 

			$statement = $db->prepare("SELECT meals_id, name, serving_size, description, directions FROM meals");
			$statement->execute();

			echo "<div id=parent>";
			while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

				$name = $row['name'];
				$serving = $row['serving_size'];
				$id = $row['meals_id'];
				$desc = $row['description'];
				$direction = $row['directions'];


				echo "<label>Meal Name </label>";
				echo "<input type='text' name='name' placeholder='Enter a Meal Name' value='$name'><br><br>";
			}
			echo "</div>";
		?>
	</main>

</body>
</html>