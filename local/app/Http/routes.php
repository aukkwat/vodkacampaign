<?php

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

// Route::get('/', function () {
//     $channels = DB::table('channel')->get();
//     return view('welcome',['channels' => $channels]);
// });
Route::get('channel', 'serviceController@channel');
Route::get('/', 'serviceController@fbpost');
Route::post('storeinfo', 'serviceController@storeinfo');
Route::get('thankyou', function () {
    return view('vodka');
});
Route::get('error', function () {
    return view('error');
});
Route::get('error2', function () {
    return view('error2');
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
Route::get('fbpost', 'serviceController@fbpost');
Route::get('fbcallback', 'serviceController@fbcallback');

Route::group(['middleware' => ['web']], function () {
  Route::get('redirect', 'serviceController@redirect');
  Route::get('callback', 'serviceController@callback');

    //
});
