<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
/*
* Email namespace for laravel model
*/
use App\Email;

class EmailController extends Controller
{
    public function save_email()
    {
      /*
      * Create a new email model
      */
      $email = new Email;
      /*
      * Set the models data with request data
      */
      $email->email = $request->email;
      /*
      * Eloquent magic for inserting
      */
      if($email->save()) {
        $result = "true";
      }
      else {
        $result = "false";
      }
      /*
      * return result as json
      */
      return json_encode(array("result" => $result));
    }
}
