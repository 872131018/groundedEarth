<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaveEmail extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		/*
    * The factory is where you put the models to work and manages them
    */
    $this->load->library("email_factory");
	}
	public function index()
	{
		/*
		* Pull the email from the request
		*/
		$email = $this->input->post("email");
		/*
		* Send email to factory to be saved
		*/
		$result = $this->email_factory->saveEmail($email);
		/*
		* White list result
		*/
		$result = ($result ? "true" : "false");
		/*
		* Set content type to json and send result
		*/
		$this->output->set_content_type('application/json');
    $this->output->set_output(json_encode(array('result' => $result)));
	}
}
