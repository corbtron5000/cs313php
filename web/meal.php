<?php
	require("dbConnect.php");
	$db = get_db();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="homeMeal.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#add').click(function() {
				$('div.ingredDiv:first').clone().insertBefore(this).find('input').val('')
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

			<label>Meal Name</label><br>
			<input type="text" name="name" placeholder="Enter a Meal Name">

			<label>Description</label><br>
			<textarea name="description" placeholder="Enter a description"></textarea>

			<label>Directions</label><br>
			<textarea name="Directions" placeholder="Enter the directions"></textarea>

			<label>Serving Size</label><br>
			<input type="text" name="size" placeholder="Enter a integer">

			<div>
				<label>Ingredients</label><br>
				<div class="ingredDiv">
					<label>Enter Ingredient </label><br>
					<input type="text" id="ingre" name="ingred[]" placeholder="Enter the Ingredients name"><br>
					<label>Enter Quantity measurementa as Number </label>
					<input type="text" id="quantity" name="quantity[]" placeholder="1.5"><br>
					<label>Enter Measurement Type </label>
					<input type="text" id="measure" name="measure[]" placeholder ="Cup">
				</div>
			</div>
			<button id="add">Add New Ingredient</button>
			<button id="create">Create Meal</button>



	</main>

</body>
</html>