<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class FileController extends Controller {
  /*
  * File requests must go through auth
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
    * Collection of lists of filenames
    */
    $grouped_files = new \stdClass;
    $excluded_files = ['.', '..', '.DS_Store'];
    $directories = scandir('images');
    foreach($directories as $index=>$subdirectory) {
      switch(in_array($subdirectory, $excluded_files)) {
        case true:
          break;
        default:
          $grouped_files->$subdirectory = [];
          $files = scandir('images/'.$subdirectory);
          foreach($files as $index=>$file) {
            switch(in_array($file, $excluded_files)) {
              case true:
                break;
              default:
                array_push($grouped_files->$subdirectory, $file);
            }
          }
          break;
      }
    }
    return view('files', [
        'files' => $grouped_files
    ]);
  }
  /**
  * Save a product through a post request
  * @return \Illuminate\Http\Response
  */
  public function save(Request $request) {
    /*
    * Set the models data with request data
    */
    $this->product->name = $request->name;
    $this->product->type = $request->type;
    $this->product->link = $request->link;
    $this->product->image = $request->image;
    $this->product->price = $request->price;
    /*
    * Eloquent magic for inserting and white list values
    */
    if($this->product->save()) {
        return view('products', [
            'products' => Product::all()
        ]);
    } else {
        die("There was an error saving the product!");
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
    $product_to_delete = Product::find($request->id);
    if($product_to_delete->delete()) {
      return view('products', [
        'products' => Product::all()
      ]);
    } else {
      die("There was an error saving the product!");
    }
  }
}
