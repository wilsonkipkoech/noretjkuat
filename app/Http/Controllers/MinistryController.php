<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinistryController extends Controller
{
    public function getchoir(){
    	return view('ministry.choir_praiseW');

    }

    public function getsound(){
    	return('ministry.sound');
    }

    public function gethospitality(){
    	return view('ministry.hospitality');
    }

    public function getcreative(){
    	return view('ministry.creative');
    }
}

