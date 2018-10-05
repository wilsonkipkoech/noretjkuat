<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
     return view('pages.home');
    }

    public function getblog(){
       return view('pages.blog');
    }
    // public function getministry(){
    // return view('pages.ministry');
    // }

    // public function getmedia(){
    // 	return view('pages.media');
    // }

    // public function getabout(){
    // 	return view('pages.about');
    // }

    public function getjkuatcu(){
    	return view('pages.jkuatcu');

    }
    public function getmission(){
    	return view('pages.mission');
    }

    // public function getportal(){
    // 	return view('pages.portal');
    // }

 }



