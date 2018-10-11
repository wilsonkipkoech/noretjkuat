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
// Route::get('/','MainController@Main');
Route::get('/blog','MainController@getblog');
Route::get('/jkuatcu','MainController@getjkuatcu');
Route::get('/mission','MainController@getmission');
Route::get('/register','MainController@register');

// Route::get('/register',function(){
// 	 $county=County::all()
// 	return view::Make('auth.register')->with('county',$county);
// });

// Route::get('ministry','MainController@getministry');
// Route::get('media','MainController@getmedia');
// Route::get('about','MainController@getabout');
//Route::get('/portal','MainController@getportal');

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

