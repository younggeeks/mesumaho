@extends('Layouts.master')

@section('content')
<!--<h3>Conference Hall</h3>-->


<div class="content-bottom wow fadeInLeft" data-wow-delay="0.4s" id="work">
    <div class="container">
        <div class="row">
            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo3").flexisel({
                        visibleItems: 4,
                        animationSpeed: 2000,
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
            <div class="col-md-7 middle_right">
                <p align="right"><img src="images/g/conference-hall.jpg" class="img-responsive" alt=""/></p>
            </div>
            <div class="col-md-4 middle_right well">
                <h3>Conference Hall Info</h3>
                We have a spacious conference hall which can accommodate up to 65 people during the meeting. You will be provided with varieties of services
                <hr/>
                <h4>services included</h4>
                    <ul id="general-info">

                        <li><i class="fa fa-circle-o"> </i> -P.A System</li>
                        <li><i class="fa fa-circle-o"> </i> Stationeries </li>
                        <li><i class="fa fa-circle-o"> </i> Flip Charts </li>
                        <li><i class="fa fa-circle-o"> </i> Breakfast </li>
                        <li><i class="fa fa-circle-o"> </i> Lunch</li>
                        <li><i class="fa fa-circle-o"> </i> Evening tea/coffee</li>
                        <li><i class="fa fa-circle-o"> </i> Mineral water 0.5L (two bottles per person)</li>


                </ul>
                <a <a href="{{URL::route('booking')}}" title="suit_booking" class="btn btn-primary btn-small " target="_self">Book Now</a>
            </div>
        </div>
    </div>
</div>





    @stop
