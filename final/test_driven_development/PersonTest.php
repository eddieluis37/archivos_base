<?php
require_once('Person.php');
class PersonTest extends PHPUnit_Framework_TestCase
{

    public function testPersonConstruct()
    {
        $person = new Person('Bernardo', 'Pineda');
        $this->assertTrue($person instanceof Person, 'It should be instance of class Person');
        $this->assertTrue($person->getName() == 'Bernardo', 'It should be Bernardo');
        $this->assertTrue($person->getFamilyName() == 'Pineda', 'It should be Pineda');

    }

    /**
    * @expectedException Exception
    **/
    public function testEmptyName()
    {
        $person = new Person('', 'Pineda');
    }

    

}
