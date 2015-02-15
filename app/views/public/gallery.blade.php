@extends('Layouts.master')
@section('content')
    <div class="alert alert-warning">
        <h3>Photo Gallery</h3>
    </div>

<div class="company_logos wow bounceIn" data-wow-delay="0.4s">
    <!--<h3>Our Gallery</h3>-->
    <div class="ocarousel_slider">
        <div class="ocarousel example_photos" data-ocarousel-perscroll="3">
            <div class="ocarousel_window">
                <a href="#"> <img src="images/g/conference-hall.jpg" class="img-responsive" alt="" /></a>
                <a href="#"><img src="images/g/function-chairs-Mesuma-Hotel.jpg" class="img-responsive" alt="" /></a>
                <a href="#"><img src="images/g/Function-Hall-Mesuma-Hotel.jpg" class="img-responsive" alt="" /></a>
                <a href="#"><img src="images/g/home-away-from-home.jpg" class="img-responsive" alt="" /></a>
                <a href="#"><img src="images/g/Mesuma-Restaurant-and-bar.jpg" class="img-responsive" alt="" /></a>
                <a href="#"><img src="images/g/Restaurant-Mesuma-Hotel.jpg" class="img-responsive" alt="" /></a>
                <a href="#"><img src="images/g/salon-mesuma-hotel.jpg" class="img-responsive" alt="" /></a>
                <a href="#"><img src="images/g/Second-Restaurant-Mesuma-Hotel.jpg" class="img-responsive" alt="" /></a>
            </div>
			               <span>
			                <a href="#" data-ocarousel-link="left" class="prev"><i class="fa fa-angle-left"></i> </a>
			                <a href="#" data-ocarousel-link="right" class="next"> <i class="fa fa-angle-right"></i></a>
			               </span>
        </div>
    </div>
</div>
    @stop