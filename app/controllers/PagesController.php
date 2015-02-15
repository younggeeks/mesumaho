<?php

class PagesController extends \BaseController {

	
	//about us page

	public function about()
	{
		return View::make('public.about');
	}

	public function contact()
	{
		return View::make('public.contact us');
	}

	public function booking()
	{
		return View::make('public.booking');
	}

	public function conference(){
		return View::make("public.conferenceHall");
	}
	public function functional(){
		return View::make("public.functionalHall");
	}

	public function gallery(){

		return View::make("public.gallery");
	}

}