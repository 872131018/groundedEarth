<?php
/*
* Include models that are used
*/
use Illuminate\Http\Request;
use App\Product;
use App\Inquiry;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    /*
    * Get all the products to work with
    */
    $products = Product::where('type', 'Shirt')->take(3)->get();
    /*
    * Create an object to hold the slider data
    */
    $slider = [
        (object) [
                'image' => 'images/denverskyline.jpg',
                'header' => 'Downtown Denver',
                'caption' => 'What a legit place to do business!'
        ],
        (object) [
                'image' => 'images/redrocks.jpg',
                'header' => 'Rocky Mountains',
                'caption' => 'In colorado, the mountains provide inspiration and relief.'
        ],
        (object) [
                'image' => 'images/mountainflower.jpg',
                'header' => 'Natural Escape',
                'caption' => 'Fresh air and tranquil scenery, these are the Rockies.'
        ],
        (object) [
                'image' => 'images/mountainlake.jpg',
                'header' => 'Lakes Reflections',
                'caption' => 'In colorado, the mountains provide inspiration and relief.'
        ]
    ];

    return view('frontend.index', [
        'products' => $products,
        'slider' => $slider
    ]);
});
Route::get('/products', function () {
    /*
    * Get all the products to work with
    */
    $products = Product::all();
    /*
    echo '<pre>';
    print_r($products);
    echo '</pre>';
    */

    return view('frontend.products', [
        'products' => $products
    ]);
});
/*
* Save the email through post
*/
Route::post('/inquiry', function(Request $request, Inquiry $inquiry) {
    /*
    * Set the models data with request data
    */
    $inquiry->email = $request->email;
    $inquiry->name = $request->name;
    $inquiry->city = $request->city;
    $inquiry->state = $request->state;
    $inquiry->comment = $request->comment;
    /*
    * Eloquent magic for inserting and white list values
    */
    if($inquiry->save()) {
        $result = "true";
    }
    else {
        $result = "false";
    }
    /*
    * send json response back
    */
    return json_encode(array("result" => $result));
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/admin', 'AdminController@index');
    /*
    * List the emails signed up for the website
    */
    Route::get('/admin/inquiries', 'InquiryController@index');
    /*
    * File Routes
    */
    Route::get('/admin/files', 'FileController@index');
    Route::delete('/admin/files', 'FileController@delete');
    Route::put('/admin/files', 'FileController@add');
    /*
    * Show the product list
    */
    Route::get('/admin/products', 'ProductController@index');
    Route::post('/admin/products', 'ProductController@edit');
    Route::put('/admin/products', 'ProductController@add');
    Route::delete('/admin/products', 'ProductController@delete');
    /*
    * Show the content block list
    */
    Route::get('/admin/content', 'ContentController@index');
    Route::post('/admin/content', 'ContentController@edit');
    Route::put('/admin/content', 'ContentController@add');
    Route::delete('/admin/content', 'ContentController@delete');
});
