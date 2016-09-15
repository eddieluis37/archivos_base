<?php
class MyProfile
	
	public $name;
	public $last_name;

	public function __construct()
	{

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



}

