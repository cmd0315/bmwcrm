<?php namespace BMW\Registrations;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent, Carbon;

class Registration extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'registrations';


	/**
	 * The fields that are allowed to be filled.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'registration_id'];

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
    public function participant()
    {
        return $this->hasOne('BMW\Registrations\Participant', 'registration_id', 'registration_id');
    }

    /**
	* Specify the kind of relationship between the Registration and SurveyAnswer models from the perspective of the Registration model
	*
	* @return dependency between the two models
	*/
    public function surveyAnswer()
    {
        return $this->hasOne('BMW\SurveyAnswers\SurveyAnswer', 'registration_id', 'registration_id');
    }

    /**
    * Add instance of registration
    *
    * @param String $registration_id
    * @return Registration
    */
    public static function add($registration_id) {
		$registration = new static(compact('registration_id'));

		return $registration;
    }


}
