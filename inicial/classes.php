<?php 

/**
* 
*/
class Person
{
    public $age;
    public $name;
    public function run()
    {
        echo " Estoy Corriendo ";
    }

    public function __construct($name, $age)
    {
        $this->name =$name;
        $this->age =$age;
    }

}


$person = new Person('Eddie', 30);

$person->run();


echo $person->name ;

echo "\n";

?>