<?php namespace BMW\Registrations;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent, Carbon;

class Participant extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'participants';


	/**
	 * The fields that are allowed to be filled.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'registration_id', 'personal_salutation', 'first_name', 'middle_initial', 'last_name', 'nickname', 'gender', 'status', 'birthdate', 'age', 'hobbies', 'mobile_number', 'email_address', 'occupation', 'company_name', 'home_address1', 'home_address2', 'home_city', 'home_province', 'home_zip_code', 'home_phone', 'business_industry', 'business_address1', 'business_address2', 'business_city', 'business_province', 'business_zip_code', 'business_phone', 'spouse_salutation', 'spouse_first_name', 'spouse_last_name', 'spouse_birthdate', 'spouse_age', 'spouse_hobbies'];

	 /**
    * Required for softdeletion of records
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    /**
	* Specify the kind of relationship between the Registration and Participant models from the perspective of the registration model
	*
	* @return dependency between the two models
	*/
    public function registration()
    {
        return $this->belongsTo('BMW\Registrations\Registration', 'registration_id', 'registration_id');
    }

     /**
    * Add instance of Participant
    *
    * @param mixed
    * @return Registration
    */
    public static function add($registration_id, $personal_salutation, $first_name, $middle_initial, $last_name, $nickname, $gender, $status, $birthdate, $age, $hobbies, $mobile_number, $email_address, $occupation, $company_name, $home_address1, $home_address2, $home_city, $home_province, $home_zip_code, $home_phone, $business_industry, $business_address1, $business_address2, $business_city, $business_province, $business_zip_code, $business_phone, $spouse_salutation, $spouse_first_name, $spouse_last_name, $spouse_birthdate, $spouse_age, $spouse_hobbies) {

		$participant = new static(compact('registration_id', 'personal_salutation', 'first_name', 'middle_initial', 'last_name', 'nickname', 'gender', 'status', 'birthdate', 'age', 'hobbies', 'mobile_number', 'email_address', 'occupation', 'company_name', 'home_address1', 'home_address2', 'home_city', 'home_province', 'home_zip_code', 'home_phone', 'business_industry', 'business_address1', 'business_address2', 'business_city', 'business_province', 'business_zip_code', 'business_phone', 'spouse_salutation', 'spouse_first_name', 'spouse_last_name', 'spouse_birthdate', 'spouse_age', 'spouse_hobbies'));

		return $participant;
    }

    /**
    * Return concatenated first, middle, and last names of Participant
    *
    * @return String
    */
    public function getNameAttribute() {
        return $name = ucfirst($this->first_name) . ' ' . ucfirst($this->middle_initial) . '. ' . ucfirst($this->last_name);
    }


}
