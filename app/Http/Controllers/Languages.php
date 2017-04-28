<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class Languages extends Controller
{
    public function index(){
    	Session::put('locale', Input::get('submit'));
    	return back();
    }
}
