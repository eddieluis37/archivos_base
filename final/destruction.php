<?php

class Indesctructible
{
	public function __construct()
	{
		print "Clase creada\n";
		$this->name = "Indestructible";
	}

	public function __destruct()
	{
		print "Destruyendo a " . $this->name . "\n";
	}
}

$instIndestructible = new Indesctructible();
unset($instIndestructible);

for($i = 0; $i <50; $i++)
{
	echo "{$i} \n";
	/*if($i > 30)
	{
		exit();
	}*/
}
