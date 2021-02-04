<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
    	// $name = 'kiran';
    	// $users = array("name"=>"prakash","email"=>"prakash@gmail.com","phone"=>"1234567890");
    	// return view('users',compact('name','users'));

    	// return $request->method();
    	// return $request->path();
    	// return $request->url();
    	return $request->fullUrl();
    }
}
