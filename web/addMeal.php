<?php
	require("dbConnect.php");
	$db = get_db();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="meal.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#add').click(function() {
				$('div.div:first').clone().insertAfter('div.div:last').find('input').val('')
			});
		});
	</script>
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
		<form method="post" action="<?php echo($_SERVER['PHP_SELF']" . "?" . "$_SERVER['QUERY_STRING']" . "); ?>">
		<?php 

			$passedId = (int)$_GET['id'];
			//echo "This is passed id: $passedId";

			if (isset($_POST['addGrocery'])){
				$state = $db->prepare("SELECT ingredient_quantity FROM mealsIngredients where meals_id = $passedId");
				$state->execute();

				while ($rows = $state->fetch(PDO::FETCH_ASSOC)) {

					$amount = $rows['ingredient_quantity'];

					echo "amount: $amount";
				}
			}

			$statement = $db->prepare("SELECT meals_id, name, serving_size, description, directions FROM meals where meals_id = $passedId");
			$statement->execute();

			echo "<div id=from>";
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
				echo "<div><label>Ingredients</label><br><br>";
			}

			$statement = $db->prepare("SELECT mi.ingredient_quantity, mi.ingredient_measurements, i.name from ingredients as i join mealsIngredients as mi on i.ingredients_id = mi.ingredients_id join meals as m on m.meals_id = mi.meals_id where m.meals_id = $passedId");
			$statement->execute();

			while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

				$names = $row['name'];
				$measurement = $row['ingredient_measurements'];
				$quantity = $row['ingredient_quantity'];

				echo "<div class='div'>";
				echo "<label>Enter Ingredient </label>";
				echo "<input type='text' id='ingre' name='ingred[] placeholder='Enter the Ingredients name' value='$names'><br>";
				echo "<label>Enter Quantity </label>";
				echo "<input type='text' id='quantity' name='quantity[]' placeholder='1.5' value='$quantity'><br>";
				echo "<label>Enter Measurement Type </label>";
				echo "<input type='text' id='measure' name='measure[]' placeholder ='Cup' value='$measurement'>";
				echo "</div>";
			}

			echo "<br><button name='add'>Add New Ingredient</button><button name='create'>Modify Meal</button><button name='addGrocery'>Add to Grocery List</button></div>";
			echo "</div>";

		?>
		</form>
	</main>

</body>
</html>