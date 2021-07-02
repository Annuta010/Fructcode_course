<?php
	interface Sound {
		public function makeSound();
	}

	abstract class Animal implements Sound {
		private $name;
		private $coloring;
		private $age;
		private $breed;

		public function __construct($name, $coloring, $age, $breed) {
			$this->name = $name;
			$this->coloring= $coloring;
			$this->age = $age;
			$this->breed = $breed;
		}

		public function getName() {
			return $this->name;
		}
		public function getColoring() {
			return $this->coloring;
		}
		public function getAge() {
			return $this->age;
		}
		public function getBreed() {
			return $this->breed;
		}
	}

	class Dog extends Animal{
		public function __construct($name, $coloring, $age, $breed) {
			parent::__construct($name, $coloring, $age, $breed);
		}

		public function makeSound() {
			echo "Гав!"." ";
		}

		public function describe() {
			echo "Имя: ".$this->getName()." Окрас: ".$this->getColoring()." Возраст: ".$this->getAge()." Порода: ".$this->getBreed()."<br>";
		}
	}

	class Cat extends Animal{
		public function __construct($name, $coloring, $age, $breed) {
			parent::__construct($name, $coloring, $age, $breed);
		}

		public function makeSound() {
			echo "Мяу"." ";
		}

		public function describe() {
			echo "Имя: ".$this->getName()." Окрас: ".$this->getColoring()." Возраст: ".$this->getAge()." Порода: ".$this->getBreed()."<br>";
		}
	}

	$cat = new Cat("Перчик", "Черный", "6 лет", "Персидский кот");
	$cat->makeSound();
	$cat->describe();

	echo "<br>";

	$dog = new Dog("Ветер", "Палевый", "2 года", "Лабрадор");
	$dog->makeSound();
	$dog->describe();
?>