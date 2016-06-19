<?php
/*
* Email namespace for laravel model
*/
use App\Email;
/*
* Load the request namespace for handling post
*/
use Illuminate\Http\Request;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
  $images = [
    'bear.png',
    'buffalo.png',
    'cougar.png',
    'mountains.png',
    'skull.png',
    'wolf.png'
  ];

  return view('index', [
      'base_url' => getenv("APP_URL"),
      'images' => $images
  ]);
});
/*
* Save the email through post
*/
Route::post('/inquiry', 'InquiryController@save');
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
    Route::get('/home', 'HomeController@index');
    Route::get('/inquiries', 'InquiryController@index');
});
