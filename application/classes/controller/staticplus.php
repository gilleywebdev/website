<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Staticplus extends Controller_Static {
	public function action_index()
	{
		$this->template = View::factory('template/index');
	}
	
	public function action_contact()
	{
		if(Form::have('contact'))
		{
			$post = Validation::factory($_POST)
				->rule('name', 'not_empty')
				->rule('email', 'not_empty')
				->rule('email', 'email')
				->rule('message', 'not_empty')
				->rule('honeypot', 'exact_length', array(0, ':field'));

			if($post->check())
			{
				$message = 'Contact form submission - "'.$post['message'].'" from '.$post['name'].' ('.$post['email'].')';
				Kohana::$log->add(Log::NOTICE, $message);
				
				//Mail
				$subject = 'Website inquiry from '.$post['name'];
				$from = 'info@gilleywebdev.com';
				$to = Nap::info('email');
				
				Email::send($to, $from, $subject, $message, $html = false);
				
				$this->request->redirect('thank-you');
			}

			$errors = $post->errors('contact');
		}
		else{
			$errors = array();
		}

		Styles::add('styles');

		View::bind_global('errors', $errors);
	}
}