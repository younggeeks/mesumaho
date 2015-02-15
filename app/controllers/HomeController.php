<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function login_form()
	{
		return View::make('jaza-fomu');
	}

	public function save()
	{
		Kwega::create(Input::all());

	}

	public function getData()
	{
		$users=Kwega::all();
		return View::make('onyesha-data')->with('users',$users);
	}

	public function delete($name)
	{
		Kwega::where('name',$name)->delete();
	}





}
