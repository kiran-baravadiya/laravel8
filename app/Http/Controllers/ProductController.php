<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	$fruits = array ('mango','orange','banana','apple','pineapple');
    	
    	return view('welcome',compact('fruits'));
    }
}
