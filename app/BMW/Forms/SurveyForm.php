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
		'other_vehicles_owned' => 'required_if:vehicles_owned,OTHERS|min:2',
		'fuel' => 'required',
		'car_body_type' => 'required',
		'other_car_body_type' => 'required_if:car_body_type,OTHERS|min:2',
		'car_colors' => 'required',
		'other_car_color' => 'required_if:car_colors,OTHERS|min:2',
		'upholstery_color' => 'required',
		'rating_exterior_design' => 'required_without_all:rating_interior_design,rating_engine_power,rating_handling,rating_comfort_luxury,rating_technology,rating_safety,rating_brand,rating_fuel_economy,rating_pricing,rating_maintenance_cost,rating_others|numeric|between:1,12',
		'rating_interior_design' => 'required_without_all:rating_exterior_design,rating_engine_power,rating_handling,rating_comfort_luxury,rating_technology,rating_safety,rating_brand,rating_fuel_economy,rating_pricing,rating_maintenance_cost,rating_others|numeric|between:1,12',
		'rating_engine_power' => 'required_without_all:rating_exterior_design,rating_interior_design,rating_handling,rating_comfort_luxury,rating_technology,rating_safety,rating_brand,rating_fuel_economy,rating_pricing,rating_maintenance_cost,rating_others|numeric|between:1,12',
		'rating_handling' => 'required_without_all:rating_exterior_design,rating_interior_design,rating_engine_power,rating_comfort_luxury,rating_technology,rating_safety,rating_brand,rating_fuel_economy,rating_pricing,rating_maintenance_cost,rating_others|numeric|between:1,12',
		'rating_comfort_luxury' => 'required_without_all:rating_exterior_design,rating_interior_design,rating_engine_power,rating_handling,rating_technology,rating_safety,rating_brand,rating_fuel_economy,rating_pricing,rating_maintenance_cost,rating_others|numeric|between:1,12',
		'rating_technology' => 'required_without_all:rating_exterior_design,rating_interior_design,rating_engine_power,rating_handling,rating_comfort_luxury,rating_safety,rating_brand,rating_fuel_economy,rating_pricing,rating_maintenance_cost,rating_others|numeric|between:1,12',
		'rating_safety' => 'required_without_all:rating_exterior_design,rating_interior_design,rating_engine_power,rating_handling,rating_comfort_luxury,rating_technology,rating_brand,rating_fuel_economy,rating_pricing,rating_maintenance_cost,rating_others|numeric|between:1,12',
		'rating_brand' => 'required_without_all:rating_exterior_design,rating_interior_design,rating_engine_power,rating_handling,rating_comfort_luxury,rating_technology,rating_safety,rating_fuel_economy,rating_pricing,rating_maintenance_cost,rating_others|numeric|between:1,12',
		'rating_fuel_economy' => 'required_without_all:rating_exterior_design,rating_interior_design,rating_engine_power,rating_handling,rating_comfort_luxury,rating_technology,rating_safety,rating_brand,rating_pricing,rating_maintenance_cost,rating_others|numeric|between:1,12',
		'rating_pricing' => 'required_without_all:rating_exterior_design,rating_interior_design,rating_engine_power,rating_handling,rating_comfort_luxury,rating_technology,rating_safety,rating_brand,rating_fuel_economy,rating_maintenance_cost,rating_others|numeric|between:1,12',
		'rating_maintenance_cost' => 'required_without_all:rating_exterior_design,rating_interior_design,rating_engine_power,rating_handling,rating_comfort_luxury,rating_technology,rating_safety,rating_brand,rating_fuel_economy,rating_pricing,rating_others|numeric|between:1,12',
		'rating_others' => 'required_without_all:rating_exterior_design,rating_interior_design,rating_engine_power,rating_handling,rating_comfort_luxury,rating_technology,rating_safety,rating_brand,rating_fuel_economy,rating_pricing,rating_maintenance_cost|numeric|between:1,12',
		'other_rating' => 'required_with:rating_others|min:2',
		'car_choices' => 'required',
		'other_car_choice' => 'required_if:car_choices,OTHERS|min:2',
		'why_buy_a_bmw' => 'required',
		'other_why_buy_a_bmw' => 'required_if:why_buy_a_bmw,OTHERS|min:2',
		'receive_correspondence' => 'required',
		'notify_bmw' => 'required'
	];


} 