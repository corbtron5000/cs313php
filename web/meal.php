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
		$(function() {
			$('#add').click(function() {
				$('dv.ingredDiv:first').clone().insertAfter(this).find('input').val('')
			});
		});
	</script>
			<li><a href="prove5.php" class="link">Home</a></li>
			<li><a href="meal.php" class="link">Add Meal</a></li>
			<li><a href="groceries.php" class="link">Grocery List</a></li>
		</ul>
	</header>
	<main>
		<br><br><br><br><br><br><br>
		<h1>Add a Meal</h1>
		<form>

			<label>Meal Name</label><br>
			<input type="text" name="name" placeholder="Enter a Meal Name">

			<label>Description</label><br>
			<textarea name="description" placeholder="Enter a description"></textarea>

			<label>Directions</label><br>
			<textarea name="Directions" placeholder="Enter the directions"></textarea>

			<label>Serving Size</label><br>
			<input type="text" name="size" placeholder="Enter a integer">

			<div>
				<div class="ingredDiv">
					<label>Ingredients</label><br>
					<input type="text" id="ingre" name="ingred[]" placeholder="Enter the Ingredients name">
					<input type="text" id="quantity" name="quantity[]" placeholder="Enter decimal number amount: 1.5">
					<input type="text" id="measure" name="measure[]" pattern="Enter measurement: Cup">
				</div>
			</div>
			<button id="add">Add New Ingredient</button>

		</form>


	</main>

</body>
</html>