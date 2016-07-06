<?php

namespace App\Http\Controllers;

use Storage;
use App\Http\Requests;
use Illuminate\Http\Request;

class FileController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    /*
    * Enforce logged in user actions
    */
    $this->middleware('auth');
  }
  /**
  * Show the files that are manageable
  * @return \Illuminate\Http\Response
  */
  public function index() {
    /*
    * Recursively get image files from storage
    */
    $excluded_files = ['images/.DS_Store'];
    $files = Storage::allFiles('images');
    foreach($files as $index=>$file) {
      if(in_array($file, $excluded_files)) {
          unset($files[$index]);
      }
    }

    return view('files', [
        'files' => $files
    ]);
  }
  /**
  * Save a product through a post request
  * @return \Illuminate\Http\Response
  */
  public function add(Request $request) {
    if($request->file()->move(base_path('public/images'))) {
      echo 'success';
    }
  }
  /**
  * Delete a product through a post
  * @return \Illuminate\Http\Response
  */
  public function delete(Request $request) {
    /*
    * Find the product and delete it
    */
    $file_to_delete = $request->name;
    Storage::delete($file_to_delete);
    if(!Storage::exists($file_to_delete)) {
      /*
      * Collection of lists of filenames
      */
      $excluded_files = ['images/.DS_Store'];
      $files = Storage::allFiles('images');
      foreach($files as $index=>$file) {
        if(in_array($file, $excluded_files)) {
            unset($files[$index]);
        }
      }

      return view('files', [
          'files' => $files
      ]);
    } else {
      die("There was an error deleting the file!");
    }
  }
}
