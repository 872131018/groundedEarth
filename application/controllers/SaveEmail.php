<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaveEmail extends CI_Controller
{
	public function __construct()
  {
    parent::__construct();
		/*
    *The factory is where you put the models to work and manages them
    */
    $this->load->library("email_factory");
  }
	public function index()
	{
		/*
		*Each key of $data will be available as variable in view
		*TODO: Convert to using an object rather than an array
		*/
		$email = $this->input->post("email");
		$result = $this->email_factory->saveEmail($email);
		/*
		* Set content type to json and send result
		*/
		$this->output->set_content_type('application/json');
    $this->output->set_output(json_encode(array('result' => $result)));
	}
}
