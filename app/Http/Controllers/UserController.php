<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function register(){
    	return view('register');
    }

    public function forgotPassword(){
    	return view('forgot_password');
    }

    public function saveUser(Request $request){

    	$validator = $this->validateUser($request);

    	if (!is_array($validator) && $validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }
        $new_user = new User();
        $new_user->first_name = $request->input('first_name');
        $new_user->last_name = $request->input('last_name');
        $new_user->phone = $request->input('phone');
        $new_user->email = $request->input('email');
        $new_user->gender = $request->input('gender');
        $new_user->last_login = date('Y-m-d H:i:s');
        $new_user->password = Hash::make($request->input('password'));
        $status = $new_user->save();
        if($status){
        	return redirect('thanks_user');
        }
        else {
        	return redirect('register')
        	            ->withErrors($validator)
        	            ->withInput();
        }
    }

    public function loginUser(Request $request){
    	$rules = $request->validate([
	       'email' => 'required|email',
	       'password' => 'required|min:8|max:32',
	    ]);
	    $validator = Validator::make(Input::all(), $rules);

	    // if the validator fails, redirect back to the form
	    if (!is_array($validator) && $validator->fails()) {
	        return Redirect::to('login')
	            ->withErrors($validator) // send back all errors to the login form
	            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
	    } else {
	        // create our user data for the authentication
	        $userdata = array(
	            'email'     => $request->input('email'),
	            'password'  => $request->input('password')
	        );

	        // attempt to do the login
            if (Auth::attempt($userdata)) {
                return Redirect::to('facility/dashboard');

            } else {        
                // validation not successful, send back to form 
                return Redirect::to('login');

            }

    }

    public function validateUser($request){
    	return $request->validate([
	       'first_name' => 'required|max:50',
	       'last_name' => 'required|max:50',
	       'email' => 'required|email|unique:users',
	       'phone' => 'numeric|min:10,max:10|unique:users',
	       'gender' => 'required',
	       'password' => 'required|confirmed|min:8|max:32',
	       'terms_conditions' => 'required'
    	],[
    		'terms_conditions.required' => "You must accept Terms and Conditions"
    	]);
    }
}
