<?php namespace BMW\Mailers;

use BMW\Registrations\RegistrationRepository;

use View;
class UserMailer extends Mailer {

	/**
	* @var RegistrationRepository $registrations
	*/

	protected $registrations;


	/**
	* Constructor
	*
	* @var RegistrationRepository $registrations
	*/
	function __construct(RegistrationRepository $registrations) {
		$this->registrations = $registrations;
	}


	
	/**
	* Get Email Recipient
	*
	* @var String $registration_id
	* @return Registration
	*/
	public function getRegistrationInfo($registration_id) {
		$registration = $this->registrations->getRegistrationByRegID($registration_id);

		return $registration;
	}

	/**
	* Get Email Recipient
	*
	* @var Registration $registration
	* @return Participant
	*/
	public function getRecipient($registration) {
		$participant = $registration->participant;

		return $participant;
	}

	/**
	* Send Confirmation Message
	*
	* @var String $registration_id
	* @return UserMailer
	*/
	public function confirmRegistration($registration_id) {

		$view = 'emails.confirmation';
		$subject = 'BMW Magazine Subscription';

		$registration = $this->getRegistrationInfo($registration_id);

		$recipient = $this->getRecipient($registration);
		$recipientEmailAddress = $recipient->email_address;
		// $recipientEmailAddress = 'charissedalida@gmail.com';
		$recipientName = $recipient->name;

		$this->sendTo($recipientEmailAddress, $recipientName, $subject, $view, compact('recipientName', 'registration'));

	}
}