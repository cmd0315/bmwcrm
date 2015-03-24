<?php namespace BMW\Registrations;

use Laracasts\Commander\CommandHandler;
use BMW\Registrations\Participant;
use BMW\Registrations\ParticipantRepository;

class ParticipantRegistrationCommandHandler implements CommandHandler {

	/**
	* @var ParticipantRepository $participantRepository
	*/
	protected $participantRepository;
	

	/**
	* Constructor
	*
	* @param ParticipantRepository $participantRepository
	*/
	function __construct(ParticipantRepository $participantRepository) {
		$this->participantRepository = $participantRepository;
	}


	/**
	*
	* Handle the command
	*
	* @param ParticipantRegistrationCommand $command
	* @return mixed
	*/
	public function handle($command) {
		// Create Participant Object
		$participant = Participant::add(
			$command->registration_id, $command->personal_salutation, $command->other_personal_salutation, $command->first_name, $command->middle_initial, $command->last_name, $command->nickname, $command->gender, $command->status, $command->birthdate, $command->age, $command->hobbies, $command->other_hobby, $command->mobile_number, $command->email_address, $command->occupation, $command->company_name, $command->home_address1, $command->home_address2, $command->home_city, $command->home_province, $command->home_zip_code, $command->home_phone, $command->business_industry, $command->business_address1, $command->business_address2, $command->business_city, $command->business_province, $command->business_zip_code, $command->business_phone, $command->spouse_salutation, $command->other_spouse_salutation, $command->spouse_first_name, $command->spouse_last_name, $command->spouse_birthdate, $command->spouse_age, $command->spouse_hobbies, $command->other_spouse_hobby
		);

		$participant = $this->participantRepository->save($participant);
		
		return $participant;
	}
}