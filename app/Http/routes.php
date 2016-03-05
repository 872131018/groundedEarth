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
* Show the list of emails
*/
Route::get('/', function () {
  return view('home', [
      'base_url' => URL::to('/')
  ]);
});
/*
* On email post save and return
*/
Route::post('/email', function (Request $request) {

  $email = new Email;
  $email->email = $request->email;
  $email->save();

  return "hello from the mothership";
    //return view('welcome');
});
/*
Route::get('/', function () {
    return view('welcome');
});
*/

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

Route::group(['middleware' => ['web']], function () {
    //
});
