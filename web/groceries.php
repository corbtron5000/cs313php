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
		</ul>
	</header>
	<main>
		<br><br><br><br><br><br><br>
		<h1>Your Groceries List</h1>

		<table>
			<tr>
				<th>Total</th>
				<th>Hame</th>
			</tr>
		
		<?php
			$statement = $db->prepare("SELECT total, name FROM ingredients");
			$statement->execute(); 

			while ( $row = $statement->fetch(PDO::FETCH_ASSOC)) {
				
				$total = $row['total'];
				$name = $row['name'];

				echo "<tr>";
				echo "<td>$total</td>";
				echo "<td>$name</td>";
				echo "<td><botton>remove</botton></td>";
				echo "</tr>";
			}
		?>
		</table>
	</main>

</body>
</html>