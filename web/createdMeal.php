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

			/*$statement = $db->prepare('INSERT INTO meals(name, description, Directions, serving_size) VALUES(:name, :description, :direction, :size');

			$statement->bindValue(':name', $name);
			$statement->bindValue(':description', $description);
			$statement->bindValue(':direction' $direction);
			$statement->bindValue(':size', $size);

			$statement->execute();

			$mealId = $db->lastInsertedId("meals_id_seq");*/

			foreach ($ingr as $ingredient) {

				echo("<br><br>Did I get here: $ingredient<br>");

				$statement = $db->prepare("SELECT name, ingredients_id FROM ingredients where name =" . "'" ."$ingredient" . "'");
				$statement->execute();

				echo "I am here";

				$row = $statement->fetch(PDO::FETCH_ASSOC);

				if ($row) {
					$ingred = $row['name'];
					$ingID = $row['ingredients_id'];
					echo "it already has it<br>";
				}
				else {
					echo "it did not have it<br>";
				}


				/*while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {	

					echo "what is in row: $row";

					$ingred = $row['name'];
					$ingID = $row['ingredients_id'];


					echo ("what is in ingred $ingred and id: $ingID");
				}*/
				
			}
			


		?>
	</main>
</body>
</html>