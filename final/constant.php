<?php

class Config
{
	/*const DB_USER_NAME = 'bpineda';
	const DB_USER_PASSWORD = '123456787';
	const DB_DATABASE_NAME = 'mydb';*/
	const ENVIRONMENT = 'development';
}
class BaseProfile extends Config
{
	protected $connection_data = 'Conexion BD';
	protected function connect2DB()
	{
		if( 'production' == self::ENVIRONMENT )
		{
			echo 'Conectando a produccion';
		}

		if( 'development' == self::ENVIRONMENT )
		{
			echo 'Conectando a desarollo';
		}

		if( 'staging' == self::ENVIRONMENT )
		{
			echo 'Conectando a staging';
		}
	}
	public function __construct()
	{
		$this->connect2DB();
	}
}

class MyProfile extends BaseProfile
{	

	const DOMAIN_NAME = 'bernardoredsocial.com';
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

//echo MyProfile::DOMAIN_NAME;
$instMyProfile = new MyProfile;