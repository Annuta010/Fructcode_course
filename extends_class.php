<?php 

	
	class Animal
	{
		private $name;
		private $coloring;
		private $breed;
		private $age;


		public function __construct($name, $coloring, $breed, $age)
		{
			$this->name = $name;
			$this->coloring = $coloring;
			$this->breed = $breed;
			$this->age = $age;
		}

		public function describe_animal() {
			echo "Имя: ".$this->name." Порода: ".$this->breed." Окрас: ".$this->coloring." Возраст: ".$this->age."<br>";
		}
	}

	class Cat extends Animal
	{
		
		public function meow() {
			echo "Мяу!"."<br>";
		}
		
	}

	class Dog extends Animal {

		public function bark() {
			echo "Гав!"."<br>";
		}
	}

	$dog = new Dog("Эдуард", "рыжий", "боксер", "3 года" );
	$dog->describe_animal();
	$dog->bark();

	$cat = new Cat("Луна", "белый", "мейн-кун", "5 лет");
	$cat->describe_animal();
	$cat->meow();

?>
