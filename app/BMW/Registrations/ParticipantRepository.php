<?php namespace BMW\Registrations;

use BMW\Registrations\Participant;

class ParticipantRepository {

	/**
	* Persists a Participant
	*
	* @param Participant $participant
	* @return Participant
	*/
	public function save(Participant $participant) {
		return $participant->save();
	}

	/**
	* Return instance of Participant
	*
	* @param String $registration_id
	* @return Participant
	*/
	public function getParticipantByRegID($registration_id) {

		return Participant::whereRegistrationID($registration_id)->firstOrFail();
	}

}