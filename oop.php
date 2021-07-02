<?php 
	$value = 'hi';
	echo $value;


	class Human {
		
		private $words;// поле

		public function setWords($words){ //сеттер
			$this->words = $words;
		}

		public function getWords() { //геттер
			return $this->words;
		}

		public function sayIt() {
			return $this->getWords();
		}
	}

	$human = new Human();
	$human->setWords(" hi!");
	echo $human->sayIt();

?>