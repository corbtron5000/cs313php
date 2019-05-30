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
		<h1>Add a Meal</h1>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>", method="POST">
			<div id="from">
				<label>Meal Name </label>
				<input type="text" name="name" placeholder="Enter a Meal Name"><br><br>

				<label>Description</label><br>
				<textarea name="description" placeholder="Enter a description" rows="5" cols="100"></textarea><br><br>

				<label>Directions</label><br>
				<textarea name="Directions" placeholder="Enter the directions" rows="5" cols="100"></textarea><br><br>

				<label>Serving Size </label>
				<input type="text" name="size" placeholder="Enter a integer"><br><br>

				<div>
					<label>Ingredients</label><br><br>
					<div class="div">
						<label>Enter Ingredient </label>
						<input type="text" id="ingre" name="ingred[]" placeholder="Enter the Ingredients name"><br>
						<label>Enter Quantity </label>
						<input type="text" id="quantity" name="quantity[]" placeholder="1.5"><br>
						<label>Enter Measurement Type </label>
						<input type="text" id="measure" name="measure[]" placeholder ="Cup">
					</div>
					<br><button type="button" id="add">Add New Ingredient</button>
					<input type="submit" name="Create Meal">
				</div>
			</div>
			<?php

			if(isset($_POST['submit'])){

				$name = htmlspecialchars($_POST['name']);
				$desc = htmlspecialchars($_POST['description']);
				$dirc = htmlspecialchars($_POST['Directions']);
				$size = htmlspecialchars($_POST['size']); 

				alert("name $name, description $desc, directions $dirc, size $size"); 
			}
			?>
		</form>

	</main>

</body>
</html>