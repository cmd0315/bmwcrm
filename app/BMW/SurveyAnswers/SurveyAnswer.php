<?php namespace BMW\SurveyAnswers;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent, Carbon;

class SurveyAnswer extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'survey';

	/**
	 * The fields that are allowed to be filled.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'registration_id', 'vehicles_owned', 'other_vehicles_owned', 'fuel', 'car_body_type', 'other_car_body_type', 'car_colors', 'other_car_color', 'upholstery_color', 'rating_exterior_design', 'rating_interior_design', 'rating_engine_power', 'rating_handling', 'rating_comfort_luxury', 'rating_technology', 'rating_safety', 'rating_brand', 'rating_fuel_economy', 'rating_pricing', 'rating_maintenance_cost', 'rating_others', 'other_rating', 'car_choices', 'other_car_choice', 'why_buy_a_bmw', 'other_why_buy_a_bmw', 'receive_correspondence', 'notify_bmw'];


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
    * Add instance of registration
    *
    * @param String $registration_id
    * @return SurveyAnswer
    */
    public static function add($registration_id, $vehicles_owned, $other_vehicles_owned, $fuel, $car_body_type, $other_car_body_type, $car_colors, $other_car_color, $upholstery_color, $rating_exterior_design, $rating_interior_design, $rating_engine_power, $rating_handling, $rating_comfort_luxury, $rating_technology, $rating_safety, $rating_brand, $rating_fuel_economy, $rating_pricing, $rating_maintenance_cost, $rating_others, $other_rating, $car_choices, $other_car_choice, $why_buy_a_bmw, $other_why_buy_a_bmw, $receive_correspondence, $notify_bmw) {
    	
		$survey_answer = new static(compact('registration_id', 'vehicles_owned', 'other_vehicles_owned', 'fuel', 'car_body_type', 'other_car_body_type', 'car_colors', 'other_car_color', 'upholstery_color', 'rating_exterior_design', 'rating_interior_design', 'rating_engine_power', 'rating_handling', 'rating_comfort_luxury', 'rating_technology', 'rating_safety', 'rating_brand', 'rating_fuel_economy', 'rating_pricing', 'rating_maintenance_cost', 'rating_others', 'other_rating', 'car_choices', 'other_car_choice', 'why_buy_a_bmw', 'other_why_buy_a_bmw', 'receive_correspondence', 'notify_bmw'));

		return $survey_answer;
    }




}
