<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaveEmail extends CI_Controller
{
	public function index()
	{
		/*
		*Each key of $data will be available as variable in view
		*TODO: Convert to using an object rather than an array
		*/
		$email = $this->input->post("email");
		$this->email_factory->saveEmail($email);
		$result = $this->email_factory->saveEmail();
		/*
		* Set content type to json and send result
		*/
		$this->output->set_content_type('application/json');
    $this->output->set_output(json_encode(array('result' => $result)));
	}
}
