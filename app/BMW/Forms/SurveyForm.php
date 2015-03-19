<?php namespace BMW\Forms;

use Laracasts\Validation\FormValidator;

class SurveyForm extends FormValidator {

	/**
	 * Validation rules for logging in
	 *
	 * @var array
	 */
	protected $rules = [
		'vehicles_owned' => 'required',
		'other_vehicles_owned' => 'required_if:vehicles_owned,checked|max:100|min:2',
		'fuel' => 'required',
		'car_body_type' => 'required',
		'other_car_body_type' => 'required_if:car_body_type,checked|max:100|min:2',
		'car_colors' => 'required',
		'other_car_color' => 'required_if:car_colors,checked|max:100|min:2',
		'upholstery_color' => 'required',
		'rating_exterior_design' => 'required|numeric',
		'rating_interior_design' => 'required|numeric',
		'rating_engine_power' => 'required|numeric',
		'rating_handling' => 'required|numeric',
		'rating_comfort_luxury' => 'required|numeric',
		'rating_technology' => 'required|numeric',
		'rating_safety' => 'required|numeric',
		'rating_brand' => 'required',
		'rating_fuel_economy' => 'required|numeric',
		'rating_pricing' => 'required|numeric',
		'rating_maintenance_cost' => 'required|numeric',
		'rating_others' => 'required|numeric',
		'other_rating' => 'required_with:other_rating|max:100|min:2',
		'car_choices' => 'required',
		'other_car_choice' => 'required_if:car_choices,checked|max:100|min:2',
		'why_buy_a_bmw' => 'required',
		'other_why_buy_a_bmw' => 'required_if:why_buy_a_bmw,checked|max:100|min:2',
		'receive_correspondence' => 'required',
		'notify_bmw' => 'required'
	];


} 