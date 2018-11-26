<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Displays welcome page
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index');



//Route::resource('interest','InterestController');
//Route::resource('vo','VoController');
Route::resource('volunteer','VolunteerController');
Route::resource('currentvolunteer','CurrentVolunteerController');

Route::get('volunteer/show/{id}', 'VolunteerController@show');
Route::get('/login/vo', 'Auth\LoginController@showVoLoginForm');


//Route::post('/login/vo', 'Auth\LoginController@voLogin');
//Route::get('currentvolunteer/{id}', 'CurrentVolunteerController@show');
//Route::get('/currentvolunteer/{id}', ['as' => 'problems.show', 'uses' => 'CurrentVolunteerController@show']);
Route::view('/vo/', 'vo');



//Volunteer Organizations Login routes function
Route::prefix('volorg')->group(function() { 
    
    Route::get('/login', 'Auth\VolorgLoginController@showLoginForm')->name('volorg.login');
    Route::post('/login', 'Auth\VolorgLoginController@login')->name('volorg.login.submit');
    Route::get('/', 'VolorgController@index')->name('volorg.dashboard');
});

Route::get('showMatched', 'VolorgController@showMatched');


Route::get('/home', 'HomeController@index')->name('home');
