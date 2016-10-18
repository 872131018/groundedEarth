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
    $excluded_files = ['.DS_Store'];
    $files = Storage::allFiles();
    foreach($files as $index=>$file) {
      if(in_array($file, $excluded_files)) {
          unset($files[$index]);
          continue;
      }
    }

    return view('cms.files', [
        'files' => $files
    ]);
  }
  /**
  * Save a file through a post request
  * @return \Illuminate\Http\Response
  */
  public function add(Request $request) {
    $file = $request->file('file');
    if($file->move(public_path('images'), $file->getClientOriginalName())) {
      return json_encode(array("result" => 'success'));;
    } else {
      return json_encode(array("result" => 'failure'));
    }
  }
  /**
  * Delete a file through a post
  * @return \Illuminate\Http\Response
  */
  public function delete(Request $request) {
    /*
    * Find the file and delete it
    */
    $file_to_delete = $request->name;
    Storage::delete($file_to_delete);
    /*
    * Delete doesn't return anything so ensure success with file check
    */
    if(!Storage::exists($file_to_delete)) {
      /*
      * Collection of lists of filenames
      */
      $excluded_files = ['.DS_Store'];
      $files = Storage::allFiles();
      foreach($files as $index=>$file) {
        if(in_array($file, $excluded_files)) {
            unset($files[$index]);
            continue;
        }
      }

      return view('cms.files', [
          'files' => $files
      ]);
    } else {
      die("There was an error deleting the file!");
    }
  }
}
