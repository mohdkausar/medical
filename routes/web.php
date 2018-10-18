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
Route::get('/', 'HomeController@home');
Route::get('/login', 'UserController@login');
Route::get('/register', 'UserController@register');
Route::get('/password', 'UserController@forgotPassword');
Route::post('/saveUser', 'UserController@saveUser');
Route::get("/thanks_user",function(){
	return view('thanks_user');
});

// Route::middleware('user')->group(function () {
// 	Route::get('/login', 'UserController@login');

//     Route::get('/', function () {
//         // Uses first & second Middleware
//     });

//     Route::get('user/profile', function () {
//         // Uses first & second Middleware
//     });
// });