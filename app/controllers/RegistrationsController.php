<?php
use BMW\Forms\TermsForm;
use Laracasts\Validation\FormValidationException;
use BMW\Registrations\RegistrationRepository; 
use BMW\Registrations\RegistrationCommand;
use BMW\Core\CommandBus;

class RegistrationsController extends \BaseController {

	use CommandBus;

	/**
	* @var TermsForm $termsForm
	*
	*/
	protected $termsForm;

	/**
	* @var RegistrationRepository $registrationRepository
	*
	*/
	protected $registrationRepository;


	/**
	* Constructor
	*
	* @param TermsForm $termsForm
	* @param RegistrationRepository $registrationRepository
	*
	*/
	function __construct(TermsForm $termsForm, RegistrationRepository $registrationRepository) {
		$this->termsForm = $termsForm;
		$this->registrationRepository = $registrationRepository;
		$this->beforeFilter('guest', ['except' => 'destroy']);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		Session::forget('registration-success');
		return View::make('home', ['pageTitle' => 'Home']);
	}


	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$acceptTerms = Input::only('accept_terms');

		// Check form for error
		try {
			$this->termsForm->validate($acceptTerms);
		}
		catch(FormValidationException $error) {
			return Redirect::back()->withInput()->withErrors($error->getErrors());
		}

		$registration_id = $this->registrationRepository->generateRegistrationID();

		// Execute command to insert contact person data
		$registration = $this->execute(
			new RegistrationCommand($registration_id)
		);

		if($registration) {
			return Redirect::route('participants.create', $registration_id);
		}
		else {
			Flash::error('Failed to register!');
		}

		return Redirect::route('home');

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
