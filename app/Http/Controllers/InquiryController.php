<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
/*
* Include inquiry model
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
  public function __construct(Inquiry $inquiry) {
    $this->middleware('auth');
    $this->inquiry = $inquiry;
  }
  /**
   * Show the inquires from the homepage.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return view('inquiries', [
        'inquiries' => Inquiry::all()
    ]);
  }
}
