<?php
class Person
{
	private $name;
	private $familyname;
	private $phone;
	private $mobile;

	public function __toString()
	{
		return $this->name . " " . $this->familyname. "," . $this->phone. " o " . $this->mobile . "\n";
	}

}

