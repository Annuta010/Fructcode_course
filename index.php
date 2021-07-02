<?php 
	$mysqli = new mysqli('localhost', 'root', '', 'kursphpmysql'); 

	if (mysqli_connect_error()) {
		printf("Соединение не установлено", mysqli_connect_error()); // вывод ошибки 
		exit();// выход из программы
	}

	$mysqli->set_charset('utf8'); //устанавливаем кодировку

	/*$query = $mysqli->query('SELECT name, year FROM movie'); //создаем запрос выбирающий все строки из таблицы movie

	while ($row =mysqli_fetch_assoc($query)) {
		echo $row['name'].$row['year']."<br>"; //вывод записи
	}*/

	/*$query = "INSERT INTO movie VALUES(null, 'Безумный Макс', 'Описание', '2015', Now() )";
	$mysqli->query($query);*/

	/*$query = "UPDATE movie SET year = 1990 WHERE id_movie = 3";
	$mysqli->query($query);*/
	$query = "DELETE FROM movie WHERE id_movie = 3";
	$mysqli->query($query);

	$mysqli->close();//закрываем соединение
?>

