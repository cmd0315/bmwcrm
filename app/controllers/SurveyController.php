<?php
use BMW\Registrations\RegistrationRepository;
use BMW\Forms\SurveyForm;
use Laracasts\Validation\FormValidationException;
use BMW\SurveyAnswers\SurveyAnswerCommand;
use BMW\Core\CommandBus;

class SurveyController extends \BaseController {

	use CommandBus;

	/**
	* @var RegistrationRepository $registrationRepository
	*
	*/
	protected $registrationRepository;

	/**
	* @var SurveyForm $surveyForm
	*
	*/
	protected $surveyForm;


	/**
	* Constructor
	*
	* @param RegistrationRepository $registrationRepository
	* @param SurveyForm $surveyForm
	*
	*/
	function __construct(RegistrationRepository $registrationRepository, SurveyForm $surveyForm) {
		$this->registrationRepository = $registrationRepository;
		$this->surveyForm = $surveyForm;
		$this->beforeFilter('guest', ['except' => 'destroy']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @param String $registration_id
	 * @return Response
	 */
	public function create($registration_id)
	{
		$fuels = ['Diesel' => 'Diesel', 'Gasoline' => 'Gasoline'];

		return View::make('survey', ['pageTitle' => 'Survey'], compact('registration_id', 'fuels'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @param String $registration_id
	 * @return Response
	 */
	public function store($registration_id)
	{
		$input = Input::only('vehicles_owned', 'other_vehicles_owned', 'fuel', 'car_body_type', 'other_car_body_type', 'car_colors', 'other_car_color', 'upholstery_color', 'rating_exterior_design', 'rating_interior_design', 'rating_engine_power', 'rating_handling', 'rating_comfort_luxury', 'rating_technology', 'rating_safety', 'rating_brand', 'rating_fuel_economy', 'rating_pricing', 'rating_maintenance_cost', 'rating_others', 'other_rating', 'car_choices', 'other_car_choice', 'why_buy_a_bmw', 'other_why_buy_a_bmw', 'receive_correspondence', 'notify_bmw');

		// Check form for error
		// try {
		// 	$this->surveyForm->validate($input);
		// }
		// catch(FormValidationException $error) {
		// 	return Redirect::back()->withInput()->withErrors($error->getErrors());
		// }


		$registration = $this->registrationRepository->getRegistrationByRegID($registration_id);

		if($registration) {
			extract($input);

			$vehicles_owned = implode(', ', $vehicles_owned);
			$car_body_type = implode(', ', $car_body_type);
			$car_colors = implode(', ', $car_colors);
			$car_choices = implode(', ', $car_choices);
			$why_buy_a_bmw = implode(', ', $why_buy_a_bmw);

			// Execute command to insert contact person data
			$addSurveyAnswers = $this->execute(
				new SurveyAnswerCommand($registration->registration_id, $vehicles_owned, $other_vehicles_owned, $fuel, $car_body_type, $other_car_body_type, $car_colors, $other_car_color, $upholstery_color, $rating_exterior_design, $rating_interior_design, $rating_engine_power, $rating_handling, $rating_comfort_luxury, $rating_technology, $rating_safety, $rating_brand, $rating_fuel_economy, $rating_pricing, $rating_maintenance_cost, $rating_others, $other_rating, $car_choices, $other_car_choice, $why_buy_a_bmw, $other_why_buy_a_bmw, $receive_correspondence, $notify_bmw)
			);

			if($addSurveyAnswers) {
				return Redirect::route('survey.create', $registration_id)->with('registration-success', 'Registration completed.');
			}
			else {
				Flash::error('Failed to register!', 'An error occured when trying to register.');
			}
		}

		return Redirect::route('survey.create', $registration_id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
