<?php namespace BMW\Forms;

use Laracasts\Validation\FormValidator;

class PersonalInfoForm extends FormValidator {

	/**
	 * Validation rules for logging in
	 *
	 * @var array
	 */
	protected $rules = [
		'personal_salutation' => 'required',
		'first_name' => 'required|min:2',
		'middle_initial' => 'min:1',
		'last_name' => 'required|min:2',
		'nickname' => 'min:2',
		'birthdate' => 'required|date',
		'age' => 'numeric',
		'hobbies' => 'min:2',
		'mobile_number' => 'numeric',
		'email_address' => 'required|email',
		'occupation' => 'required|min:2',
		'company_name' => 'min:2',
		'home_address1' => 'required',
		'home_address2' => 'required',
		'home_city' => 'required',
		'business_industry' => 'required',
		'business_phone' => 'required',
		'spouse_first_name' => 'min:2',
		'spouse_last_name' => 'min:2',
		'spouse_birthdate' => 'date',
		'spouse_hobbies' => 'min:2'
	];


} 