<?php
class Posts
{
	const PLATFORM = 'facebook';
	private $posts;
	function __construct()
	{
		$this->posts = [	"Estoy en la playa\n", 
							"Me he comprado un nuevo ordenador\n",

							];
	}

	public function getMyPosts()
	{
		return $this->posts;
	}

	public function greet()
	{
		echo "Hola desde FB";
	}

}