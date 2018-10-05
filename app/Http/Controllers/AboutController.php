<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function getnoretjkuat(){
    	return view('abouts.noretjkuat');
    }

    public function getexecutive(){
    	return view('abouts.executive');
    }
    
    public function getmembership(){
    	return view('abouts.membership');
    }
}
