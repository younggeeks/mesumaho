<?php


//sam
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('public.homepage');
});

//Now making pages routes
Route::get('about',array(
	'as'=>'about',
	'uses'=>'PagesController@about'
));

Route::get('contact-us',array(
	'as'=>'contact',
	'uses'=>'PagesController@contact'
));

Route::get('booking',array(
	'as'=>'booking',
	'uses'=>'PagesController@booking'
));

Route::get('conference-hall',array(
	'as'=>'conference',
	'uses'=>'PagesController@conference'
));
Route::get('functional-hall',array(
	'as'=>'functional',
	'uses'=>'PagesController@functional'
));

Route::get('rooms/suite',array(
	'as'=>'suite',
	'uses'=>'RoomsController@suite'
));
Route::get('rooms/double',array(
	'as'=>'double',
	'uses'=>'RoomsController@double'
));
Route::get('rooms/twin',array(
	'as'=>'twin',
	'uses'=>'RoomsController@twin'
));

Route::get('rooms/deluxe',array(
	'as'=>'deluxe',
	'uses'=>'RoomsController@deluxe'
));

Route::get('photo-gallery',array(
	'as'=>'gallery',
	'uses'=>'PagesController@gallery'
));