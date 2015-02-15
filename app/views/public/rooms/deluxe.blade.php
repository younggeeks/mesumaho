@extends('Layouts.master')

@section('content')
    <!--<h3 class="alert alert-info">
        Deluxe Room
    </h3>-->

<div class="content-bottom wow fadeInLeft" data-wow-delay="0.4s" id="work">
    <div class="container">
        <div class="row">
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
            <div class="col-md-8 middle_right">
                <img src="../images/singleroom2.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-4 middle_right well">
                <h3>Deluxe room Info</h3>
                This room is capable of accomodating maximum of one person, it includes one single bed room
                ,Tv,fridge, complimentary wired & Wi-Fi high speed internet.

                <hr/>
                <h4>Summary</h4>

                <ul id="general-info">
                    <li><i class="fa fa-male"> </i> Maxmum Person:<b> 1</b></li>
                    <li><i class="fa fa-circle-o"> </i> One single bed </li>
                    <li><i class="fa fa-signal"> </i> hight speed Wi-Fi internet & Television</li>
                    <li><i class="fa fa-tag"> </i> Price: <b>Tsh 50,000/=</b></li>
                    <!--<li><i class="fa fa-truck"> </i>Local Self Parking: $20-$25 per night</li>-->

                </ul>
                <a <a href="{{URL::route('booking')}}" title="suit_booking" class="btn btn-primary btn-small " target="_self">Book Now</a>
            </div>
        </div>
    </div>
</div>


    @stop