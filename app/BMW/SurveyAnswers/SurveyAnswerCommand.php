<?php namespace BMW\SurveyAnswers;

class SurveyAnswerCommand {

	/**
	* @var mixed
	*/
	public $registration_id, $vehicles_owned, $other_vehicles_owned, $fuel, $car_body_type, $other_car_body_type, $car_colors, $other_car_color, $upholstery_color, $rating_exterior_design, $rating_interior_design, $rating_engine_power, $rating_handling, $rating_comfort_luxury, $rating_technology, $rating_safety, $rating_brand, $rating_fuel_economy, $rating_pricing, $rating_maintenance_cost, $rating_others, $other_rating, $car_choices, $other_car_choice, $why_buy_a_bmw, $other_why_buy_a_bmw, $receive_correspondence, $notify_bmw;

	/**
	* Constructor
	*
	* @param mixed
	*/
	function __construct($registration_id, $vehicles_owned, $other_vehicles_owned, $fuel, $car_body_type, $other_car_body_type, $car_colors, $other_car_color, $upholstery_color, $rating_exterior_design, $rating_interior_design, $rating_engine_power, $rating_handling, $rating_comfort_luxury, $rating_technology, $rating_safety, $rating_brand, $rating_fuel_economy, $rating_pricing, $rating_maintenance_cost, $rating_others, $other_rating, $car_choices, $other_car_choice, $why_buy_a_bmw, $other_why_buy_a_bmw, $receive_correspondence, $notify_bmw) 
	{
		$this->registration_id = $registration_id;
		$this->vehicles_owned = $vehicles_owned;
		$this->other_vehicles_owned = $other_vehicles_owned;
		$this->fuel = $fuel;
		$this->car_body_type = $car_body_type;
		$this->other_car_body_type = $other_car_body_type;
		$this->car_colors = $car_colors;
		$this->other_car_color = $other_car_color;
		$this->upholstery_color = $upholstery_color;
		$this->rating_exterior_design = $rating_exterior_design;
		$this->rating_interior_design = $rating_interior_design;
		$this->rating_engine_power = $rating_engine_power;
		$this->rating_handling = $rating_handling;
		$this->rating_comfort_luxury = $rating_comfort_luxury;
		$this->rating_technology = $rating_technology;
		$this->rating_safety = $rating_safety;
		$this->rating_brand = $rating_brand;
		$this->rating_fuel_economy = $rating_fuel_economy;
		$this->rating_pricing = $rating_pricing;
		$this->rating_maintenance_cost = $rating_maintenance_cost;
		$this->rating_others = $rating_others;
		$this->other_rating = $other_rating;
		$this->car_choices = $car_choices;
		$this->other_car_choice = $other_car_choice;
		$this->why_buy_a_bmw = $why_buy_a_bmw;
		$this->other_why_buy_a_bmw = $other_why_buy_a_bmw;
		$this->receive_correspondence = $receive_correspondence;
		$this->notify_bmw = $notify_bmw;
	}
}