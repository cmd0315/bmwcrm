<?php namespace BMW\Registrations;

class ParticipantRegistrationCommand {

	/**
	* @var mixed
	*/
	public $registration_id, $personal_salutation, $other_personal_salutation, $first_name, $middle_initial, $last_name, $nickname, $gender, $status, $birthdate, $age, $hobbies, $other_hobby, $mobile_number, $email_address, $occupation, $company_name, $home_address1, $home_address2, $home_city, $home_province, $home_zip_code, $home_phone, $business_industry, $business_address1, $business_address2, $business_city, $business_province, $business_zip_code, $business_phone, $spouse_salutation, $other_spouse_salutation, $spouse_first_name, $spouse_last_name, $spouse_birthdate, $spouse_age, $spouse_hobbies, $other_spouse_hobby;

	/**
	* Constructor
	*
	* @param mixed
	*/
	function __construct($registration_id, $personal_salutation, $other_personal_salutation, $first_name, $middle_initial, $last_name, $nickname, $gender, $status, $birthdate, $age, $hobbies, $other_hobby, $mobile_number, $email_address, $occupation, $company_name, $home_address1, $home_address2, $home_city, $home_province, $home_zip_code, $home_phone, $business_industry, $business_address1, $business_address2, $business_city, $business_province, $business_zip_code, $business_phone, $spouse_salutation, $other_spouse_salutation, $spouse_first_name, $spouse_last_name, $spouse_birthdate, $spouse_age, $spouse_hobbies, $other_spouse_hobby) 
	{
		$this->registration_id = $registration_id;
		$this->personal_salutation = $personal_salutation;
		$this->other_personal_salutation = $other_personal_salutation;
		$this->first_name = $first_name;
		$this->middle_initial = $middle_initial;
		$this->last_name = $last_name;
		$this->nickname = $nickname;
		$this->gender = $gender;
		$this->status = $status;
		$this->birthdate = $birthdate;
		$this->age = $age;
		$this->hobbies = $hobbies;
		$this->other_hobby = $other_hobby;
		$this->mobile_number = $mobile_number;
		$this->email_address = $email_address;
		$this->occupation = $occupation;
		$this->company_name = $company_name;
		$this->home_address1 = $home_address1;
		$this->home_address2 = $home_address2;
		$this->home_city = $home_city;
		$this->home_province = $home_province;
		$this->home_zip_code = $home_zip_code;
		$this->home_phone = $home_phone;
		$this->business_industry = $business_industry;
		$this->business_address1 = $business_address1;
		$this->business_address2 = $business_address2;
		$this->business_city = $business_city;
		$this->business_province = $business_province;
		$this->business_zip_code = $business_zip_code;
		$this->business_phone = $business_phone;
		$this->spouse_salutation = $spouse_salutation;
		$this->other_spouse_salutation = $other_spouse_salutation;
		$this->spouse_first_name = $spouse_first_name;
		$this->spouse_last_name = $spouse_last_name;
		$this->spouse_birthdate = $spouse_birthdate;
		$this->spouse_age = $spouse_age;
		$this->spouse_hobbies = $spouse_hobbies;
		$this->other_spouse_hobby = $other_spouse_hobby;
	}
}