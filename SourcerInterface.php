<?php namespace Quallsbenson\Sourcing;


use Quallsbenson\Sourcing\SourceableInterface;


interface SourcerInterface{
	
	/**
	* determine the source of a sourceable item, and updates it
	**/

	public function source( SourceableInterface $sourceable );


	/**
	* sources each sourceable object in an array of sourceables
	**/

	public function sourceEach( array $sourceables );


	/**
	* @return an array of successfully sourced objects
	**/

	public function getSourced();


	/**
	* @return an array of all unsourced objects
	**/

	public function getUnsourced();


	/**
	* @return an array of all sourceable aobjects
	**/

	public function getSourceable();

	/**
	* add anitem to internal sourceable collection 
	**/

	public function addSourceable( SourceableInterface $sourceable );

}