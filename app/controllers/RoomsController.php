<?php

class RoomsController extends \BaseController {
	
	public function suite()
	{
		return View::make('public.rooms.suite');
	}

	public function double(){
		return View::make('public.rooms.double');
	}
	public function twin(){
		return View::make('public.rooms.twin');
	}
	public function deluxe(){
		return View::make('public.rooms.deluxe');
	}
}