<?php
class BaseProfile
{
	protected $connection_data = 'Conexion BD';
	protected function connect2DB()
	{
		
	}
	public function __construct()
	{
		$this->connect2DB();
	}
}

class MyProfile extends BaseProfile
{	

	
	private $email = 'bernardo@correo.com';
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