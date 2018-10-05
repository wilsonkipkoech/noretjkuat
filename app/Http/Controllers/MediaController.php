<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    //
    public function getphotos(){
    	 return view('media.photos');
    }
    public function getvideo(){
    	 return view('media.videos');
    }
    public function getsermon(){
    	 return view('media.sermons');
    }
    public function getsemesterprogram(){
    	 return view('media.semesterprogram');
    }
    public function getagmreports(){
    	 return view('media.agmreports');
    }
    public function getannouncenments(){
    	 return view('media.announcements');
    }
}
