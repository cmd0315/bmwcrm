<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
*
* Unauthenticated group
*
*/
Route::group(array('before' => 'guest'), function(){
	/*
	/ CSRF group
	*/
	Route::group(array('before' => 'csrf'), function(){
		/* Home (POST) */
		Route::post('/start',[
			'as' => 'registrations.store',
			'uses' => 'RegistrationsController@store'
		]);

		/* Personal Info (POST) */
		Route::post('/register/{registration_id}', [
			'as' => 'participants.store',
			'uses' => 'ParticipantsController@store'
		]);
		/* Survey (POST) */
		Route::post('/survey/{registration_id}', [
			'as' => 'survey.store',
			'uses' => 'SurveyController@store'
		]);
			
	});

	/* Home */
	Route::get('/',[
		'as' => 'home',
		'uses' => 'RegistrationsController@create'
	]);

	/* Survey (GET) */
	Route::get('/survey/{registration_id}',[
		'as' => 'survey.create',
		'uses' => 'SurveyController@create'
	]);


	/* Register (GET) */
	Route::get('/register/{registration_id}',[
		'as' => 'participants.create',
		'uses' => 'ParticipantsController@create'
	]);

});

Route::get('city_dropdown',[
	'as' => 'participants.getCities',
	'uses' => 'ParticipantsController@getCities'
]);
