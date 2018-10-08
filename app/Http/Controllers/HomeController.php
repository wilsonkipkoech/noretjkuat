<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\County;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function home(){
     return view('pages.home');
    }
    
    public function getblog(){
   return view('pages.blog');
    }

    public function getmission(){
        
             return view('pages.mission');
    }
   
    public function getportal(){
     return view('partials.portal');
    }


    public function getLogin(){
        return('auth.login');
    }

//     public function create()
// {

//     $c = County::all();
// //     $county = array(
// //         'counties' =>  DB::table('county')->get()
// //       );

//     return view('auth.register')->withC($c);

// }

}
