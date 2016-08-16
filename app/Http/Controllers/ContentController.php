<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
/*
* Include Content model
*/
use App\Content;

class ContentController extends Controller {
  /*
  * Instance of email class for private use
  */
  protected $content;
  /*
  * Use depency injection to bring in class
  */
  public function __construct(Content $content) {
    $this->middleware('auth');
    $this->content = $content;
  }
  /**
   * Show the content from the homepage.
   *
   * @return \Illuminate\Http\Response
   */
    public function index() {
        /*
        * Load the content list
        */
        return view('content', [
          'contents' => Content::all()
        ]);
    }
  /*
  * Save a content block through a post request
  */
  public function add(Request $request) {
    /*
    * Set the models data with request data
    */
    $this->content->name = $request->name;
    $this->content->copy = $request->copy;
    /*
    * Eloquent magic for inserting and white list values
    */
    if($this->content->save()) {
        return view('content', [
            'contents' => Content::all()
        ]);
    } else {
        die("There was an error adding the copy!");
    }
  }
  /*
  * Edit a content block through a post request
  */
  public function edit(Request $request) {
    /*
    * Retrieve the model that is to be edited
    */
    $this->content = Content::find($request->id);
    /*
    * Set the models data with request data
    */
    $this->content->name = $request->name;
    $this->content->copy = $request->copy;
    /*
    * Eloquent magic for inserting and white list values
    */
    if($this->content->save()) {
        return view('content', [
            'contents' => Content::all()
        ]);
    } else {
        die("There was an error saving the copy!");
    }
  }
  /*
  * Delete a product through a post
  */
  public function delete(Request $request) {
    /*
    * Find the product and delete it
    */
    $content_to_delete = Content::find($request->id);
    if($content_to_delete->delete()) {
      return view('content', [
        'contents' => Content::all()
      ]);
    } else {
      die("There was an error deleting the copy!");
    }
  }
}
