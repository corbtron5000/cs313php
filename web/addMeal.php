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
		<h1>Modify Meal</h1>

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
				echo "<label>Description</label><br>";
				echo "<textarea name='description' placeholder='Enter a description' rows='5' cols='100'>$desc</textarea><br><br>";
				echo "<label>Directions</label><br>";
				echo "<textarea name='Directions' placeholder='Enter the directions' rows='5' cols='100'>$direction</textarea><br><br>";
				echo "<label>Serving Size </label>";
				echo "<input type='text' name='size' placeholder='Enter a integer' value='$serving'><br><br>";
				echo "<div><label>Ingredients</label><br><br><div class='div'>";
			}

			$statement = $db->prepare("select mi.ingredient_quantity, mi.ingredient_measurements, i.name from ingredients as i join mealsIngredients as mi on i.ingredients_id = mi.ingredients_id join meals as m on m.meals_id = mi.meals_id");
			$statement->execute();

			while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

				$names = $row['i.name'];
				$measurement = $row['mi.ingredient_measurements'];
				$quantity = $row['mi.ingredient_quantity'];

				echo "<label>Enter Ingredient </label>";
				echo "<input type='text' id='ingre' name='ingred[] placeholder='Enter the Ingredients name' value='$names'><br>";
			}

			echo "</div>";
		?>
	</main>

</body>
</html>