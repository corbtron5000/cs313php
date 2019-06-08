<?php
	require("dbConnect.php");
	$db = get_db();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="groceries.css">
</head>
<body>
	<header>
		<h1 id="title">Meal Shopper</h1>
		<ul>
			<li><a href="prove5.php" class="link">Home</a></li>
			<li><a href="meal.php" class="link">Add Meal</a></li>
			<li><a href="groceries.php" class="link">Grocery List</a></li>
			<li><a href="assignments.html" class="link"></a></li>
		</ul>
	</header>
	<main>
		<br><br><br><br><br><br><br>
		<h1>Your Grocery List</h1>

		<form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">
			<div id="table">
			<table align="center">
				<tr>
					<th>Total</th>
					<th>Name</th>
					<th>Delete</th>
				</tr>
			
			<?php

			if (isset($_POST['b'])){

				$index = key($_POST['b']);
				
				$statement = $db->prepare("UPDATE ingredients SET total = 0 where ingredients_id = $index");
				$statement->execute();
			
			}
				
				$statement = $db->prepare("SELECT total, name, ingredients_id FROM ingredients where total > 0");
				$statement->execute(); 

				while ( $row = $statement->fetch(PDO::FETCH_ASSOC)) {
					
					$total = $row['total'];
					$name = $row['name'];
					$id = $row['ingredients_id'];

					if ($total > 0) {
						echo "<tr>";
						echo "<td>$total</td>";
						echo "<td>$name</td>";
						echo '<td><button name="' . 'b[' . "$id" . ']"' . 'id="bu">Remove</button></td>';
						echo "</tr>";
					}
				}

				

			?>
			</table>
		</div>
	</form>
	</main>

</body>
</html>