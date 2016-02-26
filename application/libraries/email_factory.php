<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class emailFactory
{
  private $_ci;

  function __construct()
  {
    /*
		*On construct get an instance of codeigniter so we can access it
		*Load the email model into the factory
		*/
		$this->_ci =& get_instance();
    $this->_ci->load->model("email_model");
  }
	/*
	*Commit email to the database
	*@param email passed from url to controller
	*@param type passed from url to controller
	*@return true on successful commit
	*/
	public function saveEmail($passedEmail="")
	{
		/*
		*Empty email model to create and commit
    *New comments wont have an id or a timestamp, database handles that
		*/
		$this->_ci->email_model->setEmail($passedEmail);
    return $this->_ci->email_model->commit();
	}
}
