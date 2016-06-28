<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
/*
* Include product model
*/
use App\Product;

class ProductController extends Controller {
  /*
  * Instance of email class for private use
  */
  protected $product;
  /*
  * Use depency injection to bring in class
  */
  public function __construct(Product $product) {
    /*
    * Enforce logged in user actions
    */
    $this->middleware('auth');
    $this->product = $product;
  }
  /**
   * Show the products from the homepage.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
      return view('products', [
          'products' => Product::all()
      ]);
  }
  /*
  * Save a product through a post request
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
  /*
  * Edit a product through a post request
  */
  public function edit(Request $request) {
    /*
    * Retrieve the model that is to be edited
    */
    $this->product = Product::find($request->id);
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
  /*
  * Delete a product through a post
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
