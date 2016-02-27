<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model
{
	/*
  * A private variable to represent each column in the database
  */
  private $id;
  private $email;
	private $signedUpAt;

  public function __construct()
  {
    parent::__construct();
  }
	/*
  * Class Methods
  */
  /**
  * Commit will handle both inserts and updates
	*@param the class will commit itself, no params needed
	*@return true or false on query result
  */
  public function commit()
  {
		/*
		*TODO: try to pass the query $this to remove need for an array
		*/
    $model = array(
      'email' => $this->email
    );
		/*
		*If the model has an id, then it already exists in the database
		*Else the model doesn't have an id and needs to be inserted
		*/
    if($this->id > 0)
		{
      if($this->db->update("emailSignups", $model, array("id" => $this->id)))
			{
        return true;
      }
			else
			{
				/*
				*There was an error with the update retrieve and show error
				*TODO: handle error properly
				*/
				$error = $this->db->error();
				var_dump($error);
				die;
			}
    }
		else
		{
      if($this->db->insert("emailSignups", $model))
			{
        return true;
      }
			else
			{
				/*
				*There was an error with the insert retrieve and show error
				*TODO: handle error properly
				*/
				$error = $this->db->error();
				var_dump($error);
				die;
			}
    }
		/*
		*If the function is this far it has failed
		*/
    return false;
  }
	/*
  *SET's & GET's
  *Use functions because the variables are private
  */
	public function getId()
	{
		return $this->id;
	}
	public function setId($value)
	{
		$this->id = $value;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($value)
	{
		$this->email = $value;
	}
	public function getComment()
	{
		return $this->comment;
	}
	public function setComment($value)
	{
		$this->comment = $value;
	}
	public function getSignedUpAt()
	{
		return $this->signedUpAt;
	}
	public function setSignedUpAt($value)
	{
		$this->signedUpAt = $value;
	}
}
