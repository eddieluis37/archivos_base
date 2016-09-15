 <?php 
class Person
{
	public $age;
	public $name;
	public function run()
	{
		echo " Estoy corriendo";
	}

	public function __construct($name, $age) 
	{
		$this->name = $name;
		$this->age = $age;
	}


}
$person = new Person('Eddie', 10);

$person->run();

echo $person->name;




$person2 = new Person('Marco', 20);
echo "\n";
echo $person2->name;
$person2->run();
echo "\n";

?>