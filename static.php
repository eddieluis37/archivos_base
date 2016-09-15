<?php
class BaseProfile
{
	protected $connection_data = 'Conexion BD';
	protected function connect2DB()
	{
		echo $this->connection_data;
	}
	public function __construct()
	{
		$this->connect2DB();
	}
}

class MyProfile extends BaseProfile
{	

	private $email = 'bernardo@correoc.com';
	public $name;
	public $last_name;

	public function __construct()
	{
		$this->connect2DB();
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		//Reglas para la asignación de nuestro correo
		$this->email = $email;
	}

	public function message()
	{
		echo "mensaje";
	}



}

