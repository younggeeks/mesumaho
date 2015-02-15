@extends('Layouts.master')
@section('content')

    <!--<div id="cbp-fwslider" class="cbp-fwslider wow fadeInLeft" data-wow-delay="0.4s" id="work">
        <div class="slider-line"></div>
        <ul>
            <li><a href="#"><img src="images/mess.jpg" class="img-responsive" alt="img01"/></a></li>
            <li><a href="#"><img src="images/2.jpg" class="img-responsive" alt="img01"/></a></li>
            <li><a href="#"><img src="images/1.jpg" class="img-responsive" alt="img02"/></a></li>
        </ul>
        <script src="js/jquery.cbpFWSlider.min.js" type="text/javascript"></script>
    </div>
    </div>-->
<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<div id="wowslider-container1">
    <div class="ws_images"><ul>
            <li><img src="{{('wow/data1/images/mess.jpg')}}" alt="Welcome to Mesuma Hotel" title="Welcome to Mesuma Hotel" id="wows1_0"/>The Home of hospitality..</li>
            <li><img src="{{('wow/data1/images/1.jpg')}}" alt="Our Restaurant" title="Our Restaurant" id="wows1_1"/></li>
            <li><img src="{{('wow/data1/images/2.jpg')}}" alt="full screen slider" title="Welcome to Our Restaurant" id="wows1_2"/></li>
            <li><img src="{{('wow/data1/images/take.jpg')}}" alt="peace maker" title="peace maker" id="wows1_3"/></li>
            <li><img src="{{('wow/data1/images/food1.jpg')}}" alt="peace maker" title="peace maker" id="wows1_3"/></li>
            <li><img src="{{('wow/data1/images/food2.jpg')}}" alt="peace maker" title="peace maker" id="wows1_3"/></li>
        </ul></div>
    <span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.4</span>
    <div class="ws_shadow"></div>
</div>
<script type="text/javascript" src="{{('wow/engine1/wowslider.js')}}"></script>
<script type="text/javascript" src="{{('wow/engine1/script.js')}}"></script>
<!-- End WOWSlider.com BODY section -->
<!-- Ends Header -->
    <!------------ Start Content ---------------->
    <div class="main">
        <div class="container">
            <div style="padding-top:30px">
                <div class="alert well">
                    <h3>Hotel Overview   </h3>
                    <p align="justify">
                        Mesuma Hotel is located in the heart of the Dar es Salaam city in an extremely characteristic, quite and lively area within short drive distance to all sites and is surrounded by the extraordinary beauty of beaches, buildings and shops.
                        On entering this charming hotel in Dar es Salaam, you will immediately sense its special intimate atmosphere that makes you feel like being in your own Dar es Salaam home.  Each detail has been passionately chosen and each room deserves a visit. Mesuma Hotel style mixes beautiful two restaurants, two conference rooms, two elevators and a function hall.
                        The special charm and the cosy mood of Mesuma will make your stay in Dar es salaam worthwhile.
                    </p>

                </div></div>
            <div class="row grids text-center" style="padding-top:10px">
                <div class="col-md-3">
                    <div class="view view-tenth">
                        <a href="{{URL::route('suite')}}">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/doubleex.jpg" class="img-responsive" alt=""/>
                                    <div class="label-product">
                                        <span class="new">From 150,000 Tsh.</span> </div>
                                    <div class="mask">
                                        <h2>SUITE</h2>
                                        <h3>Click for more info about the room</h3>
                                        <div class="info"><i class="fa fa-search-plus"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product_container wow bounceIn" data-wow-delay="0.4s">
                        <h3><a href="{{URL::route('suite')}}">Suite </a></h3>
                        <div class="underheader-line"></div>
                        <ul class="person">
                            <h4>Max Person:</h4>
                            <li><i class="fa fa-male"> </i></li>
                            <li><i class="fa fa-male"> </i></li>
                        </ul>
                        <p>King Bed,Kitchen & living room.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="view view-tenth">
                        <a href="{{URL::route('double')}}">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/double.JPG" class="img-responsive" alt=""/>
                                    <div class="label-product">
                                        <span class="new">From 60,000 Tsh.</span> </div>
                                    <div class="mask">
                                        <h2>Family Spacious Room</h2>
                                        <h3>click here for more info about this room</h3>
                                        <div class="info"><i class="fa fa-search-plus"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product_container wow bounceIn" data-wow-delay="0.4s">
                        <h3><a href="{{URL::route('double')}}">Double Deluxe</a></h3>
                        <div class="underheader-line"></div>
                        <ul class="person">
                            <h4>Max Person:</h4>
                            <li><i class="fa fa-male"> </i></li>
                            <li><i class="fa fa-male"> </i></li>
                        </ul>
                        <p> Queen Bed</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="view view-tenth">
                        <a href="{{URL::route('twin')}}">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/twin.JPG" class="img-responsive" alt=""/>
                                    <div class="label-product">
                                        <span class="new">From 60,000 Tsh.</span> </div>
                                    <div class="mask">
                                        <h2>Room with twin bed</h2>
                                        <h3>click here for more information about this room</h3>
                                        <div class="info"><i class="fa fa-search-plus"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product_container wow bounceIn" data-wow-delay="0.4s">
                        <h3><a href="{{URL::route('twin')}}">Twin Bed room</a></h3>
                        <div class="underheader-line"></div>
                        <ul class="person">
                            <h4>Max Person:</h4>
                            <li><i class="fa fa-male"> </i></li>
                            <li><i class="fa fa-male"> </i></li>

                        </ul>
                        <p>Two Single Beds</p>
                    </div>
                </div>
                <!--........................-->
                <div class="col-md-3">
                    <div class="view view-tenth">
                        <a href="{{URL::route('deluxe')}}">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/singleroom.jpg" class="img-responsive" alt=""/>
                                    <div class="label-product">
                                        <span class="new">From 50,000 tsh.</span> </div>
                                    <div class="mask">
                                        <h2>Room with one single bed</h2>
                                        <h3>click here for more info about the room</h3>
                                        <div class="info"><i class="fa fa-search-plus"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="product_container wow bounceIn" data-wow-delay="0.4s">
                        <h3><a href="{{URL::route('deluxe')}}">Deluxe</a></h3>
                        <div class="underheader-line"></div>
                        <ul class="person">
                            <h4>Max Person:</h4>
                            <li><i class="fa fa-male"> </i></li>
                        </ul>
                        <p>One Single Bed</p>
                    </div>
                </div>


                <!--..........................-->

            </div>
        </div>
        <div class="reservation wow fadeInLeft" data-wow-delay="0.4s" id="work">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div id="main-reservation-text"><h3>Call us <span>+255 712 950008 , +255 782 333 372</span></h3>
                            <p> <font size="4"><b>Email: </b>mesuma@live.com</font></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="#" title="Online Reservation" class="btn btn-primary btn-normal btn-inline " target="_self">Online Reservation</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-bottom wow fadeInLeft" data-wow-delay="0.4s" id="work">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="welcome_desc">
                            <!--<h3>Info</h3>-->
                            <div class="course_demo">
                                <ul id="flexiselDemo3">
                                    <li><b class="fa fa-plane" style="font-size:90px"></b>
                                        <div class="desc">
                                            <h3>To Airport</h3>
                                            <p>12 km from the air port</p>
                                        </div></li>
                                    <li><b class="fa fa-building-o" style="font-size:90px"></b><div class="desc">
                                            <h3>To City Center</h3>
                                            <p>8 km to city centre</p>
                                        </div></li>
                                    <li><b class="fa fa-truck" style="font-size:90px"></b><div class="desc">
                                            <h3>Parking</h3>
                                            <p>self parking is free</p>
                                        </div></li>
                                    <li><b class="fa fa-globe" style="font-size:90px"></b><div class="desc">
                                            <h3>Free WIFI</h3>
                                            <p>Free wifi internet</p>
                                        </div></li>
                                    <!--	<li><b class="fa fa-truck" style="font-size:90px"></b><div class="desc">
                                            <h3>Millen</h3>
                                            <p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
                                        </div></li>
                                        <li><img src="images/avatar.png" class="img-responsive" /><div class="desc">
                                            <h3>May</h3>
                                            <p>Lorem ipsum dolor<br> sit amet, consectetuer.</p>
                                        </div></li>	-->
                                </ul>
                                <script type="text/javascript">
                                    $(window).load(function() {
                                        $("#flexiselDemo3").flexisel({
                                            visibleItems: 4,
                                            animationSpeed: 1000,
                                            autoPlay: true,
                                            autoPlaySpeed: 3000,
                                            pauseOnHover: true,
                                            enableResponsiveBreakpoints: true,
                                            responsiveBreakpoints: {
                                                portrait: {
                                                    changePoint:480,
                                                    visibleItems: 1
                                                },
                                                landscape: {
                                                    changePoint:640,
                                                    visibleItems: 2
                                                },
                                                tablet: {
                                                    changePoint:768,
                                                    visibleItems: 2
                                                }
                                            }
                                        });

                                    });
                                </script>
                                <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 middle_right">
                        <h3>Info</h3>
                        <ul id="general-info">
                            <li><i class="fa fa-clock-o"> </i>Check-in: Any time; Check-out: 10:00 am</li>
                            <li><i class="fa fa-globe"> </i>Free Wi-Fi Internet in Rooms</li>
                            <li><i class="fa fa-cutlery"> </i>In Room Dining Available from <br>06:00pm to 23:00</li>
                            <!--<li><i class="fa fa-truck"> </i>Local Self Parking: $20-$25 per night</li>-->

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="company_logos wow bounceIn" data-wow-delay="0.4s">
            <h3>Our Gallery</h3>
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
        </div>-->
    </div>
    @stop
