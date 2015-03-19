<?php namespace BMW\Mailers;

use Mail;

abstract class Mailer {

	public function sendTo($recipientEmail, $recipientName, $subject, $view, $data = []) {

		Mail::send($view, $data, function($message) use($recipientEmail, $recipientName, $subject)
		{
		    $message->to($recipientEmail, $recipientName)->subject($subject);
		});

	}
}