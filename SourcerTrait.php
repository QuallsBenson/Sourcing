<?php namespace Quallsbenson\Sourcing;

use Quallsbenson\Sourcing\SourceableInterface;


trait SourcerTrait{


	public function sourceEach( array $sourceables )
	{

		//make sure that array is not associative
		$sourceables = array_values( $sourceables );

		for( $i = 0; isset( $sourceables[$i] ); $i++ )
		{

			//source the item
			$this->source( $sourceables[$i] );

		}

		return $this;

	}


	public function addSourceable( SourceableInterface $sourceable )
	{


		$this->sourceables[] = $sourceable;

		
		if( $sourceable->hasSource() )
		{

			$this->sourced[]   = $sourceable;

		}
		else
		{

			$this->unsourced[] = $sourceable;

		}

		return $this;

	}


	public function getSourced()
	{

		return @$this->sourced ?: [];

	}


	public function getUnsourced()
	{

		return @$this->unsourced ?: [];

	}


	public function getSourceable()
	{

		return @$this->sourceables ?: [];

	}

	public function reset()
	{

		$this->sourceables = [];
		$this->unsourced   = [];
		$this->sourced     = [];

		return $this;

	}	


}