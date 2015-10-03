<?php namespace Quallsbenson\Sourcing\Test\Mock;


use Quallsbenson\Sourcing\SourcerInterface;
use Quallsbenson\Sourcing\SourceableInterface;
use Quallsbenson\Sourcing\Test\Mock\Person;


class PersonSourcer implements SourcerInterface{


	use \Quallsbenson\Sourcing\SourcerTrait;

	public function isPerson( $object )
	{
		return ( $object instanceof Person );
	}


	public function source( SourceableInterface $person )
	{

		//throw error if sourceable is not a person
		if( !$this->isPerson( $person ) )
		{
			throw new \InvalidArgumentException( "object passed to source must be instance of Person" );
		}

		//set the source to whatever value
		$person->setSource( "whatever" );

		//push sourced person to array 
		$this->addSourceable( $person );

	}


}