<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
/*
* Email namespace for laravel model
*/
use App\Inquiry;

class InquiryController extends Controller
{
  /*
  * Instance of email class for private use
  */
  protected $inquiry;
  /*
  * Use depency injection to bring in class
  */
  public function __construct(Inquiry $inquiry)
  {
    $this->inquiry = $inquiry;
  }

  public function save(Request $request)
  {
    /*
    * Set the models data with request data
    */
    $this->inquiry->email = $request->email;
    $this->inquiry->name = $request->name;
    $this->inquiry->city = $request->city;
    $this->inquiry->state = $request->state;
    /*
    * Eloquent magic for inserting and white list values
    */
    if($this->inquiry->save()) {
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
