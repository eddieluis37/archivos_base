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
	public $name = "Godofredo";
	public function makeSound()
	{
		echo "Miau\n";
	}
}

//echo class_exists('Being');
$classes = ['Being', 'Animal', 'Plant', 'Dog', 'Cat' , 'Mouse', 'Cactus'];

foreach( $classes as $class_ )
{
	echo $class_ . ( class_exists($class_) ? ' si' : ' no' ) . "\n";
}