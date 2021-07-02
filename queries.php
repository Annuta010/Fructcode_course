<?php 
	$mysqli = new mysqli('localhost', 'root', '', 'kursphpmysql');

	$mysqli->set_charset('utf8');
	$query = $mysqli->query('SELECT * FROM `movie` INNER JOIN `description_list` USING (id)');

	while ($row =mysqli_fetch_assoc($query)) {
		echo $row['id']." ".$row['name']." ".$row['id_description']." ".$row['description']."<br>"; //вывод записи
	}

	$mysqli->close();
?>
