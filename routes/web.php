<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// //
// Route::get('/','HomeController@Main');
Route::get('/blog','HomeController@getblog');
Route::get('/jkuatcu','HomeController@getjkuatcu');
Route::get('/mission','HomeController@getmission');
Route::get('/register','HomeController@register');

// Route::get('/register',function(){
// 	 $county=County::all()
// 	return view::Make('auth.register')->with('county',$county);
// });

// Route::get('ministry','HomeController@getministry');
// Route::get('media','HomeController@getmedia');
// Route::get('about','HomeController@getabout');
//Route::get('/portal','HomeController@getportal');

//routes for Ministries
Route::get('/choir_praiseW','MinistryController@getchoir');
Route::get('/sound','MinistryController@getSound');
Route::get('hospitality','MinistryController@gethospitality');

//routes for Media section
Route::get('/photos','MediaController@getphotos');
Route::get('/videos','MediaController@getvideo');
Route::get('sermon','MediaController@getsermon');
Route::get('/semesterprogram','MediaController@getsemesterprogram');
Route::get('/agmreports','MediaController@getagmreports');
Route::get('/announcements','MediaController@getannouncements');



//routes for Abouts section
Route::get('/noretjkuat','AboutController@getnoretjkuat');

Route::get('/executive','AboutController@getexecutive');

Route::get('/membership','AboutController@getmembership');


Auth::routes();
Route::get('/', function(){
	return view('pages.homes');
});

Route::get('/portal',function(){
	return view('partials.portal');
});

Route::get('blog','BlogController@getIndex');
Route::get('blog/{slugs}',['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slugs','[\w\d\-\_]+');
Route::resource('posts','PostController');

