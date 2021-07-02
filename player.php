<?php 
	//Лущилина Анна
	$mysqli = new mysqli('localhost', 'root', '', 'kursphpmysql');

	$mysqli->set_charset('utf8');

	if (isset($_POST['name']) && isset($_POST['author'])) {
		$nameToAdd = htmlspecialchars($_POST['name']);
		$authorToAdd = htmlspecialchars($_POST['author']);

		$query = "INSERT INTO music VALUES(null, '$nameToAdd', '$authorToAdd')";
		$mysqli->query($query);
		
	}

	$result = $mysqli->query('SELECT name, author FROM music');

	$mysqli->close();
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>player</title>
</head>
<body>
	<form action="/player.php" method="post">
		<input type="text" name="name" placeholder="Название">
		<input type="text" name="author" placeholder="Исполнитель">
		<input type="submit" value="Добавить">
	</form>

	<?php 
		while($row =mysqli_fetch_assoc($result)) {
			echo "<br>".$row['name']." - ".$row['author'];
		}
		
	?>
</body>
</html>