<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    	
    	$arr['test'] = 'test';
    	return view('home',$arr);
    	// dd('jjjjj');
    }
}
