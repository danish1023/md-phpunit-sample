<?php
class HelloWorldTest extends \PHPUnit\Framework\TestCase
{

    public function testGreeting()
    {

        $greeting = "Hello World";
        $requiredGreeting = "Hello World";

        $this->assertEquals($greeting, $requiredGreeting);

	}
	
	public function testAgain()
    {

        $greeting = "Hi World";
        $requiredGreeting = "Hello World";

        $this->assertEquals($greeting, $requiredGreeting);

    }

}
