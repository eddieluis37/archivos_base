<?php
require_once('Person.php');
class StackTest extends PHPUnit_Framework_TestCase
{

    public function testPersonConstruct()
    {
        //$this->assertTrue(true, 'It should be true');
        $person = new Person('Bernard', 'Pineda', '555 5555', '444 44444');
        $this->assertEquals($person->getName(), 'Bernard', 'It should be Bernard');
        $this->assertEquals($person->getFamilyName(), 'Pineda', 'It should be Pineda');
        
    }

    /**
    * @expectedException Exception
    **/
    public function testThrowException()
    {
        $person = new Person('Bernard', 'Pineda', '555 5555', '444 44444');
        $this->assertEquals($person->geName(), 'Bernard', 'It should be Bernard');
    }

}
