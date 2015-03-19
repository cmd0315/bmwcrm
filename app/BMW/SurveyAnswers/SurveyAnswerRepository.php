<?php namespace BMW\SurveyAnswers;

use BMW\SurveyAnswers\SurveyAnswer;

class SurveyAnswerRepository {

	/**
	* Persists a SurveyAnswer
	*
	* @param SurveyAnswer $surveyAnswer
	* @return SurveyAnswer
	*/
	public function save(SurveyAnswer $surveyAnswer) {
		return $surveyAnswer->save();
	}


}