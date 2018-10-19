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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index');
Route::get('facility/dashboard', 'FacilityController@dashboard');
// Route::get('/login', 'UserController@login');
// Route::get('/register', 'UserController@register');
// Route::get('/password', 'UserController@forgotPassword');
// Route::post('/saveUser', 'UserController@saveUser');
// Route::post('/login', 'UserController@loginUser');
// Route::get("/thanks_user",function(){
// 	return view('thanks_user');
// });

//Route::get('/facility/dashboard', 'Facility@dashboard');

// Route::middleware('user')->group(function () {
// 	Route::get('/login', 'UserController@login');

//     Route::get('/', function () {
//         // Uses first & second Middleware
//     });

//     Route::get('user/profile', function () {
//         // Uses first & second Middleware
//     });
// });
Auth::routes();

Route::get('/home', 'FacilityController@dashboard')->name('dashboard');
