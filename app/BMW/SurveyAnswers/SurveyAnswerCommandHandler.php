<?php namespace BMW\SurveyAnswers;

use Laracasts\Commander\CommandHandler;
use BMW\SurveyAnswers\SurveyAnswer;
use BMW\SurveyAnswers\SurveyAnswerRepository;
use BMW\Mailers\UserMailer;

class SurveyAnswerCommandHandler implements CommandHandler {

	/**
	* @var SurveyAnswerRepository $surveyAnswerRepository
	*/
	protected $surveyAnswerRepository;

	/**
	* @var UserMailer $mailer
	*/
	protected $mailer;

	

	/**
	* Constructor
	*
	* @param SurveyAnswerRepository $surveyAnswerRepository
	* @param UserMailer $mailer
	*/
	function __construct(SurveyAnswerRepository $surveyAnswerRepository, UserMailer $mailer) {
		$this->surveyAnswerRepository = $surveyAnswerRepository;
		$this->mailer = $mailer;
	}


	/**
	*
	* Handle the command
	*
	* @param SurveyAnswerCommand $command
	* @return mixed
	*/
	public function handle($command) {
		// Create SurveyAnswer Object
		$surveyAnswer = SurveyAnswer::add(
			$command->registration_id, $command->vehicles_owned, $command->other_vehicles_owned, $command->fuel, $command->car_body_type, $command->other_car_body_type, $command->car_colors, $command->other_car_color, $command->upholstery_color, $command->rating_exterior_design, $command->rating_interior_design, $command->rating_engine_power, $command->rating_handling, $command->rating_comfort_luxury, $command->rating_technology, $command->rating_safety, $command->rating_brand, $command->rating_fuel_economy, $command->rating_pricing, $command->rating_maintenance_cost, $command->rating_others, $command->other_rating, $command->car_choices, $command->other_car_choice, $command->why_buy_a_bmw, $command->other_why_buy_a_bmw, $command->receive_correspondence, $command->notify_bmw
		);

		$surveyAnswer = $this->surveyAnswerRepository->save($surveyAnswer);

		if($surveyAnswer) {
			//Send confirmation Email
			$mailUser = $this->mailer->confirmRegistration($command->registration_id);
		}

		
		return $surveyAnswer;
	}
}