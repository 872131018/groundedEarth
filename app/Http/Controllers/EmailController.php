<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
/*
* Email namespace for laravel model
*/
use App\Email;

class EmailController extends Controller
{
  /*
  * Instance of email class for private use
  */
  protected $email;
  /*
  * Use depency injection to bring in class
  */
  public function __construct(Email $email)
  {
    $this->email = $email;
  }

  public function save_email(Request $request)
  {
    /*
    * Set the models data with request data
    */
    $this->email->email = $request->email;
    /*
    * Eloquent magic for inserting and white list values
    */
    if($this->email->save()) {
      $result = "true";
    }
    else {
      $result = "false";
    }
    /*
    * send json response back
    */
    return json_encode(array("result" => $result));
  }
}
