<?php namespace BMW\Registrations;

class RegistrationCommand {

	/**
	* @var mixed
	*/
	public $registration_id;

	/**
	* Constructor
	*
	* @param String $registration_id
	*/
	function __construct($registration_id) 
	{
		$this->registration_id = $registration_id;
	}
}