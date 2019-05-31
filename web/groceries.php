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
		<form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">
			<div id="table" align="center">
			<table>
				<tr>
					<th>Total</th>
					<th>Name</th>
				</tr>
			
			<?php
				$statement = $db->prepare("SELECT total, name, groceries_id FROM ingredients");
				$statement->execute(); 

				while ( $row = $statement->fetch(PDO::FETCH_ASSOC)) {
					
					$total = $row['total'];
					$name = $row['name'];
					$id = $row['groceries_id'];

					echo "<tr>";
					echo "<td>$total</td>";
					echo "<td>$name</td>";
					echo '<td><button name="b[$id]" id="bu">Remove</button></td>';
					echo "</tr>";
				}

				$index = key($_POST['b']);
				echo "<h1>this is the key: $index</h1>";
				if (isset($_POST['b']['$index']))
				{
					echo "<h1>This worked</h1>";
				}

			?>
			</table>
		</div>
	</form>
	</main>

</body>
</html>