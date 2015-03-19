<?php
use BMW\Registrations\RegistrationRepository;
use BMW\Locations\LocationRepository;
use BMW\Forms\PersonalInfoForm;
use Laracasts\Validation\FormValidationException;
use BMW\Registrations\ParticipantRegistrationCommand;
use BMW\Core\CommandBus;

class ParticipantsController extends \BaseController {

	use CommandBus;

	/**
	* @var RegistrationRepository $registrationRepository
	*
	*/
	protected $registrationRepository;

	/**
	* @var PersonalInfoForm $personalInfoForm
	*
	*/
	protected $personalInfoForm;

	/**
	* @var LocationRepository $locations
	*
	*/
	protected $locations;


	/**
	* Constructor
	*
	* @param RegistrationRepository $registrationRepository
	* @param PersonalInfoForm $personalInfoForm
	*
	*/
	function __construct(RegistrationRepository $registrationRepository, PersonalInfoForm $personalInfoForm, LocationRepository $locations) {
		$this->registrationRepository = $registrationRepository;
		$this->locations = $locations;
		$this->personalInfoForm = $personalInfoForm;
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
		$registration = $this->registrationRepository->getRegistrationByRegID($registration_id);
		$salutations = ['Mr' => 'Mr.', 'Ms' => 'Ms.', 'Mrs' => 'Mrs.'];
		$genders = ['Male' => 'Male', 'Female' => 'Female'];
		$statuses = ['Single' => 'Single', 'Married' => 'Married'];
		$hobbies = ['Golfing' => 'Golfing', 'Race car driving' => 'Race car driving', 'Collecting vintage cars' => 'Collecting vintage cars', 'Collecting art' => 'Collecting art', 'Traveling' => 'Traveling', 'Sailing and yachting' => 'Sailing and yachting', 'Mountain climbing' => 'Mountain climbing', 'Horse riding' => 'Horse riding'];
		$industries = ['Automobile' => 'Automobile', 'Food and beverages' => 'Food and beverages', 'Personal and household goods' => 'Personal and household goods', 'Media' => 'Media', 'Retail' => 'Retail', 'Travel and leisure' => 'Travel and leisure', 'Banking' => 'Banking', 'Real Estate' => 'Real Estate', 'Health care' => 'Health care', 'Industrial' => 'Industrial', 'Telecommunication' => 'Telecommunication', 'Technology' => 'Technology', 'Oil and gas' => 'Oil and gas', 'Utilities' => 'Utilities'];

		$cities = $this->locations->getCities();
		$provinces = $this->locations->getProvinces();
		
		return View::make('personal_info', ['pageTitle' => 'Customer Information'], compact('registration', 'salutations', 'genders', 'statuses', 'hobbies', 'industries', 'cities', 'provinces'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($registration_id)
	{
		$input = Input::only('personal_salutation', 'first_name', 'middle_initial', 'last_name', 'nickname', 'gender', 'status', 'birthdate', 'age', 'hobbies', 'mobile_number', 'email_address', 'occupation', 'company_name', 'home_address1', 'home_address2', 'home_city', 'home_province', 'home_zip_code', 'home_phone', 'business_industry', 'business_address1', 'business_address2', 'business_city', 'business_province', 'business_zip_code', 'business_phone', 'spouse_salutation', 'spouse_first_name', 'spouse_last_name', 'spouse_birthdate', 'spouse_age', 'spouse_hobbies');

		// Check form for error
		try {
			$this->personalInfoForm->validate($input);
		}
		catch(FormValidationException $error) {
			return Redirect::back()->withInput()->withErrors($error->getErrors());
		}

		$registration = $this->registrationRepository->getRegistrationByRegID($registration_id);

		if($registration) {
			extract($input);
			// Execute command to insert contact person data
			$participantRegistration = $this->execute(
				new ParticipantRegistrationCommand($registration->registration_id, $personal_salutation, $first_name, $middle_initial, $last_name, $nickname, $gender, $status, $birthdate, $age, $hobbies, $mobile_number, $email_address, $occupation, $company_name, $home_address1, $home_address2, $home_city, $home_province, $home_zip_code, $home_phone, $business_industry, $business_address1, $business_address2, $business_city, $business_province, $business_zip_code, $business_phone, $spouse_salutation, $spouse_first_name, $spouse_last_name, $spouse_birthdate, $spouse_age, $spouse_hobbies)
			);

			if($participantRegistration) {
				return Redirect::route('survey.create', $registration->registration_id);
			}
			else {
				Flash::error('Failed to register!');
			}
		}
		return Redirect::route('participants.create', $registration_id);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
