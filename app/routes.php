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

/* Home */
Route::get('/',[
	'as' => 'home',
	'uses' => 'HomeController@index'
]);

/*
*
* Auuthenticated group
*
*/
Route::group(array('before' => 'auth'), function(){
	/*
	/ CSRF group
	*/
	Route::group(array('before' => 'csrf'), function(){
		
	});


	/*  Sign out (GET) */
	Route::get('/sign-out', [
		'as' => 'sessions.signout',
		'uses' => 'SessionsController@destroy'
	]);
});


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

		/* Personal Info (POST) */
		Route::post('/personal_info', [
			'as' => 'participants.store',
			'uses' => 'ParticipantsController@store'
		]);
		/* Survey (POST) */
		Route::post('/survey', [
			'as' => 'survey.store',
			'uses' => 'SurveyController@store'
		]);
			
	});

	/* Home */
	Route::get('/',[
		'as' => 'home',
		'uses' => 'SessionsController@create'
	]);

	/* Survey (GET) */
	Route::get('/survey',[
		'as' => 'survey.create',
		'uses' => 'SurveyController@create'
	]);

	/* Personal Info (GET) */
	Route::get('/personal_info',[
		'as' => 'participants.create',
		'uses' => 'ParticipantsController@create'
	]);


	/* Register (GET) */
	Route::get('/register',[
		'as' => 'participants.create',
		'uses' => 'SurveyController@create'
	]);

});
