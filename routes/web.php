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



Route::get('/','HomeController@home');
Route::get('blog','HomeController@getblog');
Route::get('jkuatcu','HomeController@getjkuatcu');
Route::get('mission','HomeController@getmission');

// Route::get('ministry','HomeController@getministry');
// Route::get('media','HomeController@getmedia');
// Route::get('about','HomeController@getabout');
//Route::get('portal','HomeController@getportal');

//routes for Ministries
Route::get('ministry',['uses'=>'MinistryController@getchoir', 'as'=>'minitry.choir']);
Route::get('ministry',['uses'=>'MinistryController@getSound','as'=>'ministry.sound']);
Route::get('ministry',['uses'=>'MinistryController@gethospitality','as'=>'ministry.hospitality']);

//routes for Media section
Route::get('media',['uses'=>'MediaController@getphotos','as'=>'media.photos']);
Route::get('media',['uses'=>'MediaController@getvideo','as'=>'media.videos']);
Route::get('media',['uses'=>'MediaController@getsermon','as'=>'media.sermon']);
Route::get('media',['uses'=>'MediaController@getsemesterprogram','as'=>'media.semesterprogram']);
Route::get('media',['uses'=>'MediaController@getagmreports','as'=>'media.agmreports']);
Route::get('media',['uses'=>'MediaController@getannouncements','as'=>'media.announcements']);



//routes for Abouts section
Route::get('abouts',['uses'=>'AboutController@getnoretjkuat','as'=>'abouts.noretjkuat']);

Route::get('/abouts','AboutController@getexcutive');
Route::get('abouts',['uses'=>'AboutController@getmembership', 'as'=>'abouts.membership']);

