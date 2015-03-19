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
		'first_name' => 'required|max:60|min:2',
		'middle_initial' => 'max:5|min:1',
		'last_name' => 'required|max:60|min:2',
		'nickname' => 'max:30|min:2',
		'gender' => 'max:10|min:5',
		'status' => 'max:10|min:4',
		'birthdate' => 'required|date',
		'age' => 'numeric',
		'hobbies' => 'max:250|min:2',
		'mobile_number' => 'required|max:20|min:11',
		'email_address' => 'required|max:50|email',
		'occupation' => 'required|max:250|min:2',
		'company_name' => 'max:100|min:2',
		'home_address1' => 'required|max:100|min:2',
		'home_address2' => 'required|max:100|min:2',
		'home_city' => 'required',
		'home_zip_code' => 'max:30|min:2',
		'home_phone' => 'required|max:20|min:11',
		'business_industry' => 'required',
		'business_address1' => 'required|max:100|min:2',
		'business_address2' => 'required|max:100|min:2',
		'business_city' => 'required',
		'business_zip_code' => 'max:30|min:2',
		'business_phone' => 'required|max:20|min:11',
		'spouse_first_name' => 'max:60|min:2',
		'spouse_last_name' => 'required_with_all:spouse_first_name|max:60|min:2',
		'spouse_birthdate' => 'required_with_all:spouse_first_name,spouse_last_name|date',
		'spouse_age' => 'required_with:spouse_birthdate',
		'spouse_hobbies' => 'max:250|min:2'
	];


} 