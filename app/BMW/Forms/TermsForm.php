<?php namespace BMW\Forms;

use Laracasts\Validation\FormValidator;

class TermsForm extends FormValidator {

	/**
	 * Validation rules for logging in
	 *
	 * @var array
	 */
	protected $rules = [
		'accept_terms' => 'accepted'
	];


} 