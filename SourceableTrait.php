<?php namespace Quallsbenson\Sourcing;


trait SourceableTrait{


	public function setSource( $source )
	{

		$this->source = $source;
		return $this;

	}


	public function getSource()
	{

		return $this->source;

	}


	public function hasSource()
	{

		return !!$this->source;

	}



}

	