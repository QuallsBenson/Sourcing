<?php namespace Quallsbenson\Sourcing;


interface SourceableInterface{
	
	/**
	* @return bool, true if source set, false if not
	**/

	public function hasSource();

	/**
	* get the current value of source 
	**/

	public function getSource();

	/**
	* set the current value of source
	**/

	public function setSource( $value );

}