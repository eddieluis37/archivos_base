<?php
class Tweets
{
	const PLATFORM = 'twitter';
	private $tweets;
	function __construct()
	{
		$this->tweets = [	"Llegando al aeropuerto\n", 
							"Llegando al hotel\n",

							];
	}

	public function getMyTweets()
	{
		return $this->tweets;
	}

}