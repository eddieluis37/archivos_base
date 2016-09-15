<?php
namespace at\bistro;
class MyProfile extends BaseProfile
{	

	private $email = 'bernardo@correo.com';
	public $name;
	public $last_name;

	public function __construct()
	{
		//echo "Conectando a " . self::DB_DATABASE_NAME;
		$this->connect2DB();
		//echo self::DOMAIN_NAME;
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