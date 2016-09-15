<?php
trait myUtilities
{
	function sayMyName()
	{
		echo "Mi nombre es " . $this->name . "\n";
	}
}

class Logger
{
	public static function log($text)
	{
		$prefix = date('d-m-Y- h:i:s ::: ');
		file_put_contents('log.txt', $prefix . $text . "\n", FILE_APPEND);
	}
}

abstract class Animal
{

	abstract public function makeSound();

	public function run()
	{
		echo "Corriendo\n";
	}
}

class Dog extends Animal
{
	use myUtilities;
	public $name = "Kanito";
	public function makeSound()
	{
		echo "Guau\n";
	}
}

class Cat extends Animal
{
	use myUtilities;
	//public $name = "Godofredo";
	public function makeSound()
	{
		echo "Miau\n";
	}
}

$instDog = new Dog;
$instCat = new Cat;

$instDog->sayMyName();
$instCat->sayMyName();
$instCat->run();
