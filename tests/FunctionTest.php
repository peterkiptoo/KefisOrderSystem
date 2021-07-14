<?php
use PHPUnit\Framework\TestCase;
/**
 * 
 */
class FunctionTest extends TestCase
{
	
	public function testMakeSale()
	{
		require 'function.php';
		$this->assertEquals(5, sell(1));
	}
	public function testDispatchStock()
	{
		require 'function.php';
		$this->assertEquals(5, dispatch(5));
	}
}
?>