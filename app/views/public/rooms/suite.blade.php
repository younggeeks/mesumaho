@extends('Layouts.master')

@section('content')
    <!--<h3 class="alert alert-info">
        Suite Room
    </h3>-->


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
            <div class="col-md-8 middle_right">
                <img src="../images/doubleex2.jpg" class="img-responsive" alt=""/>
                </div>
            <div class="col-md-4 middle_right well">
                <h3>suite room Info</h3>
                This room is capable of accomodating maximum of two persons and it includes
                kitchen, living room,Tv,fridge, complimentary wired & Wi-Fi high speed internet and most of all confortable sleep with King Bed.
                <hr/>
                <h4>Summary</h4>

                <ul id="general-info">
                    <li><i class="fa fa-male"> </i> Maxmum Person:<b> 2</b></li>
                    <li><i class="fa fa-circle-o"> </i> King bed </li>
                    <li><i class="fa fa-signal"> </i> hight speed Wi-Fi internet & Television</li>
                    <li><i class="fa fa-cutlery"> </i> Kitchen & Living room</li>
                    <li><i class="fa fa-tag"> </i> Price: <b>Tsh 150,000/=</b></li>
                    <!--<li><i class="fa fa-truck"> </i>Local Self Parking: $20-$25 per night</li>-->

                </ul>
                <a <a href="{{URL::route('booking')}}" title="suit_booking" class="btn btn-primary btn-small " target="_self">Book Now</a>
            </div>
        </div>
    </div>
</div>

@stop