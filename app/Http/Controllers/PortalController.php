<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function gethome(){
    	return view('portal.home');
    }
    public function getmembereg(){
    	return view('portal.memberreg');
    }
    public function getmissionreg(){
    	return view('portal.missionreg');
    }
    public function getassociatereg(){
    	return view('portal.associatereg');
    }
    public function getnominateleaders(){
    	return view('portal.nominateleaders');
    }
    public function getprofile(){
    	return view('portal.profile');
    }
}
