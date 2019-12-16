<?php
use PHPUnit\Framework\TestCase;
require('app/Foo.php');

class FooTest extends TestCase
{

	public function testAddition()
	{
		$Foo = new Foo();
		$this->assertEquals(5, $Foo->addition(3, 2));
		$this->assertEquals(6, $Foo->addition(3, 2));
	}

	public function testSubtraction()
	{
		$Foo = new Foo();
		$this->assertEquals(1, $Foo->subtraction(3, 2));
	}
}
