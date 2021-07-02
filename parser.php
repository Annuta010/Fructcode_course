<?php 

	//функция, которая вставляет данные в БД
	function insert($name, $desc, $year, $rating, $poster, $id_category) {
		$mysqli = new mysqli('localhost', 'root', '', 'kursphpmysql');

		if (mysqli_connect_errno()) {
			print_f('Соединение не установлено');
			exit();
		}
		$mysqli->set_charset('utf8');

		$query = "INSERT INTO `movie` VALUES(null, '$name', '$desc', '$year', '$rating', '$poster', Now(), '$id_category' )";
		$result = false;

		if($mysqli->query($query)) {
			$result = true; 
		}
		return $result;
	}

	function fillDb($path, $category) {
		$xml = simplexml_load_file($path) or die("Error: Cannot create object");

		$title = null;
		$description = null;
		$post = null;
		$rating = null;
		$year = null;


		foreach ($xml as $movie_key => $movie) {
			$title = $movie->title_russian;
			$year = $movie->year;

			foreach ($movie->poster->big->attributes() as $poster_key => $poster) {
				$post = $poster; 
			}

			if($movie->imdb) {
				$rating =  $movie->imdb->attributes()['rating'];
			} else {
				$rating = null;
			}

			if($movie->description) {
				$description =  $movie->description;
			} else {
				$description = null;
			}

			insert($title, $description, $year, $rating, $post, $category);
		}
	}
	

	fillDb("xml_files/movie_file.xml", 1);

?>