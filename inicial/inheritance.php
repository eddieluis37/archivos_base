<?php
class Dog
{
	
	public function run()
	{
		echo ' Yo corro';
	}

	public function walk()
	{
		echo ' Yo camino';
	}

	public function __construct()
	{
		echo ' Ha nacido un perro';
	}
	
	
}

class Cat
{
	public function run()
	{
		echo ' Yo corro';
	}

	public function walk()
	{
		echo ' Yo camino';
	}

	public function __construct()
	{
		echo ' Ha nacido un gato';
	}
}

