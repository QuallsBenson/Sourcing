<?php


use Quallsbenson\Sourcing\Test\Mock\Person;
use Quallsbenson\Sourcing\Test\Mock\PersonSourcer;


require dirname(dirname(__FILE__)) .'/vendor/autoload.php';


class SourcingTest extends PHPUnit_Framework_TestCase{


	public function testInit()
	{

		$person  = new Person;
		$sourcer = new PersonSourcer;

		$sourced = $sourcer->sourceEach( [ $person, $person ] )->getSourced();

		$this->assertEquals( count( $sourced ), 2 );

		$this->assertEquals( $sourced[0]->getSource(), "whatever" );

		$this->assertEquals( count( $sourcer->getUnsourced() ), 0 );

	}



}