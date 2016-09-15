<?php
trait myUtilities
{
	function sayMyName()
	{
		echo "Mi nombre es " . $this->name . "\n";
	}
}

abstract class Animal
{
	const NATIONALITY = 'Universal';
	public static $year_born = 2016;
	abstract public function makeSound();

	public function run()
	{
		echo "Corriendo\n";
	}

	public static function panic()
	{

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
	public $name = "Godofredo";
	public function makeSound()
	{
		echo "Miau\n";
	}
}


