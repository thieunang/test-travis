<?php

class SumTest extends PHPUnit_Framework_TestCase {
	/**
	@test
	*/
	public function testSum()
	{
		$this->assertEquals(3, Sum::getSum(1,2));
	}
}
?>