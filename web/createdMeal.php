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
			$description = $_POST['description'];
			$direction = $_POST['Directions'];
			$size = $_POST['size'];
			$ingr = $_POST['ingred'];
			$quan = $_POST['quantity'];
			$meas = $_POST['measure'];

			echo "name=$name<br?";
			echo "description=$description<br>";
			echo "directions=$direction<br>";
			echo "size=$size<br>";
			var_dump($ingr);
			var_dump($quan);
			var_dump($meas);
			$count = 0;
			$seasoning = false;
			$total = 0;
			$groceriesId = 1;

			$statement = $db->prepare('INSERT INTO meals(name, description, Directions, serving_size) VALUES(:name, :description, :direction, :size)');

			$statement->bindValue(':name', $name);
			$statement->bindValue(':description', $description);
			$statement->bindValue(':direction', $direction);
			$statement->bindValue(':size', $size);

			$statement->execute();

			$mealId = $db->lastInsertId("meals_meals_id_seq");

			echo "<br><br>Have i got the meal id: $mealId";

			foreach ($ingr as $ingredient) {

				echo("<br><br>Did I get here: $ingredient<br>");

				$statement = $db->prepare("SELECT name, ingredients_id FROM ingredients where name =" . "'" ."$ingredient" . "'");
				$statement->execute();

				echo "I am here<br>";

				$row = $statement->fetch(PDO::FETCH_ASSOC);

				if ($row) {
					echo "it already has it<br>";

					$ingredientId = $row["$ingredient_id"];

					echo "the ingredient id: $ingredientId";

					$statement = $db->prepare('INSERT INTO mealsIngredients(meals_id, ingredients_id,ingredient_quantity, ingredient_measurement) VALUES(:mealId, :ingredientId, :quantity, :measure)');

					$statement->bindValue(':mealId', $mealId);
					$statement->bindValue(':ingredientId', $ingredientId);
					$statement->bindValue(':quantity', $quantity);
					$statement->bindValue(':measure', $measure);

					$statement->execute();


				}
				else {
					echo "it did not have it<br>";

					$measure = $meas["$count"];
					$quantity = $quan["$count"];

					echo "this is quantity: $quantity and this is measurement: $measure<br>";
					$statement = $db->prepare("INSERT INTO ingredients(name, seasoning, total, groceries_id) VALUES(:ingredient, :seasoning, :total, :groceriesId)");

					$statement->bindValue(':ingredient', $ingredient);
					$statement->bindValue(':seasoning', $seasoning);
					$statement->bindValue(':total', $total);
					$statement->bindValue(':groceriesId', $groceriesId);

					echo "I go after pushing ingredient to table<br>";

					$statement->execute();

					$ingredientID = $db->lastInsertId("ingredients_ingredients_id_seq");

					echo "this is the ingredient id after insert: $ingredientID<br>";

					$statement = $db->prepare("INSERT INTO mealsIngredients(meals_id, ingredients_id,ingredient_quantity, ingredient_measurement) VALUES(:mealId, :ingredientID, :quantity, :measure)");

					$statement->bindValue(':mealId', $mealId);
					$statement->bindValue(':ingredientID', $ingredientID);
					$statement->bindValue(':quantity', $quantity);
					$statement->bindValue(':measure', $measure);

					$statement->execute();


				}

				$count = $count + 1;

			}
			


		?>
	</main>
</body>
</html>